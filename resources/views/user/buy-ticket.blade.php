@extends('user.layout')

@section('content')

<p class="mb-3" style="font-size:24px; font-weight:600"> <i class="fa fa-btc"></i> Buy Ticket</p>

<div class="row">
    <div class="col-md-6 mb-md-0 mb-4">
        <div class="w-100 h-100 p-4 shadow-sm text-uppercase bg-white">
            <div style="font-size: 40px; font-weight:700; color: darkred;"> {{$ticket->lottory}} </div>
            <div style="font-size: 25px; font-weight:500"> JACKPOT: $ {{$ticket->jackpot}} </div>
            <div style="font-size: 25px; font-weight:500"> PRICE: $ {{$ticket->price}} </div>
            <div style="font-size: 16px; color: red;">
                *Kindly note that you must have PAID {{round($ticket->price / $btcCurrentPrice,6)}} into the blockchain address before clicking the Pay button.*
            </div> 
            <div class="mt-3">
                <p class="text-primary">BTC Wallet: <b> ad;lfkaldfkadlkfadklfalkdfaldflkadflkadfakl </b> </p>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-danger"> {{$error}} </p>
                    @endforeach
                @endif
                <form action="{{url('user/purchase-tick')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Payment Proof</label>
                    <input type="hidden" name="lottery" value="{{$ticket->lottory}}">
                    <input type="hidden" name="price" value="{{$ticket->price}}">
                    <input type="hidden" name="jackpot" value="{{$ticket->jackpot}}">
                    <input type="file" required name="receipt" class="form-control rounded-pill" style="height: 40px;">
                    <button class="btn btn-primary rounded-pill mt-3 form-control" style="height: 50px;">BUY</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="w-100 mb-3 shadow-sm bg-white">
            <img src="{{url('img/lottory.webp')}}" width="100%" alt="">
        </div>
    </div>
</div>


@endsection