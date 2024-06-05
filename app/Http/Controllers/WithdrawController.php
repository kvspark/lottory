<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdraw;

class WithdrawController extends Controller
{
    public function postEditWithdraw($id)
    {
        $withdraw = Withdraw::find($id);
        $withdraw->created_at = request()->date;
        $withdraw->status = request()->status;
        if($withdraw->save())
        {
            return redirect()->back()->with('successful','Record Updated');
        }
        
    }
    public function deleteWithdraw($id)
    {
        Withdraw::destroy($id);
        return redirect()->back()->with('successful','Record Delete');
    }
}
