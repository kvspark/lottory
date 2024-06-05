<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Win;

class ScreenController extends Controller
{
    public function home()
    {
        return view('screen.home');
    }
    public function about()
    {
        return view('screen.about');
    }
    public function contact()
    {
        return view('screen.contact');
    }
    public function latestWinner()
    {
        return view('screen.latest-winner');
    }
    public function lottery()
    {
        $tickets = Ticket::get();
        return view('screen.lottery',compact('tickets'));
    }
    public function lotteryResult()
    {
        $wins = Win::get();
        return view('screen.lottery-result',compact('wins'));
    }
    public function privacyPOlicy()
    {
        return view('screen.privacypolicy');
    }
    public function test()
    {
        return view('screen.test');
    }
    public function index2()
    {
        return view('screen.index-2');
    }
    public function lottery2()
    {
        return $tickets = Ticket::get();
        return view('screen.lottery-2');
    }
}
