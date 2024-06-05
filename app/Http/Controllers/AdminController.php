<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Ticket;
use App\Models\PurchaseTicket;
use App\Models\Withdraw;
use App\Models\Win;
use App\Models\Admin;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }
    public function postAdmin(Request $request)
    {
        $admin = Admin::where('username',$request->username)->where('password',$request->password)->first();
        if($admin)
        {
            $request->session()->put('admin',1);
            return redirect('admin/dashboard');
        }else{
            return redirect()->back()->with('fail','Login Fail');
        }
    }
    public function dashboard()
    {
        $members = Member::get();
        $purchasetickets = PurchaseTicket::get();
        $withdraws = Withdraw::get();
        return view('admin.dashboard',compact('withdraws','members','purchasetickets'));
    }
    public function member()
    {
        $members = Member::get();
        return view('admin.member', compact('members'));
    }
    public function tickets()
    {
        $tickets = Ticket::get();
        return view('admin.tickets', compact('tickets'));
    }
    public function editMember($id)
    {
        $member = Member::find($id);
        return view('admin.edit-member',compact('member'));
    }
    public function placedBet($id)
    {
        $member = Member::find($id);
        return view('admin.placed-bet',compact('member'));
    }
    public function editBet($id)
    {
        $purchaseticket =  PurchaseTicket::find($id);
        return view('admin.edit-bet',compact('purchaseticket'));
    }
    public function withdraw($id)
    {
        $member = Member::find($id);
        return view('admin.withdraw',compact('member'));
    }
    public function editWithdraw($id)
    {
        $withdraw = Withdraw::find($id);
        return view('admin.edit-withdraw',compact('withdraw'));
    }
    public function createTicket()
    {
        return view('admin.create-ticket');
    }
    public function editTicket($id)
    {
        $ticket = Ticket::find($id);
        return view('admin.edit-ticket',compact('ticket'));
    }
    public function createWinning()
    {
        $tickets = Ticket::get();
        return view('admin.create-winning',compact('tickets'));
    }
    public function  winning()
    {
        $winnings = Win::get();
        return view('admin.winning',compact('winnings'));
    }
    public function editWinning($id)
    {
        $tickets = Ticket::get();
        $win = Win::find($id);
        return view('admin.edit-winning',compact('win','tickets'));
    }
    public function logout()
    {
        request()->session()->forget('admin');
        return redirect('admin')->with('fail','Logout Successfully');
    }
}
