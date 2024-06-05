@extends('user.layout')

@section('content')

<p class="mb-3" style="font-size:24px; font-weight:600"> <i class="fa fa-user-o"></i> Profile</p>

<div class="row">
    <div class="col-md-5 mb-md-0 mb-4">
        <div class="w-100 h-100 pt-4 shadow-sm text-center bg-white">
            <div style="font-size:100px"> <i class="fa fa-user-circle-o"></i> </div>
            <div style="font-size: 25px; font-weight:600"> {{$user->first_name}} {{$user->last_name}} </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="w-100 mb-3 p-4 shadow-sm bg-white">
            <span>Full Name</span>
            <div class="mb-3" style="font-size: 20px; font-weight: 600"> {{$user->first_name}} {{$user->last_name}} </div>
            <span>Email Address</span>
            <div class="mb-3" style="font-size: 20px; font-weight: 600"> {{$user->email_address}} </div>
            <span>Phone Number</span>
            <div class="mb-3" style="font-size: 20px; font-weight: 600"> {{$user->phone_number}} </div>
            <span>Country</span>
            <div class="mb-3" style="font-size: 20px; font-weight: 600"> {{$user->country}} </div>
        </div>
    </div>
</div>


@endsection