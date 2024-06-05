@extends('admin.layout')

@section('content')

<h4> Create Winning Number </h4>
@if(Session::has('successful'))
    <div class="alert alert-success"> {{Session::get('successful')}} </div>
@endif
<div class="mt-3">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="text-danger"> {{$error}} </p>
        @endforeach
    @endif                

    <form action="{{url('admin/post-edit-winning')}}/{{$win->id}}" method="post">
        @csrf
        <label class="mb-0">Lottery Name</label>
        <select required name="lottery_name" style="height: 50px;" class="form-control mb-3 shadow-none">
            <option> {{$win->lottery_name}} </option>
            @foreach($tickets as $ticket)
                <option value="{{$ticket->lottory}}"> {{$ticket->lottory}} </option>
            @endforeach
        </select>
        <label class="mb-0">Date</label>
        <div class="input-group">
            <input required value="{{$win->created_at}}" type="text" name="date" style="height: 50px;" class="form-control mb-3 shadow-none">
        </div>
        <label class="mb-0">Next Jackpot</label>
        <input required type="number" value="{{$win->next_jackpot}}" name="next_jackpot" style="height: 50px;" class="form-control mb-3 shadow-none">
        <button class="btn btn-primary" style="height: 50px;">Update</button>
    </form>
</div>
@endsection