@extends("web.base")
@section("webcontent")
<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-19" id="hero" data-bg-src="{{ asset('/web/assets/img/hero/banner1.webp') }}">
    <div class="hero19-overlay" data-bg-src="{{ asset('/web/assets/img/hero/hero_overlay_19.png') }}"></div>
    <div class="swiper th-slider" id="heroSlide19" data-slider-options='{"effect":"fade"}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container th-container4">
                        <div class="row align-items-end">
                            <div class="col-xl-7">
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
                            <div class="col-xl-7">
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
                                    <!--594*688-->
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
                            <div class="col-xl-7">
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
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                            <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                        </div>WHAT WE DO
                    </span>
                    <h2 class="sec-title text-white">Your one stop storage and moving <span class="text-theme">Partner</span></h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <a href="#" class="th-btn style3">VIEW ALL SOLUTIONS<i class="fa-regular fa-arrow-right ms-2"></i></a>
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
                                <h3 class="box-title"><a href="#">HOUSEHOLD STORAGE </a></h3>
                                <p class="service-grid_text text-justify">With our state of the art storage facilties Movenstore provides a variety of storage options for your household furniture and all other items .</p>
                                <br /><br />
                                <a href="#" class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
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
                                <h3 class="box-title"><a href="#">BOX STORAGE </a></h3>
                                <p class="service-grid_text text-justify">At Movenstore you don't need pay huge amount if you have few items ,simply send us the list or pictures of the items and we will charge only for the space you use.</p>
                                <br />
                                <a href="#" class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
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
                                <h3 class="box-title"><a href="#">OFFICE STORAGE </a></h3>
                                <p class="service-grid_text text-justify">Movenstore provides bespoke storage packages suitable for all your commercial storage needs. we apply special discounts for small businesses and young entrepreneurs.</p>
                                <br />
                                <a href="#" class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
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
                                <h3 class="box-title"><a href="#">MOVERS AND PACKERS </a></h3>
                                <p class="service-grid_text text-justify">professional packers, quality packing materials, and expert moving team is paramount in storage or moving process. Our team is equipped with all of those qualities with 15 years of experience.</p>
                                <a href="#" class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
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
                    <img src="{{ asset('/web/assets/img/normal/about_3_1.png') }}" alt="About">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area mb-35 text-center text-xl-start">
                    <div class="shadow-title">ABOUT US</div>
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                            <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                        </div>About WEBTECK IT SOLUTIONS
                    </span>
                    <h2 class="sec-title">We Are Increasing Business Success With <span class="text-theme">Technology</span></h2>
                </div>
                <p class="mt-n2 mb-30 text-center text-xl-start">Synergistically incentivize effective imperatives through fully researched intellectual capital. Appropriately fashion client-based.</p>
                <div class="achivement-tab filter-menu-active indicator-active">
                    <button data-filter=".cat1" class="active" type="button">Award Winning</button>
                    <button data-filter=".cat2" type="button">Technology Index</button>
                </div>
                <div class="achivement-box-area filter-active-cat1">
                    <div class="filter-item w-100 cat1">
                        <div class="achivement-box">
                            <div class="achivement-box_img">
                                <img src="{{ asset('/web/assets/img/normal/about_3_1_1.jpg') }}" alt="About">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">An Award-Winning Company.</h3>
                                <p class="achivement-box_text">Monotonically matrix extensible applications and go forward communities. Synergistically extend client-based manufactured.</p>
                                <a href="about.html" class="th-btn">About More</a>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item w-100 cat2">
                        <div class="achivement-box">
                            <div class="achivement-box_img">
                                <img src="{{ asset('/web/assets/img/normal/about_3_1_2.jpg') }}" alt="About">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Having 25+ Years Of Experience.</h3>
                                <p class="achivement-box_text">Monotonically matrix extensible applications and go forward communities. Synergistically extend client-based manufactured.</p>
                                <a href="about.html" class="th-btn">About More</a>
                            </div>
                        </div>
                    </div>
                </div>

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
                    <img class="tilt-active" src="{{ asset('/web/assets/img/normal/why_2_1.png') }}" alt="Why">
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
                    <h2 class="sec-title">More Than 24+ Years Experience We Provide <span class="text-theme">IT Services</span></h2>
                </div>
                <p class="mt-n2 mb-30">Collaboratively envisioneer user friendly supply chains and cross unit imperative. Authoritativel fabricate competitive resource and holistic. Holisticly restore real time resources whereas standardized networks.</p>
                <div class="feature-circle-wrap">
                    <div class="feature-circle">
                        <div class="progressbar" data-path-color="#684DF4">
                            <div class="circle" data-percent="90">
                                <div class="circle-num"></div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="feature-circle_title">Business Grow</h3>
                            <p class="feature-circle_text">Efficiently transition top-line ideas before market.</p>
                        </div>
                    </div>
                    <div class="feature-circle">
                        <div class="progressbar" data-path-color="#684DF4">
                            <div class="circle" data-percent="95">
                                <div class="circle-num"></div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="feature-circle_title">Quality Products</h3>
                            <p class="feature-circle_text">Efficiently transition top-line ideas before market.</p>
                        </div>
                    </div>
                </div>
                <a href="about.html" class="th-btn">LEARN MORE<i class="fa-regular fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</div><!--==============================
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
</section><!--==============================
Team Area  
==============================-->
<section class="" id="team-sec">
    <div class="brand-sec1" data-pos-for="#process-sec" data-sec-pos="top-half">
        <div class="container py-5">
            <div class="slider-area text-center">
                <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_1.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_2.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_3.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_4.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_5.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_6.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_1.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_2.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_3.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_4.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_5.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img src="{{ asset('/web/assets/img/brand/brand_2_6.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                    </div>

                </div>
                <button data-slider-prev="#brandSlider1" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#brandSlider1" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container space">
        <div class="title-area text-center">
            <div class="shadow-title">Team</div>
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                    <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                </div>
                GREAT TEAM
            </span>
            <h2 class="sec-title">See Our Skilled Expert <span class="text-theme">Team</span></h2>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-grid">
                            <div class="team-img">
                                <img src="{{ asset('/web/assets/img/team/team_3_1.jpg') }}" alt="Team">
                            </div>
                            <div class="team-social">
                                <div class="play-btn"><i class="far fa-plus"></i></div>
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Rayan Athels</a></h3>
                            <span class="team-desig">Founder & CEO</span>
                            <div class="box-particle" id="team-p1"></div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-grid">
                            <div class="team-img">
                                <img src="{{ asset('/web/assets/img/team/team_3_2.jpg') }}" alt="Team">
                            </div>
                            <div class="team-social">
                                <div class="play-btn"><i class="far fa-plus"></i></div>
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Alex Furnandes</a></h3>
                            <span class="team-desig">Project Manager</span>
                            <div class="box-particle" id="team-p2"></div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-grid">
                            <div class="team-img">
                                <img src="{{ asset('/web/assets/img/team/team_3_3.jpg') }}" alt="Team">
                            </div>
                            <div class="team-social">
                                <div class="play-btn"><i class="far fa-plus"></i></div>
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Mary Crispy</a></h3>
                            <span class="team-desig">Cheif Expert</span>
                            <div class="box-particle" id="team-p3"></div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-grid">
                            <div class="team-img">
                                <img src="{{ asset('/web/assets/img/team/team_3_4.jpg') }}" alt="Team">
                            </div>
                            <div class="team-social">
                                <div class="play-btn"><i class="far fa-plus"></i></div>
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Henry Joshep</a></h3>
                            <span class="team-desig">Product Manager</span>
                            <div class="box-particle" id="team-p4"></div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-grid">
                            <div class="team-img">
                                <img src="{{ asset('/web/assets/img/team/team_3_1.jpg') }}" alt="Team">
                            </div>
                            <div class="team-social">
                                <div class="play-btn"><i class="far fa-plus"></i></div>
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Rayan Athels</a></h3>
                            <span class="team-desig">Founder & CEO</span>
                            <div class="box-particle" id="team-p1"></div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-grid">
                            <div class="team-img">
                                <img src="{{ asset('/web/assets/img/team/team_3_2.jpg') }}" alt="Team">
                            </div>
                            <div class="team-social">
                                <div class="play-btn"><i class="far fa-plus"></i></div>
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Alex Furnandes</a></h3>
                            <span class="team-desig">Project Manager</span>
                            <div class="box-particle" id="team-p2"></div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-grid">
                            <div class="team-img">
                                <img src="{{ asset('/web/assets/img/team/team_3_3.jpg') }}" alt="Team">
                            </div>
                            <div class="team-social">
                                <div class="play-btn"><i class="far fa-plus"></i></div>
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Mary Crispy</a></h3>
                            <span class="team-desig">Cheif Expert</span>
                            <div class="box-particle" id="team-p3"></div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-grid">
                            <div class="team-img">
                                <img src="{{ asset('/web/assets/img/team/team_3_4.jpg') }}" alt="Team">
                            </div>
                            <div class="team-social">
                                <div class="play-btn"><i class="far fa-plus"></i></div>
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Henry Joshep</a></h3>
                            <span class="team-desig">Product Manager</span>
                            <div class="box-particle" id="team-p4"></div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#teamSlider1" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#teamSlider1" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>

    </div>
    <div class="shape-mockup" data-top="0" data-right="0"><img src="{{ asset('/web/assets/img/shape/tech_shape_1.png') }}" alt="shape"></div>
    <div class="shape-mockup" data-top="0%" data-left="0%"><img src="{{ asset('/web/assets/img/shape/square_1.png') }}" alt="shape"></div>
</section><!--==============================
Testimonial Area  
==============================-->
<section class="bg-top-center space" data-bg-src="{{ asset('/web/assets/img/bg/testi_bg_3.jpg') }}">
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
                                <img src="{{ asset('/web/assets/img/testimonial/testi_3_1.jpg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration. Globally synergize resource sucking value via cutting-edge.</p>
                                <h3 class="box-title">David Farnandes</h3>
                                <p class="testi-grid_desig">CEO at Anaton</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/testi_3_2.jpg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration. Globally synergize resource sucking value via cutting-edge.</p>
                                <h3 class="box-title">Jackline Techie</h3>
                                <p class="testi-grid_desig">CEO at Kormola</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/testi_3_3.jpg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration. Globally synergize resource sucking value via cutting-edge.</p>
                                <h3 class="box-title">Abraham Khalil</h3>
                                <p class="testi-grid_desig">CEO at Anatora</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/testi_3_4.jpg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration. Globally synergize resource sucking value via cutting-edge.</p>
                                <h3 class="box-title">Md Sumon Mia</h3>
                                <p class="testi-grid_desig">CEO at Rimasu</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/testi_3_1.jpg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration. Globally synergize resource sucking value via cutting-edge.</p>
                                <h3 class="box-title">David Farnandes</h3>
                                <p class="testi-grid_desig">CEO at Anaton</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/testi_3_2.jpg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration. Globally synergize resource sucking value via cutting-edge.</p>
                                <h3 class="box-title">Jackline Techie</h3>
                                <p class="testi-grid_desig">CEO at Kormola</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/testi_3_3.jpg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration. Globally synergize resource sucking value via cutting-edge.</p>
                                <h3 class="box-title">Abraham Khalil</h3>
                                <p class="testi-grid_desig">CEO at Anatora</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="testi-grid_img">
                                <img src="{{ asset('/web/assets/img/testimonial/testi_3_4.jpg') }}" alt="Avater">
                                <div class="testi-grid_quote">
                                    <img src="{{ asset('/web/assets/img/icon/quote_left_3.svg') }}" alt="quote">
                                </div>
                            </div>
                            <div class="testi-grid_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                            </div>
                            <div class="testi-grid_content">
                                <p class="testi-grid_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration. Globally synergize resource sucking value via cutting-edge.</p>
                                <h3 class="box-title">Md Sumon Mia</h3>
                                <p class="testi-grid_desig">CEO at Rimasu</p>
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
                        <img src="{{ asset('/web/assets/img/normal/customer_support.jpg') }}" alt="Image">
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
                                LET’S CONSULTATION
                            </span>
                            <h2 class="sec-title">Let’s Talk About Business Solutions <span class="text-theme">With Us</span></h2>
                        </div>
                        <a href="contact.html" class="th-btn">CONTACT US<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--==============================
Blog Area  
==============================-->
<section class="bg-top-right bg-smoke overflow-hidden space" id="blog-sec" data-bg-src="{{ asset('/web/assets/img/bg/blog_bg_1.png') }}">
    <div class="container">
        <div class="title-area text-center">
            <div class="shadow-title color3">Update</div>
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                    <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                </div>
                NEWS & ARTICLES
            </span>
            <h2 class="sec-title">Get Every Single Update <span class="text-theme">Blog</span></h2>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider2" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ asset('/web/assets/img/blog/blog_1_1.jpg') }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>15 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>2 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h3>
                                <p class="blog-text">Progressively plagiarize quality metrics for impactful data. Assertively. Holisticly leverage existing magnetic.</p>
                                <div class="blog-bottom">
                                    <a href="blog.html" class="author"><img src="{{ asset('/web/assets/img/blog/author-1-1.png') }}" alt="avater"> By Themeholy</a>
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ asset('/web/assets/img/blog/blog_1_2.jpg') }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>16 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>3 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Regional Manager & limited time management.</a></h3>
                                <p class="blog-text">Progressively plagiarize quality metrics for impactful data. Assertively. Holisticly leverage existing magnetic.</p>
                                <div class="blog-bottom">
                                    <a href="blog.html" class="author"><img src="{{ asset('/web/assets/img/blog/author-1-1.png') }}" alt="avater"> By Themeholy</a>
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ asset('/web/assets/img/blog/blog_1_3.jpg') }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>17 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>2 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">What’s the Holding Back the It Solution Industry?</a></h3>
                                <p class="blog-text">Progressively plagiarize quality metrics for impactful data. Assertively. Holisticly leverage existing magnetic.</p>
                                <div class="blog-bottom">
                                    <a href="blog.html" class="author"><img src="{{ asset('/web/assets/img/blog/author-1-1.png') }}" alt="avater"> By Themeholy</a>
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ asset('/web/assets/img/blog/blog_1_4.jpg') }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>19 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>4 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Latin derived from Cicero's 1st-century BC</a></h3>
                                <p class="blog-text">Progressively plagiarize quality metrics for impactful data. Assertively. Holisticly leverage existing magnetic.</p>
                                <div class="blog-bottom">
                                    <a href="blog.html" class="author"><img src="{{ asset('/web/assets/img/blog/author-1-1.png') }}" alt="avater"> By Themeholy</a>
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ asset('/web/assets/img/blog/blog_1_1.jpg') }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>15 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>2 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h3>
                                <p class="blog-text">Progressively plagiarize quality metrics for impactful data. Assertively. Holisticly leverage existing magnetic.</p>
                                <div class="blog-bottom">
                                    <a href="blog.html" class="author"><img src="{{ asset('/web/assets/img/blog/author-1-1.png') }}" alt="avater"> By Themeholy</a>
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ asset('/web/assets/img/blog/blog_1_2.jpg') }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>16 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>3 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Regional Manager & limited time management.</a></h3>
                                <p class="blog-text">Progressively plagiarize quality metrics for impactful data. Assertively. Holisticly leverage existing magnetic.</p>
                                <div class="blog-bottom">
                                    <a href="blog.html" class="author"><img src="{{ asset('/web/assets/img/blog/author-1-1.png') }}" alt="avater"> By Themeholy</a>
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ asset('/web/assets/img/blog/blog_1_3.jpg') }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>17 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>2 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">What’s the Holding Back the It Solution Industry?</a></h3>
                                <p class="blog-text">Progressively plagiarize quality metrics for impactful data. Assertively. Holisticly leverage existing magnetic.</p>
                                <div class="blog-bottom">
                                    <a href="blog.html" class="author"><img src="{{ asset('/web/assets/img/blog/author-1-1.png') }}" alt="avater"> By Themeholy</a>
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ asset('/web/assets/img/blog/blog_1_4.jpg') }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>19 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>4 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Latin derived from Cicero's 1st-century BC</a></h3>
                                <p class="blog-text">Progressively plagiarize quality metrics for impactful data. Assertively. Holisticly leverage existing magnetic.</p>
                                <div class="blog-bottom">
                                    <a href="blog.html" class="author"><img src="{{ asset('/web/assets/img/blog/author-1-1.png') }}" alt="avater"> By Themeholy</a>
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#blogSlider2" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#blogSlider2" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
    <div class="shape-mockup" data-bottom="0" data-left="0">
        <div class="particle-2 small" id="particle-4"></div>
    </div>
</section><!--==============================
	Footer Area
==============================-->
@endsection("webcontent")