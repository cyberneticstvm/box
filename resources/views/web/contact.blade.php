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
                        <span class="contact-info_text"><a href="https://maps.app.goo.gl/yvUWXEt9ZNnJZxWV8?g_st=aw" target="_blank">31 Street 5B, Al Quoz, Dubai, UAE</a></span>
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
<div class="bg-smoke space" data-bg-src="{{ asset('/web/assets/img/bg/contact_bg_1_1.webp') }}" id="contact-sec">
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
                <form action="{{ route('quote.submit') }}" method="POST" class="contact-form bg-white p-3" id="quoteForm">
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
<div class="map-sec">
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3610.029933989936!2d55.27261799999999!3d25.202213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDEyJzA4LjAiTiA1NcKwMTYnMjEuNCJF!5e0!3m2!1sen!2sin!4v1727171410969!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
</div>
@endsection("webcontent")