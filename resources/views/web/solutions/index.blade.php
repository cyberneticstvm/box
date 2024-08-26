@extends("web.base")
@section("webcontent")
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Packers and Movers</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Packers and Movers</li>
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
                                    <img class="w-100" src="{{ asset('/web/assets/img/service/service1.png') }}" alt="service">
                                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
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

                        <h3 class="h4 mb-20">Benefits With Our Service</h3>

                        <div class="service-feature-wrap">
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('/web/assets/img/icon/service_feature_1.svg') }}" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h4 class="service-feature_title">Flexible Solutions</h4>
                                    <p class="service-feature_text">Completely grow multimedia based content before global scenarios.</p>
                                </div>
                            </div>
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('/web/assets/img/icon/service_feature_2.svg') }}" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h4 class="service-feature_title">24/7 Unlimited Support</h4>
                                    <p class="service-feature_text">Completely grow multimedia based content before global scenarios.</p>
                                </div>
                            </div>
                        </div>

                        <h3 class="h4 mt-35 mb-4">Questions About Service</h3>
                        <div class="accordion-area accordion" id="faqAccordion">


                            <div class="accordion-card style2 active">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Where can I get analytics help?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Synergistically evisculate ubiquitous niches whereas holistic resources. Assertively evolve prospective methods of empowerment before diverse web-readiness. Seamlessly incentivize market-driven schemas rather than clicks-and-mortar benefits.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">How long should a business plan be?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Synergistically evisculate ubiquitous niches whereas holistic resources. Assertively evolve prospective methods of empowerment before diverse web-readiness. Seamlessly incentivize market-driven schemas rather than clicks-and-mortar benefits.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How To Choose A Good QA Consultant?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Synergistically evisculate ubiquitous niches whereas holistic resources. Assertively evolve prospective methods of empowerment before diverse web-readiness. Seamlessly incentivize market-driven schemas rather than clicks-and-mortar benefits.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_nav_menu  ">
                        <h3 class="widget_title">All Services</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('services') }}">Household Storage</a></li>
                                <li><a href="{{ route('services') }}">Box Storage</a></li>
                                <li><a href="{{ route('services') }}">Office Storage</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget widget_download  ">
                        <h4 class="widget_title">Download Brochure</h4>
                        <div class="download-widget-wrap">
                            <a href="service-details.html" class="th-btn"><i class="fa-light fa-file-pdf me-2"></i>DOWNLOAD PDF</a>
                            <a href="service-details.html" class="th-btn style5"><i class="fa-light fa-file-lines me-2"></i>DOWNLOAD DOC</a>
                        </div>
                    </div>
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