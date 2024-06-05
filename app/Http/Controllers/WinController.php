<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Win;

class WinController extends Controller
{
    public function postCreateWinning(Request $request)
    {
        $win = new Win();
        $win->lottery_name = $request->lottery_name;
        $win->winning_number = $request->winning_number_1 . ' ' .$request->winning_number_2 . ' ' . $request->winning_number_3 . ' ' . $request->winning_number_4 . ' ' . $request->winning_number_5 . ' ' . $request->winning_number_6;
        $win->next_jackpot = $request->next_jackpot;
        
        if($win->save())
        {
            return redirect()->back()->with('successful','Record Created Successful');
        }
    }
    public function postEditWinning(Request $request,$id)
    {
        // return $request->all();
        $win = Win::find($id);
        $win->lottery_name = $request->lottery_name;
        $win->created_at = $request->date;
        $win->next_jackpot = $request->next_jackpot;
        
        if($win->save())
        {
            return redirect()->back()->with('successful','Record Update Successful');
        }
    }
    public function deleteWinning($id)
    {
        Win::destroy($id);
        return redirect()->back()->with('successful','Record Deleted');
    }
}
