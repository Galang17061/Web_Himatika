<?php
// Taking date from each post
$date = array();
$month = array();
$dummy= array();
$dummy2= array();
for($i = 0; $i < count($d_post_detail); $i++){
    $dummy[$i] = str_replace(' ','-',$d_post_detail[$i]['dpd_created_at']);
    $dummy2[$i] = str_replace(':','-',$dummy[$i]);
    $date[$i] = explode('-',$dummy2[$i]);
}
?>

@extends('layouts.layouts_post._main')
@section('content')

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>Our Post</h2>
                </div>
                <div class="page_link">
                    <a href="{{route('index')}}">Home</a>
                    <a href="{{route('post')}}">Post</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog_area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach($d_post_image as $element)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0"
                                src="{{url(Storage::url('images/post/'.$element->dpi_image))}}"
                                alt="{{$element->dpi_image}}">
                            <a href="{{route('post_single',[$element->dpi_id])}}" class="blog_item_date">
                                <h3>
                                    {{$date[$element->dpi_id-1][2]}}
                                </h3>
                                <p>
                                    <?php
                                        $month = date("F", mktime(0, 0, 0, $date[$element->dpi_id-1][1], 10));
                                        print($month);
                                    ?>
                                </p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{route('post_single',[$element->dpi_id])}}">
                                <h2>
                                    {{($element->d_post_detail->dpd_title)}}
                                </h2>
                            </a>
                            <p>
                                {!! $element->d_post_detail->dpd_description !!}
                            </p>
                            <ul class="blog-info-link">
                                <li>
                                    <a href="{{route('post_single',[$element->dpi_id])}}">
                                        <i class="far fa-user"></i>
                                        {{$element->m_category_post->mcp_title}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    @endforeach

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                {{$d_post_image->links()}}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            

            {{-- <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            @foreach($m_category_post as $element)
                            <li>
                                <a href="{{route('post_single',[$element->mcp_id])}}" class="d-flex">
            <p>{{$element->mcp_title}}</p>
            <p>()</p>
            </a>
            </li>
            @endforeach
            </ul>
            </aside>

            <aside class="single_sidebar_widget popular_post_widget">
                <h3 class="widget_title">Recent Post</h3>
                @foreach($d_post_image as $element)
                <div class="media post_item">
                    <img src="{{url($image_path)}}" alt="post" style="width: 100px;height:100px">
                    <div class="media-body">
                        <a href="{{route('post_single',[$element->dpi_id])}}">
                            <h3>{{$element->d_post_detail->dpd_title}}</h3>
                        </a>
                        <p>{{$date[$element->dpi_id-2][0]}} {{$date[$element->dpi_id-2][1]}}
                            {{$date[$element->dpi_id-2][2]}}</p>
                    </div>
                </div>
                @endforeach
            </aside>

        </div>
    </div> --}}
    </div>
    </div>
</section>

@endsection
