@extends("layouts.spacedcustomlayout")

@section("body")


<div class="main-content">
    <!--header section start-->
<section class="breadcrumb-section" style="background-image: url('assets/images/logo/bb.png')">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- breadcrumb Section Start -->
        <div class="breadcrumb-content">
           <h5>Contact Page</h5>
        </div>
        <!-- Breadcrumb section End -->
      </div>
    </div>
  </div>
</section>

<!--Contact Section-->
<section class="contact-section contact-section1 section-padding section-background">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!--Contact Info Tabs-->
        <div class="contact-info">
            <div class="row ">
<!-- contact-content Start -->
                            <div class="col-md-4">
                              <div class="contact-content">
                                <div class="contact-header contact-form">
                                  <h2>Get In Touch</h2>
                                </div>
                                <div class="contact-list">
                                  <ul>
                                    <li>
                                      <div class="contact-thumb"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                      <div class="contact-text">
                                        <p>Address:<span>{{$compd? $compd->companylocation:"company address"}}</span></p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="contact-thumb"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                      <div class="contact-text">
                                        <p>Call Us :<span>{{$compd? $compd->companyphone:"company email"}}</span></p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="contact-thumb"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                      <div class="contact-text">
                                        <p>Mail Us :<span>{{$compd? $compd->companyemail:"company email"}}</span></p>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!-- contact-content End -->                               
                            <!--Form Column-->
                            <div class="form-column col-md-8 col-sm-12 ">
                                <!-- Contact Form -->
                                <div class="contact-form ">
                                    <h2>Send Message Us</h2>
                                   
                                                                                                                      
                                   <form action="{{route('postcontact')}}" method="post">
                            @csrf
                                        <div class="row clearfix">
                                            <div class="col-md-6  col-xs-12 form-group">
                                                <input type="text" name="name" placeholder="Your Name*" required="">
                                            </div>
            
                                            <div class="col-md-6  col-xs-12 form-group">
                                                <input type="email" name="email" placeholder="Email Address*" required="">
                                            </div>
            
                                            <div class=" col-md-12   form-group">
                                                <textarea name="message" placeholder="Your Message..."></textarea>
                                            </div>
            
                                            <div class=" col-md-12 form-group">
                                                <button class="theme-btn btn-success" type="submit" name="submit-form" style="background: #14ae85;border:none;">Send Message</button>
                                            </div>
            
                                        </div>
                                    </form>
            
                    </div>
              <!--End Comment Form -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Contact Section-->


<!--WORKINGNNAP-->
<!--GOOGLELOCATION section start-->
<section>
  <div class="container">

<div class="google-maps" data-map-title="Aspen Wealth Management">
  <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=450&amp;hl=en&amp;q=30%20Cannon%20St,%20London,%20United%20Kingdom+(Aspen%20financials)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/wearable-gps/">wearable gps</a></iframe>
</div>

</div>
</section>


  <!--GOOGLELOCATION section start-->
<!--<section>-->
<!--  <div class="container">-->
<!--    <div>-->
<!--      <div>-->
        <!-- breadcrumb Section Start -->
<!--        <div>-->
<!--           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3519.7418478829077!2d-82.50851018484761!3d28.09341628263355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2c09d3fe36f17%3A0xa8318840f81f3349!2s3820%20Northdale%20Blvd%2C%20Tampa%2C%20FL%2033624!5e0!3m2!1sen!2sus!4v1628736542068!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
<!--        </div>-->
        <!-- Breadcrumb section End -->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->
















<!--Map Section-->
<!--<div class="map-section">-->
  <!--Map Outer-->
<!--    <div class="map-outer">-->
<!--        <div class="google-map" -->
<!--            id="contact-google-map" -->
<!--            data-map-lat="44.529688" -->
<!--            data-map-lng="-72.933009" -->
<!--            data-icon-path="assets/img/map-marker.png"-->
<!--            data-map-title="Brooklyn, New York, United Kingdom" -->
<!--            data-map-zoom="14" -->
<!--            data-markers='{-->
<!--                "marker-1": [44.529688, -72.933009, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"],-->
<!--                "marker-2": [44.231172, -76.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],-->
<!--                "marker-3": [44.999684, -69.070334, "<h4>Branch Office</h4><p>4/99 Maine, USA</p>"],-->
<!--                "marker-4": [40.880550, -77.393705, "<h4>Branch Office</h4><p>4/99 Pennsylvania, USA</p>"]-->
<!--            }'>-->

<!--    </div>-->

<!--    </div>-->
<!--</div>-->
<!--End Map Section--> 
</div>

<!-- Online Section End -->

<div class="clearfix"></div>


@endsection()
