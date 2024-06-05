@extends('user.layout')

@section('content')

<p class="mb-3" style="font-size:24px; font-weight:600"> <i class="fa fa-arrow-down"></i> Withdraw</p>

<div class="table-responsive mt-3">
    <table class="table">
        <thead>
            <tr>
                <th>Amount</td>
                <th>BTC Worth</td>
                <th>Wallet To Credit</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user->withdraws()->get() as $withdraw)
                <tr>
                    <td>{{$withdraw->amount_to_withdraw}}</td>
                    <td> {{$withdraw->bitcoin_worth}} </td>
                    <td> {{$withdraw->bitcoin_wallet_to_credit}} </td>
                    <td> {{$withdraw->status}} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection