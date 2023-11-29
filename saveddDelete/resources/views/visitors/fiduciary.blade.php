@extends("layouts.spacedcustomlayout")

@section('body')


<div class="main-content">
    
    <!--header section start-->
    <section class="breadcrumb-section" style="background-image: url('assets/images/logo/bb.png')">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb Section Start -->
            <div class="breadcrumb-content">
               <h5>Fiduciary</h5>
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
                    <div>
                    <h1>What is a Fiduciary?</h1>
                    <p>

The financial industry can be confusing with its many professional titles, including some common ones like brokers or Registered Investment Advisers (RIAs). And certain titles that may sound similar, such as advisor with an “o” and adviser with an “e” can mean very different things. You may have heard the term “fiduciary investment adviser,” but investment professionals rarely unpack this industry-specific term. In this article, we hope to help you distinguish between different types of financial professionals, introduce what it means to be a fiduciary adviser and discuss {{$compd? $compd->companyname :"company name"}}'s fiduciary status and approach to money management.</p>
                </div>
                  
                
                
                
                 <div>
                    <h3>Fiduciary Defined</h3>
                    <p>
At its most basic level, a fiduciary is a person or firm who acts for clients and is required to put their best interests first at all times. RIAs are required to register with the Securities and Exchange Commission (SEC) or the states in which they do business in, depending on how much in assets they manage.  In either case, they are held to the fiduciary standard to act in client's best interests.</p>
                </div>
                     
                        <div>
                    <h3>How to Choose the Right Investment Professional</h3>
                    <p>

Some investors try to find their investment manager by hiring an RIA held to the fiduciary standard. This is a good place to start, because these types of advisers are obligated to act in your best interests. However, there are other important aspects of a good adviser to keep in mind and the best one for you likely depends on your personal situation and preferences.</p>
                
                
                <p>
                    To make sure a financial professional is a good fit for you, you should ask the right questions. Some important topics to cover are an adviser’s investment philosophies, sources of compensation and any potential conflicts of interest. Proper firm structure enables advisers to act on their values, and includes factors like fee arrangements and investment strategies geared to meeting your needs. If your adviser sells commission-based products or values their bottom line over client goals, they may not always serve your needs first.
                </p>
           </div>
           
           
           
                 <div>
                    <h3>{{$compd? $compd->companyname :"company name"}}'s Approach</h3>
                    <p>

At the heart of a good client-adviser relationship is trust, and it can be difficult to have that trusting relationship if your financial professional may be recommending products that aren’t in your best interest. That’s why {{$compd? $compd->companyname :"company name"}} has been held to the fiduciary standard since our founding.</p>
                
                
                <p>
                   {{$compd? $compd->companyname :"company name"}} also works with third-party custodians to house our client's assets. This relationship helps provide transparency above and beyond our fiduciary duties and instill trust in our asset management relationships. When {{$compd? $compd->companyname :"company name"}} first began managing client assets, we knew that having a third-party who provides regular client reporting was crucial to fostering client relationships. This means that, though {{$compd? $compd->companyname :"company name"}} generates its own client reports, your custodian also provides regular reporting for your accounts, so you know exactly what’s going on.<br>
                   As a client of {{$compd? $compd->companyname :"company name"}}, you receive a dedicated Investment Counselor, who knows your long-term goals and financial situation. Your Investment Counselor is your resource to ask any questions you might have about your portfolio or other market-related topics. He or she will reach out to you regularly to provide any updates on our market forecast, answer any questions and make sure your goals and situation haven’t changed.
                </p>
           </div>
                </div>
                </div>
                    </div>
                </div>
                
    </section>
    
    



    
    
</div>

<!-- Online Section End -->

<div class="clearfix"></div>

<!--footer area start-->

@endsection