@extends("web.base")
@section("webcontent")
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div><!--==============================
    Project Area
==============================-->
<div class="space">
    <div class="container">
        <div class="row gy-4">
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="box-title">Our Office Address</h4>
                        <span class="contact-info_text">31 Street 5B, Al Quoz, Dubai, UAE</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="box-title">Call Us Anytime</h4>
                        <span class="contact-info_text">
                            <a href="tel:+971548882525">+971 54 888 2525</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="box-title">Send An Email</h4>
                        <span class="contact-info_text">
                            <a href="mailto:info@moveinstore.com">info@moveinstore.com</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-smoke space" data-bg-src="{{ asset('/web/assets/img/bg/contact_bg_1.webp') }}" id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="title-area mb-35 text-xl-start text-center">
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}"></span>
                            <img src="{{ asset('/web/assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                        </div>contact with us!
                    </span>
                    <h2 class="sec-title">Have Any Questions?</h2>
                </div>
                <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                    @csrf
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
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Your Name">
                            <i class="fal fa-user"></i>
                            @error('name')
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control" name="number" id="number" value="{{ old('number') }}" placeholder="Phone Number">
                            <i class="fal fa-phone"></i>
                            @error('number')
                            <small class="text-danger">{{ $errors->first('number') }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <select class="form-control" name="service" id="service">
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
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message">{{ old('message') }}</textarea>
                            <i class="fal fa-comment"></i>
                            @error('message')
                            <small class="text-danger">{{ $errors->first('message') }}</small>
                            @enderror
                        </div>
                        <div class="form-btn text-xl-start text-center col-12">
                            <button type="submit" class="th-btn btn-submit">Submit<i class="fa-regular fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection("webcontent")