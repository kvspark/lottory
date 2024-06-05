@extends('admin.layout')

@section('content')

<h4>All Tickets</h4>

<div class="table-reponsive">
    <table class="table">
        <thead>
            <tr>
                <th>Lottery Name</th>
                <th>Winning Number</th>
                <th> Next Jackpot </th>
                <th> Date </th>
                <th> Edit </th>
                <th> Delete </th>
            </tr>
        </thead>
        <tbody>
            @foreach($winnings as $winning)
                <tr>
                    <td> {{$winning->lottery_name}} </td>
                    <td class="d-flex"> 
                        @php    
                            $win = $winning->winning_number;
                            $wins = preg_split('/ /',$win);
                        @endphp
                        @foreach($wins as $w)
                            <span class="border border-2 rounded rounded-circle border-dark d-flex justify-content-center align-items-center mr-3" style="height: 40px; width: 40px;"> {{$w}} </span>
                        @endforeach
                    </td>
                    <td> ${{number_format($winning->next_jackpot,2)}} </td>
                    <td> {{$winning->created_at}} </td>
                    <td> <a href="{{url('admin/edit-winning')}}/{{$winning->id}}" class="btn btn-primary"> Edit </a> </td>
                    <td> <a href="{{url('admin/delete-winning')}}/{{$winning->id}}" class="btn btn-danger"> Delete </a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection