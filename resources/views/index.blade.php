@extends('layouts.layouts_frontend._main')
@section('content')
<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="site-section-cover overlay img-bg-section"
        style="background-image: url({{asset('../assets_frontend/main/images/hero_3.jpg')}});">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-12 col-lg-7">
                    <h1 data-aos="fade-up" data-aos-delay="300">Griya Rekasa</h1>
                    <p style="opacity: 0.6;" data-aos="fade-up" data-aos-delay="100">HIMATIKA ITS 2019/2020</p>
                </div>
            </div>
        </div>

    </div>

    <div class="site-section"
        style="background-image: url({{asset('../assets_frontend/main/hima/bahtera1.png')}}); background-size: cover; background-attachment: fixed;"
        id="profile-section">
        <div class="container">
            <div class="row justify-content-center mb-4 block-img-video-1-wrap">
                <div class="col-md-12 mb-5">
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0RSCzgqE-O4?rel=0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <span>Latest Blog Posts</span>
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($data as $element)
                <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
                    <div>
                        <a href="#" class="mb-4 d-block"><img
                                src="" alt="Image"
                                class="img-fluid rounded">
                            </a>
                        <h2>
                            <a href="#">
                                {{$element->dpd_title}}
                            </a>
                        </h2>
                        <p class="text-muted mb-3 text-uppercase small">
                            <span class="mr-2">
                                {{$element->dpd_created_at}}
                            </span>
                        <p>
                            {{$element->dpd_description}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
