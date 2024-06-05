@extends('user.layout')

@section('content')

<p class="mb-3" style="font-size:24px; font-weight:600"> <i class="fa fa-arrow-down"></i> Withdraw</p>
@if(Session::has('successful'))
    <div class="alert alert-success"> {{Session::get('successful')}} </div>
@endif
@if(Session::has('fail'))
    <div class="alert alert-danger"> {{Session::get('fail')}} </div>
@endif
<form action="{{url('user/post-withdraw')}}" method="post">
    @csrf
    <input type="hidden" id="btcCurrentPrice" value="{{$btcCurrentPrice}}">

    <div class="w-100 mt-3">
        <label class="m-0">Amount to Withdraw</label>
        <input required name="amount" id="withdrawAmt" type="number" style="height:50px" class="form-control">
    </div>

    <div class="w-100 mt-3">
        <label class="m-0">Bitcoin Worth</label>
        <input name="bitcoin_worth" id="btc_worth" type="number" readonly value="" style="height:50px" class="form-control">
    </div>

    <div class="w-100 mt-3">
        <label class="m-0">Bitcoin Wallet To Credit</label>
        <input required name="bitcoin_wallet_to_credit" type="text" style="height:50px" class="form-control">
    </div>

    <div class="w-100 mt-3">
        <button class="btn btn-primary"> <i class="fa fa-arrow-down"></i> Withdraw</button>
    </div>

</form>

@endsection