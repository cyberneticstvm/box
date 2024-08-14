@extends("web.base")
@section("webcontent")
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div><!--==============================
    Project Area
==============================-->
<div class="overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-30 mb-xl-0">
                <div class="img-box1">
                    <div class="img1">
                        <img src="{{ asset('/web/assets/img/normal/about_1_1.webp') }}" alt="About">
                    </div>
                    <div class="shape1">
                        <img src="{{ asset('/web/assets/img/normal/about_shape_1.webp') }}" alt="shape">
                    </div>
                    <div class="year-counter">
                        <h3 class="year-counter_number"><span class="counter-number">15</span></h3>
                        <p class="year-counter_text">Years Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ps-xxl-4 ms-xl-3">
                    <div class="title-area mb-35">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_1.svg') }}"></span>
                                <img src="{{ asset('/web/assets/img/theme-img/title_shape_1.svg') }}" alt="shape">
                            </div>About Us
                        </span>
                        <h2 class="sec-title">We Are Increasing Business Success With <span class="text-theme">Advanced Facility Storage</span></h2>
                    </div>
                    <p class="mt-n2 mb-25 text-justify">Welcome to Movenstore, your reliable partner for premium moving and self-storage solutions in Dubai. With extensive experience in the industry, we have successfully assisted thousands of clients in relocating throughout Dubai, Sharjah, and Ajman. Whether you're moving a villa, furniture, or a commercial space, our expert team ensures a smooth and stress-free experience from start to finish.</p>
                    <p class="mt-n2 mb-25 text-justify">At Movenstore, we blend traditional lockable self-storage units with state-of-the-art smart storage solutions, offering our clients the best of both worlds. Our comprehensive services include professional packing and unpacking, all meticulously handled by our skilled movers and packers using top-quality materials.</p>
                    <p class="mt-n2 mb-25 text-justify">We take the security and condition of your belongings seriously. Our facilities are dry, safe, and clean—always ready to welcome your valued possessions. With modern and approved fire and intruder alarm systems, as well as 24-hour CCTV surveillance featuring advanced around-the-clock monitoring, your items are always protected at Movenstore.</p>
                    <p class="mt-n2 mb-25 text-justify">In addition to our robust security measures, we prioritize convenience through our user-friendly online payment system, streamlined login access, and advanced pickup and delivery tracking. Our competitive pricing and exceptional service have made us the preferred choice for countless customers who return to us for their moving and storage needs.
                    </p>
                    <p class="mt-n2 mb-25 text-justify">Discover why Movenstore is Dubai's leading choice for moving and self-storage solutions.</p>
                    <div class="about-feature-wrap">
                        <div class="about-feature">
                            <div class="about-feature_icon">
                                <img src="{{ asset('/web/assets/img/icon/stack.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="about-feature_title">Advanced Facility Storage</h3>
                                <p class="about-feature_text text-justify">Our state-of-the-art storage facilities are equipped with cutting-edge technology to provide optimal storage conditions for all types of items.</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="about-feature_icon">
                                <img src="{{ asset('/web/assets/img/icon/face.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="about-feature_title">Over 15 Years of Expertise</h3>
                                <p class="about-feature_text text-justify">With more than 15 years of experience in the storage industry, we have honed our skills and expertise to deliver the best possible service to our clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('contact') }}" class="th-btn">CONTACT US<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="call-btn">
                            <div class="play-btn">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <span class="btn-text">Call Us On:</span>
                                <a href="tel:+19088000393" class="btn-title">+190-8800-0393</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection("webcontent")