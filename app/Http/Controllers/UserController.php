<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Validator;
use App\Models\Member;
use App\Models\Ticket;
use App\Models\PurchaseTicket;
use App\Models\Withdraw;

class UserController extends Controller
{
    public function dashboard()
    {
        $id = request()->session()->get('user');
        $user = Member::find($id);
        return view('user.dashbaord',compact('user'));
    }
    public function profile()
    {
        $id = request()->session()->get('user');
        $user = Member::find($id);
        return view('user.profile',compact('user'));
    }
    public function placeBet()
    {
        $id = request()->session()->get('user');
        $user = Member::find($id);
        $tickets = Ticket::get();
        return view('user.place-bet',compact('user', 'tickets'));
    }
    public function buyTicket($ticket_id)
    {
        $ticket = Ticket::find($ticket_id);
        $response = Http::get('https://rest.coinapi.io/v1/exchangerate/BTC/USD/APIKEY-CCC42022-7FF2-4C4E-83C3-A729073B9E07');
        $result = $response->json();
        $btcCurrentPrice = $result['rate'];
        
        $id = request()->session()->get('user');
        $user = Member::find($id);
        return view('user.buy-ticket',compact('user','ticket','btcCurrentPrice'));
    }
    public function purchaseTicket(Request $request)
    {
        $validated = $request->validate([
            'price' => 'required',
            'receipt' =>  'max:2000|mimes:jpeg,png,jpg',  
        ]);

        

        $receipt = $request->receipt;
        $ext  = $receipt->getClientOriginalExtension();
        $photoname = time() . '.' . $ext;
        $receipt->move(public_path('img/receipt'),$photoname);

        $purchase = new PurchaseTicket();
        $purchase->member_id = $request->session()->get('user');
        $purchase->ref = substr(md5(rand(10,99)),0,5);
        $purchase->jackpots = $request->lottery;
        $purchase->earning = $request->jackpot;
        $purchase->amount = $request->price;
        $purchase->payment_method = "Blockchain";
        $purchase->status = "Pending";
        $purchase->receipt = $photoname;

        if($purchase->save())
        {
            return redirect('user/my-bets');
        }

    }
    public function myBets()
    {
        $id = request()->session()->get('user');
        $user = Member::find($id);
        return view('user.my-bets',compact('user'));
    }
    public function withdraw()
    {
        $id = request()->session()->get('user');
        $user = Member::find($id);

        $response = Http::get('https://rest.coinapi.io/v1/exchangerate/BTC/USD/APIKEY-CCC42022-7FF2-4C4E-83C3-A729073B9E07');
        $result = $response->json();
        $btcCurrentPrice = $result['rate'];
        
        return view('user.withdraw',compact('user','btcCurrentPrice'));
    }
    public function postWithdraw(Request $request)
    {
        $balance = Member::find($request->session()->get('user'))->total_balance;
        
        if($balance >= $request->amount)
        {
            $withdraw = new Withdraw();
            $withdraw->member_id = $request->session()->get('user');
            $withdraw->amount_to_withdraw = $request->amount;
            $withdraw->bitcoin_worth = $request->bitcoin_worth;
            $withdraw->bitcoin_wallet_to_credit = $request->bitcoin_wallet_to_credit;
            $withdraw->status = 'Proccessing';

            if($withdraw->save())
            {
                $user = Member::find($request->session()->get('user'));
                $user->total_balance -= $request->amount;
                $user->save();
                return redirect()->back()->with('successful','Your Transaction is currently been process');
            }    // 
        }else{
            return redirect()->back()->with('fail','Your Account Balance is to low for the transactions');
        }
        
    }
    public function myWithdraw()
    {
        $id = request()->session()->get('user');
        $user = Member::find($id);
        return view('user.my-withdraw',compact('user'));
    }
    public function logOut()
    {
        request()->session()->forget('user');
        return redirect('test');
    }
    public function playLotteryTicket($id)
    {
        $purchaseticket = PurchaseTicket::find($id);
        if($purchaseticket)
        {
            if($purchaseticket->lottery_numbers)
            {
                return redirect('user/my-bets');
            }else{
                $uid = request()->session()->get('user');
                $user = Member::find($uid);
                return view('user.play-bet',compact('user','id')); 
            }
        }
    }
}
