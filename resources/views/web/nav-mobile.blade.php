<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a class="icon-masking" href="{{ route('index') }}"><span data-mask-src="{{ asset('/web/assets/img/logo-small.webp') }}" class="mask-icon"></span><img src="{{ asset('/web/assets/img/logo-small.webp') }}" height="25%" alt="Webteck"></a>
        </div>

        <div class="th-mobile-menu">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('pandm') }}">Packers & Movers </a></li>
                <li class="menu-item-has-children">
                    <a href="{{ route('services') }}">Storage Solutions</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('services') }}">Household Storage</a></li>
                        <li><a href="{{ route('services') }}">Box Storage</a></li>
                        <li><a href="{{ route('services') }}">Office Storage</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>