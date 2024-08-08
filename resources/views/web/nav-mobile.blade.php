<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a class="icon-masking" href="{{ route('index') }}"><span data-mask-src="{{ asset('/web/assets/img/logo-small.webp') }}" class="mask-icon"></span><img src="{{ asset('/web/assets/img/logo-small.webp') }}" height="25%" alt="Webteck"></a>
        </div>

        <div class="th-mobile-menu">
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
                    <a href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>