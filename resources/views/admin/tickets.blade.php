@extends('admin.layout')

@section('content')

<h4>All Tickets</h4>

<div class="table-reponsive">
    <table class="table">
        <thead>
            <tr>
                <th>Lottery</th>
                <th>Jackpot</th>
                <th> Price </th>
                <th> Sold </th>
                <th> Time To Draw </th>
                <th> Edit </th>
                <th> Delete </th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td> {{$ticket->lottory}} </td>
                    <td> {{$ticket->jackpot}} </td>
                    <td> {{$ticket->price}} </td>
                    <td> {{$ticket->sold}} </td>
                    <td> {{$ticket->time_to_draw}} </td>
                    <td> <a href="{{url('admin/edit-ticket')}}/{{$ticket->id}}" class="btn btn-primary"> Edit </a> </td>
                    <td> <a href="{{url('admin/delete-ticket')}}/{{$ticket->id}}" class="btn btn-danger"> Delete </a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection