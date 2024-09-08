@extends('layouts.customlayout')
<link rel="stylesheet" href="{{ asset('assets/css/newhomecss/min.css') }}">
<style>

</style>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

@section('body')
    <div class="main-content">

        <!--header section start-->
       <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li>Team</li>
        </ol>
        <h2>A Team Redefining The Game</h2>
<p>Solving Critical market challenges</p>
      </div>
    </section><!-- End Breadcrumbs -->


        <!--about us page content start-->
        <section class="section-padding about-us-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Deep within the core of Aspen Financial Management, an assembly of financial virtuosos converges, our collective knowledge is a tapestry woven from years of honing skills in advanced financial modeling, quantitative analysis, and econometric techniques. Armed with a nuanced understanding of derivatives pricing, stochastic calculus, and volatility surface dynamics, our team sculpts investment strategies with the precision of a master sculptor. Our experts, fluent in the intricacies of modern portfolio theory and the complexities of efficient frontier optimization, deftly navigate the labyrinth of financial markets, discerning alpha from beta with the discerning eye of a connoisseur.
                            </p>
                            <p>
                                
In parallel, our board members, luminaries drawn from private equity, venture capital, and alternative asset management, bring a wealth of experience in crafting bespoke investment structures. With our expertise in structured finance, mezzanine financing, and venture capital valuation methods, we offer invaluable insights into structuring deals that not only mitigate risk but also amplify potential returns. Aspen Financial Management’s strategic counsel extends to capital raising strategies, syndication of investments, and divestiture tactics, ensuring that our clients benefit from a holistic approach to wealth preservation and growth.
                            </p>

<p>
The symphony of financial minds culminates in an environment where every investment decision is an intricate dance of prudence, strategy, and finesse. Through the combined expertise of our team and board members, Aspen Financial Management stands at the forefront of financial innovation, where the pursuit of alpha is an art form, and the preservation of capital is a solemn commitment. Our clients trust us not just with their wealth, but with their financial legacies, knowing that every decision is underpinned by a reservoir of knowledge and experience that transcends the ordinary and achieves the extraordinary.
                        </p>
                    </div>
                </div>


                <div class="row">


                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px;"
                                        src="{{ asset('assets/images/team/AspenMatthew.PNG') }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"> Matthew Amelio</h4>
                                <h6 class="card-category text-muted">Principal</h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-dark accordy" id="2">Read Bio</button>



                                <!--dropdown-->
                                <div class="panel" id="2">
                                    <p class="card-description">
                                    Matthew Amelio has vast experience in the financial services industry spanning over 47
                                        years and In order to reach our full potential, he leverages on our blend of
                                        different people, backgrounds and experiences to create value for our employees,
                                        shareholders and investors. This unique blend of perspectives enhances our culture,
                                        builds our commitment to our surrounding community and fuels our innovation. At the
                                        end of the day, our business is about the people with whom we work and how we
                                        motivate each other to achieve our goals.
                                        <br>
                                         Matthew F Amelio built and strengthens relationships with Investors, shareholders and
                                        organizations by assisting them in multi-generational wealth management.  Embracing
                                        technology  Matthew F Amelio employs a strategy-based approach in helping Aspen's clients address
                                        their complex financial needs, focusing on retirement planning, assets management,
                                        education funding, capital growth, tax minimization strategies, and estate planning
                                        service.  Matthew F Amelio has been committed to designing tax-efficient strategies, constructed
                                        to help clients pursue desired results while building, managing, and preserving
                                        their wealth and also ensure the Fund's target is hit anually through experienced
                                        leadership .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--first-->

                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img" style="border: 2px solid white; border-radius: 50%;width:55%;"
                                        src="{{ asset('assets/images/team/AspenMichael.PNG') }}">
                                </a>
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title">Michael McCain</h4>
                                <h6 class="card-category text-muted">Principal</h6>

                                <!--buttonforreadnnore-->

                                <button class="btn btn-dark accordy" id="1">Read Bio</button>



                                <!--dropdown-->
                                <div class="panel" id="1">
                                    <p class="card-description">
                                        Michael McCain is an excellent adviser and board member. Having been one of the
                                        founding members of Aspen financial along side his old long friend  Matthew F Amelio jang they've
                                        both had immerse impact in terms of company growth.
                                        Michael has been able to create a strong and lasting impact with his ability to
                                        bring resources and solutions to different forms of problems.
                                        Michael saw the vision  Matthew F Amelio had and ensured it was materialized, he brought over 18
                                        institutional clients and over 80 private clients both in US and international. His
                                        job role is acting as an overhead managerial position, and guides and assists the
                                        firm where necessary towards achieving our goals.</p>
                                </div>



                            </div>
                        </div>
                    </div>

                    <!--sallylinsay-->

                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px;  "
                                        src="{{ asset('assets/images/team/Aspen Shihad.PNG') }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Shihad Hussain</h4>
                                <h6 class="card-category text-muted"> Principal</h6>
                                <button class="btn btn-dark accordy" id="3">Read Bio</button>


                                <!--dropdown-->
                                <div class="panel" id="3">
                                    <p class="card-description">
                                        Shihad Hussain with over 23 years experience as a marketer and expert strategist, He
                                        Co-founded Aspen financial management. With the involvement of Hussain, Aspen
                                        Financial has been able to reach a variety of clientele and manage them
                                        appropriately this has been due to his contributions in the marketing and strategy
                                        sector. Just like any other company, marketing is a very serious and delicate
                                        position. So Hussain majorly responsible for all marketing and strategy activities.
                                        Due to his continuous and relentless effort towards growing Aspen Financial, He has
                                        been able to achieve credible feats and is also responsible for the immerse growth
                                        in our clientele list and the company's continual guidance and growth in our
                                        marketing division.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">



                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img" style="border: 2px solid white; border-radius: 50%;width:47%;"
                                        src="{{ asset('assets/images/team/Aspen Edwards.JPG') }}">
                                </a>
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title">Edwards A Wasa</h4>
                                <h6 class="card-category text-muted"> Chief executive officer</h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-dark accordy" id="4">Read Bio</button>




                                <!--dropdown-->
                                <div class="panel" id="4">
                                    <p class="card-description">

                                     Wasa is the chief Executive officer of Aspen financial Management,
                                        which is now a $165 billion+ investment establishment and assets management firm
                                        serving large institutions and high net worth individuals globally. Wasa
                                         has been with the firm since its inception, and has worked his way through to
                                        the top with his continuous hardwork. By elite standards, it is a world’s largest
                                        pure ‘40 Act Investment Adviser firm. His prestigious Bloomberg article
                                        “diversifying your portfolio” column ran monthly for six months until 12/31/2016,
                                        making Wasa one of the longest running columnist in the magazine’s history. An
                                        inspirational leader and insightful who embodies our firms core beliefs and values.
                                        He is an experienced senior portfolio manager with a demonstrated history.

                                        He writes monthly, native-language columns in major media organs spanning Western
                                        Europe and Asia, including Germany’s Focus Money; Switzerland’s leading business
                                        paper, Handelszeitung; Singapore largest business website and newspaper,business
                                        insider; the Hong Kong Economic Journal;and Singapore’s The Business Times.
                                        His 1990s’ theoretical work pioneered an investment analysis tool called the
                                        Price-to-Sales Ratio, now a core part of financial curriculum. His credits span a
                                        multitude of professional and scholarly journals. He is a recipient of the
                                        Fabozzi/Jacobs Levy Award for outstanding research in the Journal of Portfolio
                                        Management.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>



                    <!--second-->




                    <!--third-->


                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="{{ asset('assets/images/team/AspenRichard.JPG') }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Richard D Lam</h4>
                                <h6 class="card-category text-muted">Chief Executive Officer
                                </h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-dark accordy" id="5">Read Bio</button>







                                <!--dropdown-->
                                <div class="panel" id="5">
                                    <p class="card-description">
                                         Lam, Vice President, Director and a member of
                                        {{ $compd ? $compd->companyname : 'company name' }}’s Global Executive Committee
                                        and
                                        directs the firm’s day-to-day operations and oversees its four success business
                                        units: US Private Client, Institutional, Private Client International and 401(k)
                                        Solutions.
                                        He is also responsible for day-to-day oversight of all
                                        {{ $compd ? $compd->companyname : 'company name' }}’s key operating units
                                        including
                                        Investment Strategies, Client Businesses, Blockchain Technology Management,
                                        Technology & Operations, and Risk & Quantitative Analysis.
                                        He joined Aspen financial managment in 2003 and has since held a variety of roles.
                                        From 2007 to 2012, he served as Co-President and from 2012 to 2016 as President of
                                        Client Acquisition and Service. Lam has been an Executive Officer and member of
                                        the firm’s Board of Managers since 2005.
                                        He speaks at client seminars nationally, where he provides insights on current
                                        market conditions and portfolio positioning. He is a member of The Wall Street
                                        Journal CEO Council and the prominent G100 Network of chief executive officers.
                                        Lam regularly publishes articles in various industry publications, including FT
                                        Adviser, Financial Advisor, Advisor Perspectives, Financial Advisor IQ, FE Trustnet
                                        and Investment News.Education -  Lam earned a BS degree in economics
                                        from the Wharton School of the University of Pennsylvania in 1979, and an MBA degree
                                        from Harvard Business School in 1983.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="{{asset('assets/images/team/AspenStella.PNG')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Stella Harris </h4>
                                <h6 class="card-category text-muted">Chief Financial Officer</h6>
                                <button class="btn btn-dark accordy" id="6">Read Bio</button>


                                <!--dropdown-->
                                <div class="panel" id="6">
                                    <p class="card-description">

                                        Stella Harris has over 12 years of experience in Real Estate Consultancy with a
                                        demonstrated history of working in the real estate industry. Skilled in Accounting,
                                        Investment Properties, Financial Accounting, Marketing, and Working with top
                                        Investors in business and finance. Before joining Aspen financial management, Stella
                                        Harris was influential in redefining the Real Estate industry and creating an
                                        execution plan that became the preeminent strategic priority. Stella Harris also
                                        served as the Real Estate Consultant of Lincoln property Company ATL, following the
                                        acquisitions Stella Harris also led a successful integration to drive synergies and
                                        profitable growth. Stella Harris spent the first 5 years of her career advising
                                        clients in M&A, restructuring, liquidity optimization, and audit. She holds a
                                        Bachelors's degree in Finance from the University of California, Los Angeles, and a
                                        Masters's degree in Accountancy from Boston University. </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">


<!--MD-->
                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px; 
height:180px;"
                                        src="{{asset('assets/images/team/Aspen Mark.JPG')}}">
                                </a>
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title"> Mark Degiorgio</h4>
                                <h6 class="card-category text-muted"> Managing Director</h6>

                                <!--buttonforreadnnore-->

                                <button class="btn btn-dark accordy" id="9">Read Bio</button>


                                <!--dropdown-->
                                <div class="panel" id="9">
                                    <p class="card-description">

                                        Mark joined Aspen Financial Management at its inception, Mark was previously a
                                        Logistician in the US Army. Mark is a strategic and experienced Managing Director
                                        and accountant specializing in profitable business growth and Magine improvement
                                        integrating marketing creativity with finance discipline achieving success across
                                        multiple industry verticals. Mark is known for identifying and implementing various
                                        strategies to promote financial security and accurate reporting to capture market
                                        anomalies while maintaining a business mindset beyond portfolio management.
                                        Mark has served on the Board of Directors of numerous companies, including Barfield
                                        and Powell. Mark is a graduate of the University of Virginia where he earned a
                                        bachelor's of commerce in Human Resource Management and a master's of business
                                        administration at the University of Los Angeles.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!--second-->




                    <!--third-->


                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px;"
                                        src="{{asset('assets/images/team/AspenEmily.PNG')}}">
                                </a>
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title">Emily A Restine</h4>
                                <h6 class="card-category text-muted">Head of Portfolio Management</h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-dark accordy" id="8">Read Bio</button>




                                <!--dropdown-->
                                <div class="panel" id="8">
                                    <p class="card-description">
                                        Emily Restine

                                        Emily Restine is an Experienced Portfolio Manager. In those roles, she oversees the
                                        firm's Portfolio Management Department, which includes the Research, Investment
                                        Operations, Investment Solutions and Portfolio Evaluation Groups. She is also a
                                        member of the Technology Transformation Committee. Emily speaks regularly at client
                                        seminars and meets with institutional clients globally, providing information
                                        regarding market outlook, portfolio positioning and global economic factors. Emily
                                        joined Aspen financial Management in 2016 and has served on the firm's five-member
                                        IPC since 2015. Prior to her current responsibilities, She held several different
                                        positions at the firm, including Capital Markets Research Team Leader, Securities
                                        Research Team Leader and Securities Research Analyst. She has a degree in Finance
                                        from the University of Arizona. She used lived in the San Francisco Bay Area with
                                        her husband till he passed. </p>
                                </div>
                            </div>
                        </div>
                    </div>



<!--SEC-->

                    <div class="col-md-4">


                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="{{asset('assets/images/team/AspenChenglei.JPG')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Chenglei Hendrix</h4>
                                <h6 class="card-category text-muted">Secretary</h6>
                                <button class="btn btn-dark accordy" id="7">Read Bio</button>




                                <!--dropdown-->
                                <div class="panel" id="7">
                                    <p class="card-description">

                                        Chenglei Hendrix is the chief secretary at Aspen financial management. In that role,
                                        mike is responsible for all meeting Arrangements made between all Institutional
                                        management and Aspen private U.S clients. He is also responsible for making meeting
                                        arrangements between the company, and all it's clients. He is responsible for making
                                        all parties involved in a meeting get the invite ad he's also responsible for
                                        introducing the parties involved in a formal meeting. Hendrix also ensures the
                                        meeting schedules are not overloaded with agendas to discuss within a specific time
                                        frame, and also distributes the minutes of the meeting to all present in a meeting.
                                        Hendrix started the early part of his career as the assistant to a project manager
                                        at Blueguide capital. After which he headed to working as an accountant working
                                        privately as a consultant in a variety of support roles. Hendrix regularly meets
                                        with our institutional clients and private US client to keep them informed of our
                                        progress on their various por
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="row">



                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%; width:50%; height:180px;"
                                        src="{{asset('assets/images/team/evelyn.jpg')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Evelyn D Chow</h4>
                                <h6 class="card-category text-muted">Certified Financial analyst
                                </h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-dark accordy " id="10">Read Bio</button>



                                <!--dropdown-->
                                <div class="panel" id="10">
                                    <p class="card-description">

                                        Evelyn D. chow, Risk Analyst, Co-Portfolio Manager with a demonstrated history of
                                        analysis and trading in the finance market, highly skilled in Risk Management,
                                        Investment analysis, Portfolio Management, where she oversees the firm’s Portfolio
                                        Management Department, which includes the Research, Investment, Operations and
                                        Investment Solutions. Mrs. Evelyn started her career at Aspen Financial Management
                                        in 2016 and was previously an Analyst at Neuberger Berman Prior affiliations include
                                        Goldman Sachs where she was responsible for developing investment strategies for the
                                        taxable core and asset-liability portfolios, Contract Negotiation and Asset
                                        Management. She received her strong finance professional with a Master’s Degree
                                        focused in Business Managerial Economics from Baruch College.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>



                    <!--second-->




                    <!--third-->


 <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px;"
                                        src="{{asset('assets/images/team/Aspen Charles.PNG')}}">
                                </a>
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title">Charles H Ferry Jr</h4>
                                <h6 class="card-category text-muted">Certified Retirement Financial Advisor</h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-dark accordy" id="15">Read Bio</button>
                                <!--dropdown-->
                                <div class="panel"id="15">
                                    
                                    
                                                                        <p class="card-description">
                                        Charles H Ferry is a Certified Retirement Financial Advisor and a member of the
                                        Investment Policy Committee (IPC). He oversees the firm’s Retirement plan offers And
                                        carries out Researches about, Investment Operations, Investment Solutions, Global
                                        Custody Management, and Portfolio Evaluation Groups. He is also a member of the
                                        Client Services Group. Mark speaks regularly at client seminars and meets with
                                        institutional clients globally, providing information regarding a perfect retirement
                                        approach. Charles H Ferry joined Aspen Financial Managment in May 2012 and has been an
                                        invaluable asset to the company. Before his current responsibilities, Mark held
                                        several different positions at the firm, including Retirement Portfolio Research
                                        Team Leader, Retirement Portfolio Strategist and Analyst. Mark has a degree in
                                        Finance from the University of San Francisco and a degree in Human Resources
                                        Management.</p>

                                    
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="{{asset('assets/images/team/Aspen Courtney.PNG')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Courtney Lockett</h4>
                                <h6 class="card-category text-muted"> Senior Portfolio Manager
                                </h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-dark accordy" id="12">Read Bio</button>

                                <!--dropdown-->
                                <div class="panel" id="12">
                                    <p class="card-description">

                                        Courtney Lockett was the Chief
                                        Financial Officer at Gramercy Funds Management, for which she also shared senior
                                        management responsibility. She managed a team that originated loans across the
                                        United North America, Europe and Asia. She is the Senior Portfolio Manager at Aspen
                                        Financial management
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">



                    <div class="col-md-4">

                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="{{asset('assets/images/team/AspenSusan.PNG')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Susan Grilo </h4>
                                <h6 class="card-category text-muted">Head of Customer and Private Client services
                                </h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-dark accordy" id="13">Read Bio</button>


                                <!--dropdown-->
                                <div class="panel" id="13">
                                    <p class="card-description">

                                        Grilo Susan is the Executive Vice President of the American and International
                                        Private Client Services Group. In that role, Susan is responsible for all service
                                        and support, personalized financial services and products offered to the
                                        high-net-worth individual clients. Susan initially joined Aspen Financial Management
                                        in 2015(ON CONTRACT) and has held a variety of roles at the firm She spent the
                                        early part of her career as an Accountant, working directly with private clients,
                                        and in a variety of support roles. She then held managerial roles in Client Programs
                                        and thereafter served as a Group Vice President in charge of Investment Counselors
                                        and Client Programs. Susan regularly meets with private clients nationwide, sharing
                                        the firm’s market outlook, presenting current portfolio positioning and answering
                                        questions. She received her bachelors degree from the University of California, Los
                                        Angeles and a master’s of business administration from Grand Canyon University.</p>
                                </div>
                            </div>
                        </div>

                    </div>



                    <!--second-->




                    <!--third-->


                    <div class="col-md-4">

                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="{{asset('assets/images/team/guy.PNG')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Guy C. Sheeran</h4>
                                <h6 class="card-category text-muted">Senior Tech Lead</h6>
                                <button class="btn btn-dark accordy" id="14">Read Bio</button>



                                <!--dropdown-->
                                <div class="panel" id="14">
                                    <p class="card-description">
                                        Guy C. Sheeran is the Senior technical lead at Aspen financial management. He is an
                                        Insightful information Technology Manager with 14 years of (I.T) Leadership
                                        experience including oversight of infrastructure, application support and security
                                        services. Dedicated to customer satisfaction with focused delivery of technical
                                        solutions. Proven leader in directing operations, maintenance and support of complex
                                        systems.

                                        Develops creative business solutions, leveraging diverse methodologies and
                                        delivering engineering solutions for leading organizations. Highly adept in request
                                        for proposal development, technology needs assessments and staff training. ..(name)
                                        has guided implementation of company-wide enterprise security strategy for network
                                        and hardware, disaster recovery, data protection and end point protection. Sheeran
                                        also analyze network security and current infrastructure to asses areas in need of
                                        improvement and develop solutions.

                                        He received a bachelor of science degree at University of Oslo, Norway and a masters
                                        degree at University of Texas at Dallas , USA.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                   <!--here-->
                   
                   
                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="{{asset('assets/images/team/Aspen Mark.PNG')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Mark Geller </h4>
                                <h6 class="card-category text-muted"> Digital specialist</h6>
                                <button class="btn btn-dark accordy" id="11">Read Bio</button>





                                <!--dropdown-->
                                <div class="panel" id="11">

                                                                            <p class="card-description">

                                        With over 10 years of experience in the digital world and project management
                                         Mark as the Digital Specialist's role is to design, create, and deliver
                                        marketing programs to support expansion and growth of the company services and
                                        products. Developing, managing and designing layouts of communications such as
                                        presentations, newsletters, event support materials, research papers, and brochures.
                                        Doubling as the project manager he oversees entire project and serve as a point of
                                        contact for a client or customer. He coordinates work, identifies risks and
                                        mitigation plans, and handles budget strategies. Also helps set timeline estimates
                                        and ensure the needs of stakeholders are met.

                                        Before joining Aspen financial management, Mark has interned at WebFX and worked
                                        at Brainvire Infotech Inc.
                                        He holds a Bachelor’s degree from the Virginia Tech university, Virginia, and a
                                        master’s degree in Digital and project management from the Northern Illinois
                                        University.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
    </div>









    <!--dropdown-->
    {{-- <div class="panel">
  <p class="card-description"> 

Michelle Klaudi Clinton brings 10 years of extensive commercial real estate finance expertise to {{$compd? $compd->companyname :"company name"}}. Most recently, Michelle Klaudi Clinton was the National Originations Manager for Westwood Capital Real Estate Finance, for which she also shared senior management responsibility. She managed a team that originated loans across the United North America, Europe and Asia.

Education - She holds a B.A. from the University of Kentucky.
          </p>
        </div> --}}
    </div>
    </div>
    </div>







    <!--buttonforreadnnore-->





    <!--dropdown-->
    {{-- <div class="panel">
  <p class="card-description"> 
Grilo Susan is the Executive Vice President of the American and International Private Client Services Group. In that role, Susan is responsible for all service and support, personalized financial services and products offered to the high-net-worth individual clients. Susan initially joined {{$compd? $compd->companyname :"company name"}} in 2015(ON CONTRACT) and has held a variety of roles at the firm
<br>

She spent the early part of her career as an Accountant, working directly with private clients, and in a variety of support roles. She then held managerial roles in Client Programs and thereafter served as a Group Vice President in charge of Investment Counselors and Client Programs. Susan regularly meets with private clients nationwide, sharing the firm’s market outlook, presenting current portfolio positioning and answering questions. She received her bachelors degree from the University of California, Los Angeles and a master’s of business administration from Grand Canyon University.<br><br>


</p>
</div> --}}



    </div>
    </div>
    </div>
    </div>




    <!--buttonforreadnnore-->




    </div>
    <!--</div>-->

    <!--</div>-->
    </section>





    <script>
        let showEl = document.querySelectorAll(".accordy");
        let information = document.querySelectorAll(".panel");
        showEl.forEach((element) => {
            element.addEventListener("click", function(e) {
                information.forEach((info) => {
                    if (e.target.id == info.id) {
                        info.classList.toggle("file");
                    } else {
                        info.classList.remove("file");
                    }
                });
            });
        });

        // var acc = document.getElementsByClassName("accordy");
        // var i;

        // for (i = 0; i < acc.length; i++) {
        //     acc[i].addEventListener("click", function() {
        //         this.classList.toggle("active");
        //         var panel = this.nextElementSibling;
        //         if (panel.style.display === "block") {
        //             panel.style.display = "none";
        //         } else {
        //             panel.style.display = "block";
        //         }
        //     });
        // }
    </script>



    </div>

    <!-- Online Section End -->

    <div class="clearfix"></div>
@endsection
