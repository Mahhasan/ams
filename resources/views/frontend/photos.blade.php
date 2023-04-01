@extends('frontend.layouts.app')
@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset('frontend/images/background/page-title.jpg')}});">
    <div class="auto-container">
        <div class="content-box">
            <div class="title centred">
                <h1>AMS Photo Gallery</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>Photos</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- events-grid -->
<section class="events-grid sec-pad-2">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 schedule-block">
                <div class="schedule-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('frontend/images/resource/schedule-2.jpg')}}" alt=""></figure>
                            <div class="content-box"> 
                                <div class="post-date"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 schedule-block">
                <div class="schedule-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('frontend/images/resource/schedule-3.jpg')}}" alt=""></figure>
                            <div class="content-box"> 
                                <div class="post-date"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 schedule-block">
                <div class="schedule-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('frontend/images/resource/schedule-5.jpg')}}" alt=""></figure>
                            <div class="content-box"> 
                                <div class="post-date"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 schedule-block">
                <div class="schedule-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('frontend/images/resource/schedule-6.jpg')}}" alt=""></figure>
                            <div class="content-box"> 
                                <div class="post-date"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 schedule-block">
                <div class="schedule-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('frontend/images/resource/schedule-7.jpg')}}" alt=""></figure>
                            <div class="content-box"> 
                                <div class="post-date"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 schedule-block">
                <div class="schedule-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('frontend/images/resource/schedule-8.jpg')}}" alt=""></figure>
                            <div class="content-box"> 
                                <div class="post-date"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="pagination-wrapper centred">
            <ul class="pagination clearfix">
                <li><a href="event.html"><i class="far fa-angle-double-left"></i></a></li>
                <li><a href="event.html" class="current">1</a></li>
                <li><a href="event.html">2</a></li>
                <li><a href="event.html"><i class="far fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
@endsection
<!-- events-grid end -->
