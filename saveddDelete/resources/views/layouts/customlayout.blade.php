<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aspen-fm.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 12:25:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>|  Aspen Financial Management</title>

   

    <!--Favicon add-->
    
    <link rel="icon"  type="image/png" href="{{asset('assets/images/logo/icon.png')}}">
    <!--bootstrap Css-->
    <link href="{{asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--font-awesome Css-->
    <link href="{{asset('assets/front/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Lightcase  Css-->
    <link href="{{asset('assets/front/css/lightcase.css')}}" rel="stylesheet">
    <!--WOW Css-->
     <link href="{{asset('assets/front/css/animate.min.css')}}" rel="stylesheet">
    <!--Slick Slider Css-->
    <link href="{{asset('assets/front/css/slick.css')}}" rel="stylesheet">
    <!--Slick Nav Css-->
    <link href="{{asset('assets/front/css/slicknav.min.')}}" rel="stylesheet">
    <!--Swiper  Css-->
    <link href="{{asset('assets/front/css/swiper.min.css')}}" rel="stylesheet">
    <!--Style Css-->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
    <!-- Theam Color Css-->
    <link href="{{asset('assets/css/color4831.css?color=03423a')}}" rel="stylesheet">
    <!--Responsive Css-->
    <link href="{{asset('assets/front/css/responsive.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
   <link rel="stylesheet" href="{{asset('assets/css/ion.rangeSlider.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/ranger-style.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/ion.rangeSlider.skinFlat.css')}}">  
   
   
   <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="0c32fba4-05fe-4823-8e4c-d8844659bc7b";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
   
   
   
   <style>
        /* nav */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
}
.wrapper{
  background: #14ae85;
  position: sticky;
  top: 0;
  width: 100%;
  z-index: 100;
}
.wrapper nav{
  position: relative;
  display: flex;
  /* max-width: calc(100% - 200px); */
  margin: 0 auto;
  height: 70px;
  align-items: center;
  justify-content: space-between;
}
nav .content{
  display: flex;
  align-items: center;
}
nav .content .links{
  margin-left: 80px;
  display: flex;
}
.content .logo a{
  color: #fff;
  font-size: 30px;
  font-weight: 600;
}
.content .links li{
  list-style: none;
  line-height: 70px;
}
.content .links li a,
.content .links li label{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 9px 17px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.content .links li label{
  display: none;
}
.content .links li a:hover,
.content .links li label:hover{
  background: #323c4e;
}
.wrapper .search-icon,
.wrapper .menu-icon{
  color: #fff;
  font-size: 18px;
  cursor: pointer;
  line-height: 70px;
  width: 70px;
  text-align: center;
  display: none
}
.wrapper .menu-icon{
  display: none;
}
.wrapper #show-search:checked ~ .search-icon i::before{
  content: "\f00d";
}

.wrapper .search-box{
  position: absolute;
  display: none
  height: 100%;
  max-width: calc(100% - 50px);
  width: 100%;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s ease;
}
.wrapper #show-search:checked ~ .search-box{
  opacity: 1;
  pointer-events: auto;
}
.search-box input{
  width: 100%;
  height: 100%;
  border: none;
  outline: none;
  font-size: 17px;
  color: #fff;
  background: #171c24;
  padding: 0 100px 0 15px;
}
.search-box input::placeholder{
  color: #f2f2f2;
}
.search-box .go-icon{
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
.wrapper input[type="checkbox"]{
  display: none;
}

/* Dropdown Menu code start */
.content .links ul{
  position: absolute;
  background: #171c24;
  top: 80px;
  z-index: -1;
  opacity: 0;
  visibility: hidden;
}
.content .links li:hover > ul{
  top: 70px;
  opacity: 1;
  visibility: visible;
  transition: all 0.3s ease;
}
.content .links ul li a{
  display: block;
  width: 100%;
  line-height: 30px;
  border-radius: 0px!important;
}
.content .links ul ul{
  position: absolute;
  top: 0;
  right: calc(-100% + 8px);
}
.content .links ul li{
  position: relative;
}
.content .links ul li:hover ul{
  top: 0;
}

/* Responsive code start */
@media screen and (max-width: 1250px){
  .wrapper nav{
    max-width: 100%;
    padding: 0 20px;
  }
  nav .content .links{
    margin-left: 30px;
  }
  .content .links li a{
    padding: 8px 13px;
  }
  .wrapper .search-box{
    max-width: calc(100% - 100px);
  }
  .wrapper .search-box input{
    padding: 0 100px 0 15px;
  }
}

@media screen and (max-width: 900px){
  .wrapper .menu-icon{
    display: block;
  }
  .wrapper #show-menu:checked ~ .menu-icon i::before{
    content: "\f00d";
  }
  nav .content .links{
    display: block;
    position: fixed;
    background: #14181f;
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
  nav #show-menu:checked ~ .content .links{
    left: 0%;
  }
  .content .links li{
    margin: 15px 20px;
  }
  .content .links li a,
  .content .links li label{
    line-height: 40px;
    font-size: 20px;
    display: block;
    padding: 8px 18px;
    cursor: pointer;
  }
  .content .links li a.desktop-link{
    display: none;
  }

  /* dropdown responsive code start */
  .content .links ul,
  .content .links ul ul{
    position: static;
    opacity: 1;
    visibility: visible;
    background: none;
    max-height: 0px;
    overflow: hidden;
  }
  .content .links #show-features:checked ~ ul,
  .content .links #show-services:checked ~ ul,
  .content .links #show-items:checked ~ ul{
    max-height: 100vh;
  }
  .content .links ul li{
    margin: 7px 20px;
  }
  .content .links ul li a{
    font-size: 18px;
    line-height: 30px;
    border-radius: 5px!important;
  }
}

@media screen and (max-width: 400px){
  .wrapper nav{
    padding: 0 10px;
  }
  .content .logo a{
    font-size: 27px;
  }
  .wrapper .search-box{
    max-width: calc(100% - 70px);
  }
  .wrapper .search-box .go-icon{
    width: 30px;
    right: 0;
  }
  .wrapper .search-box input{
    padding-right: 30px;
  }
}

.dummy-text{
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  z-index: -1;
  padding: 0 20px;
  text-align: center;
  transform: translate(-50%, -50%);
}
.dummy-text h2{
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

.vidborder{
    border:5x solid black;
}

video {
   /*override other styles to make responsive */
  width: 70%    !important;
  height: auto   !important;
}

   </style>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('assets/front/2/css/style.css')}}">
    
    <script src="{{asset('assets/front/2/js/modernizr.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="../cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <script src="../cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="0c32fba4-05fe-4823-8e4c-d8844659bc7b";(function(){d=document;s=d.createElement("script");s.src="../client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    
    <!--googletranlate-->
    
    

    
    <style>
        @media  only screen and (max-width: 769px){
.slicknav_nav {
    background: #03423a;
}
}

.support-bar-top {
    background: #03423a;
   
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

		  .goog-te-combo, .goog-te-banner *, .goog-te-ftab *, .goog-te-menu *, .goog-te-menu2 *, .goog-te-balloon *{
		  text-decoration: none !important;
		  font-size: 14pt !important;
		  color: #424256;
		  display: none !important;
		}
		.goog-te-banner-frame{
		  display: none !important;
		}
		.header nav.top-navigation>a.langUrlTrans{
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
		@media    only screen and (max-width: 769px) {
		    .goog-te-gadget-simple{ 
		        top: 5px;
		    }
		}
		@media    only screen and (max-width: 1440px) {
		    .goog-te-gadget-simple{ 
		        top: 5px;
		    }
		}
		@media    only screen and (max-width: 425px) {
		    .goog-te-gadget-simple{ 
		        top: 0px;
		        margin: -36px 0px 0px 0px;
		    }
		}
		i.fa.fa-language {
            position: relative;
            top: -14px;
        }
		.goog-te-gadget img{
		   background-image: none !important;
		   background-position: 0px 0px !important;
		   background-size: 0px !important;
		   background-repeat: no-repeat !important;
		}
		.goog-te-gadget-icon{
		   display: none !important;
		}
		.goog-te-gadget-simple .goog-te-menu-value{
		   color: #424256 !important;
		   font-size: 14px !important;
		   font-weight: 400;
		   text-transform: uppercase;
		   display: none !important;
		}
		.goog-te-gadget-simple:after{
		   display: -webkit-box !important;
		   content: 'Languages';
		   color: #fff !important;
		   font-size: 14px !important;
		   font-weight: 400;
		   text-transform: Capitalize;
		}
		.goog-te-combo, .goog-te-banner *, .goog-te-ftab *, .goog-te-menu *, .goog-te-menu2 *, .goog-te-balloon *{
		  font-family: 'Montserrat', sans-serif !important ;
		  font-size: 14pt !important;
		  text-decoration: none !important;
		}
		.goog-te-menu2{
		  font-family: 'Montserrat', sans-serif !important ;
		  font-size: 14pt !important;
		  border: 1px solid #007a40fff !important;
		  background-color: #b70000 !important;
		  color: #fff !important;
		}
		.goog-te-menu-frame{
		  -webkit-box-shadow: none !important;
		  box-shadow: -1px 2px 20px 0px #4444447a !important;
		}
		.goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div {
		  font-family: 'Montserrat', sans-serif !important ;
		  border: 1px solid #007a40fff !important;
		  background-color: #b70000 !important;
		  color: #fff !important;
		}
		
    </style>
</head>

<body  data-spy="scroll">
<!-- Start Pre-Loader-->











@yield("body")











<style type="text/css">
    li.export-main {
        visibility: hidden;
    }
</style>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--jquery script load-->
<script src="{{asset('assets/front/js/jquery.js')}}"></script> 

<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>


<!-- Highlight script load-->
<script src="{{asset('assets/front/js/highlight.min.js')}}"></script>
<!--Jquery Ui Slider script load-->
<script src="{{asset('assets/front/js/jquery-ui-slider.min.js')}}"></script>
<!--Circleful Js File Load-->
<script src="{{asset('assets/front/js/jquery.circliful.js')}}"></script>
<!--CounterUp script load-->
<script src="{{asset('assets/front/js/jquery.counterup.min.js')}}"></script>
<!-- Ripples  script load-->
<script src="{{asset('assets/front/js/jquery.ripples-min.js')}}"></script>
<!--Slick Nav Js File Load-->
<script src="{{asset('assets/front/js/jquery.slicknav.min.js')}}"></script>
<!--Lightcase Js File Load-->
<script src="{{asset('assets/front/js/lightcase.js')}}"></script>
<!--particle Js File Load-->
<script src="{{asset('assets/front/js/particles.min.js')}}"></script>
<!--particle custom Js File Load-->
<script src="{{asset('assets/front/js/particles-custom.js')}}"></script>
<!--RainDrops script load-->
<script src="{{asset('assets/front/js/raindrops.js')}}"></script>
<!--Easing script load-->
<script src="{{asset('assets/front/js/easing-min.js')}}"></script>
<!--Slick Slider Js File Load-->
<script src="{{asset('assets/front/js/slick.min.js')}}"></script>
<!--Swiper script load-->
<script src="{{asset('assets/front/js/swiper.min.js')}}"></script>
<!--WOW script load-->
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<!--WayPoints script load-->
<script src="{{asset('assets/front/js/waypoints.min.js')}}"></script>

<!-- Gmap Load Here -->
<script src="{{asset('assets/front/js/gmaps.js')}}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
<!-- Map Js File Load -->
<script src="{{asset('assets/front/js/map-script4831.php?color=03423a')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/ion.rangeSlider.js')}}"></script>
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
                    $val.val( '$ ' + val.from);

                    var profit = (val.from * perDay / 100).toFixed(1);
                    profit  = '$ ' + profit.replace('.', '.') ;
                    $dailyProfit.text(profit) ;

                    profit = ( (val.from * perDay / 100)* perYear ).toFixed(1);
                    profit  =  '$ ' + profit.replace('.', '.');
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
<script src="{{asset('assets/front/js/main.js')}}"></script>

<!--swal alert message-->

<!--end swal alert message-->
<script>
var mobile = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));

hljs.initHighlightingOnLoad();
hljs.configure({useBR: true});
jQuery('#raindrops').raindrops({color:'#fff',canvasHeight:5});
jQuery('#raindrops-green').raindrops({color:'#03423a ',canvasHeight:5});

</script>
</body>

<!-- Mirrored from aspen-fm.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 12:26:43 GMT -->
</html>