@extends('admin.layout')

@section('content')

<h4>All Users</h4>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th> Bet </th>
                <th> Withdraw </th>
                <th> Delete </th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
                <tr>
                    <td> {{$member->first_name}} {{$member->last_name}} </td>
                    <td> {{$member->email_address}} </td>
                    <td> <a href="../admin/edit-member/{{$member->id}}" class="btn btn-primary"> Edit </a> </td>
                    <td> <a href="../admin/placed-bet/{{$member->id}}" class="btn btn-secondary"> Bets </a> </td>
                    <td> <a href="../admin/withdraw/{{$member->id}}" class="btn btn-warning"> Withdraws </a> </td>
                    <td> <a href="../admin/delete-member/{{$member->id}}" class="btn btn-danger"> Delete </a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection