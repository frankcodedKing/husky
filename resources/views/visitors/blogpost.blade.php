@php
    use Illuminate\Support\Str;
@endphp


@extends('layouts.customlayout')



@section('body')
    <div class="main-content">

        <!--header section start-->
        <!-- <section class="breadcrumb-section" style="background-image: url('assets/images/news.jpg')"> -->
        
        
        
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li>Latest News</li>
        </ol>
        <h2>Latest News</h2>

      </div>
    </section><!-- End Breadcrumbs -->


            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                    <br> <br> <br> <br>
                    <div class="row">
                <!-- Blog entries-->

                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{ $post->heading }}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on {{ $post->created_at->format('F j, Y') }} , by Admin</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Crypto</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Bitcoin ETF</a>
                        </header>
                        <!-- Preview image figure-->
                        <!-- <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..."></figure> -->
                        <!-- Post content-->
                        <section class="mb-5">
                            
                            <p class="fs-5 mb-4"> {{ $post->content }}</p>
                        </section>
                    </article>
                    <!-- Comments section-->
                   
                </div>

                <!-- HERE  -->



                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search">
                                <button class="btn btn-success" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                 
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <!-- <div class="card-header">Side Widget</div> -->
                        <!-- <div class="card-body"> -->
<div _ngcontent-serverapp-c123="" adsense="" class="mb-4 carbon-inverse carbon-container" style="height: auto !important;"><ins _ngcontent-serverapp-c123="" class="adsbygoogle" data-ad-client="ca-pub-5287323383309901" data-ad-format="auto" data-full-width-responsi="=&quot;tru" style="display: block; height: 280px;" data-adsbygoogle-status="done" data-ad-status="filled"><div id="aswift_2_host" style="border: none; height: 280px; width: 356px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;" tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_2" name="aswift_2" browsingtopics="true" style="left:0;position:absolute;top:0;border:0;width:356px;height:280px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="356" height="280" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allow="attribution-reporting" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-5287323383309901&amp;output=html&amp;h=280&amp;adk=3781616413&amp;adf=3975395853&amp;w=356&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1705674315&amp;rafmt=1&amp;format=356x280&amp;url=https%3A%2F%2Fstartbootstrap.com%2Ftemplate%2Fblog-home&amp;fwr=0&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTUuMC4wIiwieDg2IiwiIiwiMTIwLjAuNjA5OS4yMjUiLG51bGwsMCxudWxsLCI2NCIsW1siTm90X0EgQnJhbmQiLCI4LjAuMC4wIl0sWyJDaHJvbWl1bSIsIjEyMC4wLjYwOTkuMjI1Il0sWyJHb29nbGUgQ2hyb21lIiwiMTIwLjAuNjA5OS4yMjUiXV0sMF0.&amp;dt=1705674315295&amp;bpp=1&amp;bdt=12273&amp;idt=0&amp;shv=r20240118&amp;mjsv=m202401110101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Deb3101a809edc7e5%3AT%3D1701536108%3ART%3D1705670518%3AS%3DALNI_MaZ1liVSbgKLOQhDx-wNe6mZ_y6Iw&amp;gpic=UID%3D00000ce256ce70ad%3AT%3D1701536108%3ART%3D1705670518%3AS%3DALNI_Ma832oHTRwtSHbQGRqEcKCIod7R7w&amp;prev_fmts=0x0%2C736x280&amp;nras=1&amp;correlator=6813768289305&amp;frm=20&amp;pv=1&amp;ga_vid=739993877.1705665387&amp;ga_sid=1705674313&amp;ga_hid=512800144&amp;ga_fc=1&amp;u_tz=60&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=720&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=877&amp;ady=234&amp;biw=1349&amp;bih=633&amp;scr_x=0&amp;scr_y=0&amp;eid=95320239%2C44759876%2C44759927%2C95322183%2C95320868%2C95321627%2C95321966%2C95322162%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=922404456809614&amp;tmod=1655183388&amp;uas=0&amp;nvt=3&amp;ref=https%3A%2F%2Fstartbootstrap.com%2Ftemplates%2Fblog-news&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C720%2C1366%2C633&amp;vis=2&amp;rsz=%7C%7CeEr%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCwibGFiZWxfb25seV80IiwxXQ..&amp;nt=1&amp;ifi=3&amp;uci=a!3&amp;fsb=1&amp;dtd=117" data-google-container-id="a!3" data-google-query-id="CJ6Fxv3T6YMDFYNjFQgdsosOjA" data-load-complete="true"></iframe></div></ins></div>                        </div>
                    <!-- </div> -->
                </div>
            </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        <!-- </section> -->
        <div class="widget2">

    </div>
        <div class="clearfix"></div>
        
    @endsection
