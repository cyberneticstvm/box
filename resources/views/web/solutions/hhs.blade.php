@extends("web.base")
@section("webcontent")
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Household Storage</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Household Storage</li>
            </ul>
        </div>
    </div>
</div><!--==============================
    Project Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="page-single">
                    <div class="page-img">
                        <img src="{{ asset('/web/assets/img/service/1.png') }}" alt="Service Image">
                    </div>
                    <div class="page-content">
                        <h2 class="h3 page-title">House hold furniture storage</h2>
                        <p>Relocating, moving,decluttering or renovating your house and in need of storing your household items some where ,safe secure,clean,dry and cost effective. </p>
                        <p class="mb-30">Movenstore is is your one stop logistic partner just simply call or text us our expert team will be at your step to provide free assessment and will quote you on the spot based on your items once accepted we will dismantle, pack,mark and store your goods in our secure facilities normally our clients store the following hold items with us </p>

                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="th-video">
                                    <img class="w-100" src="{{ asset('/web/assets/img/service/house.png') }}" alt="service">
                                    <!--<a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>-->
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <h3 class="h4 mb-20">We Serve The Best Work</h3>
                                <div class="checklist style3">
                                    <ul>
                                        <li><i class="fas fa-octagon-check"></i> KITCHEN APPLIANCES</li>
                                        <li><i class="fas fa-octagon-check"></i> WASHING MACHINE/DRYER S</li>
                                        <li><i class="fas fa-octagon-check"></i>DINING TABLE AND CHAIRS </li>
                                        <li><i class="fas fa-octagon-check"></i> SOFAS </li>
                                        <li><i class="fas fa-octagon-check"></i> BOOKCASE </li>
                                        <li><i class="fas fa-octagon-check"></i> GARDEN FURNITURE ETC </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p class="mb-4">Our expert storage consultant will advise you on what type of storage is best and cost effective for you belongings.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_nav_menu  ">
                        <h3 class="widget_title">All Services</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('services.hhs') }}">Household Storage</a></li>
                                <li><a href="{{ route('services.bs') }}">Box Storage</a></li>
                                <li><a href="{{ route('services.os') }}">Office Storage</a></li>
                                <li><a href="{{ route('pandm') }}">Packers & Movers</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--<div class="widget widget_download  ">
                        <h4 class="widget_title">Download Brochure</h4>
                        <div class="download-widget-wrap">
                            <a href="service-details.html" class="th-btn"><i class="fa-light fa-file-pdf me-2"></i>DOWNLOAD PDF</a>
                            <a href="service-details.html" class="th-btn style5"><i class="fa-light fa-file-lines me-2"></i>DOWNLOAD DOC</a>
                        </div>
                    </div>-->
                    <div class="widget widget_banner  " data-bg-src="{{ asset('/web/assets/img/service/service2.png') }}">
                        <div class="widget-banner">
                            <span class="text">CONTACT US NOW</span>
                            <h2 class="title">You Need Help?</h2>
                            <a href="{{ route('contact') }}" class="th-btn style3">GET A QUOTE<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection("webcontent")