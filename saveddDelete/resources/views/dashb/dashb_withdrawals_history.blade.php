@extends('dashblayout.dashlayout')
@section('body')


<div class="card-header text-center"><h4>All Withdrawals</h4></div>
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Amount</th>
                        <th class="border-0">Deposit Date</th>
                        <th class="border-0">Method</th>
                        <th class="border-0">Address</th>
                        <th class="border-0">Status</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    @if ($withdrawals)
                    @foreach ($withdrawals as $withdrawal )

                    <tr>
                        <td class="text-dark">{{$loop->index + 1}}</td>
                        
                        <td class="text-dark">$ {{$withdrawal->amount}}</td>
                        <td class="text-dark">{{Carbon\Carbon::parse($withdrawal->created_at)->diffForHumans()}}</td>
                        <td class="text-dark">{{$withdrawal->method}}</td>
                        <td class="text-dark">{{$withdrawal->methodaccount}}
                            <td class="text-dark"> {!! $withdrawal->status > 0? "<span class='fw-bold'>Completed</span></td>": "<span class='fw-bold'>Pending</span></td>" !!}</td>

                        </td>
                     
                    </tr>

                    @endforeach

                    @endif


                </tbody>





            </table>
        </div>
    </div>
</div>





@endsection


