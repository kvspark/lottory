<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseTicket;
use App\Models\Member;
use File;

class PurchaseTicketController extends Controller
{
    public function postEditBet($id)
    {
        $purchaseticket = PurchaseTicket::find($id);
        $purchaseticket->status = request()->status;
        $purchaseticket->created_at = request()->date;
        
        if($purchaseticket->save())
        {
            return redirect()->back()->with('successful','Record Update');
        }

    } 
    public function deleteBet($id)
    {
        $receipt = PurchaseTicket::find($id)->receipt;
        $receipt_path = "img/receipt/" . $receipt;

        if(File::exists($receipt_path))
        {
            File::delete($receipt_path);
            PurchaseTicket::destroy($id);
            return redirect()->back()->with('success','Record Deleted');
        }else{
            PurchaseTicket::destroy($id);
            return redirect()->back()->with('success','Record Deleted');
        }
    }
    public function postPlayBet($id)
    {
        // return request()->all();
        $purchaseticket = PurchaseTicket::find($id);
        $purchaseticket->lottery_numbers = request()->num1 . ' ' . request()->num2 . ' ' . request()->num3 . ' ' . request()->num4 . ' ' . request()->num5 . ' ' . request()->num6;
        
        if($purchaseticket->save())
        {
            return redirect()->back()->with('successful','Bet Placed Successfully. GoodLucky');
        }
    }
}
