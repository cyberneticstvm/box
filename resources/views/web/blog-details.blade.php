@extends("web.base")
@section("webcontent")
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blogs</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Blogs</li>
                <li>{{ $blog->title }}</li>
            </ul>
        </div>
    </div>
</div>
<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-lg-12">
                <div class="th-blog blog-single">
                    <div class="blog-img">
                        <img src="{{ asset($blog->featured_image) }}" alt="Blog Image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="#"><img src="{{ asset('/web/assets/img/blog/author-1-1.png') }}" alt="avater"> By Move N Store</a>
                            <a href="#"><i class="fa-light fa-calendar-days"></i>{{ $blog->created_at->format('d, M Y') }}</a>
                            <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}"><i class="fa-regular fa-comments"></i>{{ $blog->hashtags }}</a>
                        </div>
                        <h2 class="blog-title">{{ $blog->title }}</h2>
                        {!! $blog->content !!}
                    </div>
                    <div class="share-links clearfix ">
                        <div class="row justify-content-between">
                            <div class="col-sm-auto">
                                <span class="share-links-title">Tags:</span>
                                <div class="tagcloud">
                                    <a href="#">{{ $blog->hashtags }}</a>
                                </div>
                            </div>
                            <div class="col-sm-auto text-xl-end">
                                <span class="share-links-title">Share:</span>
                                <ul class="social-links">
                                    <li><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul><!-- End Social Share -->
                            </div><!-- Share Links Area end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection("webcontent")