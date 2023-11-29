@extends('dashblayout.dashlayout')

<style>
  
 
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
                                            
                                            <li><a href="#" data-toggle="modal" data-target="#sendFunds" class="btn btn-white btn-success"><span>Deposit Funds</span></a></li>
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
                            <div class="nk-block nk-block-lg">
                                <div class="row gy-gs">
                                    <div class="col-md-12">
                                        <div class="cryptohopper-web-widget" data-id="1" data-chart_color="#0971fe" data-price_format="2" data-table_title="Aspen FM Live Ticker" data-coins="bitcoin,ethereum,cardano,tether,binance-coin,xrp,dogecoin,polkadot,litecoin,bitcoin-cash" data-numcoins="25"
                                            data-realtime="on" data-table_length="15"></div>
                                    </div>
                                </div>
                            </div>




















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
                        <div class="number-sm"><span style="color: {{ $compounding->status == 1 ? 'green' : 'red' }}">
                        {{ $compounding->status == 1 ? 'Completed' : 'Pending' }}
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
                                                            <button onclick="copyRef()" class="btn btn-success">Copy Link</button>
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
                                <!-- .row -->
                            </div>






















                        
                          
                            <!-- .nk-block -->
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-inner card-inner-lg">
                                        <div class="align-center flex-wrap flex-md-nowrap g-4">
                                            <div class="nk-block-image w-120px flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                                                    <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
                                                    <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
                                                    <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                    <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                    <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                    <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                    <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                    <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="green" />
                                                    <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="green" />
                                                    <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
                                                    <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                    <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                    <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                    <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                    <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                    <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                    <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                    <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                                    <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                                </svg>
                                            </div>
                                            <div class="nk-block-content">
                                                <div class="nk-block-content-head px-lg-4">
                                                    <h5>We’re here to help you!</h5>
                                                    <p class="text-soft">Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email or live chat</p>
                                                </div>
                                            </div>
                                            <div class="nk-block-content flex-shrink-0">
                                                <a href="mailto:support@CoinConcord.com" class="btn btn-lg btn-outline-primary">Get Support Now</a>
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
