@extends('user.layout')

@section('content')

<h4>Place a Bet</h4>
<p>
    To Place A Bet, select six numbers from number 1 - 99. If your numbers match the randomly selected winning numbers, you win. The more of your numbers that match the ones drawn, the bigger the prize you win
</p>
<div class="mt-3">
    <form action="{{url('user/post-play-bet')}}/{{$id}}" method="post">
        @csrf
        <label class="mb-2">Pick Number</label>
        <div class="input-group mb-3">
            <input required name="num1" style="height: 50px; width: 50px;" type="number" class="shadow-none text-center mr-3">
            <input required name="num2" style="height: 50px; width: 50px;" type="number" class="shadow-none text-center mr-3">
            <input required name="num3" style="height: 50px; width: 50px;" type="number" class="shadow-none text-center mr-3">
            <input required name="num4" style="height: 50px; width: 50px;" type="number" class="shadow-none text-center mr-3">
            <input required name="num5" style="height: 50px; width: 50px;" type="number" class="shadow-none text-center mr-3">
            <input required name="num6" style="height: 50px; width: 50px;" type="number" class="shadow-none text-center mr-3">

        </div>

        <button class="btn btn-primary text-white mt-3" style="height: 50px;"> Bet Now </button>
    </form>
</div>



@endsection