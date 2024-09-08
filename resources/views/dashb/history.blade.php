@extends('dashblayout.dashlayout')
@section('body')

              
 <!-- content @s -->
 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><a class="back-to" href="javascript: history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>(go back)</span></a></div>
                                        <h2 class="nk-block-title fw-normal">Account History</h2>
                                      

                                        <div class="nk-block-des">
                                            <p class="lead"><strong>Aspen</strong> understands the need for <strong> accurately storing and organizing your history data for statistical computing, so here are all your account histories.</strong></p><strong>
                                        </strong></div><strong>
                                    </strong></div><strong>
                                </strong></div><!-- nk-block-head --><strong>
                                <div class="nk-block nk-block-lg">
                                                                                                                                                                                                                                  <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Deposit Transactions</h4>
                                            <p>The following contains all deposit transactions made in your portfolio.
                                            
                                          
                                        </p></div>
                                    </div>
                                    

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
                    
                       {{-- for each $userdeposits as $deposits --}}

                       @if ($userdeposits)

                       @foreach ($userdeposits as $deposit)

                            <!-- Item -->
                   <tr>
                       <td>{{$loop->index + 1}}  </td>

                       <td class="text-dark">
                           <div class="d-flex align-items-center">
                               <span class="fw-bold">{{$deposit->amount}}</span>
                           </div>
                       </td>

                       <td class="fw-bold d-flex align-items-center">
                           {{$deposit->depositDate}}
                       </td>
                       
                       <td class="text-dark">
                           <div class="d-flex align-items-center">
                               <span class="fw-bold">{{$deposit->method =='btc_address'?'Bitcoin': ""}} {{$deposit->method =='eth'?'Ethereum': "" }} {{$deposit->method =='usdt'?'USDT ': ""}}</span>
                           </div>
                       </td>
                      
                       <td class="text-dark">
                           <div class="d-flex align-items-center">
                               <span class="fw-bold">{{$deposit->methodAccount}}</span>
                           </div>
                       </td>

                       <td class="text-dark">
                           <div class="d-flex align-items-center">
                    {!! $deposit->status > 0? "<span class='fw-bold'>Completed</span></td>": "<span class='fw-bold'>Pending</span></td>" !!}
                               {{-- <span class="fw-bold">Completed</span> --}}
                           </div>
                       </td>
                   </tr>
                   <!-- End of Item -->
                           
                       @endforeach
                       
                   @else

                  
                       
                   @endif
                 
                  
                </tbody>
            </table>
        </div>
    </div>
</div>



                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Withdrawal Transactions</h4>
                                            <p>The following contains all Withdrawal transactions made in your portfolio.
                                            </p></div>
                                    </div>

                                    <!-- JCBDIBEOICUEBSBKJCBDSJCDBHJBDCJBJHDCBJDCBJHDCBJHDCBJHSBDH -->

                                    <div class="card border-0 shadow mb-4">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0 rounded">
                                            <thead class="thead-light">
                                                <tr  style='text-align:center';>
                                                    <th class="border-0 rounded-start">#</th>
                                                    <th class="border-0">Amount</th>
                                                    <th class="border-0">Withdrawal Date</th>
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
                                                    <td class="text-dark">{{$withdrawal->method =='Btc'?'Bitcoin': ""}} {{$withdrawal->method =='Eth'?'Ethereum': "" }} {{$withdrawal->method =='USDT'?'USDT ': ""}} {{$withdrawal->method =='BTC'?'Bitcoin ': ""}} {{$withdrawal->method =='ETH'?'Ethereum ': ""}}</td>
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




<!-- CERNCHEBRKBJKCBFNDSBJHBERLKJBLSDKJBLKJBDKLUBD -->

<div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title"> Compoundings</h4>
                                            <p>The following contains all compounding transactions.
                                        </p></div>
                                    </div>

                                    <!-- JCBDIBEOICUEBSBKJCBDSJCDBHJBDCJBJHDCBJDCBJHDCBJHDCBJHSBDH -->

                                    <div class="card border-0 shadow mb-4">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0 rounded">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-0 rounded-start">#</th>
                                                    <th class="border-0">Amount</th>
                                                    <th class="border-0">Date</th>
                                                    <th class="border-0">From</th>
                                                    
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @if ($compoundings)
                                                @foreach ($compoundings as $compounding )

                                                <tr>
                                                    <td class="text-dark">{{$loop->index + 1}}</td>
                                                    
                                                    <td class="text-dark" style="">$ {{$compounding->amount}}</td>
                                                    <td class="text-dark">{{Carbon\Carbon::parse($compounding->created_at)->diffForHumans()}}</td>
                                                    <td class="text-dark">{{$compounding->from}}</td>

                                                    </td>
                                                
                                                </tr>

                                                @endforeach

                                                @endif


                                            </tbody>





                                        </table>
                                    </div>
                                </div>
                                </div>


                                </div><!-- nk-block -->
                            </strong></div><strong>
                        </strong></div><strong>
                    </strong></div><strong>
                </strong></div>
                
@endsection
