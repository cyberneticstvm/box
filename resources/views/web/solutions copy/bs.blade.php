@extends("web.base")
@section("webcontent")
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Box Storage</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Box Storage</li>
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
                        <h2 class="h3 page-title">Box Storage: Simplified and Convenient</h2>

                        <p>Box storage offers a streamlined approach to storing your belongings. The process begins with the box storage company delivering storage boxes and bubble wrap to your doorstep. After you pack your items securely, they will pick up the boxes the following day and transport them to a secure storage facility.</p>
                        <p class="mb-30">When you need your items returned, simply contact the company, and they will deliver your boxes back to you the next day. Charges are applied per box for both collection and return, ensuring a clear and manageable pricing structure.</p>

                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="th-video">
                                    <img class="w-100" src="{{ asset('/web/assets/img/service/box.png') }}" alt="service">
                                    <!--<a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>-->
                                </div>
                            </div>
                        </div>

                        <h3 class="h4 mt-35 mb-4">Why Choose Box Storage?</h3>
                        <div class="accordion-area accordion" id="faqAccordion">


                            <div class="accordion-card style2 active">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Convenience</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Box storage services bring the convenience of packing and storage directly to your door. You don’t need to transport your items to a storage facility; instead, the company handles the entire process. You can request the return of your boxes at a later date, and they will be delivered to your chosen location. This is ideal if you’re storing items that you don’t need immediate access to. Note that while in storage, you won't be able to access your belongings. Additionally, deliveries cannot be made directly to their storage facility, so all items must be collected and returned through the service.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Cost-Effectiveness</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Paying a fixed price per box for both storage and return makes box storage an economical choice, especially for small quantities of items or those needing less than 10 sq ft of space. This model ensures you’re not paying for unused space, and insurance is typically included. The entire service can be managed online, providing a hassle-free experience.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Considerations</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">While box storage offers many benefits, it's important to note a few drawbacks. You won't have direct access to your items or the ability to inspect the security measures at the storage facility. Although most facilities have 24-hour recorded CCTV, they are not usually staffed. For those who value seeing security systems in action, or prefer having direct access to their belongings, alternative storage solutions might be preferable. Additionally, direct deliveries to the warehouse are not allowed, so all items must be arranged through the box storage company.</p>
                                        <p class="faq-text mt-3">Choose box storage for a cost-effective, convenient solution to your storage needs, with the assurance of included insurance and a straightforward online management system.</p>
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
                    <div class="">
                        @include("web.contact-form")
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection("webcontent")