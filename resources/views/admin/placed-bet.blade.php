@extends('admin.layout')

@section('content')

<h4> {{$member->first_name}} {{$member->last_name}} Purchase Ticket/Placed Bet </h4>

<div class="responsive-table mt-3">
    <table style="font-size:16px" class="table">
        <thead>
            <tr>
                <th>Rececipt</th>
                <th>Date</th>
                <th>Ref</th>
                <th>Lottery </th>
                <th>Lottery Number</th>
                <th>Jackpot</th>
                <th>Ticket Price</th>
                <th>Payment Method</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($member->purchasetickets()->get() as $ticket)
                <tr>
                    <td> <a href="{{url('img/receipt')}}/{{$ticket->receipt}}" download> View Receipt </a> </td>
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
                    </td>
                    <td> <a href="{{url('admin/edit-bet/' . $ticket->id)}}" class="btn btn-primary"> Edit </a> </td>
                    <td> <a href="{{url('admin/delete-bet/' . $ticket->id)}}" class="btn btn-danger"> Delete </a> </td>    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection