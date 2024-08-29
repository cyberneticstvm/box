@extends("web.base")
@section("webcontent")
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Why Choose Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Why Choose Us</li>
            </ul>
        </div>
    </div>
</div><!--==============================
    Project Area
==============================-->
<section class="space" id="service-sec">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12">
                <p class="about-feature_title text-justify">At Move N Store, we stand out in the storage industry thanks to our smart and advanced storage facilities, user-friendly online platform, affordable pricing, and innovative storage-by-the-box concept. Our commitment to excellence ensures a seamless experience for all your storage needs.</p>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">01</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/service_card_1.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Eco-Friendly Storage</a></h3>
                    <p class="service-card_text text-justify">We prioritize sustainability by utilizing eco-friendly materials and practices in our storage solutions. Our commitment to minimizing environmental impact means you can store your items guilt-free, knowing you're contributing to a greener planet.</p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">02</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/service_card_2.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Round-the-Clock Security</a></h3>
                    <p class="service-card_text text-justify">Your peace of mind is our priority. With comprehensive security measures in place, we ensure that your belongings are safe and secure at all times. Our staff is trained to handle any security concerns promptly and effectively.</p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">03</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/service_card_3.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Advanced Facility Storage</a></h3>
                    <p class="service-card_text text-justify">Our state-of-the-art storage facilities are equipped with cutting-edge technology to provide optimal storage conditions for all types of items. From temperature control to humidity management, we ensure that your possessions remain in pristine condition.</p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">04</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/service_card_4.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Neat and Clean Environment</a></h3>
                    <p class="service-card_text text-justify">We believe that cleanliness is essential for a reliable storage solution. Our facilities are meticulously maintained to provide a neat and hygienic environment, ensuring your items are stored in the best possible conditions.</p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">05</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/service_card_5.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Affordable Prices</a></h3>
                    <p class="service-card_text text-justify">We offer competitive pricing without compromising on quality. Our transparent pricing model ensures that you receive exceptional value for your storage needs, allowing you to save money while keeping your items safe.</p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">06</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/service_card_6.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">24/7 Surveillance</a></h3>
                    <p class="service-card_text text-justify">Our facilities are monitored around the clock by advanced surveillance systems. This constant monitoring provides an additional layer of security, giving you confidence that your belongings are protected at all times.</p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">07</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/service_card_7.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Pick, Pack, Store, and Deliver</a></h3>
                    <p class="service-card_text text-justify">We simplify the storage process by offering a comprehensive service that includes picking up your items, securely packing them, storing them in our facility, and delivering them back to you when needed. Our all-in-one solution makes it easy for you to manage your belongings without any hassle.</p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">08</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/service_card_8.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Flexible Storage Options</a></h3>
                    <p class="service-card_text text-justify">Whether you need short-term or long-term storage, we provide flexible options tailored to your unique needs. Our variety of unit sizes and rental durations ensures you only pay for the space you need.</p>
                    <br /><br /><br />
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">09</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/service_card_9.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Exceptional Customer Service</a></h3>
                    <p class="service-card_text text-justify">Our dedicated team is committed to providing you with an outstanding experience. From the moment you contact us to the final delivery, we prioritize your satisfaction and are always available to assist you with any questions or concerns.</p><br />
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">10</div>
                    <div class="shape-icon">
                        <img src="{{ asset('/web/assets/img/icon/service_card_9.svg') }}" alt="Icon">
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="#">Over 15 Years of Expertise</a></h3>
                    <p class="service-card_text text-justify">With more than 15 years of experience in the storage industry, we have honed our skills and expertise to deliver the best possible service to our clients. Our long-standing commitment to excellence ensures that you receive reliable, professional, and knowledgeable support for all your storage needs. Choose MoveN Store for a seamless, secure, and eco-friendly storage experience that goes above and beyond your expectations!</p>
                    <div class="bg-shape">
                        <img src="{{ asset('/web/assets/img/bg/service_card_bg.png') }}" alt="bg">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection("webcontent")