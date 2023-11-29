@extends('dashblayout.dashlayout')

@section('body')

<div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <!-- <div class="nk-block-head-sub"><span>Welcome!  </span> -->
                                </div>


                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">Welcome to your portfolio</h2>
                                        <div class="nk-block-des">
                                            <!-- <p>Welcome to your portfolio.</p> -->
                                        </div>

                                    </div>
                                    <!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            
                                            <li><a href="#" data-toggle="modal" data-target="#sendFunds" class="btn btn-white btn-success"><span>Deposit Funds</span></a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#compoundFunds" class="btn btn-dark"><span>Compound Funds</span> </a></li>
                                            <!-- <li class="opt-menu-md dropdown">
                                                <a href="#" class="btn btn-white btn-light btn-icon" data-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">

                                                        <li><a href="settings"><em class="icon ni ni-notify"></em><span>Change Password</span></a></li>
                                                    </ul>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- .nk-block-head-content -->
                                </div>
                                <!-- .nk-block-between -->
                            </div>
                            <!-- .nk-block-head -->
                            <div class="nk-block">

                                <!-- WARNING -->


                             
                                <div class="row gy-gs">
                                    <div class="col-lg-5 col-xl-12">
                                        <div class="nk-block">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-head-content">
                                                    <!-- <h5 class="nk-block-title title" style="color: rgb(1, 28, 10);">Total Portfolio Balance</h5> -->

                                                </div>
                                            </div>
                                            <!-- .nk-block-head -->

                                            <div class="nk-block"  style="background-color: #fff;">
                                                <div class="card card-bordered text-light is-dark h-100">
                                                    <div class="card-inner">
                                                        <div class="nk-wg7" >
                                                            <div class="nk-wg7-stats">
                                                                <div class="nk-wg7-title" style="color: rgb(255, 255, 255);">Your current Investment Status :</div>
                                                                <!-- <div class="number-lg amount">$ 0.00 -->

                                                                @if ( $funds->currentprofit + $funds->balance > 500000)
                                                                <strong>Elite</strong>
                                                                @elseif ( $funds->currentprofit + $funds->balance  > 100000)
                                                                <strong>Premium</strong>
                                                                @elseif ( $funds->currentprofit + $funds->balance  > 1000)
                                                                <strong>Wealth Builder</strong>
                                                                @else
                                                                <strong>Low Funds</strong>
                                                                @endif
                                                                    
    
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                        <!-- .nk-wg7 -->
                                                    </div>
                                                    <!-- .card-inner -->
                                                </div>
                                                <!-- .card -->
                                            </div>



                                            <!-- .nk-block -->
                                        </div>
                                        <!-- .nk-block -->
                                    
                                </div>




                                <!-- .row -->
                            </div>
                            <!-- .nk-block -->
                           
                            <div class="nk-block nk-block-lg">
                                <div class="row gy-gs">
                                    <div class="col-md-8">
                                        <div class="card-head">
                                            <div class="card-title  mb-0">
                                                <h5 class="title">Investment Details</h5>
                                            </div>
                                            <div class="card-tools">
                                                <ul class="card-tools-nav">

                                                    <!-- <li class="active"><a href="logs">Tap To View All</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .card-head -->
                                        <div class="tranx-list card card-bordered">
                                            <div class="tranx-item">
                                                <div class="tranx-col">
                                                    <div class="tranx-amount">
                                                        <div class="number text-left" style="color: green;"> {{ number_format($funds->balance, 2, '.', ',') }} USD</div>
                                                        <!-- <div class="number-sm">Funds sent to managed portfolio</div> -->

                                                        <div class="number-lg text-left"><em class="icon ni ni-arrow-right"></em> Principal</div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                           
                                        </div>

                                        <div class="tranx-list card card-bordered">
                                            <div class="tranx-item">
                                                <div class="tranx-col">
                                                    <div class="tranx-amount">
                                                        <div class="number text-left"> {{ number_format($funds->currentprofit, 2, '.', ',') }} USD</div>
                                                        <!-- <div class="number-sm text-left">Profits made as ROI</div> -->

                                                        <div class="number-lg text-left"><em class="icon ni ni-arrow-up"></em> Dividend</div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                           
                                        </div>

                                    
                                        <!-- .tranx-list -->
                                    </div>
                                    <!-- .col -->


                                   

                                    <div class="col-md-4 mb-2">
                                        <h5 class="title">Referral Activities</h5>
                                        <div class="card card-bordered">
                                            
                                            <div class="">
                                                <div class="nk-refwg-invite card-inner">
                                                    <div class="nk-refwg-head g-3">
                                                        <div class="nk-refwg-title">
                                                            
                                                            <div class="title-sub">Use the below link to invite your friends.</div>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="nk-refwg-url">
                                                        <div class="form-control-wrap">
        
        
                                                            <div>
                                                                <span class="nk-menu-icon"> <em class="icon ni ni-users"></em> {{ $all_ref->count() }} Referral</span>   

                                                                <span class="nk-menu-icon"><em class="icon ni ni-coin"></em> {{ $funds->bonus }} Earning</span> 
    
                                                            </div>                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .nk-refwg-invite -->
                                                <!--  -->
                                                <!-- .nk-refwg-stats -->
                                            </div>
                                            <!-- .nk-refwg -->
                                        </div>
                                        <!-- .card -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card-head">
                                            <div class="card-title  mb-0">
                                                <h5 class="title">Withdraw Funds</h5>
                                            </div>
                                            <div class="card-tools">
                                                <ul class="card-tools-nav">

                                                    <!-- <li class="active"><a href="logs">Tap To View All</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .card-head -->
                                        <div class="tranx-list card card-bordered">
                                            
                                            <!-- .tranx-item -->
                                            <!-- <div class="tranx-item"> -->

                                                <div class="modal-body">
                                                <form action="{{ route('userdashb_withdrawal_post') }}" method="post">

                                                    @csrf

                                                    <div class="card" style="width:80%;margin:auto;">
                                                        <div class="card-body">

                                                        
                                                            <div class="">

                                                                <div class="mb-2">
                                                                <label class="form-label">Enter Amount:</label>

                                                                    <input type="text" class="form-control" id="amount" value="" required name="amount"
                                                                        placeholder="Enter Withdraw Amount" aria-describedby="amount" style="background: white;"><br>

                                                                </div>
                                                                <div class="mb-4">
                                                                <label class="form-label">Select Crypto To Receive In:</label>
                                                                    <!-- <input type="text" value="BTC" class="form-control" id="mainval" name="method" readonly style="background: white;"> -->
                                                                    <select class="form-control" name="method" id="">
                                                                        <option value="Btc">BITCOIN</option>
                                                                        <option value="Eth">ETH</option>
                                                                        <option value="USDT">USDT(erc20)</option> 
                                                                </select> 
                                                                </div>

                                                                <div class="mb-4">
                                                                <label class="form-label">Select Account to withdraw from:</label>
                                                                    <!-- <input type="text" value="BTC" class="form-control" id="mainval" name="method" readonly style="background: white;"> -->
                                                                    <select class="form-control" name="from" id="">
                                                                    <option value="dividend">Dividend</option>
                                                                    <option value="referral">Referral Bonus</option>
                                                                </select> 
                                                                </div>


                                                                <input type="text" class="form-control" id="methodAccount" required value="" name="address"
                                                                    placeholder="Enter Address" aria-describedby="amount" style="background: white;"><br>
                                                                <br>

                                                            </div>

                                                            

                                                            <div class="nothingday"></div>
                                                            {{-- <a href="#" class="btn btn-primary">Withdraw</a> --}}
                                                            <button type="submit" class="btn btn-success" style="color:white; border-radius:5px; border:none;padding:10px;"> Withdraw  </button>
                                                        </div>
                                                    </div>

                                                    </form>
                                                    <hr/>
                                                <!-- </div> -->
                                            </div>
                                            <!-- .tranx-item -->
                                            
                                          
                                            <!-- .tranx-item -->
                                         
                                            <!-- .tranx-item -->


                                        </div>
                                        <!-- .tranx-list -->
                                    </div>



                                  
                                   
                                    <!-- .col -->
                                </div>
                                <!-- .row -->
                            </div>
                            <!-- .nk-block -->
                          
                            <!-- .nk-block -->
                         
                            <!-- .nk-block -->
                        </div>
                    </div>
@endsection
