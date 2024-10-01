@extends("web.base")
@section("webcontent")
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Office Storage</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Office Storage</li>
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
                        <h2 class="h3 page-title">Office Storage Solutions: Efficient and Professional</h2>

                        <p>Office storage services provide a seamless solution for managing your office furniture, files, and archived documents. The process begins with the company delivering storage boxes, packing materials, and bubble wrap to your office. Once you have securely packed your items, including office furniture and important documents, they will collect the boxes and transport them to a secure storage facility.</p>
                        <p class="mb-30">When you need access to your items or files, simply contact the service provider. They will arrange for the delivery of your boxes back to your office the following day. Pricing is transparent, with fixed rates applied per box for both collection and return, ensuring clarity and efficiency in billing.</p>

                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="th-video">
                                    <img class="w-100" src="{{ asset('/web/assets/img/service/office.png') }}" alt="service">
                                    <!--<a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>-->
                                </div>
                            </div>
                        </div>

                        <h3 class="h4 mt-35 mb-4">Why Opt for Office Storage?</h3>
                        <div class="accordion-area accordion" id="faqAccordion">


                            <div class="accordion-card style2 active">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Convenience</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Our office storage service brings unparalleled convenience to your workspace. We handle all aspects of packing and transportation, allowing you to focus on your core business activities. With the ability to request the return of your items at any time, you have flexible access to your stored office furniture and documents. This service is particularly advantageous for items and files you don’t need immediate access to. Note that access to items is restricted while in storage, and direct deliveries to the storage facility are not permitted.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Cost-Effectiveness</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Office storage offers a cost-efficient solution, especially for small quantities of items or files requiring minimal space. With a fixed per-box fee for storage and return, you avoid paying for unused space, making it an ideal choice for managing office assets economically. Comprehensive insurance is typically included, and the entire service is accessible through a user-friendly online platform, ensuring ease of management.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Considerations</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">While office storage provides many benefits, there are a few considerations to keep in mind. Direct access to stored items or a physical inspection of security measures at the facility is not possible. Although facilities are equipped with 24-hour recorded CCTV, they are generally not staffed on-site. For those who prefer visible security systems or direct access to their belongings, alternative storage solutions may be more suitable. Additionally, all items must be arranged for collection and return through the service provider, as direct deliveries to the storage facility are not accommodated.</p>
                                        <p class="faq-text mt-3">Choose our office storage solution for a professional, efficient, and cost-effective way to manage your office furniture, files, and archived documents. Enjoy the peace of mind that comes with included insurance and a streamlined online management system.</p>
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