@extends('user.layout')

@section('content')

<p class="mb-3" style="font-size:24px; font-weight:600"> <i class="fa fa-dashboard"></i> Dashboard</p>

<div class="row">
    <div class="col-md-6 mb-md-0 mb-4">
        <div class="w-100 p-4 text-white" style="background-color: purple;">
            <p style="font-size: 16px; color: white;">Total Balance</p>
            <p style="font-size: 24px; color: white;">${{number_format($user->total_balance,2)}}</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="w-100 p-4 text-white bg-danger">
            <p style="font-size: 16px; color: white;">Total Deposit</p>
            <p style="font-size: 24px; color: white;"> {{$user->purchasetickets()->where('status','!=', 'Decline')->get()->count()}} </p>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6 mb-md-0 mb-4">
        <div class="w-100 p-4 text-white bg-success">
            <p style="font-size: 16px; color: white;">Total Withdrawal</p>
            <p style="font-size: 24px; color: white;">{{$user->withdraws()->get()->count()}}</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="w-100 p-4 text-white" style="background-color: goldenrod;">
            <p style="font-size: 16px; color: white;">Total Wins</p>
            <p style="font-size: 24px; color: white;">{{$user->purchasetickets()->where('status', 'Win')->get()->count()}}</p>
        </div>
    </div>
</div>

@endsection