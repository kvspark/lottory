@extends('user.layout')

@section('content')

<p class="mb-0" style="font-size:24px; font-weight:600"> <i class="fa fa-shopping-cart"></i> Buy Online Lottory Ticket</p>
<p class="mb-3 mt-0" style="font-size:16px">Play the lottery online safely and securely at Global Premier Lottery, the leading lottery ticket purchasing service in the world</p>

<div class="row">
    <div class="col-md-12 ">
        <div class="w-100 table-responsive h-100 p-3 shadow-sm text-center bg-white">
            <table class="table">
                <thead>
                    <tr>
                        <th>Lottory</th>
                        <th>Jackpot</th>
                        <th>Price</th>
                        <th>Sold</th>
                        <th>Time To Draw</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->lottory}}</td>
                        <td>{{$ticket->jackpot}}</td>
                        <td>${{$ticket->price}}</td>
                        <td>{{$ticket->sold}}</td>
                        <td>{{$ticket->time_to_draw}}</td>
                        <td> <a href="{{url('user/buy-ticket/' . $ticket->id)}}" class="btn btn-primary">BUY TICKET</a> </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection