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
    <title>Thank You</title>
    <meta name="author" content="Cybernetics">
    <meta name="description" content="Thank You">
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
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col text-center border mt-5 mb-5">
                <h2 class="text-theme">Thank You for Your Submission!</h2>
                <p class="fw-bold">Thank you for reaching out to us. Your information has been successfully received and we're excited begin this journey with you. Our team will be in contact shortly with more details. We value your interest and trust in us.</p>
                <img src="{{ asset('/web/assets/img/icon/checked.png') }}" class="mb-3" height="50" width="50" />
            </div>
            <div class="mb-5">
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

    <!-- Replace the variables below. -->


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