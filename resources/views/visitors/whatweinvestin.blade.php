@extends('layouts.customlayout')
<style>
    .piecharm {
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin: 25px auto;
        flex-wrap: wrap;


    }

    .pietext {
        font-weight: 600;
        text-align: center;
        font-size: 30px;
        margin-top: 40px;
        color: #14ae85;
        text-transform: capitalize;
    }

    .x-box {
        width: 60vh;
        height: 60vh;
        background-color: green;
        border-radius: 50%;
        transform: rotate(220deg);
        -webkit-background: conic-gradient(from 0,
                #006344 0,
                #006344 8%,
                #8f827e 0,
                #8f827e 23%,
                #8bbcb9 0,
                #8bbcb9 39%,
                #c7be76 0,
                #c7be76 59%,
                #7c9481 0,
                #7c9481 100%);

        background: conic-gradient(from 0,
                #006344  0,
                #006344  8%,
                #8bbcb9 0,
                #8bbcb9 23%,
                #8f827e  0,
                #8f827e 39%,
                #c7be76 0,
                #c7be76 59%,
                #7c9481 0,
                #7c9481 100%);
    }

    .x-box-cont strong {
        display: block;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 30px;
    }

    .piecharm-text {
        color: #14ae85;
        text-align: center;
        text-transform: capitalize;
    }

    .piecharm-text h2 {
        color: #14ae85;
        text-align: center;
        text-transform: capitalize;
    }

    .piecharm-text {
        color: #14ae85;
        text-align: left;
        text-transform: capitalize;
        margin: 30px;
        font-size: 20px;
    }

    @media (max-width:480px) {
        .x-box {
            width: 40vh;
            height: 40vh;
        }

        .x-box-cont strong {
            display: block;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 20px;
        }

        .pietext {
            font-weight: 600;
            text-align: center;
            font-size: 20px;
            margin-top: 40px;
            color: #14ae85;
            text-transform: capitalize;
        }
    }
</style>

@section('body')
    <div class="main-content">

     <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li>What we invest in</li>
        </ol>
        <h2>What we invest in</h2>

      </div>
    </section><!-- End Breadcrumbs -->


        <!--header section start-->
        
<!--        <div class="pietext">-->
<!--Portfolio and investment analysis        </div>-->
        <section class="piecharm">
            
        </section>
        {{-- <div class="piecharm-text">
            <h2>estimated returns per month</h2>
            <p>wealth- builder accounts: 11% - 15% of invested capitals </p>
            <p>premium accounts: 16% - 20% of invested capitals </p>
            <p>elite plan accounts: 21% - 25% of invested capitals </p>
        </div> --}}

        <!--about us page content start-->
        <section class="section-padding about-us-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            Aspen Financial Management empowers you to realize your financial aspirations and attain the lifestyle you've always desired. Through strategic investments in Real Estate, Forex, Cryptocurrency, Stocks, Commodities, Rare metals, and Cannabis, we assure our clients significant monthly returns over a two-year period. Committed to a purpose-driven approach, our cohesive team shares common values that underpin our dedication to excellence. We continuously engage in research and development to navigate the dynamic landscape of global financial markets.</p>
                        <p>
                           Our seasoned group of experts covers all facets of investment, allowing us to meticulously identify opportunities with the potential for maximum long-term profitability. Recognizing the uniqueness of each investor, our team of licensed fiduciary advisors, in collaboration with dynamic tools, pinpoints and communicates opportunities for timely action. </p>

                    </div>
                    
                    <div class="col-md-4">
                        <div class="member-img">
            <video controls="" id="vidmate" autoplay muted loop style="max-width: 100%; height: auto;">
                <source src="https://aspenfinancialmanagement.com/assets/images/ASPEN FINANCIAL MANAGEMENT.mp4" type="video/mp4">
            </video>
        </div>
                    </div>
                    
                    
                        <p>
                            Upon successful registration, verification, and deposit into a client's account, we meticulously allocate funds, analyze markets, and determine the most attractive asset categories. Our selection of assets, including cryptocurrencies, foreign currencies, stocks, commodities, rare metals, REITs, and cannabis, evolves over time in alignment with our market analysis and vision. This dynamic approach shields against market fluctuations and volatility.
</p>

<p>
    Our portfolio management service is geared towards maximizing profits while minimizing risks, which involves a delicate balance. Through rigorous analysis of asset allocation, diversification, and regular rebalancing, we strive to achieve the desired returns without exposing investors to undue risk. This proactive strategy ensures our clients' financial well-being in the ever-changing landscape of investment opportunities.
</p>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-profile text-center"style="margin:10px;">
                            <div class="card-header card-avatar">
                                <a href="{{ route('crypto') }}">
                                    <img class="img" style="border: 2px solid white;width:100%;"
                                        src="assets/images/CRYPT.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <br>
                                <a href="{{ route('crypto') }}" class="btn btn-dark">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile text-center"style="margin:10px;">
                            <div class="card-header card-avatar">
                                <a href="forex">
                                    <img class="img" style="border: 2px solid white;width:100%; "
                                        src="assets/images/FOREX.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <br>
                                <a href="forex" class="btn btn-dark">Read more</a>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="stocks">
                                    <img class="img" style="border: 2px solid white;width:100%;"
                                        src="assets/images/STOCKS.jpg">
                                </a>
                            </div>
                            <div class="card-body ">
                                <br>
                                <a href="stocks" class="btn btn-dark">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="row">

                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="cannabis">
                                    <img class="img" style="border: 2px solid white;width:100%;"
                                        src="assets/images/CANNABIS.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <br>
                                <a href="cannabis" class="btn btn-dark">Read more</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile text-center"style="margin:10px;">
                            <div class="card-header card-avatar">
                                <a href="realestate">
                                    <img class="img" style="border: 2px solid white;width:100%;"
                                        src="assets/images/REALESTATE.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <br>
                                <a href="realestate" class="btn btn-dark">Read more</a>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card card-profile text-center"style="margin:10px;">
                            <div class="card-header card-avatar">
                                <a href="specialtrades">
                                    <img class="img" style="border: 2px solid white;width:80%; "
                                        src="assets/images/comm.png">
                                </a>
                            </div>
                            <div class="card-body">
                                <br>
                                <a href="specialtrades" class="btn btn-dark">Read more</a>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
    </div>

    <!-- Online Section End -->

    <div class="clearfix"></div>
@endsection
