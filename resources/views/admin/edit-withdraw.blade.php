@extends('admin.layout')

@section('content')

<h4> Edit Withdraw </h4>
@if(Session::has('successful'))
    <div class="alert alert-success"> {{Session::get('successful')}} </div>
@endif
<div class="mt-3">
    <form action="{{url('admin/post-edit-widthdraw')}}/{{$withdraw->id}}" method="post">
        @csrf
        <label class="mb-0">Date</label>
        <input type="text" value="{{$withdraw->created_at}}" name="date" style="height: 50px;" class="form-control mb-3 shadow-none">
        <label class="mb-0">Status</label>
        <select name="status" style="height: 50px;" class="form-control mb-3 shadow-none">
            <option> {{$withdraw->status}} </option>
            <option>Processing</option>
            <option>Decline</option>
            <option>Approved</option>
        </select>
        <button class="btn btn-primary" style="height: 50px;">Update</button>
    </form>
</div>
@endsection