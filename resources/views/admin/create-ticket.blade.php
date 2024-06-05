@extends('admin.layout')

@section('content')

<h4> Create Ticket </h4>
@if(Session::has('successful'))
    <div class="alert alert-success"> {{Session::get('successful')}} </div>
@endif
<div class="mt-3">
    <form action="{{url('admin/post-create-ticket')}}" method="post">
        @csrf
        <label class="mb-0">Lottery</label>
        <input type="text" name="lottery" style="height: 50px;" class="form-control mb-3 shadow-none">
        <label class="mb-0">Price</label>
        <input type="number" name="price" style="height: 50px;" class="form-control mb-3 shadow-none">
        <label class="mb-0">Jackpot</label>
        <input type="number" name="jackpot" style="height: 50px;" class="form-control mb-3 shadow-none">
        <button class="btn btn-primary" style="height: 50px;">Create</button>
    </form>
</div>
@endsection