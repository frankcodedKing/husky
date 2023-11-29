<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ASPEN FM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- <link href="{{asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet"> -->


  <!-- Favicons -->
  <link href="{{ asset('assets/images/logo/icon.png') }}" rel="icon">
  <link href="{{ asset('assets/images/logo/icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/fronto/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/fronto/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/fronto/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/fronto/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/fronto/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/fronto/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/fronto/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/fronto/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Aspen
  * Updated: Jun 14 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/Aspen-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <!-- <h1 class="logo me-auto"><a href="index.html">🍃ASPEN<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo me-auto"><img src="{{ asset('assets/images/logo/Logox.jpg') }}" alt="" style="width: 200px;"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
           <li><a class="nav-link scrollto" href="{{ route('whatweinvestin') }}">What we invest in</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="{{ route('faq') }}">Faqs</a></li> -->
         <!--  <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
        
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
         
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('about') }}">History</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              </li> -->
              <li><a href="{{ route('howwearedifferent') }}">How we are different</a></li>
              
              <li><a href="{{ route('whatweinvestin') }}">What we invest in</a></li>
              <!-- <li><a href="{{ route('fiduciary') }}">Fiduciary</a></li> -->
               <li><a href="{{ route('clienteducation') }}">Client education</a></li>
              <li><a href="{{ route('ourteam') }}">Our team</a></li>
              <li><a href="{{ route('assetsmanagement') }}">Assets under management</a></li>
              <li><a href="{{ route('privacypolicy') }}">Privacy policy</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="login" class="get-started-btn scrollto">Account</a>
    </div>
  </header><!-- End Header -->



@yield("body")



<!-- Highlight script load-->
<script src="{{asset('assets/front/js/highlight.min.js')}}"></script>



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Aspen<span>.</span></h3>
            <p>
              Aspen Financial Management is the leading 
              financial establishment providing high-quality 
              international investment services. We are always 
              ready to partner with you by offering full financial 
              support to individuals and companies worldwide.
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
             
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Whatweinvestin.html">What we invest in</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Faqs</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
               <li><i class="bx bx-chevron-right"></i><a href="Howwearedifferent.html">How we are different</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="fiduciary.html">Fiduciary</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="Clienteducation.html">Client education and services</a></li>
               <li><i class="bx bx-chevron-right"></i><a href="Whatweinvestin.html">What we invest in</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="Team.html">Our team</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="Assetsmanagement.html">Assets under management</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="Privacypolicy.html">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to get lates updates on products and services to your email.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Aspen</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Aspen-bootstrap-corporate-template/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/fronto/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/fronto/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/fronto/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/fronto/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/fronto/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/fronto/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/fronto/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/fronto/assets/js/main.js')}}"></script>

</body>

</html>