@extends('admin.layout')

@section('content')

<h4>Edit User</h4>
@if(Session::has('successful'))
    <div class="alert alert-success"> {{Session::get('successful')}} </div>
@endif
<form action="{{url('admin/post-edit-member/' . $member->id)}}" method="post" class="mt-3">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="mb-0">First Name</label>
            <input required name="first_name" style="height:50px" value="{{$member->first_name}}" type="text" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label class="mb-0">Last Name</label>
            <input required name="last_name" style="height:50px" value="{{$member->last_name}}" type="text" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="mb-0">Username</label>
            <input name="username" style="height:50px" value="{{$member->username}}" type="text" required class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label class="mb-0">Email Address</label>
            <input name="email_address" style="height:50px" value="{{$member->email_address}}" required type="text" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="mb-0">Passwowrd</label>
            <input name="password" style="height:50px" value="{{$member->password}}" type="password" required class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label class="mb-0">Phone Number</label>
            <input name="phone_number" style="height:50px" value="{{$member->phone_number}}" required type="text" class="form-control">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="mb-0">Total Balanace</label>
            <input name="total_balance" style="height:50px" value="{{$member->total_balance}}" type="number" required class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label class="mb-0">Country</label>
            <input name="country" style="height:50px" value="{{$member->country}}" required type="text" class="form-control">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="mb-0">Total Deposit</label>
            <input name="total_deposit" style="height:50px" value="{{$member->total_deposit}}" type="number" required class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label class="mb-0">Total Withdraw</label>
            <input name="total_withdraw" style="height:50px" value="{{$member->total_withdraw}}" required type="number" class="form-control">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="mb-0">Total Win</label>
            <input name="total_win" style="height:50px" value="{{$member->total_wins}}" type="number" required class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label class="mb-0">Account Status</label>
            <select name="account_status" style="height:50px" required  class="form-control">
                <option> {{$member->account_status}} </option>
                <option> active </option>
                <option> inactive </option>
            </select>
        </div>
    </div>

    <button class="btn btn-primary mt-3" style="height:50px">UPDATE</button>
</form>

@endsection