@extends('admin.layout')

@section('content')

<h4>Dashboard</h4>

<div class="mt-3 row">
    <div class="col-md-6 mb-3">
        <div class="w-100 p-3 bg-dark text-white">
            <h4 class="text-uppercase">Members</h4>
            <p> Total Members {{$members->count()}} </p>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="w-100 p-3 bg-success text-white">
            <h4 class="text-uppercase">Pending Withdraws</h4>
            <p> Total Withdraws {{$withdraws->where('status','Proccessing')->count()}} </p>
        </div>
    </div>
</div>
<div class="mt-3 row">
    <div class="col-md-6 mb-3">
        <div class="w-100 p-3 bg-primary text-white">
            <h4 class="text-uppercase">Purchase Ticket</h4>
            <p> Total Purchase Ticket {{$purchasetickets->count()}} </p>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="w-100 p-3 bg-warning text-white">
            <h4 class="text-uppercase">Pending Ticket</h4>
            <p> Total Wins {{$purchasetickets->where('status','Pending')->count()}} </p>
        </div>
    </div>
</div>

@endsection