@extends('admin.layout')

@section('content')

<h4> Edit Ticket </h4>
@if(Session::has('successful'))
    <div class="alert alert-success"> {{Session::get('successful')}} </div>
@endif
<div class="mt-3">
    <form action="{{url('admin/post-edit-ticket')}}/{{$ticket->id}}" method="post">
        @csrf
        <label class="mb-0">Lottery</label>
        <input type="text" value="{{$ticket->lottory}}" name="lottery" style="height: 50px;" class="form-control mb-3 shadow-none">
        <label class="mb-0">Price</label>
        <input type="number" name="price" value="{{$ticket->price}}" style="height: 50px;" class="form-control mb-3 shadow-none">
        <label class="mb-0">Jackpot</label>
        <input type="number" name="jackpot" value="{{$ticket->jackpot}}" style="height: 50px;" class="form-control mb-3 shadow-none">
        <label class="mb-0">Sold</label>
        <input type="number" name="sold" value="{{$ticket->sold}}" style="height: 50px;" class="form-control mb-3 shadow-none">
        <label class="mb-0">Time To Draw</label>
        <input type="text" name="time_to_draw" value="{{$ticket->time_to_draw}}" style="height: 50px;" class="form-control mb-3 shadow-none">
        <button class="btn btn-primary" style="height: 50px;">Update</button>
    </form>
</div>
@endsection