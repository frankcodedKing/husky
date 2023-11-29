@extends("layouts.spacedcustomlayout")


@section("body")


<div class="main-content">
    
    <!--header section start-->
    <section class="breadcrumb-section" style="background-image: url('assets/images/teann2.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb Section Start -->
            <div class="breadcrumb-content">
               <h5>Assets Under Management</h5>
            </div>
            <!-- Breadcrumb section End -->
          </div>
        </div>
      </div>
    </section>

    <!--about us page content start-->
    <section class="section-padding about-us-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                     <h3>  Our Assets Under Management</h3>
                    <p>
Founded in 2000, {{$compd? $compd->companyname :"company name"}} is an investment adviser with over $165 billion under management.{{$compd? $compd->companyname :"company name"}} maintains three principal businesses: the Private Client Group, Institutional Group and  401(k) Solutions.</p>
                    
                 <ul>
                            <li> {{$compd? $compd->companyname :"company name"}} are investment advisers with over $165 billion under management.{{$compd? $compd->companyname :"company name"}} maintains three principal businesses: the Private Client Group, Institutional Group and  401(k) Solutions.</li>
                            <li>The Private Client Group within {{$compd? $compd->companyname :"company name"}} and its affiliates manage over $50 billion for families and individuals around the world. Clients receive personalized portfolio strategies tailored to their situation and investment goals.</li>
                            <li>{{$compd? $compd->companyname :"company name"}} Institutional Group manages over $40 billion for organizations including corporate, public and multi-employer pension funds; foundations and endowments; insurance companies; healthcare organizations; governments; and investment companies. Clients across the world rely on {{$compd? $compd->companyname :"company name"}} and its subsidiaries for a broad array of US, non-US and global investment portfolio strategies with various capitalization and style orientations, including environmental, social and governance (ESG) strategies.</li>
                            <li>
                                {{$compd? $compd->companyname :"company name"}} 401(k) Solutions Group manages over $30 billion for small- to mid-sized corporate-sponsored retirement plans in the US. Employers rely on 401(k) Solutions to provide investment solutions, employee services, administrative support and fiduciary responsibility
                                
                            </li>
                        </ul>



                    
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Online Section End -->

<div class="clearfix"></div>



@endsection