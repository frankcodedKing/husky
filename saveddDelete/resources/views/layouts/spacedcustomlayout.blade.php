<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aspen-fm.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 12:25:01 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $compd ? $compd->companyname : 'company name' }} | Home Page</title>
    <!--Favicon add-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/icon.png') }}">
    <!--bootstrap Css-->
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--font-awesome Css-->
    <link href="{{ asset('assets/front/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Lightcase  Css-->
    <link href="{{ asset('assets/front/css/lightcase.css') }}" rel="stylesheet">
    <!--WOW Css-->
    <link href="{{ asset('assets/front/css/animate.min.css') }}" rel="stylesheet">
    <!--Slick Slider Css-->
    <link href="{{ asset('assets/front/css/slick.css') }}" rel="stylesheet">
    <!--Slick Nav Css-->
    <link href="{{ asset('assets/front/css/slicknav.min.') }}" rel="stylesheet">
    <!--Swiper  Css-->
    <link href="{{ asset('assets/front/css/swiper.min.css') }}" rel="stylesheet">
    <!--Style Css-->
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
    <!-- Theam Color Css-->
    <link href="{{ asset('assets/css/color4831.css?color=03423a') }}" rel="stylesheet">
    <!--Responsive Css-->
    <link href="{{ asset('assets/front/css/responsive.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ranger-style.css') }}">
   
    <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.skinFlat.css') }}">

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="0c32fba4-05fe-4823-8e4c-d8844659bc7b";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

<style>
        /* nav */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
        }

        #preloader{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #preloader img{
            animation: earth .5s linear infinite;
            
            -webkit-animation: earth 1s linear infinite; 
        }

        @keyframes earth {
            0%{
                transform: scale(1)
            }
            50%{
                transform: scale(1.1)
            }
            100%{
                transform: scale(1)
            }
        }

        .main-content {
            background: url({{asset('assets/images/World_map.png')}}); 
            position: relative;
        }
        .wrapper {
            background: #14ae85;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
        }
        .wrapper nav {
            position: relative;
            display: flex;
            /* max-width: calc(100% - 200px); */
            margin: 0 auto;
            height: 70px;
            align-items: center;
            justify-content: space-between;
        }
        nav .content {
            display: flex;
            align-items: center;
        }
        nav .content .links {
            margin-left: 80px;
            display: flex;
        }
        .content .logo a {
            color: #fff;
            font-size: 30px;
            font-weight: 600;
        }
        .content .links li {
            list-style: none;
            line-height: 70px;
        }
        .content .links li a,
        .content .links li label {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            padding: 9px 17px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .content .links li label {
            display: none;
        }
        .content .links li a:hover,
        .content .links li label:hover {
            background: #323c4e;
        }
        .wrapper .search-icon,
        .wrapper .menu-icon {
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            line-height: 70px;
            width: 70px;
            text-align: center;
            display: none
        }
        .wrapper .menu-icon {
            display: none;
        }
        .wrapper #show-search:checked~.search-icon i::before {
            content: "\f00d";
        }
        .wrapper .search-box {
            position: absolute;
            display: none height: 100%;
            max-width: calc(100% - 50px);
            width: 100%;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .wrapper #show-search:checked~.search-box {
            opacity: 1;
            pointer-events: auto;
        }
        .search-box input {
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            font-size: 17px;
            color: #fff;
            background: #171c24;
            padding: 0 100px 0 15px;
        }
        .search-box input::placeholder {
            color: #f2f2f2;
        }
        .search-box .go-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            line-height: 60px;
            width: 70px;
            background: #171c24;
            border: none;
            outline: none;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
        }
        .wrapper input[type="checkbox"] {
            display: none;
        }
        /* Dropdown Menu code start */
        .content .links ul {
            position: absolute;
            background: #171c24;
            top: 80px;
            z-index: -1;
            opacity: 0;
            visibility: hidden;
        }
        .content .links li:hover>ul {
            top: 70px;
            opacity: 1;
            visibility: visible;
            transition: all 0.3s ease;
        }
        .content .links ul li a {
            display: block;
            width: 100%;
            line-height: 30px;
            border-radius: 0px !important;
        }
        .content .links ul ul {
            position: absolute;
            top: 0;
            right: calc(-100% + 8px);
        }
        .content .links ul li {
            position: relative;
        }
        .content .links ul li:hover ul {
            top: 0;
        }
        /* swiper */
        .swiper {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        /* Responsive code start */
        @media screen and (max-width: 1250px) {
            .wrapper nav {
                max-width: 100%;
                padding: 0 20px;
            }
            nav .content .links {
                margin-left: 30px;
            }
            .content .links li a {
                padding: 8px 13px;
            }
            .wrapper .search-box {
                max-width: calc(100% - 100px);
            }
            .wrapper .search-box input {
                padding: 0 100px 0 15px;
            }
        }
        @media screen and (max-width: 900px) {
            .wrapper .menu-icon {
                display: block;
            }
            .wrapper #show-menu:checked~.menu-icon i::before {
                content: "\f00d";
            }
            nav .content .links {
                display: block;
                position: fixed;
                background: #14ae85;
                height: 100%;
                width: 100%;
                top: 70px;
                left: -100%;
                margin-left: 0;
                max-width: 350px;
                overflow-y: auto;
                padding-bottom: 100px;
                transition: all 0.3s ease;
            }
            nav #show-menu:checked~.content .links {
                left: 0%;
            }
            .content .links li {
                margin: 15px 20px;
            }
            .content .links li a,
            .content .links li label {
                line-height: 40px;
                font-size: 20px;
                display: block;
                padding: 8px 18px;
                cursor: pointer;
            }
            .content .links li a.desktop-link {
                display: none;
            }
            /* dropdown responsive code start */
            .content .links ul,
            .content .links ul ul {
                position: static;
                opacity: 1;
                visibility: visible;
                background: none;
                max-height: 0px;
                overflow: hidden;
            }
            .content .links #show-features:checked~ul,
            .content .links #show-services:checked~ul,
            .content .links #show-items:checked~ul {
                max-height: 100vh;
            }
            .content .links ul li {
                margin: 7px 20px;
            }
            .content .links ul li a {
                font-size: 18px;
                line-height: 30px;
                border-radius: 5px !important;
            }
        }
        @media screen and (max-width: 400px) {
            .wrapper nav {
                padding: 0 10px;
            }
            .content .logo a {
                font-size: 27px;
            }
            .wrapper .search-box {
                max-width: calc(100% - 70px);
            }
            .wrapper .search-box .go-icon {
                width: 30px;
                right: 0;
            }
            .wrapper .search-box input {
                padding-right: 30px;
            }
        }
        .dummy-text {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            z-index: -1;
            padding: 0 20px;
            text-align: center;
            transform: translate(-50%, -50%);
        }
        .dummy-text h2 {
            font-size: 45px;
            margin: 5px 0;
        }
        /* end nav */
        .price-table {
            margin-bottom: 45px;
        }
        .col-container {
            display: table;
        }
        .col {
            display: table-cell;
        }
        .vidborder {
            border: 5x solid black;
        }
        video {
            /*override other styles to make responsive */
            width: 70% !important;
            height: auto !important;
        }
        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #008864;
            position: relative;
        }
        .footer-grid {
            display: grid;
            color: white;
            gap: 3%;
            margin: auto;
            justify-content: center;
            align-items: center;
            padding: 20px;
            grid-template-columns: repeat(4, 1fr);
        }
        .footer-grid h1 {
            color: white;
        }
        .footer-grid a {
            color: white;
        }
        .footer-grid h3 {
            color: white;
        }
        footer li {
            list-style-type: none;
        }
        footer .favinfo a {
            margin: 5px;
        }
        @media (max-width:800px) {
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width:480px) {
            .footer-grid {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }
            footer {
                height: auto;
            }
            footer .favinfo{
                position: absolute;
                bottom: 0;
            }
        }
    </style>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/front/2/css/style.css') }}">

    <script src="{{ asset('assets/front/2/js/modernizr.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="../cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <script src="../cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "0c32fba4-05fe-4823-8e4c-d8844659bc7b";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "../client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>

    <!--googletranlate-->




    <style>
        @media only screen and (max-width: 769px) {
            .slicknav_nav {
                background: #03423a;
            }
        }
        .support-bar-top {
            background: white;
        }
        .footer-support-list {
            text-align: center;
            border-bottom: 8px solid #2c3e50;
            background-color: #03423a;
            padding: 10px 0px;
        }
        .footer-support-list {
            border-bottom: 8px solid #ffffff;
        }
        .footer-area {
            background: #03423a;
        }
        .admin-section {
            background-color: #03423a;
            padding: 50px 0px;
        }
        .support-bar-top a:hover {
            color: #040404;
        }
        .main-menu ul li .mega-menu1 {
            background-color: #03423a;
        }
        /* GOOGLE TRANSLATOR */
        .goog-te-combo,
        .goog-te-banner *,
        .goog-te-ftab *,
        .goog-te-menu *,
        .goog-te-menu2 *,
        .goog-te-balloon * {
            text-decoration: none !important;
            font-size: 14pt !important;
            color: #424256;
            display: none !important;
        }
        .goog-te-banner-frame {
            display: none !important;
        }
        .header nav.top-navigation>a.langUrlTrans {
            border-left: 1px solid #007a40;
            margin-top: -2px;
            padding: 2px 0 1px 20px;
        }
        .goog-te-gadget-simple {
            display: -webkit-box !important;
            margin: -40px 0px 0px 0px;
            font-family: 'Montserrat', sans-serif !important;
            font-size: 14pt !important;
            background-color: transparent !important;
            color: #fff !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
            border-bottom: 0px !important;
            border-top: 0px !important;
            border-left: 0px !important;
            border-right: 0px !important;
            position: relative;
            top: 6px;
        }
        @media only screen and (max-width: 769px) {
            .goog-te-gadget-simple {
                top: 5px;
            }
        }
        @media only screen and (max-width: 1440px) {
            .goog-te-gadget-simple {
                top: 5px;
            }
        }
        @media only screen and (max-width: 425px) {
            .goog-te-gadget-simple {
                top: 0px;
                margin: -36px 0px 0px 0px;
            }
        }
        i.fa.fa-language {
            position: relative;
            top: -14px;
        }
        .goog-te-gadget img {
            background-image: none !important;
            background-position: 0px 0px !important;
            background-size: 0px !important;
            background-repeat: no-repeat !important;
        }
        .goog-te-gadget-icon {
            display: none !important;
        }
        .goog-te-gadget-simple .goog-te-menu-value {
            color: #424256 !important;
            font-size: 14px !important;
            font-weight: 400;
            text-transform: uppercase;
            display: none !important;
        }
        .goog-te-gadget-simple:after {
            display: -webkit-box !important;
            content: 'Languages';
            color: #fff !important;
            font-size: 14px !important;
            font-weight: 400;
            text-transform: Capitalize;
        }
        .goog-te-combo,
        .goog-te-banner *,
        .goog-te-ftab *,
        .goog-te-menu *,
        .goog-te-menu2 *,
        .goog-te-balloon * {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 14pt !important;
            text-decoration: none !important;
        }
        .goog-te-menu2 {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 14pt !important;
            border: 1px solid #007a40fff !important;
            background-color: #b70000 !important;
            color: #fff !important;
        }
        .goog-te-menu-frame {
            -webkit-box-shadow: none !important;
            box-shadow: -1px 2px 20px 0px #4444447a !important;
        }
        .goog-te-menu2-item div,
        .goog-te-menu2-item:link div,
        .goog-te-menu2-item:visited div,
        .goog-te-menu2-item:active div {
            font-family: 'Montserrat', sans-serif !important;
            border: 1px solid #007a40fff !important;
            background-color: #b70000 !important;
            color: #fff !important;
        }
    </style>
</head>

<body data-spy="scroll">
    <!-- Start Pre-Loader-->

    <div id="preloader">
       
            <img src="{{ asset('assets/images/logo/logo.png') }}" style="max-height:60px;">
       

    </div>
    <!-- End Preload -->

    <!--main menu section start-->
    <div class="wrapper" data-wow-duration="2s">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></label>
            <div class="content">
                <div class="logo"><a href="{{ route('index') }}"><img
                            src="{{ asset('assets/images/logo/logo.png') }}" style="max-height:60px;"></a></div>
                <ul class="links">
                    <li><a href="{{ route('index') }}">HOME</a></li>
                    <li><a href="{{ route('whatweinvestin') }}">WHAT WE INVEST IN</a></li>
                    {{-- <li><a href="{{ route('news') }}">NEWS</a></li> --}}
                    <li><a href="{{ route('faq') }}">FAQS</a></li>
                    <li><a href="{{ route('contact') }}">CONTACT US</a></li>
                    <li>
                        <a href="#" class="desktop-link">ABOUT US</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">ABOUT US</label>
                        <ul>
                            <li><a href="{{ route('about') }}">HISTORY</a></li>
                            <li><a href="{{ route('howwearedifferent') }}">HOW WE ARE DIFFERENT</a></li>
                            <li><a href="{{ route('fiduciary') }}">FUDICIARY</a></li>
                            <li><a href="{{ route('clienteducation') }}">CLIENT EDUCATION AND SERVICE</a></li>
                            <li><a href="{{ route('ourteam') }}">OUR TEAM</a></li>
                            <li><a href="{{ route('assetsmanagement') }}">ASSETS UNDER MANAGEMENT</a></li>
                            <li><a href="{{ route('privacypolicy') }}">PRIVACY AND POLICY</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('index') }}" class="desktop-link">ACCOUNT</a>
                        <input type="checkbox" id="show-services">
                        <label for="show-services">ACCOUNT</label>
                        <ul>
                            <li><a href="{{ route('login') }}">LOGIN</a></li>
                            <li><a href="{{ route('joinus') }}">JOIN US</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
            <!-- <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label> -->
            <!-- <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form> -->
        </nav>
    </div>
    {{-- <nav class="main-menu wow slideInRight" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{route('index')}}"><img src="{{asset('assets/images/logo/logo.png')}}" style="max-height:60px;"></a>
                </div>
            </div>
            <div class="col-md-9 text-right">
                <ul id="header-menu" class="header-navigation">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('whatweinvestin')}}">WHAT WE INVEST IN</a></li>
                    
                    <li><a href="{{route('news')}}">NEWS</a></li> --}}

    <!---->
    <!--    <li><a href="https://aspen-fm.com/menu/1/what-we-invest-in">WHAT WE INVEST IN</a></li>-->
    <!---->
    {{-- <li><a href="{{route('faq')}}">Faq</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li> --}}
    <!--<li><a href="https://aspen-fm.com/about">About Us</a>-->
    {{-- <li><a class="page-scroll" href="#">About Us <i class="fa fa-angle-down"></i></a>
                            <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-2">
                                <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="{{route('about')}}">History</a>
                                    </li>
                                    <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="{{route('howwearedifferent')}}">How We Are Different</a>
                                    </li>
                                  <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="{{route('fiduciary')}}">Fiduciary</a>
                                    </li>
                                    <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="{{route('clienteducation')}}">Client Education and services</a>
                                    </li>   
                                    <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="{{route('ourteam')}}">Our Team</a>
                                    </li>  
                                    <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="{{route('assetsmanagement')}}">Assets Under Management</a>
                                    </li>
                                    
                                    <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="{{route('privacypolicy')}}">Privacy Policy</a>
                                    </li>
                            </ul>
                        </li>
                    
                    
                    </li>
                                            <li><a class="page-scroll" href="#">Account <i class="fa fa-angle-down"></i></a>
                            <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-4">
                                <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="{{route('login')}}">Login</a>
                                    <a class="page-scroll" href="{{route('joinus')}}">Join Us</a></li>
                            </ul>
                        </li>
                                    </ul>
            </div>
        </div>
    </div>
</nav> --}}
    <!--main menu section end-->













    @yield('body')











    <div class="animation-element" style="display: none;">
        <!-- End Pre-Loader -->
        <!--support bar  top start-->
        <div class="support-bar-top wow slideInLeft" data-wow-duration="2s" id="raindrops-green">
            <div class="container" style="  background: #008864;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <a href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"> <i
                                    class="fa fa-envelope email" aria-hidden="true"></i>
                                {{ $compd ? $compd->companyemail : 'company email' }}</a>
                            <a href="#"> <i class="fa fa-phone" aria-hidden="true"></i>
                                {{ $compd ? $compd->companyphone : 'company phone' }} </a>

                            <a href="#"> <i class="fa fa-language" aria-hidden="true"
                                    style="margin-left: 2px;"></i>

                                <div id="google_translate_element"></div>
                                <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'en',
                                            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                        }, 'google_translate_element');
                                    }
                                </script>
                                <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                                <script>
                                    AOS.init();
                                </script>

                                <script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit">
                                </script>





                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 text-right bounceIn">
                        <div class="contact-admin">
                            <a href="{{ route('login') }}"><i class="fa fa-user"></i> LOGIN </a>
                            <a href="{{ route('joinus') }}"><i class="fa fa-user-plus"></i> JOIN-US</a>
                            <!--<a href="https://aspen-fm.com/register"><i class="fa fa-user-plus"></i> REGISTER</a>-->
                            <div class="support-bar-social-links">
                                <a href="https://www.facebook.com/AspenFinancialManagement/"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/company/lifeinsurance1"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a>
                                <a href="https://instagram.com/aspenfinancialmanagement?utm_medium=copy_link"><i
                                        class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://wa.me/message/{{ $compd ? $compd->companyphone : 'company phone' }}"><i
                                        class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--support bar  top end-->
    <!--main menu section start-->

    <!--footer area start-->

    <!-- footer -->
    <footer>
        <div class="footer-grid">
            <div class="footer-kids" style="margin-bottom: 10px">
                <div class="wgs-logo">
                    <a href="https://aspen-fm.com">
                        <h1> Aspen Financial
                            <br> Management
                        </h1>
                    </a>
                </div>
                <p>Aspen Financial Management is the leading financial establishment providing high-quality international
                    investment
                    services. We are always ready to partner with you by offering full financial support to individuals
                    and
                    companies worldwide.

                </p>
                <div class="favinfo">
                    <a href="https://www.facebook.com/AspenFinancialManagement/"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/company/lifeinsurance1"><i class="fa fa-linkedin"
                            aria-hidden="true"></i></a>
                    <a href="https://instagram.com/aspenfinancialmanagement?utm_medium=copy_link"><i
                            class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a  href="https://wa.me/{{ $compd ? $compd->companyphone : 'company phone' }}?text=Hello%2C%20i%20need%20assistance"><i
                            class="fa fa-whatsapp" aria-hidden="true"></i></a>

                </div>


            </div>
            <div class="footer-kids">

                <ul class="wgs-menu">
                    <li><a href="{{ route('whatweinvestin') }}">WHAT WE INVEST IN</a></li>
                    <li><a href="{{ route('ourteam') }}">OUR TEAM</a></li>
                    <li><a href="{{ route('clienteducation') }}">CLIENT EDUCATION AND SERVICE</a></li>
                </ul>
            </div>
            <div class="footer-kids">

                <ul class="wgs-menu">
                    <li><a href="{{ route('howwearedifferent') }}">HOW WE ARE DIFFERENT</a></li>
                    <li><a href="{{ route('privacypolicy') }}">PRIVACY AND POLICY</a></li>
                    <li><a href="{{ route('contact') }}">CONTACT US</a></li>
                </ul>
            </div>
            <div class="footer-kids">

                <ul class="wgs-menu">
                    <li><a href="{{ route('about') }}">HISTORY</a></li>
                    <li><a href="{{ route('fiduciary') }}">FUDICIARY</a></li>
                    <a href="{{ route('joinus') }}"><i class="fa fa-user-plus"></i>ACCOUNTS</a>


                </ul>
            </div>
        </div>

    </footer>
    <!-- .footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container bdr-copyright">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <div class="copyright-content">
                        <p>&copy; 2021. All rights reserved. <a href="/">AspenFinancialManagement</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        li.export-main {
            visibility: hidden;
        }
    </style>
    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
    <!--jquery script load-->
    <script src="{{ asset('assets/front/js/jquery.js') }}"></script>

    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>


    <!-- Highlight script load-->
    <script src="{{ asset('assets/front/js/highlight.min.js') }}"></script>
    <!--Jquery Ui Slider script load-->
    <script src="{{ asset('assets/front/js/jquery-ui-slider.min.js') }}"></script>
    <!--Circleful Js File Load-->
    <script src="{{ asset('assets/front/js/jquery.circliful.js') }}"></script>
    <!--CounterUp script load-->
    <script src="{{ asset('assets/front/js/jquery.counterup.min.js') }}"></script>
    <!-- Ripples  script load-->
    <script src="{{ asset('assets/front/js/jquery.ripples-min.js') }}"></script>
    <!--Slick Nav Js File Load-->
    <script src="{{ asset('assets/front/js/jquery.slicknav.min.js') }}"></script>
    <!--Lightcase Js File Load-->
    <script src="{{ asset('assets/front/js/lightcase.js') }}"></script>
    <!--particle Js File Load-->
    <script src="{{ asset('assets/front/js/particles.min.js') }}"></script>
    <!--particle custom Js File Load-->
    <script src="{{ asset('assets/front/js/particles-custom.js') }}"></script>
    <!--RainDrops script load-->
    <script src="{{ asset('assets/front/js/raindrops.js') }}"></script>
    <!--Easing script load-->
    <script src="{{ asset('assets/front/js/easing-min.js') }}"></script>
    <!--Slick Slider Js File Load-->
    <script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
    <!--Swiper script load-->
    <script src="{{ asset('assets/front/js/swiper.min.js') }}"></script>
    <!--WOW script load-->
    <script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/front/particles.min.js') }}"></script>
    <script src="{{ asset('assets/front/app.js') }}"></script>
    <!--WayPoints script load-->
    <script src="{{ asset('assets/front/js/waypoints.min.js') }}"></script>

    <!-- Gmap Load Here -->
    <script src="{{ asset('assets/front/js/gmaps.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <!-- Map Js File Load -->
    <script src="{{ asset('assets/front/js/map-script4831.php?color=03423a') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/ion.rangeSlider.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function() {
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: true,
                live: true
            });
            wow.init();
        });
    </script>
    <script>
        $.each($('.slider-input'), function() {
            var $t = $(this),
                from = $t.data('from'),
                to = $t.data('to'),
                $dailyProfit = $($t.data('dailyprofit')),
                $totalProfit = $($t.data('totalprofit')),
                $val = $($t.data('valuetag')),
                perDay = $t.data('perday'),
                perYear = $t.data('peryear');
            $t.ionRangeSlider({
                input_values_separator: ";",
                prefix: '$ ',
                hide_min_max: true,
                force_edges: true,
                onChange: function(val) {
                    $val.val('$ ' + val.from);
                    var profit = (val.from * perDay / 100).toFixed(1);
                    profit = '$ ' + profit.replace('.', '.');
                    $dailyProfit.text(profit);
                    profit = ((val.from * perDay / 100) * perYear).toFixed(1);
                    profit = '$ ' + profit.replace('.', '.');
                    $totalProfit.text(profit);
                }
            });
        });
        $('.invest-type__profit--val').on('change', function(e) {
            var slider = $($(this).data('slider')).data("ionRangeSlider");
            slider.update({
                from: $(this).val().replace('$ ', "")
            });
        })
    </script>
    <!--Main js file load-->
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
    <script src="{{ asset('assets/front/js/index.js') }}"></script>

    <!--swal alert message-->

    <!--end swal alert message-->
    <script>
        var mobile = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));
        hljs.initHighlightingOnLoad();
        hljs.configure({
            useBR: true
        });
        jQuery('#raindrops').raindrops({
            color: '#fff',
            canvasHeight: 5
        });
        jQuery('#raindrops-green').raindrops({
            color: '#03423a ',
            canvasHeight: 5
        });
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

<!-- Mirrored from aspen-fm.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 12:26:43 GMT -->

</html>