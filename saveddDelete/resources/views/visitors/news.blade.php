@extends('layouts.spacedcustomlayout')
<style>
    .widget2 {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    
        margin-bottom: 40px
    }
</style>

@section('body')
    <div class="main-content">

        <!--header section start-->
        <section class="breadcrumb-section" style="background-image: url('assets/images/news.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- breadcrumb Section Start -->
                        <div class="breadcrumb-content">
                            <h5>BUSINESS AND STOCKS</h5>
                        </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        </section>
        <div class="widget2">
            <iframe width="100%" scrolling="yes" allowtransparency="true" frameborder="0" src="https://cryptopanic.com/widgets/news/?bg_color=FFFFFF&amp;font_family=sans&amp;header_bg_color=30343B&amp;header_text_color=FFFFFF&amp;link_color=0091C2&amp;news_feed=recent&amp;text_color=333333&amp;title=Latest%20News" height="350px"></iframe>
        </div>
        <div class="clearfix"></div>
        
    @endsection
