@extends("web.base")
@section("webcontent")
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Thank You</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Thank You</li>
            </ul>
        </div>
    </div>
</div><!--==============================
    Project Area
==============================-->
<div class="overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="text-success text-center">Thank You! Your request has submitted successfully.</h3>
            </div>
        </div>
    </div>
</div>
@endsection("webcontent")