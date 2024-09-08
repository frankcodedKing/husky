@extends('dashblayout.dashlayout')

<style>
   .nk-menu-item:hover a,
  .nk-menu-item:active a {
    color: #024139;
  }
 
    .Qr-code {
        display: flex;
        justify-content: space-around;
                      
        
        padding: 30px;
        position: absolute;
        flex-wrap: wrap;
        height: 100%;
        width: 80%;
        background: white;
        
        top: 7%;  
        overflow: hidden;
    }
    .Qr-code p {
        color: black;
    }
    .Qr-code h3 {
        color: black;
        font-size: 16px;
        border-bottom: 1px solid;
    }
    .Qr-code img {
        width: 170px;
        height: 170px;
    }
    
    @media (max-width:480px) {
       
       
        .Qr-code img {
            width: 140px;
            height: 140px;
        }
        .Qr-code {
            display: block;
            margin: 0;
          
            padding-top: 40px;
            left: 0;
            width: 100%;
        }
        .Qr-code ul {
            padding: 10px;
            width: 80%;
        }
        .Qr-code h3 {
            font-size: 3vw;
        }
     
    }
</style>




@section('body')

   

 <!-- content @s -->
 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-sub"><span>Welcome!  </span>
                                </div>


                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">{{ Auth::user()->name }}</h2>
                                        <div class="nk-block-des">
                                            <!-- <p>At a glance summary of your account. Have fun!</p> -->
                                        </div>

                                    </div>
                                    <!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            
                                            <li><a href="#" data-toggle="modal" data-target="#sendFunds" class="btn btn-success"><span class="text-white">Deposit Funds</span></a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#receiveFunds" class="btn btn-dark"><span>Withdraw Funds</span> </a></li>
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
                                
                                <!-- @if (Auth::user()->notifications !== null)
                                <div class="alert alert-fill alert-success alert-dismissible alert-icon">
                                    {{ Auth::user()->notifications }}
                                    <em class="icon ni ni-caution"></em>
                                    <button class="close" data-dismiss="alert" fdprocessedid="xp1w0n" style="top: 20px;"></button>
                                </div>
                            @endif -->



                                <div class="row gy-gs">
                                    <div class="col-lg-5 col-xl-4">
                                        <div class="nk-block">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-head-content">
                                                    <h5 class="nk-block-title title">Total Portfolio Value</h5>

                                                </div>
                                            </div>
                                            <!-- .nk-block-head -->



                                            <div class="nk-block">
                                                <div class="card card-bordered text-light is-dark h-100">
                                                    <div class="card-inner">
                                                        <div class="nk-wg7">
                                                            <div class="nk-wg7-stats">
                                                                <div class="nk-wg7-title" style="color: antiquewhite;">Total balance in USD</div>
                                                                
                                                                <div class="number-lg amount">$ {{ number_format($funds->currentprofit + $funds->balance + $funds->bonus, 2, '.', ',') }}


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



                                <div class="col-lg-5 col-xl-4">
                                    <div class="nk-block">
                                        <div class="nk-block-head-xs">
                                            <div class="nk-block-head-content">
                                                <h5 class="nk-block-title title">E-Bank</h5>

                                            </div>
                                        </div>
                                        <!-- .nk-block-head -->



                                        <div class="nk-block">
                                            <div class="card card-bordered text-light is-dark h-100">
                                                <div class="card-inner">
                                                    <div class="nk-wg7">
                                                        <div class="nk-wg7-stats">
                                                            <div class="nk-wg7-title" style="color: antiquewhite;">Total balance in USD</div>
                                                            <div class="number-lg amount">$ {{ number_format($funds->ebalance, 2, '.', ',') }}


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

















<br>
<br>


                            <div class="nk-block nk-block-lg">
                                <div class="row gy-gs">
                                    <div class="col-md-6">
                                        <div class="card-head">
                                            <div class="card-title  mb-0">
                                                <h5 class="title">Recent Transactions</h5>
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
                                           
                                            <!-- .tranx-item -->

                                            
                                        @if ($deposits)

@foreach ($deposits as $deposit)
    <div class="tranx-item">
        <div class="tranx-col">
            <div class="tranx-info">
                <div class="tranx-data">
                    <div class="tranx-label">
                        Deposit <em class="tranx-icon sm icon ni ni-shield-check-fill"></em> </div>
                    <div class="tranx-date">{{Carbon\Carbon::parse($deposit->created_at)->diffForHumans()}}</div>
                </div>
            </div>
        </div>
        <div class="tranx-col">
            <div class="tranx-amount">
                <div class="number">$ {{$deposit->amount}}</div>
                <div class="number-sm"><span style="color: {{ $deposit->status == 1 ? 'green' : 'red' }}">
                            {{ $deposit->status == 1 ? 'Completed' : 'Pending' }}
                        </span></div>
            </div>
        </div>
    </div>

    @endforeach
    
    @else

    
    @endif
    <!-- .tranx-item -->

    @if ($withdrawals)

        @foreach ($withdrawals as $withdrawal)
            <div class="tranx-item">
                <div class="tranx-col">
                    <div class="tranx-info">
                        <div class="tranx-data">
                            <div class="tranx-label">
                                Withdrawal <em class="tranx-icon sm icon ni ni-shield-check-fill"></em> </div>
                            <div class="tranx-date">{{Carbon\Carbon::parse($withdrawal->created_at)->diffForHumans()}}</div>
                        </div>
                    </div>
                </div>
                <div class="tranx-col">
                    <div class="tranx-amount">
                        <div class="number">$ {{$withdrawal->amount}}</div>
                        <div class="number-sm"><span style="color: {{ $withdrawal->status == 1 ? 'green' : 'red' }}">
                            {{ $withdrawal->status == 1 ? 'Completed' : 'Pending' }}
                        </span></div>
                    </div>
                </div>
            </div>

            @endforeach
            
            @else

            
            @endif
   
    <!-- .tranx-item -->
    
  
    <!-- .tranx-item -->

    
    @if ($compoundings)

        @foreach ($compoundings as $compounding)
            <div class="tranx-item">
                <div class="tranx-col">
                    <div class="tranx-info">
                        <div class="tranx-data">
                            <div class="tranx-label">
                                Compounding <em class="tranx-icon sm icon ni ni-shield-check-fill"></em> </div>
                            <div class="tranx-date">{{Carbon\Carbon::parse($compounding->created_at)->diffForHumans()}}</div>
                        </div>
                    </div>
                </div>
                <div class="tranx-col">
                    <div class="tranx-amount">
                        <div class="number">$ {{$compounding->amount}}</div>
                        <div class="number-sm"><span style="color: {{ $compounding->status == 1 ? 'green' : 'green' }}">
                        {{ $compounding->status == 1 ? 'Completed' : 'Completed' }}
                    </span></div>
                    </div>
                </div>
            </div>


            @endforeach
            
            @else

            
            @endif
 
    <!-- .tranx-item -->



    <!-- end erher -->
                                            
                                          
                                            <!-- .tranx-item -->
                                         
                                            <!-- .tranx-item -->


                                        </div>
                                        <!-- .tranx-list -->

                                        <!-- strt ahere -->


                                    </div>
                                    <!-- .col -->


                                   

                                    <div class="col-md-6 mb-2">
                                        <h5 class="title">Refer Us & Earn</h5>
                                        <div class="card card-bordered">
                                            
                                            <div class="">
                                                <div class="nk-refwg-invite card-inner">
                                                    <div class="nk-refwg-head g-3">
                                                        <div class="nk-refwg-title">
                                                            
                                                            <div class="title-sub">Use the below link to invite your friends.</div>
                                                        </div>
                                                        <div class="nk-refwg-action">
                                                            <input type="text" value="{{ route('register') }}?refid={{ Auth::user()->id }}" id="refData" class="offscreen" />
                                                            <button onclick="copyRef()" class="btn btn-success" style="background-color: #024139;">Copy Link</button>
                                                        </div>
                                                    </div>
                                                    <div class="nk-refwg-url">
                                                        <div class="form-control-wrap">


                                                            <input type="text" class="form-control copy-text"  value="{{ route('register') }}?refid={{ Auth::user()->id }}" readonly>
                                                        </div>
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



                                    
                                    <div class="col-md-12 mb-2">
                                        <h5 class="title">Market</h5>
                                        <div class="card card-bordered">
                                            
                                            <div class="">
                                                <!-- <div class="nk-refwg-invite card-inner"> -->
                                                        <!-- TradingView Widget BEGIN -->
                                                                    <!-- TradingView Widget BEGIN -->
                                                                <div class="tradingview-widget-container">
                                                                    <div id="tradingview_c623d"></div>
                                                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                                                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                                                    <script type="text/javascript">
                                                                    new TradingView.widget(
                                                                    {
                                                                    "width": "100%",
                                                                    "height": 300,
                                                                    "symbol": "NASDAQ:AAPL",
                                                                    "interval": "D",
                                                                    "timezone": "Etc/UTC",
                                                                    "theme": "light",
                                                                    "style": "1",
                                                                    "locale": "en",
                                                                    "enable_publishing": false,
                                                                    "allow_symbol_change": true,
                                                                    "container_id": "tradingview_c623d"
                                                                }
                                                                    );
                                                                    </script>
                                                                </div>
                                                                <!-- TradingView Widget END -->
                                                <!-- </div> -->
                                                <!-- .nk-refwg-invite -->
                                                <!--  -->
                                                <!-- .nk-refwg-stats -->
                                            </div>
                                            <!-- .nk-refwg -->
                                        </div>
                                        <!-- .card -->
                                    </div>
                                   
                                    <!-- .col -->
                                </div>
                                
                                                            <div class="nk-block nk-block-lg">
                                <div class="row gy-gs">
                                    <div class="col-md-12">
                                        <div class="cryptohopper-web-widget" data-id="1" data-chart_color="#0971fe" data-price_format="2" data-table_title="Aspen FM Live Ticker" data-coins="bitcoin,ethereum,cardano,tether,binance-coin,xrp,dogecoin,polkadot,litecoin,bitcoin-cash" data-numcoins="25"
                                            data-realtime="on" data-table_length="15"></div>
                                    </div>
                                </div>
                            </div>

                                <!-- .row -->
                            </div>






















                        
                          
                            <!-- .nk-block -->
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-inner card-inner-lg">
                                        <div class="align-center flex-wrap flex-md-nowrap g-4">
                                            <div class="nk-block-image w-120px flex-shrink-0">
                                            
                                            </div>
                                           
                                            <div class="nk-block-content flex-shrink-0">
                                                <a href="mailto:support@aspenfinancialmanagement.com" class="btn btn-lg btn-outline-primary">Get Support Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .card-inner -->
                                </div>
                                <!-- .card -->
                            </div>
                            <!-- .nk-block -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->


                

                
@endsection
