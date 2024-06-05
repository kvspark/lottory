@extends('admin.layout')

@section('content')

<h4> {{$member->first_name}} {{$member->last_name}} Withdraws </h4>

<div class="responsive-table mt-3">
    <table style="font-size:16px" class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Ammount To Withdraw </th>
                <th>BTC Worth</th>
                <th>Wallet To Credit</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($member->withdraws()->get() as $withdraw)
                <tr>
                    <td> {{$withdraw->created_at}} </td>
                    <td> {{$withdraw->amount_to_withdraw}} </td>
                    <td> {{$withdraw->btc_worth}} </td>
                    <td> {{$withdraw->bitcoin_wallet_to_credit}} </td>
                    <td> {{$withdraw->status}} </td>
                    <td> <a href="{{url('admin/edit-withdraw/' . $withdraw->id)}}" class="btn btn-primary"> Edit </a> </td>
                    <td> <a href="{{url('admin/delete-withdraw/' . $withdraw->id)}}" class="btn btn-danger"> Delete </a> </td>    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection