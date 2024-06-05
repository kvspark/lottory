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

    <form action="{{url('admin/post-create-winning')}}" method="post">
        @csrf
        <label class="mb-0">Lottery Name</label>
        <select required name="lottery_name" style="height: 50px;" class="form-control mb-3 shadow-none">
            <option value>Select Lottery Name</option>
            @foreach($tickets as $ticket)
                <option value="{{$ticket->lottory}}"> {{$ticket->lottory}} </option>
            @endforeach
        </select>
        <label class="mb-0">Winning Number</label>
        <div class="input-group">
            <input required type="number" min="01" max="99" name="winning_number_1" style="height: 50px; width:50px" class="mr-3 mb-3 shadow-none">
            <input required type="number" min="01" max="99" name="winning_number_2" style="height: 50px; width:50px" class="mr-3 mb-3 shadow-none">
            <input required type="number" min="01" max="99" name="winning_number_3" style="height: 50px; width:50px" class="mr-3 mb-3 shadow-none">
            <input required type="number" min="01" max="99" name="winning_number_4" style="height: 50px; width:50px" class="mr-3 mb-3 shadow-none">
            <input required type="number" min="01" max="99" name="winning_number_5" style="height: 50px; width:50px" class="mr-3 mb-3 shadow-none">
            <input required type="number" min="01" max="99" name="winning_number_6" style="height: 50px; width:50px" class="mr-3 mb-3 shadow-none">
        </div>
        <label class="mb-0">Next Jackpot</label>
        <input required type="number" name="next_jackpot" style="height: 50px;" class="form-control mb-3 shadow-none">
        <button class="btn btn-primary" style="height: 50px;">Create</button>
    </form>
</div>
@endsection