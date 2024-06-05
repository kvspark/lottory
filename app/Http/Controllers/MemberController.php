<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function addMember(Request $request)
    {
        if($request->txtpassword != $request->txtcpassword)
        {
            return redirect()->back()->with('fail','Password does not match');
        }
        $check = Member::where('email_address',$request->Email)->first();
        if($check)
        {
            return redirect()->back()->with('fail','User Exist');
        }
        
        $member = new Member();
        $member->first_name = $request->firstname;
        $member->last_name = $request->lastname;
        $member->username = $request->UserName;
        $member->email_address = $request->Email;
        $member->password = $request->txtpassword;
        $member->phone_number = $request->PhoneNumber;
        $member->country = $request->Country;
        $member->total_balance = 0;
        $member->total_deposit = 0;
        $member->total_withdraw = 0;
        $member->total_wins = 0;
        $member->account_status = 'active';

        if($member->save())
        {
            $request->session()->put('user',$member->id);
            return redirect('user/dashboard');
        } 
    }
    public function loginMember(Request $request)
    {
        $login = Member::where('email_address',$request->UserName1)->where('password',$request->password)->first();
        if($login)
        {
            if($login->account_status == "active")
            {
                $request->session()->put('user', $login->id);
                return redirect('user/dashboard');
            }else{
                return redirect()->back()->with('fail','This Account have be suspend. Contact Support Team.');
            }
             
        }else{
            return redirect()->back()->with('fail','Invalid Login Details');
        }
    }
    public function postEditMember($id)
    {
        $member = Member::find($id);
        $member->first_name = request()->first_name;
        $member->last_name = request()->last_name;
        $member->username = request()->username;
        $member->email_address = request()->email_address;
        $member->password = request()->password;
        $member->phone_number = request()->phone_number;
        $member->country = request()->country;
        $member->total_balance = request()->total_balance;
        $member->total_deposit = request()->total_deposit;
        $member->total_withdraw = request()->total_withdraw;
        $member->total_wins = request()->total_win;
        $member->account_status = request()->account_status;

        if($member->save())
        {
            return redirect()->back()->with('successful','Record Updated Successfully');
        }
    }
    public function deleteMember($id)
    {
        Member::find($id)->withdraws()->delete();
        Member::find($id)->purchasetickets()->delete();
        Member::destroy($id);
        return redirect()->back()->with('successful','Record Deleted');
    }
}
