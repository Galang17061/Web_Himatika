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
                <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
                    <div>
                        <a href="#" class="mb-4 d-block"><img src="{{asset('../assets_frontend/main/images/hero_2.jpg')}}"
                                alt="Image" class="img-fluid rounded"></a>
                        <h2><a href="#">P</a></h2>
                        <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span>
                            By <a href="#" class="by">James Cooper</a></p>
                        <p>Gak Jawab PKI!</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <a href="#" class="mb-4 d-block"><img src="{{asset('../assets_frontend/main/images/hero_3.jpg')}}"
                                alt="Image" class="img-fluid rounded"></a>
                        <h2><a href="#">Jahannam</a></h2>
                        <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span>
                            By <a href="#" class="by">James Cooper</a></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero
                            neque.
                            Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga
                            veritatis culpa
                            quis!</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
