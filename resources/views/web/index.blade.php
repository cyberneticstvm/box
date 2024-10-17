@extends("web.base")
@section("webcontent")
<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-19" id="hero" data-bg-src="{{ asset('/web/assets/img/hero/banner1.webp') }}">
    <div class="hero19-overlay" data-bg-src="{{ asset('/web/assets/img/hero/hero_overlay_19.webp') }}"></div>
    <div class="swiper th-slider" id="heroSlide19" data-slider-options='{"effect":"fade"}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container th-container4">
                        <div class="row align-items-end">
                            <div class="col-xl-7 space-extra-bottom">
                                <div class="hero-style19">
                                    <span class="sub-title text-capitalize" data-ani="slideinup" data-ani-delay="0.2s">
                                        <div class="icon-masking me-2">
                                            <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_5.1.svg') }}"></span>
                                            <img src="{{ asset('/web/assets/img/theme-img/title_shape_5.1.svg') }}" alt="shape">
                                        </div>Welcome to the Ultimate Smart Storage Solution
                                    </span>
                                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                        Your one stop storage and moving partner </h1>
                                    <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">
                                        From a small box to whole house or office items at movenstore we pack, pick, store and deliver.</p>
                                    <div class="btn-group justify-content-center justify-content-xl-start " data-ani="slideinup" data-ani-delay="0.9s">
                                        <a href="#" class="th-btn style-radius style3 text-capitalize">View
                                            All Solutions</a>
                                        <a href="{{ route('contact') }}" class="th-btn style-radius style2 text-capitalize">Get A Quote</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-5 mt-5">
                                <!-- 596*659 -->
                                <div class="th-hero-img" data-ani="slideinup" data-ani-delay="0.10s">
                                    <img src="{{ asset('/web/assets/img/hero/hero_19_1.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container th-container4">
                        <div class="row align-items-end">
                            <div class="col-xl-7 space-extra-bottom">
                                <div class="hero-style19">
                                    <span class="sub-title text-capitalize" data-ani="slideinup" data-ani-delay="0.2s">
                                        <div class="icon-masking me-2">
                                            <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_5.1.svg') }}"></span>
                                            <img src="{{ asset('/web/assets/img/theme-img/title_shape_5.1.svg') }}" alt="shape">
                                        </div>Welcome to the Ultimate Smart Storage Solution
                                    </span>
                                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                        Your one stop storage and moving partner </h1>
                                    <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">
                                        From a small box to whole house or office items at movenstore we pack, pick, store and deliver.</p>
                                    <div class="btn-group justify-content-center justify-content-xl-start " data-ani="slideinup" data-ani-delay="0.9s">
                                        <a href="#" class="th-btn style-radius style3 text-capitalize">View
                                            All Solutions</a>
                                        <a href="#" class="th-btn style-radius style2 text-capitalize">Get A Quote</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-5 mt-5">
                                <div class="th-hero-img" data-ani="slideinup" data-ani-delay="0.10s">
                                    <!--634*618-->
                                    <img src="{{ asset('/web/assets/img/hero/hero_19_2.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container th-container4">
                        <div class="row align-items-end">
                            <div class="col-xl-7 space-extra-bottom">
                                <div class="hero-style19">
                                    <span class="sub-title text-capitalize" data-ani="slideinup" data-ani-delay="0.2s">
                                        <div class="icon-masking me-2">
                                            <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_5.1.svg') }}"></span>
                                            <img src="{{ asset('/web/assets/img/theme-img/title_shape_5.1.svg') }}" alt="shape">
                                        </div>Welcome to the Ultimate Smart Storage Solution
                                    </span>
                                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                        Your one stop storage and moving partner </h1>
                                    <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">
                                        From a small box to whole house or office items at movenstore we pack, pick, store and deliver.</p>
                                    <div class="btn-group justify-content-center justify-content-xl-start " data-ani="slideinup" data-ani-delay="0.9s">
                                        <a href="#" class="th-btn style-radius style3 text-capitalize">View
                                            All Solutions</a>
                                        <a href="#" class="th-btn style-radius style2 text-capitalize">Get A Quote</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-5 mt-5">
                                <div class="th-hero-img" data-ani="slideinup" data-ani-delay="0.10s">
                                    <!--634*618-->
                                    <img src="{{ asset('/web/assets/img/hero/hero_19_3.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-pagination"></div>
        <div class="icon-box">
            <button data-slider-prev="#heroSlide19" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#heroSlide19" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>


</div>
<!--======== / Hero Section ========-->
<!--==============================
Service Area  
==============================-->
<section class="bg-top-center z-index-common space-top mt-5" id="service-sec" data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.webp') }}">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
            <div class="col-lg-6 col-sm-9 pe-xl-5">
                <div class="title-area text-center text-lg-start">
                    <div class="shadow-title color2">SOLUTIONS</div>
                    <!--<span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                            <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                        </div>WHAT WE DO
                    </span>-->
                    <h2 class="sec-title text-white">WHAT WE DO</h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <a href="{{ route('services.hhs') }}" class="th-btn style3">VIEW ALL SOLUTIONS<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="serviceSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon">
                                <img src="{{ asset('/web/assets/img/icon/house.svg') }}" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="{{ route('services.hhs') }}">HOUSEHOLD STORAGE </a></h3>
                                <p class="service-grid_text text-justify">With our state of the art storage facilties Movenstore provides a variety of storage options for your household furniture and all other items .</p>
                                <br /><br />
                                <a href="{{ route('services.hhs') }}" class="th-btn">More Info<i class="fas fa-arrow-right ms-2"></i></a>
                                <div class="bg-shape">
                                    <img src="{{ asset('/web/assets/img/bg/service_grid_bg.png') }}" alt="bg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon">
                                <img src="{{ asset('/web/assets/img/icon/box.svg') }}" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="{{ route('services.bs') }}">BOX STORAGE </a></h3>
                                <p class="service-grid_text text-justify">At Movenstore you don't need pay huge amount if you have few items ,simply send us the list or pictures of the items and we will charge only for the space you use.</p>
                                <br />
                                <a href="{{ route('services.bs') }}" class="th-btn">More Info<i class="fas fa-arrow-right ms-2"></i></a>
                                <div class="bg-shape">
                                    <img src="{{ asset('/web/assets/img/bg/service_grid_bg.png') }}" alt="bg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon">
                                <img src="{{ asset('/web/assets/img/icon/office.svg') }}" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="{{ route('services.os') }}">OFFICE STORAGE </a></h3>
                                <p class="service-grid_text text-justify">Movenstore provides bespoke storage packages suitable for all your commercial storage needs. we apply special discounts for small businesses and young entrepreneurs.</p>
                                <br />
                                <a href="{{ route('services.os') }}" class="th-btn">More Info<i class="fas fa-arrow-right ms-2"></i></a>
                                <div class="bg-shape">
                                    <img src="{{ asset('/web/assets/img/bg/service_grid_bg.png') }}" alt="bg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon">
                                <img src="{{ asset('/web/assets/img/icon/truck.svg') }}" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="{{ route('pandm') }}">MOVERS AND PACKERS </a></h3>
                                <p class="service-grid_text text-justify">professional packers, quality packing materials, and expert moving team is paramount in storage or moving process. Our team is equipped with all of those qualities with 15 years of experience.</p>
                                <a href="{{ route('pandm') }}" class="th-btn">More Info<i class="fas fa-arrow-right ms-2"></i></a>
                                <div class="bg-shape">
                                    <img src="{{ asset('/web/assets/img/bg/service_grid_bg.png') }}" alt="bg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--==============================
Process Area  
==============================-->
<section class="bg-smoke" id="process-sec" data-bg-src="{{ asset('/web/assets/img/bg/process_bg_1.png') }}">
    <div class="container space">
        <div class="title-area text-center">
            <div class="shadow-title">PROCESS</div>
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                    <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                </div>
                WORK PROCESS
            </span>
            <h2 class="sec-title">How it <span class="text-theme">works!</span></h2>
        </div>
        <div class="process-card-area">
            <div class="process-line">
                <img src="{{ asset('/web/assets/img/bg/process_line.svg') }}" alt="line">
            </div>
            <div class="row gy-40">
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">01</div>
                        <div class="process-card_icon">
                            <img src="{{ asset('/web/assets/img/icon/call.svg') }}" alt="icon">
                        </div>
                        <h2 class="box-title">YOU BOOK</h2>
                        <p class="process-card_text text-justify">Simply visit our website and book online or text us on WhatsApp and our staff will assist you.</p>
                        <br /><br />
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">02</div>
                        <div class="process-card_icon">
                            <img src="{{ asset('/web/assets/img/icon/pack.svg') }}" alt="icon">
                        </div>
                        <h2 class="box-title">WE PACK & PICK</h2>
                        <p class="process-card_text text-justify">Our professional movers packers team will be at your door step and dismantle, pack,load and transport you furniture and items to our secure storage facility.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">03</div>
                        <div class="process-card_icon">
                            <img src="{{ asset('/web/assets/img/icon/store.svg') }}" alt="icon">
                        </div>
                        <h2 class="box-title">WE STORE</h2>
                        <p class="process-card_text text-justify">Movenstore expert storage team will tag ,Mark and store all your belongings in our safe storage facility under servillance.</p>
                        <br />
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">04</div>
                        <div class="process-card_icon">
                            <img src="{{ asset('/web/assets/img/icon/deliver.svg') }}" alt="icon">
                        </div>
                        <h2 class="box-title">WE DELIVER</h2>
                        <p class="process-card_text text-justify">When ever you need your items back simply text and send us the address,date and time and our team will deliver all you items .</p>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
About Area  
==============================-->
<div class="overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-30 mb-xl-0">
                <div class="img-box4 tilt-active">
                    <div class="img-shape icon-masking">
                        <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/normal/about_3_1-shape.png') }}"></span>
                        <img src="{{ asset('/web/assets/img/normal/about_3_1-shape.png') }}" alt="img">
                    </div>
                    <img src="{{ asset('/web/assets/img/normal/about_3_1.webp') }}" alt="About">
                    <!--<a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>-->
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area mb-35 text-center text-xl-start">
                    <div class="shadow-title">ABOUT US</div>
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                            <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                        </div>About Move N Store
                    </span>
                    <h2 class="sec-title">We Are Increasing Business Success With <span class="text-theme">Advanced Facility Storage</span></h2>
                </div>
                <p class="mt-n2 mb-30 text-justify text-xl-start">Welcome to Movenstore, your reliable partner for premium moving and self-storage solutions in Dubai. With extensive experience in the industry, we have successfully assisted thousands of clients in relocating throughout Dubai, Sharjah, and Ajman. Whether you're moving a villa, furniture, or a commercial space, our expert team ensures a smooth and stress-free experience from start to finish.</p>
                <a href="{{ route('about') }}" class="th-btn">About More</a>
            </div>
        </div>
    </div>
</div><!--==============================
Feature Area  
==============================-->
<div class="why-sec-v2" data-bg-src="{{ asset('/web/assets/img/bg/why_bg_2.jpg') }}">
    <div class="container space">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-xl-6 mb-30 mb-xl-0">
                <div class="img-box5">
                    <img class="tilt-active" src="{{ asset('/web/assets/img/normal/why_2_1.webp') }}" alt="Why">
                    <div class="year-counter">
                        <h3 class="year-counter_number"><span class="counter-number">10</span>k+</h3>
                        <p class="year-counter_text">Clients Active</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area mb-35">
                    <div class="shadow-title color3">Choose US</div>
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                            <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                        </div>WHY CHOOSE US
                    </span>
                    <h2 class="sec-title">Over 15 Years of Expertise in <span class="text-theme">Industry</span></h2>
                </div>
                <p class="mt-n2 mb-30 text-justify">At Move N Store, we stand out in the storage industry thanks to our smart and advanced storage facilities, user-friendly online platform, affordable pricing, and innovative storage-by-the-box concept. Our commitment to excellence ensures a seamless experience for all your storage needs.</p>
                <div class="feature-circle-wrap">
                    <div class="feature-circle">
                        <div class="progressbar" data-path-color="#248ec7">
                            <div class="circle" data-percent="100">
                                <div class="circle-num"></div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="feature-circle_title">Eco-Friendly Storage</h3>
                            <p class="feature-circle_text text-justify">We prioritize sustainability by utilizing eco-friendly materials and practices in our storage solutions. Our commitment to minimizing environmental impact means you can store your items guilt-free, knowing you're contributing to a greener planet.</p>
                        </div>
                    </div>
                    <div class="feature-circle">
                        <div class="progressbar" data-path-color="#248ec7">
                            <div class="circle" data-percent="100">
                                <div class="circle-num"></div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="feature-circle_title">Round-the-Clock Security</h3>
                            <p class="feature-circle_text text-justify">Your peace of mind is our priority. With comprehensive security measures in place, we ensure that your belongings are safe and secure at all times. Our staff is trained to handle any security concerns promptly and effectively.</p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('wcu') }}" class="th-btn">LEARN MORE<i class="fa-regular fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!--=====================Facilities=========================-->
<section class="space" id="service-sec">
    <div class="container">
        <div class="title-area text-center">
            <div class="shadow-title color2">FACILITIES</div>
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                    <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                </div>
                MOVE N STORE FACILITIES
            </span>
        </div>
        <div class="row gy-4">
            <div class="col-md-3 col-xl-3">
                <div class="service-card">
                    <div class="service-card_number">01</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/air.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Fully Airconditioned Facilities</a></h3>
                    <p class="service-card_text text-justify"></p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xl-3">
                <div class="service-card">
                    <div class="service-card_number">02</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/security.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">24 Hours On Site Security</a></h3>
                    <p class="service-card_text text-justify"></p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xl-3">
                <div class="service-card">
                    <div class="service-card_number">03</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/pest.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Fully Pest Controlled Facilities</a></h3>
                    <p class="service-card_text text-justify"></p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xl-3">
                <div class="service-card">
                    <div class="service-card_number">04</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/clean.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Spotless Facilities - Cleaned Every Day</a></h3>
                    <p class="service-card_text text-justify"></p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>
            <!--<div class="col-md-3 col-xl-3">
                <div class="service-card">
                    <div class="service-card_number">05</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/customer.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">24x7 Customer Access</a></h3>
                    <p class="service-card_text text-justify"></p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>-->

            <div class="col-md-3 col-xl-3">
                <div class="service-card">
                    <div class="service-card_number">06</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/cctv.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Recorded CCTV</a></h3>
                    <p class="service-card_text text-justify"></p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xl-3">
                <div class="service-card">
                    <div class="service-card_number">07</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/location.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Central Dubai Location</a></h3>
                    <p class="service-card_text text-justify"></p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xl-3">
                <div class="service-card">
                    <div class="service-card_number">08</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/truck1.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Packing and Moving</a></h3>
                    <p class="service-card_text text-justify"></p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xl-3">
                <div class="service-card">
                    <div class="service-card_number">09</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/package.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Package Materials</a></h3>
                    <p class="service-card_text text-justify"></p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--==============================
Testimonial Area  
==============================-->
<section class="bg-top-center space" data-bg-src="{{ asset('/web/assets/img/bg/testi_bg_3.webp') }}">
    <div class="container">
        <div class="title-area text-center">
            <div class="shadow-title color2">TESTIMONIALS</div>
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                    <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                </div>
                CUSTOMER FEEDBACK
            </span>
            <h2 class="sec-title text-white">What Happy Clients Says <br> <span class="text-theme"> About Us?</span></h2>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="testiSlider3" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/female.svg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text text-justify"> "Movenstore exceeded my expectations with their exceptional customer service and top-notch facilities. The storage spaces are clean, secure, and easily accessible. I felt confident knowing my belongings were in safe hands with their 24-hour CCTV surveillance and modern alarm systems."</p>
                                <h3 class="box-title">Aisha Hassan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/male.svg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text text-justify">"I had a fantastic experience with Movenstore. The staff were professional and accommodating, making my move smooth and stress-free. The convenience of their online payment system and the advanced security features gave me peace of mind that my items were well-protected."</p>
                                <h3 class="box-title">James O'Connor</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/female.svg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text text-justify">"Movenstore offers a perfect blend of traditional and smart storage solutions. Their dry and tidy facilities kept my valuables in excellent condition. The team was responsive and attentive, making the entire process hassle-free. I highly recommend them to anyone in Dubai!"</p>
                                <h3 class="box-title">Fatima Al-Mansouri</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/male.svg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text text-justify">"The customer service at Movenstore is outstanding! They made my move seamless and were always ready to assist with any inquiries. The storage space is not only safe and clean but also very convenient to access. I would definitely use their services again."</p>
                                <h3 class="box-title">Liam Zhang</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/female.svg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text text-justify">"I’m thoroughly impressed with Movenstore’s facilities and services. From the moment I walked in, I knew my items were in good hands. The security systems are top-of-the-line, and the staff is friendly and professional. It’s the best storage solution I’ve found in Dubai."</p>
                                <h3 class="box-title">Sophia Rodrigues</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/male.svg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text text-justify">"Movenstore’s storage facilities are second to none. The space is clean, dry, and well-organized. Their customer service is exceptional, always willing to go the extra mile to make sure everything is perfect. The convenience of storing my goods here has been fantastic."</p>
                                <h3 class="box-title">Ahmed Malik</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/female.svg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text text-justify"> "Movenstore made my relocation so much easier. The team was professional and helpful, and the storage facilities are immaculate. I love that I can track my deliveries and payments online, and the around-the-clock security ensures my belongings are always safe."</p>
                                <h3 class="box-title">Sarah Johnson</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/male.svg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text text-justify"> "I’ve been storing my goods at Movenstore for a few months now, and I couldn’t be happier with the service. The staff is courteous, the facilities are spotless, and the security measures are impressive. The convenience and peace of mind they offer are unmatched."</p>
                                <h3 class="box-title">Rajesh Patel</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button data-slider-prev="#testiSlider3" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#testiSlider3" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section><!--==============================
Cta Area  
==============================-->
<section class="space-bottom" id="contact-sec">
    <div class="container">
        <div class="cta-box">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cta-box_img">
                        <img src="{{ asset('/web/assets/img/normal/customer_support.webp') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="cta-box_content">
                        <div class="cta-box_icon">
                            <img src="{{ asset('/web/assets/img/icon/call_1.svg') }}" alt="Icon">
                        </div>
                        <div class="title-area mb-35">
                            <div class="shadow-title">CONSULTATION</div>
                            <span class="sub-title">
                                <div class="icon-masking me-2">
                                    <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                                    <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                                </div>
                                LET’S TALK
                            </span>
                            <h2 class="sec-title">Let’s Talk About Storage Solutions <span class="text-theme">With Us</span></h2>
                        </div>
                        <a href="{{ route('contact') }}" class="th-btn">CONTACT US<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection("webcontent")