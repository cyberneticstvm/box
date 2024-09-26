<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TD6V8WRW');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="author" content="Cybernetics">
    <meta name="description" content="{{ $desc }}">
    <meta name="keywords" content="Move In Store - Box Storage">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->

    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/web/assets/img/favicon.png') }}">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/web/assets/img/favicon.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/magnific-popup.min.css') }}">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/swiper-bundle.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/style.css') }}">

    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "o958g5ot8h");
    </script>

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TD6V8WRW"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->

    <div class="cursor"></div>
    <div class="cursor2"></div>


    <!--==============================
     Preloader
  ==============================-->
    <div id="preloader" class="preloader ">
        <!--<button class="th-btn th-radius preloaderCls">Cancel Preloader </button>-->
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="M" class="characters">M</span>

                    <span preloader-text="O" class="characters">O</span>

                    <span preloader-text="V" class="characters">V</span>

                    <span preloader-text="E" class="characters">E</span>

                    <span preloader-text="I" class="characters">I</span>

                    <span preloader-text="N" class="characters">N</span>

                    <span preloader-text="S" class="characters">S</span>

                    <span preloader-text="T" class="characters">T</span>

                    <span preloader-text="O" class="characters">O</span>

                    <span preloader-text="R" class="characters">R</span>

                    <span preloader-text="E" class="characters">E</span>
                </div>
            </div>
        </div>
    </div> <!--==============================
    Sidemenu
============================== -->
    @include("web.drawer")
    <!--==============================
    Mobile Menu
  ============================== -->
    @include("web.nav-mobile")
    <!--==============================
	Header Area
==============================-->
    @include("web.nav")
    <div class="th-hero-wrapper hero-21" id="hero" data-bg-src="{{ asset('/web/assets/img/bg/bg2.png') }}">
        <div class="hero-inner">
            <div class="container th-container4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-6">
                        <div class="hero-style21">
                            <span class="sub-title">Move N Store
                            </span>
                            <h1 class="hero-title">Best Storage
                                <span> Solutions In DUBAI</span>
                            </h1>
                            <p class="hero-text text-dark">Welcome to Movenstore, your reliable partner for premium
                                moving and self-storage solutions in Dubai. With extensive
                                experience in the industry, we have successfully assisted
                                thousands of clients in relocating throughout Dubai, Sharjah,
                                and Ajman. Whether you're moving a villa, furniture, or a
                                commercial space, our expert team ensures a smooth and
                                stress-free experience from start to finish.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 bg-white p-3">
                        <div class="">
                            <h2 class="text-center">Request a Quote</h2>
                        </div>
                        <form action="{{ route('quote.submit') }}" method="POST" class="contact-form" id="quoteForm1">
                            @csrf
                            <input type="hidden" name="first" value="first" />
                            @session('success')
                            <div class="contact-form-success alert alert-success mt-4">
                                {{ session('success') }}
                            </div>
                            @endsession
                            @session('error')
                            <div class="contact-form-error alert alert-danger mt-4">
                                {{ session('error') }}
                            </div>
                            @endsession
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control bg-gray" name="firstname" id="firstname" value="{{ old('firstname') }}" placeholder="First Name">
                                    <i class="fal fa-user"></i>
                                    @error('firstname')
                                    <small class="text-danger">{{ $errors->first('firstname') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control bg-gray" name="lastname" id="lastname" value="{{ old('lastname') }}" placeholder="Last Name">
                                    <i class="fal fa-user"></i>
                                    @error('lastname')
                                    <small class="text-danger">{{ $errors->first('lastname') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" class="form-control bg-gray" name="number" id="number" value="{{ old('number') }}" placeholder="Phone Number">
                                    <i class="fal fa-phone"></i>
                                    @error('number')
                                    <small class="text-danger">{{ $errors->first('number') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control bg-gray" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                                    <i class="fal fa-envelope"></i>
                                    @error('email')
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control bg-gray" name="service" id="service">
                                        <option value="">Select Service</option>
                                        <option value="pack-and-move">Packers & Movers</option>
                                        <option value="household-storage">Household Storage</option>
                                        <option value="box-storage">Box Storage</option>
                                        <option value="office-storage">Office Storage</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <i class="fal fa-arrow-down"></i>
                                    @error('service')
                                    <small class="text-danger">{{ $errors->first('service') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control bg-gray" name="location" id="location">
                                        <option value="">Select Location</option>
                                        <option value="Dubai">Dubai</option>
                                        <!--<option value="Sharjah">Sharjah</option>
                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                        <option value="Ajman">Ajman</option>
                                        <option value="Fujairah">Fujairah</option>
                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                        <option value="Umm Al Quwain">Umm Al Quwain</option>-->
                                    </select>
                                    <i class="fal fa-arrow-down"></i>
                                    @error('service')
                                    <small class="text-danger">{{ $errors->first('service') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control bg-gray" placeholder="Your Message">{{ old('message') }}</textarea>
                                    <i class="fal fa-comment"></i>
                                    @error('message')
                                    <small class="text-danger">{{ $errors->first('message') }}</small>
                                    @enderror
                                </div>
                                <div class="form-btn text-center col-12">
                                    <button type="submit" class="th-btn btn-submit">Send<i class="fa-regular fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-smoke" id="process-sec" data-bg-src="{{ asset('/web/assets/img/bg/process_bg_1.png') }}">
        <div class="container space">
            <div class="title-area text-center">
                <h2 class="sec-title">Book Your Storage Space In <span class="text-theme">4 Simple Steps</span></h2>
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
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">02</div>
                            <div class="process-card_icon">
                                <img src="{{ asset('/web/assets/img/icon/pack.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">WE PACK & PICK</h2>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">03</div>
                            <div class="process-card_icon">
                                <img src="{{ asset('/web/assets/img/icon/store.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">WE STORE</h2>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">04</div>
                            <div class="process-card_icon">
                                <img src="{{ asset('/web/assets/img/icon/deliver.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">WE DELIVER</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box4 tilt-active">
                        <div class="img-shape icon-masking">
                            <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/normal/about_3_1-shape.png') }}"></span>

                        </div>
                        <img src="{{ asset('/web/assets/img/bg/bg1.png') }}" alt="About">
                        <!--<a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>-->
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-35 text-center text-xl-start">
                        <h2 class="sec-title">Over 15 Years of <span class="text-theme">Expertise in</span> Industry</h2>
                    </div>
                    <p class="mt-n2 mb-30 text-justify text-xl-start">At Move N Store, we stand out in the storage industry thanks to our smart
                        and advanced storage facilities, user-friendly online platform, affordable
                        pricing, and innovative storage-by-the-box concept. Our commitment to
                        excellence ensures a seamless experience for all your storage needs.</p>
                    <h3>Our Services</h3>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('/web/assets/img/icon/house.svg') }}" alt="Icon">
                            <h5 class="text-theme bg-gray p-1">Household Storage</h5>
                        </div>
                        <div class="col">
                            <img src="{{ asset('/web/assets/img/icon/office.svg') }}" alt="Icon">
                            <h5 class="text-theme bg-gray p-1">Office Storage</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('/web/assets/img/icon/box.svg') }}" alt="Icon">
                            <h5 class="text-theme bg-gray p-1">Box Storage</h5>
                        </div>
                        <div class="col">
                            <img src="{{ asset('/web/assets/img/icon/truck.svg') }}" alt="Icon">
                            <h5 class="text-theme bg-gray p-1">Movers & Packers</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-top-center z-index-common mt-5 mb-5" id="service-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="title-area text-center text-lg-start">
                        <div class="shadow-title color2">FACILITIES</div>
                        <!--<span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                            <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                        </div>WHAT WE DO
                    </span>-->
                        <h2 class="sec-title text-theme">MOVE N STORE FACILITIES</h2>
                    </div>
                </div>
            </div>

            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="serviceSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon">
                                    <img src="{{ asset('/web/assets/img/icon/air.svg') }}" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <p class="service-grid_text text-justify fw-bold">Fully Airconditioned Facilities</p>
                                    <div class="bg-shape">
                                        <img src="{{ asset('/web/assets/img/bg/service_grid_bg.png') }}" alt="bg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon">
                                    <img src="{{ asset('/web/assets/img/icon/security.svg') }}" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <p class="service-grid_text text-justify fw-bold">24 Hours On Site Security</p>
                                    <div class="bg-shape">
                                        <img src="{{ asset('/web/assets/img/bg/service_grid_bg.png') }}" alt="bg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon">
                                    <img src="{{ asset('/web/assets/img/icon/pest.svg') }}" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <p class="service-grid_text text-justify fw-bold">Fully Pest Controlled Facilities</p>
                                    <div class="bg-shape">
                                        <img src="{{ asset('/web/assets/img/bg/service_grid_bg.png') }}" alt="bg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon">
                                    <img src="{{ asset('/web/assets/img/icon/clean.svg') }}" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <p class="service-grid_text text-justify fw-bold">Spotless - Cleaned Every Day</p>
                                    <div class="bg-shape">
                                        <img src="{{ asset('/web/assets/img/bg/service_grid_bg.png') }}" alt="bg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon">
                                    <img src="{{ asset('/web/assets/img/icon/cctv.svg') }}" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <p class="service-grid_text text-justify fw-bold">Recorded CCTV</p>
                                    <div class="bg-shape">
                                        <img src="{{ asset('/web/assets/img/bg/service_grid_bg.png') }}" alt="bg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon">
                                    <img src="{{ asset('/web/assets/img/icon/location.svg') }}" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <p class="service-grid_text text-justify fw-bold">Central Dubai Location</p>
                                    <div class="bg-shape">
                                        <img src="{{ asset('/web/assets/img/bg/service_grid_bg.png') }}" alt="bg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon">
                                    <img src="{{ asset('/web/assets/img/icon/truck1.svg') }}" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <p class="service-grid_text text-justify fw-bold">Packing and Moving</p>
                                    <div class="bg-shape">
                                        <img src="{{ asset('/web/assets/img/bg/service_grid_bg.png') }}" alt="bg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon">
                                    <img src="{{ asset('/web/assets/img/icon/package.svg') }}" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <p class="service-grid_text text-justify fw-bold">Package Materials</p>
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
    <div class="bg-smoke space" data-bg-src="{{ asset('web/assets/img/bg/contact_bg_1.png') }}" id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="title-area mb-35 text-xl-start text-center">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ asset('web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                                <img src="{{ asset('web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                            </div>contact with us!
                        </span>
                        <h2 class="sec-title">Get a Free Quote</h2>
                    </div>
                    <form action="{{ route('quote.submit') }}" method="POST" class="contact-form" id="quoteForm">
                        @csrf
                        <input type="hidden" name="first" value="first" />
                        @session('success')
                        <div class="contact-form-success alert alert-success mt-4">
                            {{ session('success') }}
                        </div>
                        @endsession
                        @session('error')
                        <div class="contact-form-error alert alert-danger mt-4">
                            {{ session('error') }}
                        </div>
                        @endsession
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control bg-gray" name="firstname" id="firstname" value="{{ old('firstname') }}" placeholder="First Name">
                                <i class="fal fa-user"></i>
                                @error('firstname')
                                <small class="text-danger">{{ $errors->first('firstname') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control bg-gray" name="lastname" id="lastname" value="{{ old('lastname') }}" placeholder="Last Name">
                                <i class="fal fa-user"></i>
                                @error('lastname')
                                <small class="text-danger">{{ $errors->first('lastname') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control bg-gray" name="number" id="number" value="{{ old('number') }}" placeholder="Phone Number">
                                <i class="fal fa-phone"></i>
                                @error('number')
                                <small class="text-danger">{{ $errors->first('number') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control bg-gray" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                                <i class="fal fa-envelope"></i>
                                @error('email')
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control bg-gray" name="service" id="service">
                                    <option value="">Select Service</option>
                                    <option value="pack-and-move">Packers & Movers</option>
                                    <option value="household-storage">Household Storage</option>
                                    <option value="box-storage">Box Storage</option>
                                    <option value="office-storage">Office Storage</option>
                                    <option value="other">Other</option>
                                </select>
                                <i class="fal fa-arrow-down"></i>
                                @error('service')
                                <small class="text-danger">{{ $errors->first('service') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control bg-gray" name="location" id="location">
                                    <option value="">Select Location</option>
                                    <option value="Dubai">Dubai</option>
                                    <!--<option value="Sharjah">Sharjah</option>
                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                        <option value="Ajman">Ajman</option>
                                        <option value="Fujairah">Fujairah</option>
                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                        <option value="Umm Al Quwain">Umm Al Quwain</option>-->
                                </select>
                                <i class="fal fa-arrow-down"></i>
                                @error('service')
                                <small class="text-danger">{{ $errors->first('service') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="date" class="form-control bg-gray" name="start_date" id="start_date" value="{{ old('start_date') }}">
                                @error('start_date')
                                <small class="text-danger">{{ $errors->first('start_date') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control bg-gray" name="address" id="address" value="{{ old('address') }}" placeholder="Address">
                                <i class="fal fa-map"></i>
                                @error('address')
                                <small class="text-danger">{{ $errors->first('address') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control bg-gray" placeholder="Your Message">{{ old('message') }}</textarea>
                                <i class="fal fa-comment"></i>
                                @error('message')
                                <small class="text-danger">{{ $errors->first('message') }}</small>
                                @enderror
                            </div>
                            <div class="form-btn text-center col-12">
                                <button type="submit" class="th-btn btn-submit g-recaptcha"
                                    data-sitekey="6Ld3mkwqAAAAABzSHvDVOfa30aHM48tWnyYREdYO"
                                    data-callback='onSubmit'
                                    data-action='submit'>Send<i class="fa-regular fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-wrapper footer-layout3" data-bg-src="{{ asset('/web/assets/img/bg/footer_bg_2.jpg') }}">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-12 col-xxl-12 col-xl-12 text-center">
                        <div class="footer-links">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('pandm') }}">Packers & Movers</a></li>
                                <li><a href="{{ route('services.hhs') }}">Household Storage</a></li>
                                <li><a href="{{ route('services.bs') }}">Box Storage</a></li>
                                <li><a href="{{ route('services.os') }}">Office Storage</a></li>
                                <li><a href="{{ route('blogs') }}">Blogs</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> {{ date('Y') }} <a href="https://moveinstore.com">Move N Store</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <div class="footer-links">
                            <ul>
                                <li><a href="{{ route('privacy.policy') }}">Terms & Condition</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->
    <!--Whatsapp-->
    <div class="floating">
        <a href="https://api.whatsapp.com/send?phone=971548882525&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank"><img src="{{ asset('/web/assets/img/icon/whatsapp.svg') }}" alt="Move N Store Whatsapp" /></a>
    </div>
    <div class="floating1">
        <a href="tel:+971548882525" target="_blank"><img src="{{ asset('/web/assets/img/icon/call.svg') }}" alt="Move N Store Call" /></a>
    </div>
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    @include("web.modal")

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('/web/assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Slider -->
    <script src="{{ asset('/web/assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/web/assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('/web/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('/web/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('/web/assets/js/circle-progress.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('/web/assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('/web/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/web/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Tilt JS -->
    <script src="{{ asset('/web/assets/js/tilt.jquery.min.js') }}"></script>

    <!-- gsap -->
    <script src="{{ asset('/web/assets/js/gsap.min.js') }}"></script>
    <!-- ScrollTrigger -->
    <script src="{{ asset('/web/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('/web/assets/js/smooth-scroll.js') }}"></script>

    <!-- Particles JS -->
    <script src="{{ asset('/web/assets/js/particles.min.js') }}"></script>

    <script src="{{ asset('/web/assets/js/particles-config.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('/web/assets/js/main.js') }}"></script>

    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Ld3mkwqAAAAABzSHvDVOfa30aHM48tWnyYREdYO"></script>

    <!-- Replace the variables below. -->
    <script>
        function onSubmit(token) {
            document.getElementById("quoteForm").submit();
            $(".btn-submit").html("Loading...<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>");
            $(".btn-submit").attr("disabled", true);
        }

        $(function() {
            $(".myModal").click(function() {
                $("#myModal").modal("show");
            });
        });
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SelfStorage",
            "name": "Move In Store",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "31 Street 5B, Al Quoz",
                "addressLocality": "Dubai",
                "addressRegion": "AE",
                "postalCode": "00000"
            },
            "image": "https://www.moveinstore.com/public/web/assets/img/logo-small.webp",
            "email": "info@moveinstore.com",
            "telePhone": "+971 54 888 2525",
            "faxNumber": "+971 54 888 2525",
            "url": "https://www.moveinstore.com/",
            "openingHours": "Mo,Tu,We,Th,Fr 09:00-18:00",
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                ],
                "opens": "09:00",
                "closes": "18:00"
            }],
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "25.14815739002354",
                "longitude": "55.2377825423283"
            },
            "priceRange": "$$$"

        }
    </script>

</body>

</html>