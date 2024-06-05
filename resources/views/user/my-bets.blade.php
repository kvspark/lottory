@extends('user.layout')

@section('content')

<p class="mb-0" style="font-size:24px; font-weight:600"> <i class="fa fa-gamepad"></i> My Bets</p>

<div class="responsive-table mt-3">
    <table style="font-size:16px" class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Ref</th>
                <th>Lottery </th>
                <th>Lottery Number</th>
                <th>Lottery Link</th>
                <th>Jackpot</th>
                <th>Ticket Price</th>
                <th>Payment Method</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user->purchasetickets()->get() as $ticket)
                <tr>
                    <td> {{$ticket->created_at}} </td>
                    <td class="text-uppercase"> {{$ticket->ref}} </td>
                    <td> {{$ticket->jackpots}} </td>
                    <td class="d-flex"> 
                        @if(!$ticket->lottery_numbers)
                        <span class="border border-2 rounded rounded-circle border-dark d-flex justify-content-center align-items-center mr-3" style="height: 40px; width: 40px;"> 0 </span>
                        <span class="border border-2 rounded rounded-circle border-dark d-flex justify-content-center align-items-center mr-3" style="height: 40px; width: 40px;"> 0 </span>
                        <span class="border border-2 rounded rounded-circle border-dark d-flex justify-content-center align-items-center mr-3" style="height: 40px; width: 40px;"> 0 </span>
                        <span class="border border-2 rounded rounded-circle border-dark d-flex justify-content-center align-items-center mr-3" style="height: 40px; width: 40px;"> 0 </span>
                        <span class="border border-2 rounded rounded-circle border-dark d-flex justify-content-center align-items-center mr-3" style="height: 40px; width: 40px;"> 0 </span>
                        <span class="border border-2 rounded rounded-circle border-dark d-flex justify-content-center align-items-center mr-3" style="height: 40px; width: 40px;"> 0 </span>
                        @else
                            @php    
                                $win = $ticket->lottery_numbers;
                                $wins = preg_split('/ /',$win);
                            @endphp
                            @foreach($wins as $w)
                                <span class="border border-2 rounded rounded-circle border-dark d-flex justify-content-center align-items-center mr-3" style="height: 40px; width: 40px;"> {{$w}} </span>
                            @endforeach
                        @endif
                    </td>
                    <td> 
                        @if($ticket->status == "Approved")
                            <a href="{{url('user/play-lottery-ticket')}}/{{$ticket->id}}" class="text-decoration-none text-dark">Place Bet</a>
                        @endif
                    </td>
                    <td> {{$ticket->earning}} </td>
                    <td> ${{$ticket->amount}} </td>
                    <td> {{$ticket->payment_method}} </td>
                    <td> 
                        @if($ticket->status == "Pending")    
                            <span class="btn btn-warning">{{$ticket->status}}</span> </td>
                        @elseif($ticket->status == "Decline")
                            <span class="btn btn-danger">{{$ticket->status}}</span> </td>
                        @elseif($ticket->status == "Approved")
                            <span class="btn btn-secondary">{{$ticket->status}}</span> </td>
                        @elseif($ticket->status == "Lose")
                            <span class="btn btn-danger">{{$ticket->status}}</span> </td>
                        @elseif($ticket->status == "Win")
                            <span class="btn btn-success">{{$ticket->status}}</span> </td>
                        @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection