<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Move In Store - Best Storage in Dubai</title>
    <meta name="author" content="Themeholy">
    <meta name="description" content="Move In Store - Box Storage">
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

</head>

<body>




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
    @yield("webcontent")
    <footer class="footer-wrapper footer-layout3" data-bg-src="{{ asset('/web/assets/img/bg/footer_bg_2.jpg') }}">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xxl-3 col-xl-4">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Move N Store</h3>
                            <div class="th-widget-about">
                                <p class="about-text text-justify">At MoveN Store, we stand out in the storage industry thanks to our smart and advanced storage facilities, user-friendly online platform, affordable pricing, and innovative storage-by-the-box concept. Our commitment to excellence ensures a seamless experience for all your storage needs.</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/profile.php?id=61564755067880" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                    <a href="https://www.linkedin.com/company/move-n-store-llc" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('wcu') }}">Why Choose Us</a></li>
                                    <!--<li><a href="#">How It Works</a></li>
                                    <li><a href="#">Blogs</a></li>-->
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">OUR SERVICES</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('services.hhs') }}">Household Storage</a></li>
                                    <li><a href="{{ route('services.bs') }}">Box Storage</a></li>
                                    <li><a href="{{ route('services.os') }}">Office Storage</a></li>
                                    <li><a href="{{ route('pandm') }}">Packers and Movers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <!--<h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('/web/assets/img/blog/blog.svg') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="#"><i class="fal fa-calendar-days"></i>21 June, 2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('/web/assets/img/blog/blog.svg') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Regional Manager limited time management.</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="#"><i class="fal fa-calendar-days"></i>22 June, 2024</a>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
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
        <a href="tel:+971548882525" target="_blank"><img src="{{ asset('/web/assets/img/icon/call-us.svg') }}" alt="Move N Store Call" /></a>
    </div>
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

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
    <script src="{{ asset('/web/assets/js/script.js') }}"></script>

</body>

</html>