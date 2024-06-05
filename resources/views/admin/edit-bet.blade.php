@extends('admin.layout')

@section('content')

<h4> Edit Bets </h4>
@if(Session::has('successful'))
    <div class="alert alert-success"> {{Session::get('successful')}} </div>
@endif
<div class="mt-3">
    <form action="{{url('admin/post-edit-bet')}}/{{$purchaseticket->id}}" method="post">
        @csrf
        <label class="mb-0">Date</label>
        <input type="text" value="{{$purchaseticket->created_at}}" name="date" style="height: 50px;" class="form-control mb-3 shadow-none">
        <label class="mb-0">Status</label>
        <select name="status" style="height: 50px;" class="form-control mb-3 shadow-none">
            <option> {{$purchaseticket->status}} </option>
            <option>Pending</option>
            <option>Decline</option>
            <option>Approved</option>
            <option>Win</option>
            <option>Lose</option>
        </select>
        <button class="btn btn-primary" style="height: 50px;">Update Bet</button>
    </form>
</div>
@endsection