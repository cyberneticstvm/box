<header class="th-header header-layout2">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fas fa-map-location"></i>54 NJ-12, Flemington, United States</li>
                            <li><i class="fas fa-phone"></i><a href="tel:+1539873657">+153-987-3657</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:info@moveinstore.com">info@moveinstore.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-social">
                        <span class="social-title">Follow Us On : </span>
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a class="icon-masking" href="{{ route('index') }}"><span data-mask-src="{{ asset('/web/assets/img/logo-small.webp') }}" class="mask-icon"></span><img src="{{ asset('/web/assets/img/logo-small.webp') }}" alt="Move In Store"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Packers & Movers </a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Storage</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Residential Storage</a></li>
                                        <li><a href="#">Storage by the Box</a></li>
                                        <li><a href="#">Suitcase Storage</a></li>
                                        <li><a href="#">Office Storage</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-button">
                            <a href="#" class="th-btn shadow-none sideMenuToggler d-inline-block d-lg-none">Get A Quote<i class="fas fa-arrow-right ms-2"></i></a>
                            <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-button">
                            <!--<button type="button" class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button>
                            <button type="button" class="icon-btn sideMenuToggler">
                                <i class="far fa-shopping-cart"></i>
                                <span class="badge">5</span>
                            </button>-->
                            <a href="#" class="th-btn shadow-none">Get A Quote<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>