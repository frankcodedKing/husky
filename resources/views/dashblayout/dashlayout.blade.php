<!DOCTYPE html>

<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Aspen Develoers">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <meta name="google-site-verification" content="4RwsTb_q_dFIGY603ezW066uisT4s33hYWt4hJ0z4mg" />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="https://aspenfinancialmanagement.com/assets/images/logo/icon.png">
    <!-- Page Title  -->
    <title>Aspen Financial Management</title>
    <!-- StyleSheets  -->
    <!-- {{asset('dashb/cordash/assets/css/demo_3/style.css')}} -->
    
    <link rel="stylesheet" href="{{ asset('dashb/cordash/assets/dashboard/css/style.css') }}">

    <!-- <link rel="stylesheet" href="{{asset('dashb/cordash/assets/dashboard/css/dashlite.css?ver=2.5.0')}}"> -->
    <!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
    <!--<link id="skin-default" rel="stylesheet" href="{{ asset('dashb/cordash/assets/dashboard/css/theme.css?ver=2.5.0') }}">-->
    <!--<link href="{{ asset('dashb/cordash/assets/dashboard/css/dropzone.min.css') }}" rel="stylesheet" type="text/css" />-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@700&display=swap" rel="stylesheet">-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



</head>

<style>

 .nk-menu-item:hover a,
  .nk-menu-item:active a {
    color: #024139;
  }
  
    .offscreen {
        position: absolute;
        left: -999em;
    }

    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }
    .logo-dark {
            /* Apply a scale transformation to double the size */
            transform: scale(2);
            /* You might also want to adjust the margins if needed */
            margin: 50px;
        }
        
        .btn-success{
            background-color: #024139;
        }
        
        

</style>

<body class="nk-body npc-crypto bg-white has-sidebar " id="darkSwitch">
@include('sweetalert::alert')
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="/" class="logo-link nk-sidebar-logo">
                            <!-- <img class="logo-light logo-img" src="https://aspen-fm.com/assets/images/logo/logo.png" srcset="https://aspen-fm.com/assets/images/logo/logo.png 2x" alt="logo"> -->
                            <img class="logo-dark logo-img" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo-dark" style="
                            width: 100px;
                        ">
                            <!-- <span class="nio-version">Aspen-FM</span> -->
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body" data-simplebar>
                        <div class="nk-sidebar-content">
                            
                            <!-- .nk-sidebar-widget -->
                           
                            <!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-menu">
                                <!-- Menu -->
                                <ul class="nk-menu">
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">Menu</h6>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('dash_index')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Overview</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">Invest</h6>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('dash_portfolio')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                                            <span class="nk-menu-text">Portfolio</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('dashb_debit_apply')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-saving"></em></span>
                                            <span class="nk-menu-text">Card application</span>
                                        </a>
                                    </li>
                                    
                                      <li class="nk-menu-item">
                                        <a href="{{route('loans')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                            <span class="nk-menu-text"> Loans and credit</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">History</h6>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('dash_history')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-clipboard"></em></span>
                                            <span class="nk-menu-text">Account History</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">Account</h6>
                                    </li>
                                    <li class="nk-menu-item">

                                        <li class="nk-menu-item">
                                            <a href="{{route('dashb_profile')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span>
                                            <span class="nk-menu-text">Profile</span>
                                        </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('dashb_referrals_view')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                            <span class="nk-menu-text">Referrals</span>
                                        </a>
                                        </li>

                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('dash_kyc')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                                            <span class="nk-menu-text">KYC</span>
                                        </a>
                                        </li>
                                        <!-- <li class="nk-menu-item">
                                            <a href="{{route('dash_logs')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                            <span class="nk-menu-text">Log Activities</span>
                                        </a>
                                        </li> -->
                                        
                                         
                                    
                                        <li class="nk-menu-item">
                                            <a href="{{route('dash_settings')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-opt-alt"></em></span>
                                            <span class="nk-menu-text"> Account Security</span>
                                        </a>
                                        </li>
                                        
                                         <li class="nk-menu-heading">
                                            <h6 class="overline-title">Auth</h6>
                                        </li>
                                        
                                        
                                        @auth
                                            @if(auth()->user()->id === 168)
                                                <!-- Show admin-only content here -->
                                                
                                                
                                        <li class="nk-menu-item">
                                        <a href="/webadmin" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-lock"></em></span>
                                            <span class="nk-menu-text">Admin  Login</span>
                                        </a>
                                    </li>
                                    
                                                <!--<div>-->
                                                <!--    Welcome, Admin!-->
                                                    <!-- Your admin-only content goes here -->
                                                <!--</div>-->
                                            @endif
                                        @endauth



                                       
                                        <li class="nk-menu-item">
                                            <a href="{{route('logout')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-unlock-fill"></em></span>
                                            <span class="nk-menu-text">Log Out</span>
                                        </a>
                                        </li>
                                        <br>
                                        <br>

                                </ul>
                                <!-- .nk-menu -->
                            </div>
                            <!-- .nk-sidebar-menu -->
                          
                            <!-- .nk-sidebar-widget -->
                          
                            <!-- .nk-sidebar-footer -->
                        </div>
                        <!-- .nk-sidebar-content -->
                    </div>
                    <!-- .nk-sidebar-body -->
                </div>
                <!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->


            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fluid nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="dashboard" class="logo-link">
                                    <img class="logo-light logo-img" style="width: 70px; padding-top: 6px;" src="https://aspenfinancialmanagement.com/assets/images/logo/logo.png" srcset="https://aspenfinancialmanagement.com/assets/images/logo/logo.png 2x" alt="logo">
                                    <!-- <img class="" src="https://aspen-fm.com/assets/images/logo/logo.png" srcset="https://aspen-fm.com/assets/images/logo/logo.png" alt="logo-dark"> -->
                                    <!-- <span class="nio-version">CoinConcord</span> -->
                                </a>
                            </div>
                        
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <!-- <div class="user-avatar sm"> -->
                                                    <!-- <em class="icon ni ni-user-alt"></em> -->
                                                <!-- </div> -->
                                                <div class="user-info d-none d-md-block">

                                                    <div class="text-dark">
                                                        <!--<span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>-->
                                                           <div class="user-name"> <strong> <span style="color: {{ auth()->user()->status == 1 ? 'green' : 'red' }}">
    {{ auth()->user()->status == 1 ? 'Verified' : 'Not Verified' }}
</span>
</strong> </div>
                                                         <i style="font-size: 14px;">Account Statistics:</i>  {{Auth::user()->adminmessage != null? Auth::user()->adminmessage :0 }}/4</div>
                                                 
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>
                                                            J                                                        </span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ Auth::user()->name }}</span>
                                                        <span class="sub-text">{{ Auth::user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner user-account-info">
                                                <h6 class="overline-title-alt">Aspen Wallet Account</h6>
                                                <div class="user-balance">0.00 <small class="currency currency-btc">USD</small></div>

                                                <a href="#" data-toggle="modal" data-target="#receiveFunds" class="link"><span>Receive Funds</span> <em class="icon ni ni-wallet-out"></em></a>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="profile"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="settings"><em class="icon ni ni-setting-alt"></em><span>Account Settings</span></a></li>
                                                    <li><a href="logs"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="https://coinconcord.com/Main/logoutUser"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown mr-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <!-- <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div> -->
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>

                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have created a <span>Aspen</span> account</div>
                                                            <div class="nk-notification-time">Date: 15th December 2022</div>
                                                        </div>
                                                    </div>
                                                    <!-- .dropdown-inner -->



                                                </div>
                                            </div>
                                            <!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main header @e -->

                
        @include("flash-message")


        @yield("body")

        @yield('flash-message')


                <!-- footer @s -->
                <div class="nk-footer nk-footer-fluid">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2023 Aspen. All rights reserved
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->



    <script>
        function copyRef() {
            /* Get the text field */
            var copyText = document.getElementById("refData");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            alert("Referral Link copied to clipboard!: " + copyText.value);
        }

        function engageConversion() {
            var cryptoSelect = document.getElementById("cryptoSelect");
            var usdAmt = document.getElementById('usdAmount').value;
            var cryptoVal = document.getElementById('cryptoValue');

            if (document.getElementById("cryptoSelect").value == "btc") {
                var curRate = 26172.6;
            } else if (document.getElementById("cryptoSelect").value == "eth") {
                var curRate = 1673.15;
            } else if (document.getElementById("cryptoSelect").value == "bch") {
                var curRate = 179.14;
            } else if (document.getElementById("cryptoSelect").value == "bnb") {
                var curRate = 324.9999;
            } else if (document.getElementById("cryptoSelect").value == "usdt") {
                var curRate = 1;
            } else {
                var curRate = 0;
            }

            var vResult = usdAmt / curRate;
            var roundedFig = vResult.toFixed(4);
            document.getElementById('cryptoValue').value = roundedFig;

        }
    </script>





    <!-- Modal Form -->

    <!-- MODAL DEPOSIT -->

    <div class="modal fade" tabindex="-1" id="sendFunds">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deposit funds to account</h5>

                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">


            <!-- Form -->


            <form action="{{ route('dashb_depositsubmit') }}" method="POST">
                @csrf

                <div class="inputfile">
                    <label class="my-1 me-2" for="">Amount To deposit</label>
                    <input type="number" class="form-control" style="color: black" id="amount" value="" required
                        name="amount" placeholder="Amount" aria-describedby="amount"><br>
                </div>
              

                <label class="form-label">Select Asset Class To Deposit In:</label>
                        <!-- <input type="text" value="BTC" class="form-control" id="mainval" name="method" readonly style="background: white;"> -->
                      <select class="form-control" name="method" id="methodSelector">
                          <option></option>
        <option value="bitcoin">Cryptocurrency(Bitcoin and other digital asset)</option>
        <option value="etfs">Exchange Traded Funds(etfs)</option>
        <option value="mutualfunds">Mutual FUnds(PDG20 GS3 FJ)</option>

        <option value="stocks">Stocks(NYSE3APPGGLE3)</option>
    </select>

                <div class="mb-4">
                    <label class="form-label">Select Crypto To Deposit In:</label>
                        <!-- <input type="text" value="BTC" class="form-control" id="mainval" name="method" readonly style="background: white;"> -->
                      <select class="form-control" name="method" id="methodSelector">
                          <option></option>
        <option value="btc_address">BITCOIN</option>
        <option value="eth">ETH</option>
        <option value="usdt">USDT(erc20)</option>
    </select>



    <div id="btcAddress" class="address" style="display:none;">
        <div style="text-align: center;">
        <img src="https://chart.googleapis.com/chart?chs=350x330&cht=qr&chl=bc1qwcj7pzhqnygs256ym6mml6874tvfx69ucwttrw" alt="QR Code" style="margin-bottom: 5px; width: 175px; height: 165px; font-size: 5px;">
        <p> <strong> bc1qwcj7pzhqnygs256ym6mml6874tvfx69ucwttrw </strong></p>
    </div>
    </div>

    <div id="ethAddress" class="address" style="display:none;">
        <div style="text-align: center;">
        <img src="https://chart.googleapis.com/chart?chs=350x330&cht=qr&chl=0x0242e13fda091C0fD2D7c2A1c5042169F01977fE" alt="QR Code" style="margin-bottom: 5px; width: 175px; height: 165px; font-size: 5px;">
        <p> <strong> 0x0242e13fda091C0fD2D7c2A1c5042169F01977fE</strong></p>
    </div>
    
    </div>

    <div id="usdtAddress" class="address" style="display:none;">
<div style="text-align: center;">
        <img src="https://chart.googleapis.com/chart?chs=350x330&cht=qr&chl=0x0242e13fda091C0fD2D7c2A1c5042169F01977fE" alt="QR Code" style="margin-bottom: 5px; width: 175px; height: 165px; font-size: 5px;">
        <p> <strong>0x0242e13fda091C0fD2D7c2A1c5042169F01977fE </strong></p>
    </div>    </div>

                    </div>
                    
                     <label for="file">Upload proof:</label>
<br>        
                     <input type="file" id="file" name="file" required>
                     <!-- You can specify the accepted file types using the accept attribute -->


                <button type="submit" id="submitButton"
                    style="width:30%;background: #024139; color:white; border-radius:10px; border:none;padding:10px;">Next</button>


            </form>


            
         
                </div>



         
            </div>
        </div>
    </div>


 
            

    <!-- MODAL WITHDRAW -->
    <div class="modal fade" tabindex="-1" id="receiveFunds">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Receive Funds To Account</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
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
                    <div class="currentInfo"></div>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Powered By Aspen Systems</span>
                </div>
            </div>
        </div>
    </div>


    <!-- compoun funds -->


    <div class="modal fade" tabindex="-1" id="compoundFunds">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Compound your Earnings</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">

                <form action="{{ route('userdashb_compound_post') }}" method="post">

        @csrf

        <div class="card" style="width:80%;margin:auto;">
            <div class="card-body">

               
                <div class="">

                    <div class="mb-2">
                    <label class="form-label">Enter Amount:</label>

                        <input type="text" class="form-control" id="amount" value="" required name="amount"
                            placeholder="Enter Amount" aria-describedby="amount" style="background: white;"><br>

                    </div>
                  

                    <div class="mb-4">
                    <label class="form-label">Select Account to compound from:</label>
                        <!-- <input type="text" value="BTC" class="form-control" id="mainval" name="method" readonly style="background: white;"> -->
                        <select class="form-control" name="from" id="">
                        <option value="dividend">Dividend</option>
                            <option value="referral">Referral Bonus</option>
                      </select> 
                    </div>


                  

                </div>

               
                <div class="nothingday"></div>
                {{-- <a href="#" class="btn btn-primary">Withdraw</a> --}}
                <button type="submit" class="btn btn-success" style="color:white; border-radius:5px; border:none;padding:10px;"> Compound  </button>
            </div>
        </div>

    </form>

                    <hr/>
                    <div class="currentInfo"></div>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Powered By Aspen Systems</span>
                </div>
            </div>
        </div>
    </div>

    
    <!--<script>-->
    <!--    const fameOne = document.querySelector('.fame1')-->
    <!--    const fameTwo = document.querySelector('.fame2')-->
    <!--    const fameThree = document.querySelector('.fame3')-->
    <!--    const displayOne = document.querySelector('.display1')-->
    <!--    const coininput = document.getElementById('coininput')-->
    <!--    const amountinput = document.getElementById('amountinput')-->
    <!--    const coinrate = document.getElementById('coinrate')-->
    <!--    const method1 = document.querySelector('.method1')-->
    <!--    const method2 = document.querySelector('.method2')-->
    <!--    const method3 = document.querySelector('.method3')-->
    <!--    var coin = document.getElementById("coinid")-->
    <!--    const backWard = document.getElementById('goingback')-->
    <!--    const Q = document.querySelector('.Qr-code')-->
    <!--    displayOne.style.display = 'block'-->
    <!--    fameOne.addEventListener('click', showUp)-->
    <!--    fameTwo.addEventListener('click', showUp1)-->
    <!--    fameThree.addEventListener('click', showUp2)-->
    <!--    const btcD = document.querySelector('.btc-display2')-->
    <!--    backWard.addEventListener('click', ()=>{-->
    <!--        Q.style.display = 'none'-->
    <!--    })-->
    
       
  
    <!--</script>-->


    <!--<script>-->
    <!--    function updateSpend() {-->
    <!--        var tester = Math.random();-->
    <!--        $.ajax({-->
    <!--            url: "Main/updateSpendRest",-->
    <!--            type: "POST",-->
    <!--            success: function(data) {-->
                    <!--//alert(data);-->
    <!--            },-->
    <!--            complete: function(data) {-->
    <!--                setTimeout(updateSpend, 15000);-->
    <!--            }-->
    <!--        });-->
    <!--    }-->

    <!--    $(document).ready(function() {-->
    <!--        setTimeout(updateSpend, 15000);-->
    <!--    });-->
    <!--</script>-->



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Handle the change event of the dropdown
        $('#methodSelector').on('change', function() {
            updateAddress();
        });

        // Function to update the displayed address based on the selected option
        function updateAddress() {
            var selectedMethod = $('#methodSelector').val();
            
            // Hide all addresses
            $('.address').hide();
            
            if(selectedMethod === "btc_address") {
                $('#' + 'btc' + 'Address').show();
            }else {
            // Show the address based on the selected option
            $('#' + selectedMethod + 'Address').show();
        }

            
        }
    });
</script>



<!-- {{asset('dashb/cordash/assets/css/demo_3/style.css')}} -->
    <script src="{{asset('dashb/cordash/assets/dashboard/js/bundle.js?ver=2.5.0')}}"></script>
    <script src="{{asset('dashb/cordash/assets/dashboard/js/scripts.js?ver=2.5.0')}}"></script>
    <script src="https://www.cryptohopper.com/widgets/js/script"></script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

</body>

</html>