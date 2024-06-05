<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function postCreateTicket()
    {
        $ticket = new Ticket();
        $ticket->lottory = request()->lottery;
        $ticket->jackpot = request()->jackpot;
        $ticket->price = request()->price;
        $ticket->sold = 1000;
        $ticket->time_to_draw = "Time To Draw Ended";

        if($ticket->save())
        {
            return redirect()->back()->with('successful','Ticket Created Successfully');
        }
    }
    public function  postEditTicket($id)
    {
        $ticket = Ticket::find($id);
        $ticket->lottory = request()->lottery;
        $ticket->jackpot = request()->jackpot;
        $ticket->price = request()->price;
        $ticket->sold = request()->sold;
        $ticket->time_to_draw = request()->time_to_draw;

        if($ticket->save())
        {
            return redirect()->back()->with('successful','Record Updated');
        }

    }
    public function deleteTicket($id)
    {
        Ticket::destroy($id);
        return redirect()->back()->with('successful','Record Delete');
    }
}
