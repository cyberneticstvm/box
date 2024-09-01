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
                        <h2 class="h3 page-title">Seamless Relocation with Dubai’s Premier Movers and Packers</h2>
                        <p>Relocating, moving,decluttering or renovating your house and in need of storing your household items some where ,safe secure,clean,dry and cost effective. </p>
                        <p class="mb-30">Movenstore is is your one stop logistic partner just simply call or text us our expert team will be at your step to provide free assessment and will quote you on the spot based on your items once accepted we will dismantle, pack,mark and store your goods in our secure facilities normally our clients store the following hold items with us.</p>

                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <h3 class="h4 mb-20">Our comprehensive services include:</h3>
                                <div class="checklist style3">
                                    <ul>
                                        <li><i class="fas fa-octagon-check pe-2"></i><strong>Residential and Commercial Relocation:</strong> Expertise in moving homes, offices, and businesses of all sizes.</li>
                                        <li><i class="fas fa-octagon-check pe-2"></i><strong>Packing and Unpacking Services:</strong>High-quality packing materials and meticulous packing methods to protect your belongings.</li>
                                        <li><i class="fas fa-octagon-check pe-2"></i><strong>Furniture Disassembly and Reassembly:</strong> Professional handling of large furniture, ensuring it fits perfectly in your new space.</li>
                                        <li><i class="fas fa-octagon-check pe-2"></i><strong>Storage Solutions:</strong> Secure and flexible storage options for short-term and long-term needs.</li>
                                        <li><i class="fas fa-octagon-check pe-2"></i><strong>Specialized Moving Services:</strong> Handling delicate and valuable items, including artwork, antiques, and pianos.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p class="mb-4">What sets us apart is our unwavering commitment to customer service. We pride ourselves on delivering a moving experience that is not only efficient but also personalized to meet your unique requirements. Our customer support team is always available to assist you, ensuring clear communication and transparency throughout the moving process. From the initial consultation to the final delivery, we go above and beyond to make your move as smooth and stress-free as possible. Our dedication to excellence has earned us a reputation as one of Dubai’s leading movers and packers, trusted by countless satisfied customers.</p>
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