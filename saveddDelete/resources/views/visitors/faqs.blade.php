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
               <h5>FAQS Page</h5>
            </div>
            <!-- Breadcrumb section End -->
          </div>
        </div>
      </div>
    </section>
    <!--faq page content start-->
   <section class="faq-section section-padding section-background">
      <div class="container">
              <div class="row">
          <div class="col-md-12">
             <!-- section header start -->
            <div class="section-header">
              <h3><span>General</span> FAQ</h3>
                 <p><img src="assets/images/logo/icon.png" alt="icon"></p>
            </div>
          <!-- section header end -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
                <div id="faq">
        <div class="container">
            <div class="faq-content">
                <div class="tab-content">
                    
                    <div role="tabpanel" class="tab-pane fade active in" id="domainsTab">
                        <div class="panel-group accordion" id="accordion4" >
                                                              <div class="panel panel-default active">
                                    <div class="panel-heading" role="tab">
                                        
                                            <h4 class="panel-title"> <a href="#domainsTabQ15" role="button" data-toggle="collapse" data-parent="#accordion4" aria-expanded="false" class="collapsed"> Who are {{$compd? $compd->companyname :"company name"}}? <i class="fa fa-minus"></i> </a></h4> 
                                    </div>
                                    <div id="domainsTabQ15" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p> {{$compd? $compd->companyname :"company name"}} is registered with the SEC as an investment adviser providing asset management to high net worth individuals and institutions worldwide. We uphold the industry’s highest standard of care and help investors reach their long-term goals through active money management. When you hire {{$compd? $compd->companyname :"company name"}} to help manage your money, you can expect a personalized, rewarding investment experience and world-class service.</p>
                                        </div>
                                    </div>
                                </div>
                                                         <div class="panel panel-default active">
                                    <div class="panel-heading" role="tab">
                                        
                                            <h4 class="panel-title"> <a href="#domainsTabQ14" role="button" data-toggle="collapse" data-parent="#accordion4" aria-expanded="false" class="collapsed"> What makes {{$compd? $compd->companyname :"company name"}} different from other money managers? <i class="fa fa-minus"></i> </a></h4> 
                                    </div>
                                    <div id="domainsTabQ14" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p> Our approach to asset management starts with you. We help our clients reach their investment goals through tailored portfolios built with a dynamic, global approach to asset and style allocation. Other money managers may offer cookie-cutter portfolios or strategies based on a single style of investing. That means you’re getting the same advice as everyone else, regardless of your situation. While other managers may consider just your age or risk tolerance, we learn about your goals, financial needs, health, age, family circumstances and more. We approach communications differently, too. You’ll hear from us regularly not just when markets are doing well. While other money managers may avoid your calls when markets are turbulent, we’ll be in touch, letting you know what’s happening with your portfolio.</p>
                                        </div>
                                    </div>
                                </div>
                                                         <div class="panel panel-default active">
                                    <div class="panel-heading" role="tab">
                                        
                                            <h4 class="panel-title"> <a href="#domainsTabQ13" role="button" data-toggle="collapse" data-parent="#accordion4" aria-expanded="false" class="collapsed"> What services does {{$compd? $compd->companyname :"company name"}} provide? <i class="fa fa-minus"></i> </a></h4> 
                                    </div>
                                    <div id="domainsTabQ13" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p> Through tailored portfolio management, we help high net worth individuals and institutions around the world reach their long-term financial goals. As a client, you will benefit from a comprehensive, personalized financial plan helping you confidently save, spend and invest. Communication and service are tailored to your needs. In addition, we can help with financial planning, budgeting, cash-flow analysis, estate tax planning and strategies for maximizing Social Security benefits. Beyond investing and financial planning, we want to help make you a more comfortable, disciplined and informed investor. That’s why you’ll have a dedicated Investment Counselor to help you understand what’s going on in your account and why.</p>
                                        </div>
                                    </div>
                                </div>
                                                         <div class="panel panel-default active">
                                    <div class="panel-heading" role="tab">
                                        
                                            <h4 class="panel-title"> <a href="#domainsTabQ12" role="button" data-toggle="collapse" data-parent="#accordion4" aria-expanded="false" class="collapsed"> What is {{$compd? $compd->companyname :"company name"}}s’ approach to investing? <i class="fa fa-minus"></i> </a></h4> 
                                    </div>
                                    <div id="domainsTabQ12" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p> We take an active, disciplined and global approach to managing money. We learn about your unique goals and needs so we can create a personalized portfolio for you. Your investment objectives and our market outlook help determine your asset allocation your mix of stocks, bonds, cash or other securities. As market conditions or your needs change, we may adjust your asset allocation to keep your portfolio positioned to meet your long-term objectives. We meticulously analyze markets, identify attractive investment categories and then choose individual stocks, bonds or other securities for your portfolio. We search the world for investing opportunities because a diversified portfolio can help you achieve your goals sooner. Our personalized, disciplined and global approach to managing money has helped our more than 96,000 clients worldwide plan for their financial future with confidence.</p>
                                        </div>
                                    </div>
                                </div>
                                                         <div class="panel panel-default active">
                                    <div class="panel-heading" role="tab">
                                        
                                            <h4 class="panel-title"> <a href="#domainsTabQ11" role="button" data-toggle="collapse" data-parent="#accordion4" aria-expanded="false" class="collapsed"> What is {{$compd? $compd->companyname :"company name"}} fee structure? <i class="fa fa-minus"></i> </a></h4> 
                                    </div>
                                    <div id="domainsTabQ11" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p> Unlike some money managers, we don’t earn commissions on trades. Instead, we use a tiered fee structure that’s based on your portfolio’s size. This means we’re always focused on your best interests, and when you do better we do better.</p>
                                        </div>
                                    </div>
                                </div>
                                                         <div class="panel panel-default active">
                                    <div class="panel-heading" role="tab">
                                        
                                            <h4 class="panel-title"> <a href="#domainsTabQ10" role="button" data-toggle="collapse" data-parent="#accordion4" aria-expanded="false" class="collapsed"> What is {{$compd? $compd->companyname :"company name"}} performance history? <i class="fa fa-minus"></i> </a></h4> 
                                    </div>
                                    <div id="domainsTabQ10" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p> We are proud of our performance history. In 2000, David William Davies founded {{$compd? $compd->companyname :"company name"}} and began managing discretionary assets with a fundamental belief in capitalism and free capital markets. We start with the simple notion that supply and demand are the sole determinants of securities pricing. In addition, we believe capital markets are relatively efficient discounters of all widely known information. 
Thus, to add value through active management, one must identify information not widely known 
or interpret widely known information differently and correctly from other market participants. Throughout our history, we have continuously developed ways to look at capital markets differently.

Our research has led us to develop practical applications of behavioral finance in our portfolio management process may sound surprising, but not all money managers take such a disciplined approach to measuring or advertising performance. That’s why we urge investors to remember past performance is not indicative of future results and should only be one of many considerations when choosing a money manager. You should also weigh the quality of service and advice and if the business is structured to put your needs first. In addition, we have dedicated significant resources to the emerging field of behavioral finance to better understand not just the tools of finance, but also how investors use these tools.</p>
                                        </div>
                                    </div>
                                </div>
                                                         <div class="panel panel-default active">
                                    <div class="panel-heading" role="tab">
                                        
                                            <h4 class="panel-title"> <a href="#domainsTabQ9" role="button" data-toggle="collapse" data-parent="#accordion4" aria-expanded="false" class="collapsed"> What is the minimum to become a client? <i class="fa fa-minus"></i> </a></h4> 
                                    </div>
                                    <div id="domainsTabQ9" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p> {{$compd? $compd->companyname :"company name"}} ocuses on high net worth individuals with investable assets. When you start, we saw an opportunity to help an underserved market with different needs than other investors. We’re dedicated to serving clients who have worked hard throughout their lives with investing advice, tailored solutions and ongoing support.</p>
                                        </div>
                                    </div>
                                </div>
                                                         <div class="panel panel-default active">
                                    <div class="panel-heading" role="tab">
                                        
                                            <h4 class="panel-title"> <a href="#domainsTabQ8" role="button" data-toggle="collapse" data-parent="#accordion4" aria-expanded="false" class="collapsed"> How do I become a client? <i class="fa fa-minus"></i> </a></h4> 
                                    </div>
                                    <div id="domainsTabQ8" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p> We will guide you through every step of becoming a new client. Our hands-on approach respects your time, keeps you informed and reduces the amount of paperwork you need to fill out.</p>
                                        </div>
                                    </div>
                                </div>
                                                         <div class="panel panel-default active">
                                    <div class="panel-heading" role="tab">
                                        
                                            <h4 class="panel-title"> <a href="#domainsTabQ7" role="button" data-toggle="collapse" data-parent="#accordion4" aria-expanded="false" class="collapsed"> What types of investments does {{$compd? $compd->companyname :"company name"}} hold for clients? <i class="fa fa-minus"></i> </a></h4> 
                                    </div>
                                    <div id="domainsTabQ7" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p> We primarily invest in domestic and foreign common stocks, fixed income securities, real estate, crypto currency and other derivatives that can include leverage. We also sometimes use hedging instruments such as short equity positions and options when it’s appropriate given your situation and current market conditions. Your long-term financial goals always determine our investment choices.</p>
                                        </div>
                                    </div>
                                </div>
                                                         <div class="panel panel-default active">
                                    <div class="panel-heading" role="tab">
                                        
                                            <h4 class="panel-title"> <a href="#domainsTabQ5" role="button" data-toggle="collapse" data-parent="#accordion4" aria-expanded="false" class="collapsed"> How does {{$compd? $compd->companyname :"company name"}} protect client accounts? <i class="fa fa-minus"></i> </a></h4> 
                                    </div>
                                    <div id="domainsTabQ5" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p> We take your security and privacy seriously and have implemented numerous layers of security measures for you.
When you invest with {{$compd? $compd->companyname :"company name"}}, we manage your investments, but your assets are held by a third-party custodian. Using a third-party custodian helps in reducing conflicts of interest and promotes transparency.
In addition, employees are supported by comprehensive data management systems and security policies to protect client data from external and internal threats
Lastly, rest assured we never share or sell your name for marketing purposes.</p>
                                        </div>
                                    </div>
                                </div>
                                                 </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
          </div>
        </div>
      </div>
    </section> 

</div>

<!-- Online Section End -->

<div class="clearfix"></div>

@endsection()
