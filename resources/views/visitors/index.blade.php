@extends('layouts.customlayout')
<!-- new one -->
<!-- <link rel="stylesheet" href="{{ asset('assets/css/newhomecss/min.css') }}"> -->

@section('body')
 <!-- ======= Hero Section ======= -->
 
 <section class="hero-wrap style2">
            <div class="container">
                <div class="hero-shape" data-speed="0.06" data-revert="true">
                    <img src="{{ asset('bsassets/temp/custom/assets/img/hero/hero-shape-4.png') }}" alt="Image" class="hero-shape-one">
                    <img src="{{ asset('bsassets/temp/custom/assets/img/hero/hero-shape-5.png') }}" alt="Image" class="hero-shape-two">
                    <img src="{{ asset('bsassets/temp/custom/assets/img/hero/hero-shape-6.png') }}" alt="Image" class="hero-shape-three">
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                    <div class="hero-content bounce">
    <span data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">SIMPLE, QUICK, SECURED</span>
    <h1 id="dynamicText" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
  Invest in <span id="changingWord">Options</span> All In one place.
</h1>

    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Access a broad range of investment products to achieve your personalized goals, all in one place.</p>
    <div class="hero-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
    <a href="login" class="btn style1">Get Started<i class="ri-arrow-right-s-line"></i></a>
    <a class="play-video" data-fancybox="" href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
    <span class="play-now icon">
    <i class="ri-play-fill"></i>
    </span>
    <span class="link-text">Watch Video</span>
    </a>
    </div>
                            <div class="hero-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="hero-contact-img">
                                    <a href="contact">
    <img src="{{ asset('bsassets/temp/custom/assets/img/testimonials/client-1.jpg') }}" alt="Image">
    </a>
                                    <a href="contact">
    <img src="{{ asset('bsassets/temp/custom/assets/img/testimonials/client-2.jpg') }}" alt="Image">
    </a>
                                    <a href="contact">
    <img src="{{ asset('bsassets/temp/custom/assets/img/testimonials/client-3.jpg') }}" alt="Image">
    </a>
                                </div>
                                <div class="hero-contact-text">
                                    <p>Need Help? Contact our <a href="contact" class="link style1">digital support</a> &amp; tell us about your query.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-img-wrap">
                            <div class="hero-promo-text bounce">
                                <span><i class="flaticon-group"></i></span>
                                <h6>18.5M+ <span>Active Users</span></h6>
                            </div>
                            <div class="hero-img-one">
                                <img src="{{ asset('bsassets/temp/custom/assets/img/hero/hero-img-2.jpg') }}" alt="Image">
                            </div>
                            <div class="hero-img-two">
                                <img src="{{ asset('bsassets/temp/custom/assets/img/hero/hero-img-3.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="partner-wrap ptb-100">
            <div class="container">
                <div class="partner-slider owl-carousel">
                    <div class="partner-item">
                        <img src="{{ asset('bsassets/temp/custom/assets/img/partner/partner-1.png') }}" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('bsassets/temp/custom/assets/img/partner/partner-2.png') }}" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('bsassets/temp/custom/assets/img/partner/partner-3.png') }}" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('bsassets/temp/custom/assets/img/partner/partner-4.png') }}" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('bsassets/temp/custom/assets/img/partner/partner-5.png') }}" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('bsassets/temp/custom/assets/img/partner/partner-6.png') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>


        <section class="about-wrap style2 pb-100">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6" data-aos-duration="1000" data-aos-delay="200">
                        <div class="about-img-wrap">
                            <img src="{{ asset('bsassets/temp/custom/assets/img/shape-1.png') }}" alt="Image" class="about-shape-one">
                            <div class="about-img-one">
                                <img src="{{ asset('bsassets/temp/custom/assets/img/about/about-img-5.jpg') }}" alt="Image">
                            </div>
                            <div class="about-img-two">
                                <img src="{{ asset('bsassets/temp/custom/assets/img/about/about-img-6.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
    <div class="about-content">
    <div class="content-title style1">
    <span>ABOUT US</span>
    <h2>Constructing your Portfolio</h2>
    <p>
Access a broad range of investment products to achieve your personalized goals, all in one place.</p>
    </div>
    <div class="feature-item-wrap">
    <div class="feature-item">
    <div class="feature-icon">
    <i class="flaticon-application"></i>
    </div>
    <div class="feature-text">
    <h3>Powerful Online App</h3>
    <p>Our web app service is quick and easy to use, and you can access it anywhere.</p>
    </div>
    </div>
    <div class="feature-item">
    <div class="feature-icon">
    <i class="flaticon-speedometer"></i>
    </div>

    <div class="feature-text">
    <h3>0% Commission </h3>
    <p>Invest in stocks, ETFs, and options, all commission-free. No margin interest or short selling fees for intra-day trading.</p>
    </div>

    
    </div>
    </div>
    <a href="about" class="btn style1">READ MORE<i class="ri-arrow-right-s-line"></i></a>
    </div>
    </div>
                </div>
            </div>
        </section>


       
    <div class="feature-wrap style1 ptb-100 bg-whisper">
    <div class="container">
    <div class="row">
    <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
    <div class="section-title style1 text-center mb-40">
    <!-- <span>POPULAR CURRENCY TOOLS</span> -->
    <h2>What we offer</h2>
    </div>
    </div>
     </div>
    <div class="feature-slider-one owl-carousel">
    <div class="feature-card style3">
    <div class="feature-title">
    <span>
    <i class="flaticon-hand"></i>
    </span>
    <h3><a href="login">ETFs</a></h3>
    </div>
    <p>
Diversify your portfolio with ETFs using our screener, intuitive research tools, and elite trading features.</p>
    <a href="login" class="link style1">Get Started<i class="ri-arrow-right-s-line"></i></a>
    </div>
    <div class="feature-card style3">
    <div class="feature-title">
    <span>
    <i class="flaticon-pie-chart"></i>
    </span>
    <h3><a href="login"> Stocks & Options</a></h3>
    </div>
    <p>Invest in exchange-listed U.S. stocks, international stocks through ADRs, fractional shares, and OTC stocks.</p>
    <a href="login" class="link style1">Get started<i class="ri-arrow-right-s-line"></i></a>
    </div>
    <div class="feature-card style3">
    <div class="feature-title">
    <span>
    <i class="flaticon-notification"></i>
    </span>
    <h3><a href="login">Cryptocurrency</a></h3>
    </div>
    <p>Don't limit your portfolio to traditional stocks. See the growth when you invest on Bitcoin and other digital assets.</p>
    <a href="login" class="link style1">Get started<i class="ri-arrow-right-s-line"></i></a>
    </div>
    <div class="feature-card style3">
    <div class="feature-title">
    <span>
    <i class="flaticon-user-2"></i>
    </span>
    <h3><a href="register">Create Account</a></h3>
    </div>
    <p>Create a free account with us today.</p>
    <a href="login" class="link style1">GET STARTED <i class="ri-arrow-right-s-line"></i></a>
    </div>
    </div>
    </div>
    </div>


      
    
    <section class="wh-wrap style2 ptb-100">
    <div class="container">
    <div class="row gx-5 align-items-center">
    <div class="col-lg-6 order-lg-1 order-md-2 order-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <div class="wh-content">
    <div class="content-title style1">
    <span>WHY CHOOSE US</span>
    <h2>We are innovative and digital</h2>
    <p>Firstrade Online S-abadel transformed the credit card business using data and technology more than ten years ago. We are now one of the largest digital INVESTING providers, dedicated to innovating, simplifying, and humanizing INVESTING.</p>
    </div>
    <div class="feature-item-wrap">
    <div class="feature-item">
    <div class="feature-icon">
     <i class="flaticon-tick"></i>
    </div>
    <div class="feature-text">
    <h3>Fast and reliable</h3>
    <p></p>
    </div>
    </div>
    <div class="feature-item">
    <div class="feature-icon">
    <i class="flaticon-tick"></i>
    </div>
    <div class="feature-text">
    <h3>Zero Commission</h3>
    <p></p>
    </div>
    </div>
    <div class="feature-item">
    <div class="feature-icon">
    <i class="flaticon-tick"></i>
    </div>
    <div class="feature-text">
    <h3>24/7 Online support</h3>
    <p></p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 order-lg-2 order-md-1 order-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="row align-items-end">
    <div class="col-6 wh-img-wrap">
    <img src="temp/custom/assets/img/shape-2.png" alt="Image" class="wh-shape-one moveHorizontal">
    <div class="wh-img">
    <img src="temp/custom/assets/img/why-choose-us/wh-img-4.jpg" alt="Image">
    </div>
    <div class="wh-img">
    <img src="temp/custom/assets/img/why-choose-us/wh-img-5.jpg" alt="Image">
    </div>
    </div>
    <div class="col-6 wh-img-wrap">
    <div class="wh-img">
    <img src="temp/custom/assets/img/shape-3.png" alt="Image" class="wh-shape-two bounce">
    <img src="temp/custom/assets/img/why-choose-us/wh-img-6.jpg" alt="Image">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

        <section class="exchange-table-wrap pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="section-title style1 text-center mb-40">
                        <span>LIVE EXCHANGE RATES</span>
                        <!-- <h2>Exchange Money Across The World In Real Time With Lowest Fees</h2> -->
                        </div>
                    </div>
                </div>
                <div class="exchange-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <div class="inverse">
                                        <span>Inverse</span>
                                        <input type="checkbox" id="switch" />
                                        <label for="switch">Toggle</label>
                                    </div>
                                </th>
                                <th scope="col">Amount</th>
                                <th scope="col">Change(24h)</th>
                                <th scope="col">Chart(24h)</th>
                                <!-- <th scope="col"><span class="action"><i class="ri-edit-line"></i>Edit</span></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('bsassets/temp/custom/assets/img/flag/usa.png') }}" alt="Image"> US Dollar
                                    </div>
                                </td>
                                <td>
                                    120.54
                                </td>
                                <td>
                                    <span class="text-green">+0.50%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('bsassets/temp/custom/assets/img/chart-img/chart-1.png') }}" alt="Image">
                                </td>
                                <td>
                                    <!-- <button class="btn style1" type="button"><i class="ri-send-plane-line"></i>Send</button> -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('bsassets/temp/custom/assets/img/flag/japan.png') }}" alt="Image"> Japanees Yen
                                    </div>
                                </td>
                                <td>
                                    134.76
                                </td>
                                <td>
                                    <span class="text-green">+0.24%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('bsassets/temp/custom/assets/img/chart-img/chart-2.png') }}" alt="Image">
                                </td>
                                <td>
                                    <!-- <button class="btn style1" type="button"><i class="ri-send-plane-line"></i>Send</button> -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('bsassets/temp/custom/assets/img/flag/uk.png') }}" alt="Image"> British Pound
                                    </div>
                                </td>
                                <td>
                                    245.10
                                </td>
                                <td>
                                    <span class="text-red">-0.30%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('bsassets/temp/custom/assets/img/chart-img/chart-3.png') }}" alt="Image">
                                </td>
                                <td>
                                    <!-- <button class="btn style1" type="button"><i class="ri-send-plane-line"></i>Send</button> -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('bsassets/temp/custom/assets/img/flag/newzland.png') }}" alt="Image"> Newzland Dollar
                                    </div>
                                </td>
                                <td>
                                    0.7564
                                </td>
                                <td>
                                    <span class="text-red">-0.063%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('bsassets/temp/custom/assets/img/chart-img/chart-4.png') }}" alt="Image">
                                </td>
                                <td>
                                    <!-- <button class="btn style1" type="button"><i class="ri-send-plane-line"></i>Send</button> -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('bsassets/temp/custom/assets/img/flag/canada.png') }}" alt="Image"> Canadian Dollar
                                    </div>
                                </td>
                                <td>
                                    1.2741
                                </td>
                                <td>
                                    <span class="text-red">-0.76%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('bsassets/temp/custom/assets/img/chart-img/chart-5.png') }}" alt="Image">
                                </td>
                                <td>
                                    <!-- <button class="btn style1" type="button"><i class="ri-send-plane-line"></i>Send</button> -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('bsassets/temp/custom/assets/img/flag/france.png') }}" alt="Image"> Swiss Franc
                                    </div>
                                </td>
                                <td>
                                    15.063
                                </td>
                                <td>
                                    <span class="text-green">+0.26%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('bsassets/temp/custom/assets/img/chart-img/chart-6.png') }}" alt="Image">
                                </td>
                                <td>
                                    <!-- <button class="btn style1" type="button"><i class="ri-send-plane-line"></i>Send</button> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <button type="button" class="add-currency"><span><i class="ri-add-circle-line"></i></span>Add Currency</button>
                    </div>
                    <div class="col-sm-6 text-sm-end">
                        <p class="update-status"> Updated Jan 20, 2024</p>
                    </div>
                </div>
            </div>
        </section>


        <div class="feature-wrap style1 pt-100 pb-75 bg-whisper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title style1 text-center mb-40">
                            <span>YOUR BENIFITS</span>
                            <h2>Your one-stop digital investing platform</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="flaticon-planet-earth"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Global Coverage</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="flaticon-money-bag-1"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Easy Signup Method</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="flaticon-notification"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Global 24/7 Support</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="flaticon-money-1"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Lowest Fee</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="flaticon-automation"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Instant Processing</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="flaticon-shield"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Top Security</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <section class="testimonial-wrap ptb-100">
            <div class="container">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title style1 text-center mb-40">
                        <span>OUR REVIEWS</span>
                        <h2>More Than 18M+ Happy Customers Trust Our Services</h2>
                    </div>
                </div>
                <div class="testimonial-slider-two owl-carousel">

<!-- 
                    <div class="testimonial-card style3" style="min-height: 300px;">
                        <div class="client-info-area">
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="{{ asset('bsassets/temp/custom/assets/img/testimonials/client-3.jpg') }}" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Jim Morison</h3>
                                    <span>Director, BAT</span>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <i class="flaticon-quotation-mark"></i>
                            </div>
                        </div>
                        <p class="client-quote">I opened an account at Firstrade on McHenry in Modesto, California. The teller who helped me was a pleasure to work with. She was very knowledgeable and through setting up my accounts. She made my
                            day a pleasant day. Thank you for the terrific customer service.</p>
                    </div> -->


                    <div class="testimonial-card style3" style="min-height: 300px;">
                        <div class="client-info-area">
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="{{ asset('bsassets/temp/custom/assets/img/testimonials/client-4.jpg') }}" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Alex Cruis</h3>
                                    <span>CEO, IBAC</span>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <i class="flaticon-quotation-mark"></i>
                            </div>
                        </div>
                        <p class="client-quote">I opened an account at Firstrade on McHenry in Modesto, California. The teller who helped me was a pleasure to work with. She was very knowledgeable and through setting up my accounts. She made my
                            day a pleasant day. Thank you for the terrific customer service.</p>
                    </div>


                    <div class="testimonial-card style3" style="min-height: 300px;">
                        <div class="client-info-area">
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="{{ asset('bsassets/temp/custom/assets/img/testimonials/client-5.jpg') }}" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Tom Haris</h3>
                                    <span>Engineer, Olleo</span>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <i class="flaticon-quotation-mark"></i>
                            </div>
                        </div>
                        <p class="client-quote">I've been with Firstrade for four years. I went through a loan modification with them, as well as a six-month forbearance. I also have a credit card with them, which they have cancelled after every late payment, as well
                            as a cash account with withdrawal fees. They are always there to help me.</p>
                    </div>
                    <div class="testimonial-card style3" style="min-height: 300px;">
                        <div class="client-info-area">
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="{{ asset('bsassets/temp/custom/assets/img/testimonials/client-1.jpg') }}" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Harry Jackson</h3>
                                    <span>Enterpreneur</span>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <i class="flaticon-quotation-mark"></i>
                            </div>
                        </div>
                        <p class="client-quote">Karla treated me as if I were a person, not simply a customer. She remained on the phone with me until I had calmed down and she was satisfied that I was fine. She stated that she would not be able to go until she had further information.
                            </p>
                    </div>
                    <div class="testimonial-card style3" style="min-height: 300px;">
                        <div class="client-info-area">
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="{{ asset('bsassets/temp/custom/assets/img/testimonials/client-2.jpg') }}" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Chris Haris</h3>
                                    <span>MD, ITec</span>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <i class="flaticon-quotation-mark"></i>
                            </div>
                        </div>
                        <p class="client-quote">I usually request service through the app or website, although I have called in on occasion. They're all extremely responsive and accommodating.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="blog-wrap pt-100 pb-75 bg-whisper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="section-title style1 text-center mb-40">
                            <span>OUR BLOG</span>
                            <h2>Keep Up To Date With Global Content From Our Trusted Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="blog-card style2">
                            <div class="blog-img">
                                <img src="{{ asset('bsassets/temp/custom/assets/img/blog/blog-1.jpg') }}" alt="Image">
                                <a href="#" class="blog-cat">Corporate</a>
                            </div>
                            <div class="blog-info">
                                <ul class="blog-metainfo  list-style">
                                    <li><i class="ri-calendar-2-line"></i><a href="#">May 22, 2022</a></li>
                                    <li><i class="ri-chat-3-line"></i>10+ Comment</li>
                                </ul>
                                <h3><a href="https://www.cnbc.com/2020/02/27/5-things-every-new-business-owner-needs-to-know-before-starting.html" target="_blank">5 Things You Need To Know Before Starting Business</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="blog-card style2">
                            <div class="blog-img">
                                <img src="{{ asset('bsassets/temp/custom/assets/img/blog/blog-2.jpg') }}" alt="Image">
                                <a href="#" class="blog-cat">Consumer</a>
                            </div>
                            <div class="blog-info">
                                <ul class="blog-metainfo  list-style">
                                    <li><i class="ri-calendar-2-line"></i><a href="#">May 13, 2022</a></li>
                                    <li><i class="ri-chat-3-line"></i>10+ Comment</li>
                                </ul>
                                <h3><a href="https://www.investopedia.com/articles/insights/122016/9-common-effects-inflation.asp#:~:text=An%20overall%20rise%20in%20prices,fast%20at%20the%20higher%20rate." target="_blank">Effect Of Inflation On Our Daily Expenditure</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="blog-card style2">
                            <div class="blog-img">
                                <img src="{{ asset('bsassets/temp/custom/assets/img/blog/blog-3.jpg') }}" alt="Image">
                                <a href="#" class="blog-cat">Finance</a>
                            </div>
                            <div class="blog-info">
                                <ul class="blog-metainfo  list-style">
                                    <li><i class="ri-calendar-2-line"></i><a href="#">Apr 15, 2022</a></li>
                                    <li><i class="ri-chat-3-line"></i>10+ Comment</li>
                                </ul>
                                <h3><a href="https://www.airtreks.com/go/foreign-currency/" target="_blank">7 Tips To Get Best Exchange Rate In Currency</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection
