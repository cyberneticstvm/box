@extends("web.base")
@section("webcontent")
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blogs</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Blogs</li>
            </ul>
        </div>
    </div>
</div>
<section class="th-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                @forelse($blogs as $key => $blog)
                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href=""><img src="{{ asset($blog->featured_image) }}" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="#"><img src="{{ asset('/web/assets/img/blog/author-1-1.png') }}" alt="avater"> By Move N Store</a>
                            <a href="#"><i class="fa-light fa-calendar-days"></i>{{ $blog->created_at->format('d, M Y') }}</a>
                            <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}"><i class="fa-regular fa-comments"></i>{{ $blog->hashtags }}</a>
                        </div>
                        <h2 class="blog-title"><a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                        </h2>
                        <p class="blog-text"></p>
                        <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="line-btn">Read More</a>
                    </div>
                </div>
                @empty
                <h5>No blogs are published right now</h5>
                @endforelse
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    <div class="widget widget_categories  ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Packing and Moving</a>
                            </li>
                            <li>
                                <a href="#">Box Storage</a>
                            </li>
                            <li>
                                <a href="#">Office Storage</a>
                            </li>
                            <li>
                                <a href="#">Household Storage</a>
                            </li>
                            <li>
                                <a href="#">General</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget  ">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>21 June, 2024</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection("webcontent")