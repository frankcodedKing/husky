@extends('layouts.spacedcustomlayout')
<!-- new one -->
<link rel="stylesheet" href="{{ asset('assets/css/newhomecss/min.css') }}">
<style>
    #row2 {
        height: 300px !important;
        overflow: visible;
    }

    @media (max-width:480) {
        #row2 {
            height: 700px !important;
        }

    }
</style>
@section('body')
    <div class="swiper mySwiper" >
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <img src="./assets/images/welcome2.jpeg" alt="">
                <div class="over1"></div>
                <div class="swip-text" data-aos="zoom-out-up" data-aos-offset="200" data-aos-delay="50">
                    <h1>WELCOME TO ASPEN FINANCIAL MANAGEMENT</h1>
                    <button> <a href="{{ route('joinus') }}"> JOIN US</a></button>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./assets/images/team2.jpeg" alt="">
                <div class="over1"></div>
                <div class="swip-text" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50">
                    <h3>OUR TEAM</h3>
                    <h3>A financial team that cares</h3>
                    <p>Every member of our team focuses on making our clients and their families feel comfortable when
                        discussing
                        financial decisions that can potentially be stressful and could have a great impact on their lives.
                    </p>
                </div>
                {{-- <a href="{{ asset('assets/aspenpdf.pdf') }}">Download brochure</a> --}}

                <button><a style="color: white;" href="{{ route('ourteam') }}"> Meet our financial team</a></button>
            </div>
            <div class="swiper-slide">

                <img src="{{asset('assets/images/me and wife.jpg')}}" alt="">
                <div class="over1"></div>
                <div class="swip-text" data-aos="flip-up" data-aos-offset="200" data-aos-delay="50">
                    <h1>STRATEGY & PLANNING <br>
                        A customized path for your life</h1>
                    <button> <a href="{{ route('joinus') }}"> GET STARTED</a></button>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    {{-- <div class="header-section">
        <div class="first-child">
            <div class="overlay"></div>
            <div class="text">
                <span class="title"> <span style="color: aqua;">Welcome to Aspen Financial Management</span>
                    At Aspen Financial Management, we provide well-practiced and deft investing strategies with a
                    straightforward market approach to help our clients navigate through the market volatility and making
                    their welfare our prime concern. We have created a user-friendly and state-of-the-art interactive tools
                    that help you plan and implement a better financial strategy that best reaches your goals. From managing
                    casual day-to-day activities to more life-changing choices. Some people search for financial experts
                    looking for tinctures to ease their uncertainty. Aspen Financial Management is just the right place for
                    you, where the path to investing is not just promising, it’s better.</span>

            </div>
        </div>
        <div class="second-child">
            <div class="parent-child">
                <div class="empty"></div>
                <div class="text">
                    <span class="title">STRATEGY & PLANNING</span>
                    <h1>A customized path for your life</h1>
                </div>
            </div>
            <div class="parent-child2">
                <div class="text">

                    <span class="title">getting started</span>
                    <h1>Start to define your vision
                    </h1>
                    <button> <a href="{{ route('joinus') }}"> GET STARTED</a></button>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="service">
        <div class="over"></div>
        <h4>WHAT WE OFFER</h4>
        {{-- <div class="service-text">
        You are unique and you deserve a unique, fee-only solution.
    </div> --}}
        <div class="service-2">
            <p>
                We would be honored to learn more about your financial situation and discover the best way to tackle your
                financial crisis or meet your investment goals. With roots as an institutional fund, Aspen Financial
                Management provides the same institutional caliber expertise to individuals. This means every investor gets
                a disciplined investment strategy along with our unique, high-touch client service.
                We help individuals and families assess their unique personal situations, plan for the long term and invest
                to meet their goals. From financial planning to retirement plans through a tailored approach, we always put
                our client's needs first. <br> Our steady counsel helps clients stay on track, even when markets are choppy
                or life is unpredictable. We provide a tailored approach to investment management and financial planning
                that always puts clients first.
                This starts with a comprehensive assessment of every client's financial situation. We devote enough time to
                understand our client's personal financial condition, long-term goals, and investment objectives before
                making any recommendations. We utilize that information to craft a portfolio specifically for them. Over
                time, client's portfolio may change based on personal circumstances or our forward-looking views of the
                market. We offer a comprehensive set of financial planning, retirement planning, and portfolio management
                services.</p>
            <button><a style="color: white;" href="{{ asset('assets/aspenpdf.pdf') }}" download="aspendpdf">DOWNLOAD
                    BROCHURE</a></button>
        </div>
        <div class="service-card">
            <div class="card">
                <h4>Portfolio Management</h4>
                <p>We don’t sell cookie-cutter portfolios. We take the time to understand your individual goals and needs
                    and build a tailored portfolio to help you meet your objectives. And we regularly check in on anything
                    that may have changed.</p>
                <a href="{{ route('portfoliomanagement') }}">Find out more</a>
            </div>
            <div class="card an">
                <h4>Retirement Planning </h4>
                <p>We take a comprehensive approach to retirement planning that will prioritize your goals and develop an
                    all-inclusive strategy to achieve those goals.</p><a href="{{ route('retirement') }}">Find out
                    more</a>
            </div>

            <div class="card">
                <h4>Financial Planning </h4>
                <p>Women who are single, widowed, or divorced face the challenge of identifying the needs that must be
                    addressed today, while setting and working towards goals for tomorrow.</p><a
                    href="{{ route('finacialplaning') }}">Find out more</a>
            </div>

            <div class="card an">
                <h4>Tailored Investment Approach</h4>
                <p>We would help you meet your longer-term goals with a tailored investment strategy that’s specifically
                    designed for you because we believe an informed investor is a better investor and a happier client.</p>
                <a href="{{ route('tailoredinvestment') }}">Find out more</a>
            </div>

        </div>
    </div>
    <div class="nothing"></div>
    

    <div class="expertise">
        <div class="fake"></div>
        <div class="text">
            <img src="./assets/images/trading.png" alt="trading">
        </div>
        <video controls id="vidmate">
            <source src="./assets/images/aspen-vid.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
{{-- 
the slant div --}}
<section class="slant-div">
    <div class="slant1">
        <figure class="counter-sec">
            <h2>ASPEN FINANCIAL MANAGEMENT BY THE <br> NUMBERS </h2>
            <button> <a href="{{ route('joinus') }}"> GET STARTED</a></button>

        </figure>
    </div>
    <div class="slant2">
        <div class="glassy glassy1" data-aos="zoom-out-up">
            <div class="first-count">
                <p>more than</p>
                <p id="counter3">12</p>
                <p>Investors Globally</p>
            </div>
        </div>
        <div class="glassy glassy2" data-aos="zoom-out-up">
            <div class="first-count">
                <p>over</p>
                <p id="counter2">12</p>
                <p>Direct <br> Employees</p>
            </div>
        </div>
        <div class="glassy glassy3" data-aos="zoom-out-up">
            <div class="first-count">
                <p>over</p>
                
                    <p class="fa fa-dollar" id="counter" style="font-size: 30px">12</p> 
                <p>Billion</p>
                <p>AUM</p>
            </div>
        </div>
    </div>
</section>
    
    </div>
    {{-- <div class="our-team-section">
        <div class="team-one">
            <h4>OUR TEAM</h4>
            <h3>A financial team that cares</h3>
            <p>Every member of our team focuses on making our clients and their families feel comfortable when discussing
                financial decisions that can potentially be stressful and could have a great impact on their lives.
            </p> --}}
    {{-- <a href="{{ asset('assets/aspenpdf.pdf') }}">Download brochure</a> --}}

    {{-- <button><a style="color: white;" href="{{ route('ourteam') }}"> Meet our financial team</a></button>
        </div>
        <div class="team-two">
            <object width="100%" height="300px" style="overflow: hidden"
                data="{{ asset('assets/aspenpdf.pdf') }}"></object>
        </div>
    </div> --}}

    <div class="process-section">
        <div class="process-content">
            <div class="process-image">
                <img src="./assets/images/eyes-2.svg" alt="">
            </div>
            <h3>Open and Honest Discussions</h3>
            <p>We take the time to understand your personal and financial circumstances as well as identify any goals you
                may have.</p>

        </div>
        <div class="process-content">
            <div class="process-image">
                <img src="./assets/images/our-process-icon2-1.svg" alt="">
            </div>
            <h3>Creating a Financial Picture</h3>
            <p>Once we have gathered your information, we will integrate your financial pieces into a comprehensive plan
                that maximizes your potential for meeting your life goals.</p>

        </div>
        <div class="process-content">
            <div class="process-image">
                <img src="./assets/images/our-process-icon3-1.svg" alt="">
            </div>
            <h3>Having a Plan in Place</h3>
            <p>We present the plan to you and go over each of our recommendations. Your feedback is encouraged, and we can
                make any changes to the plan, if needed.</p>
        </div>
        <div class="process-content">
            <div class="process-image">
                <img src="./assets/images/our-process-icon4-1.svg" alt="">
            </div>
            <h3>Making your Goals a Reality</h3>
            <p>After making sure each piece of the plan is in place, we continue to monitor your progress. We will keep in
                touch with you on any significant life changes that may impact your financial plan.</p>
        </div>
    </div>


    <div class="people-state">
        <div class="people-state-kid mini">
            <div class="ani"></div>
            <h3>Our fee-only, non-commission approach means we have your best interests at heart.</h3>
        </div>
        <div class="people-state-kid">
            <h3>Certified Financial Planners</h3>
            <p>{{ $compd ? $compd->companyname : 'company name' }} employs only CERTIFIED FINANCIAL PLANNER™
                certificants,
                which means we have the experience and knowledge to effectively plan your financial future.</p>

            <img src="./assets/images/FPA-logo.svg" alt="">
            <img src="./assets/images/napfa-logo.svg" alt="">

        </div>
    </div>
    <!--main menu section end-->


    <!--trustedby95000sectionend-->

    <!--start investment plan-->
    <!--    <section class="section-background">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-md-12">-->
    <!--                    <div class="section-title text-center section-padding padding-bottom-0 wow slideInLeft" data-wow-duration="2s">-->
    <!--                        <div class="section-header">-->
    <!--                            <h2>Our awesome <span> plans</span></h2>-->
    <!--                            <p><img src="https://aspen-fm.com/assets/images/logo/icon.png" alt="icon"></p>-->
    <!--                        </div>-->
    <!--                        <p></p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="row">-->
    <!--                -->
    <!--                    <div class="col-md-3 col-sm-6 pricing-list-botom-margin wow zoomIn" data-wow-duration="3s">-->
    <!-- Pricing  List1 Start -->
    <!--                        <div class="pricing-list1">-->
    <!--                            <div class="pricing-header1">-->
    <!--                                <h5>Wealth-Builder</h5>-->
    <!--                                <p>Monthly 13% for 24 times</p>-->
    <!--                            </div>-->
    <!--                            <div class="pricing-info1">-->
    <!--                                <ul>-->
    <!--                                    <li> <p>for <span class="color-text">24</span> times</p></li>-->
    <!--                                    <li><p> <span class="color-text">13%</span> roi each time</p></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                            <div class="price-range">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-md-6 text-left col-sm-6 col-xs-6">-->
    <!--                                                    <div class="min-price">-->
    <!--                                                        <h6>Minimum<span class="color-text">$ 1000</span></h6>-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                                <div class="col-md-6 text-right col-sm-6 col-xs-6">-->
    <!--                                                    <div class="min-price">-->
    <!--                                                        <h6>Maximum<span class="color-text">$ 99999</span></h6>-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                            </div>-->
    <!--                            <div class="invest-type__profit plan__value--1">-->
    <!--                                <input type="text" value="$ 50499.5" class="custom-input invest-type__profit--val" data-slider=".slider-input--1" style="color:#FFF; font-size: 25px">-->
    <!--                                <input type="hidden" name="amount" value="50499.5" class=" slider-input slider-input--1" data-perday="13" data-peryear="24" data-min="1000" data-max="99999" data-dailyprofit=".daily-profit-1" data-totalprofit=".total-profit-1 " data-valuetag=".plan__value--1 .invest-type__profit--val"/>-->
    <!--                            </div>-->
    <!--                            <input type="hidden" name="plan_id" value="1">-->
    <!--                            <div class="price-range">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-md-6 text-left col-sm-6 col-xs-6 invest-type__calc invest-type__calc--daily">-->
    <!--                                        <div class="min-price">-->
    <!--                                            <h6>per time<span class="color-text"><b class="daily-profit-1">$ 6564.935.0</b></span></h6>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-md-6 text-right col-sm-6 col-xs-6 invest-type__calc invest-type__calc--total">-->
    <!--                                        <div class="min-price">-->
    <!--                                            <h6>Total Return<span class="color-text"><b class="total-profit-1">$ 157558.44.0</b></span></h6>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->

    <!--<a href="pricing-list.html">Order Now!</a>-->
    <!--                        </div>-->
    <!-- Pricing List1 End -->
    <!--                    </div>-->
    <!--            -->
    <!--                    <div class="col-md-3 col-sm-6 pricing-list-botom-margin wow zoomIn" data-wow-duration="3s">-->
    <!-- Pricing  List1 Start -->
    <!--                        <div class="pricing-list1">-->
    <!--                            <div class="pricing-header1">-->
    <!--                                <h5>PREMIUM</h5>-->
    <!--                                <p>Monthly 18% for 24 times</p>-->
    <!--                            </div>-->
    <!--                            <div class="pricing-info1">-->
    <!--                                <ul>-->
    <!--                                    <li> <p>for <span class="color-text">24</span> times</p></li>-->
    <!--                                    <li><p> <span class="color-text">18%</span> roi each time</p></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                            <div class="price-range">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-md-6 text-left col-sm-6 col-xs-6">-->
    <!--                                                    <div class="min-price">-->
    <!--                                                        <h6>Minimum<span class="color-text">$ 100000</span></h6>-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                                <div class="col-md-6 text-right col-sm-6 col-xs-6">-->
    <!--                                                    <div class="min-price">-->
    <!--                                                        <h6>Maximum<span class="color-text">$ 123456780987654321</span></h6>-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                            </div>-->
    <!--                            <div class="invest-type__profit plan__value--2">-->
    <!--                                <input type="text" value="$ 6.1728390493877E+16" class="custom-input invest-type__profit--val" data-slider=".slider-input--2" style="color:#FFF; font-size: 25px">-->
    <!--                                <input type="hidden" name="amount" value="6.1728390493877E+16" class=" slider-input slider-input--2" data-perday="18" data-peryear="24" data-min="100000" data-max="123456780987654321" data-dailyprofit=".daily-profit-2" data-totalprofit=".total-profit-2 " data-valuetag=".plan__value--2 .invest-type__profit--val"/>-->
    <!--                            </div>-->
    <!--                            <input type="hidden" name="plan_id" value="2">-->
    <!--                            <div class="price-range">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-md-6 text-left col-sm-6 col-xs-6 invest-type__calc invest-type__calc--daily">-->
    <!--                                        <div class="min-price">-->
    <!--                                            <h6>per time<span class="color-text"><b class="daily-profit-2">$ 1.1111110288898E+16.0</b></span></h6>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-md-6 text-right col-sm-6 col-xs-6 invest-type__calc invest-type__calc--total">-->
    <!--                                        <div class="min-price">-->
    <!--                                            <h6>Total Return<span class="color-text"><b class="total-profit-2">$ 2.6666664693355E+17.0</b></span></h6>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->

    <!--<a href="pricing-list.html">Order Now!</a>-->
    <!--                        </div>-->
    <!-- Pricing List1 End -->
    <!--                    </div>-->
    <!--            -->
    <!--            </div>-->
    <!--        <div class="row section-padding padding-bottom-0">-->
    <!--            <div class="col-md-6 col-sm-6">-->
    <!--                <div class="contact-middel-info wow bounceInLeft" data-wow-duration="2s">-->
    <!--                    <div class="contact-middel-title">-->
    <!--                        <h4>Have a question <span>we are here to help!</span></h4>-->
    <!--                    </div>-->
    <!--                    <div class="contact-middel-details">-->
    <!--                        <p><i class="fa fa-phone"></i> +1 (305) 918‑1211</p>-->
    <!--                        <p><i class="fa fa-envelope"></i> info@aspen-fm.com</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-6 col-sm-6">-->
    <!--                <div class="discunt-middel-text wow bounceInRight" data-wow-duration="2s">-->
    <!--                    <h3>5<i class="fa fa-percent"></i> <br /> referral <br /> commission</h3>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        </div>-->
    <!--</section>-->
    <!--end start investment plan-->
    <!--Our Top Investor Section Start-->
    <!--<div class="clearfix"></div>-->

    <!--Our Top Investor Section Start-->

    <!--<div class="clearfix"></div>-->
    <!--staticies sectioin-->
    <!--<section class="sale-section section-padding">-->
    <!--      <div class="container">-->
    <!--        <div class="row">-->
    <!--          <div class="col-md-3">-->
    <!-- Counter List -->
    <!--            <div class="counter-list wow shake" data-wow-duration="2s">-->
    <!-- Counter Item -->
    <!--              <div class="counter-item">-->
    <!--                <div class="counter-thumb"><i class="fa fa-user"></i><p class="counter">48</p></div>-->
    <!--                  <div class="counter-content">-->
    <!--                      <p>Total User</p>-->
    <!--                  </div>-->
    <!--              </div>-->
    <!-- Counter Item -->
    <!--            </div>-->
    <!-- Counter List -->
    <!--          </div>-->
    <!--          <div class="col-md-3">-->
    <!-- Counter List -->
    <!--            <div class="counter-list wow shake" data-wow-duration="2s" data-wow-delay="2s">-->
    <!-- Counter Item -->
    <!--              <div class="counter-item">-->
    <!--                <div class="counter-thumb"> <i class="fa fa-recycle"></i><p class="counter">0</p></div>-->
    <!--                  <div class="counter-content">-->
    <!--                   <p>Total Repeat</p>-->
    <!--                  </div>-->
    <!--              </div>-->
    <!-- Counter Item -->
    <!--            </div>-->
    <!-- Counter List -->
    <!--          </div>-->
    <!--          <div class="col-md-3">-->
    <!-- Counter List -->
    <!--            <div class="counter-list wow shake" data-wow-duration="2s" data-wow-delay="4s">-->
    <!-- Counter Item -->
    <!--              <div class="counter-item">-->
    <!--                <div class="counter-thumb"> <i class="fa fa-cloud-download"></i><p class="counter">1294801</p></div>-->
    <!--                  <div class="counter-content">-->
    <!--                     <p>Total Deposit</p>-->
    <!--                  </div>-->
    <!--              </div>-->
    <!-- Counter Item -->
    <!--            </div>-->
    <!-- Counter List -->
    <!--          </div>-->
    <!--          <div class="col-md-3">-->
    <!-- Counter List -->
    <!--            <div class="counter-list wow shake" data-wow-duration="2s" data-wow-delay="6s">-->
    <!-- Counter Item -->
    <!--              <div class="counter-item">-->
    <!--                <div class="counter-thumb"><i class="fa fa-cloud-upload"></i><p class="counter">1000</p></div>-->
    <!--                  <div class="counter-content">-->
    <!--                    <p>Total Withdraw</p>-->
    <!--                  </div>-->
    <!--              </div>-->
    <!-- Counter Item -->
    <!--            </div>-->
    <!-- Counter List -->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!-- </section>-->
    <!--staticies sectioin end-->
    <div class="clearfix"></div>

    <!-- Circle Section Start -->
    <!--<section  class="circle-section section-padding wow slideInUp" data-wow-duration="2s">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12">-->
    <!--                <div class="section-header">-->
    <!--                    <h2>HOW <span> {{ $compd ? $compd->companyname : 'company name' }} </span> Works </h2>-->
    <!--                    <p><img src="https://aspen-fm.com/assets/images/logo/icon.png" alt="icon"></p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="row">-->
    <!--            -->
    <!--                <div class="col-md-3">-->
    <!--                    <div class="circle-item wow flipInY" data-wow-duration="2s">-->
    <!--                        <img src="https://aspen-fm.com/assets/images/features/61054f0d33f03.png" alt="items">-->
    <!--                        <div class="circle-content">-->
    <!--                            <h6>Sign up</h6>-->
    <!--                            <p>Join our team of expert financial advisors and plan your finance.</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            -->
    <!--                <div class="col-md-3">-->
    <!--                    <div class="circle-item wow flipInY" data-wow-duration="2s">-->
    <!--                        <img src="https://aspen-fm.com/assets/images/features/61054fd409cda.png" alt="items">-->
    <!--                        <div class="circle-content">-->
    <!--                            <h6>Invest</h6>-->
    <!--                            <p>Invest on a plan that suites your financial needs.</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            -->
    <!--                <div class="col-md-3">-->
    <!--                    <div class="circle-item wow flipInY" data-wow-duration="2s">-->
    <!--                        <img src="https://aspen-fm.com/assets/images/features/61054fef9a47a.png" alt="items">-->
    <!--                        <div class="circle-content">-->
    <!--                            <h6>Get Profits</h6>-->
    <!--                            <p>Get your Profit as stated in the plan, your account will credited automatically</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            -->
    <!--                <div class="col-md-3">-->
    <!--                    <div class="circle-item wow flipInY" data-wow-duration="2s">-->
    <!--                        <img src="https://aspen-fm.com/assets/images/features/6105506942c79.png" alt="items">-->
    <!--                        <div class="circle-content">-->
    <!--                            <h6>Compound</h6>-->
    <!--                            <p>You can Compound or Withdraw anytime.</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            -->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- Circle Section End -->
    <!--testimonial section start-->

    <section class="people-say-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section header start -->
                    <div class="section-header wow bounceInLeft" data-wow-duration="2s">
                        <h2>What People <span>Say</span> </h2>
                        <p><img src="{{asset('assets/images/logo/icon.png')}}" alt="icon"></p>
                    </div>
                    <!-- section header end -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="testimonial-area">
                        <div class="row">
                            <div class="col-lg-12  col-md-10 ">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
                                        <div class="testimonial-image-slider slider-nav text-center">

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tes1.jpeg" alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tes2.jpeg" alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tex3.jpeg" alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tes4.jpeg" alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tes5.jpeg" style="object-fit: cover;"
                                                    alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/tes6.jpeg" alt="slider">
                                            </div>

                                            <div class="sin-testiImage wow rotateIn" data-wow-duration="2s">
                                                <img src="assets/images/1627748086.jpg" alt="slider">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row" id="row2">
                            <div class="col-md-12 ">
                                <div class="testimonial-text-slider slider-for text-center wow bounceInRight"
                                    data-wow-duration="2s">

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>C. Lovett</h4>

                                            <h6>WASHINGTON-DC</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                                I have been an investor with
                                                {{ $compd ? $compd->companyname : 'company name' }} for about a year and
                                                nine
                                                months now. While it's too early to say how my investment will turn out in
                                                the long run, I will attest that I am impressed by the company's level of
                                                due diligence and its
                                                professionalism and open communication. All questions I've ever had, I've
                                                gotten answers to. I'm comforted by the fact
                                                {{ $compd ? $compd->companyname : 'company name' }} seems to put
                                                investors'
                                                interests first.
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>Gary Adamson</h4>

                                            <h6>Toronto,Canada</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                            <div>"Since investing with
                                                {{ $compd ? $compd->companyname : 'company name' }} we
                                                have worked together to get a clear understandable plan for our future which
                                                gives me confidence and security knowing what kind of lifestyle I can lead.
                                                In addition, we have seen gains in our portfolio in a short space of time
                                                which is a reassuring indicator. Our meetings are consultative and personal
                                                with all decisions made after full discussion and
                                                clear explanation.”</div>
                                            <div><br></div>
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>James Anderson</h4>

                                            <h6>Florida</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                            <div>i have been with {{ $compd ? $compd->companyname : 'company name' }} for
                                                six years now and all i can say is that Aspen has a great client
                                                relationship and service which allows us to connect, confide and also
                                                collaborate in planning
                                                and managing our finances through our Joint investment account. It has been
                                                a great pleasure to work with
                                                {{ $compd ? $compd->companyname : 'company name' }} and i would gladly
                                                recommend them.</div>
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>Nettie B.Sarah</h4>

                                            <h6>Sweden</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                                I have invested with {{ $compd ? $compd->companyname : 'company name' }}
                                                since 2009. They have proven to be knowledgeable and professional in all my
                                                dealings with them. The firm's disciplined approach, a keen eye for value,
                                                attention to detail, and superior execution place them
                                                at the top of my list. I have full confidence in their honesty and
                                                integrity, and I look forward to partnering with them again.
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>Charles S. Macaluso</h4>

                                            <h6>California</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                                “Like many people, I spend the majority of my time planning for my business
                                                but pay little or no attention to my finances.
                                                {{ $compd ? $compd->companyname : 'company name' }} has developed a
                                                personal
                                                plan for me that allows me to take much greater control of my financial
                                                affairs,
                                                and plan for the future. Everything now makes much more sense, and I only
                                                wish I had got in touch with
                                                {{ $compd ? $compd->companyname : 'company name' }} sooner!”<br>
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>Chirag Beharry</h4>

                                            <h6>India</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                                “Working with {{ $compd ? $compd->companyname : 'company name' }} has
                                                been
                                                like working with an extension of our family business. Their strong business
                                                ethics and integrity is top-notch and has made our working relationship very
                                                pleasurable and efficient.”<br>
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                    <div class="sin-testiText">
                                        <!-- people sat content list start -->
                                        <div class="people-say-content-list  ">
                                            <h4>Mary and William S.</h4>

                                            <h6>Brisbane,Australia</h6>
                                            <ul>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <p>
                                                {{ $compd ? $compd->companyname : 'company name' }} guided me through the
                                                process of making a sound financial decision for our family. Most
                                                importantly, they took the time to make sure we understood every aspect of
                                                the transaction until we felt 100% comfortable.
                                            </p>
                                        </div>
                                        <!-- people-say-content-list end -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- row -->
    </section>
    <!--  section -->
    <!--testimonial section start-->



    <!--Deopsit and Payouts section start-->
    <!--<section class="hosting-section hosting-section1  section-padding section-background">-->
    <!--      <div class="container">-->
    <!--                  <div class="row">-->
    <!--        <div class="col-md-12">-->
    <!-- section header start -->
    <!--          <div class="section-header wow bounceInDown" data-wow-duration="3s">-->
    <!--            <h2>Latest <span> Deposits & Withdraw</span></h2>-->
    <!--             <p><img src="https://aspen-fm.com/assets/images/logo/icon.png" alt="icon"></p>-->
    <!--          </div>-->
    <!-- section header end -->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="row">-->
    <!--        <div class="col-md-6">-->
    <!--              <div class="section-wrapper wow bounceInLeft" data-wow-duration="2s">-->
    <!--                 <div class="deposit-title text-center">-->
    <!--                        <h4>Latest Deposits</h4>-->
    <!--                    </div>-->
    <!--                <div class="hosting-content table-responsive">-->
    <!--                  <table>-->
    <!--                    <thead>-->
    <!--                      <tr>-->
    <!--                        <th>Name</th>-->
    <!--                        <th>Date</th>-->
    <!--                        <th>Currency</th>-->
    <!--                         <th>Amount</th>-->
    <!--                      </tr>-->

    <!--                    </thead>-->
    <!--                    <tbody>-->
    <!--                        -->
    <!--                            <tr>-->
    <!--                                <td>Noah lucas</td>-->
    <!--                                <td>Nov 03,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$2000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                            <tr>-->
    <!--                                <td>Rachnanohra</td>-->
    <!--                                <td>Oct 29,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$30000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                            <tr>-->
    <!--                                <td>Michelle Klaudi Clinton</td>-->
    <!--                                <td>Oct 29,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$400000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                            <tr>-->
    <!--                                <td>Michelle Klaudi Clinton</td>-->
    <!--                                <td>Oct 29,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$200000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                            <tr>-->
    <!--                                <td>Michelle Klaudi Clinton</td>-->
    <!--                                <td>Oct 29,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$400000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                            <tr>-->
    <!--                                <td>Lucy Wesley</td>-->
    <!--                                <td>Oct 28,2021</td>-->
    <!--                                <td><strong>USD</strong></td>-->
    <!--                                <td><strong>$30000</strong></td>-->
    <!--                            </tr>-->
    <!--                            -->
    <!--                    </tbody>-->
    <!--                  </table>-->
    <!--                </div>-->
    <!-- hosting content end -->
    <!--              </div>-->
    <!--            </div>-->
    <!--                    <div class="col-md-6">-->
    <!--              <div class="section-wrapper wow bounceInRight" data-wow-duration="2s">-->
    <!--                  <div class="deposit-title text-center">-->
    <!--                        <h4>Latest Withdraw</h4>-->
    <!--                    </div>-->
    <!--                <div class="hosting-content table-responsive">-->
    <!--                  <table>-->
    <!--                    <thead>-->
    <!--                      <tr>-->
    <!--                         <th>Name</th>-->
    <!--                         <th>Date</th>-->
    <!--                         <th>Currency</th>-->
    <!--                         <th>Amount</th>-->
    <!--                      </tr>-->

    <!--                    </thead>-->
    <!--                    <tbody>-->
    <!--                      -->
    <!--                        <tr>-->
    <!--                            <td>Michael A. Lehr</td>-->
    <!--                            <td>Oct 12,2021</td>-->
    <!--                            <td><strong>USD</strong></td>-->
    <!--                            <td><strong>$500</strong></td>-->
    <!--                        </tr>-->
    <!--                      -->
    <!--                        <tr>-->
    <!--                            <td>franklin</td>-->
    <!--                            <td>Oct 12,2021</td>-->
    <!--                            <td><strong>USD</strong></td>-->
    <!--                            <td><strong>$500</strong></td>-->
    <!--                        </tr>-->
    <!--                      -->
    <!--                    </tbody>-->
    <!--                  </table>-->
    <!--                </div>-->
    <!-- hosting content end -->
    <!--              </div>-->
    <!--            </div>-->
    <!--        </div><!-- row -->
    <!--      </div><!-- container -->
    <!--    </section>-->
    <!--Deopsit and Payouts Section End-->
    </div>

    <!-- Online Section End -->

    {{-- <div class="clearfix"></div> --}}
@endsection
