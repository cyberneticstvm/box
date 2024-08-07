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
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/web/assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/web/assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/web/assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/web/assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/web/assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/web/assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/web/assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/web/assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/web/assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/web/assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/web/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/web/assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/web/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/web/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/web/assets/img/favicons/ms-icon-144x144.png') }}">
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
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <div class="footer-logo">
                            <a class="icon-masking" href="index.html"><span data-mask-src="{{ asset('/web/assets/img/logo-white.svg') }}" class="mask-icon"></span><img src="{{ asset('/web/assets/img/logo-white.svg') }}" alt="Webteck"></a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="newsletter-wrap">
                            <div class="newsletter-content">
                                <h3 class="newsletter-title">News Subscription</h3>
                                <p class="newsletter-text">Get Latest Deals from Waker’s Inbox & Subscribe Now</p>
                            </div>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email Address" required="">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <button type="submit" class="th-btn style3">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xxl-3 col-xl-4">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">About Company</h3>
                            <div class="th-widget-about">
                                <p class="about-text">Professionally redefine transparent ROI through low-risk high-yield imperatives. Progressively create empowered. cost effective users via team driven.</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="team.html">Meet Our Team</a></li>
                                    <li><a href="project.html">Our Projects</a></li>
                                    <li><a href="faq.html">Help & FAQs</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">IT SERVICES</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="service-details.html">Web Development</a></li>
                                    <li><a href="service-details.html">Business Development</a></li>
                                    <li><a href="service-details.html">Product Management</a></li>
                                    <li><a href="service-details.html">UI/UX Design</a></li>
                                    <li><a href="service-details.html">Cloud services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('/web/assets/img/blog/recent-post-2-1.jpg') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-days"></i>21 June, 2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('/web/assets/img/blog/recent-post-2-2.jpg') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Regional Manager limited time management.</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-days"></i>22 June, 2024</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a href="https://themeforest.net/user/themeholy">Themeholy</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <div class="footer-links">
                            <ul>
                                <li><a href="about.html">Terms & Condition</a></li>
                                <li><a href="about.html">Careers</a></li>
                                <li><a href="about.html">Privacy Policy</a></li>
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

</body>

</html>