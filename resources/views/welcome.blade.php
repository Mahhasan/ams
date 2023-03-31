
@extends('frontend.layouts.app')
@section('content')
@include('frontend.common.main_banner')
<!-- activities-section -->
<section class="activities-section centred bg-color-1">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <!-- <div class="icon-box"><i class="flaticon-garbage-truck"></i></div> -->
                        <div class="icon-box"><i class="flaticon-parking"></i></div>
                        <!-- <h6>Become a member</h6> -->
                        <h4><a style="color:#2e3094;" href="/membership-form">Become a member</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-parking"></i></div>
                        <!-- <h6>In Effect</h6> -->
                        <h4><a style="color:#2e3094;" href="#">Benefit of Member</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <!-- <div class="icon-box"><i class="flaticon-school"></i></div> -->
                        <div class="icon-box"><i class="flaticon-parking"></i></div>
                        <!-- <h6>Schools</h6> -->
                        <h4><a style="color:#2e3094;" href="#">User Guideline</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <!-- <div class="icon-box"><i class="flaticon-taxes"></i></div> -->
                        <div class="icon-box"><i class="flaticon-parking"></i></div>
                        <!-- <h6>Council Tax</h6> -->
                        <h4><a style="color:#2e3094;" href="#">FAQ's</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- activities-section end -->


<!-- about-section -->
<section class="about-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="sec-title">
                            <h6><i class="flaticon-star"></i><span>About AMS</span></h6>
                            <h2>An Association Management Solution for your Agency</h2>
                            <div class="title-shape"></div>
                        </div>
                        <div class="text">
                           
                            <h5 class="justified">An Association Management System (AMS) is a software solution designed to help associations manage their day-to-day operations. It typically includes features for membership management, event planning, communication, and financial management. AMS can be cloud-based or on-premises, and are used by a variety of associations, including trade associations, professional societies, and nonprofit organizations.</h5>
                            {{-- <h4>Mayor, “Jordan Cooper”</h4>
                            <p>When our power of choice is untrammelled when nothing prevents our being able to do what we like best, every pleasure is to be welcomed every pain get avoided. But in certain circumstances owing.</p> --}}
                        </div>
                        <div class="inner-box clearfix">
                            <figure class="signature pull-left"><img src="{{asset('frontend/images/icons/signature.png')}}" alt=""></figure>
                            <ul class="social-style-one clearfix">
                                <li><a href="/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="/"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="/"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="flaticon-government"></i></div>
                                        <h5>AMS Office</h5>
                                        <p><a href="tel:4488812345">+44 (888) 12 345</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="flaticon-alert"></i></div>
                                        <h5>Emergency</h5>
                                        <p><a href="tel:999">999</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_1">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('frontend/images/resource/about-1.jpg')}}" alt=""></figure>
                        <div class="text">
                            <h4>“Association Management System (AMS) makes your Organization Smart”</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- explore-section -->
<!-- <section class="explore-section centred bg-color-2">
    <figure class="vector-image"><img src="{{asset('frontend/images/icons/vector-1.png')}}" alt=""></figure>
    <div class="pattern-layer" style="background-image: url({{asset('frontend/images/shape/shape-1.png')}});"></div>
    <div class="auto-container">
        <div class="sec-title centred light">
           <h6><i class="flaticon-star"></i><span>Governance & Strategy</span><i class="flaticon-star"></i></h6>
            <h2>Explore City Government</h2>
            <div class="title-shape"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 explore-block">
                <div class="explore-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('frontend/images/resource/explore-1.jpg')}}" alt=""></figure>
                        <div class="content-box">
                            <div class="text">
                                <div class="icon-box"><i class="flaticon-scroll"></i></div>
                                <h4>History & Establishment</h4>
                            </div>
                            <div class="overlay-content">
                                <h4>History & <br />Establishment</h4>
                                <p>Toil and pain can procure him some great take a trivial example.</p>
                                <ul class="link-box clearfix">
                                    <li>
                                        <a href="about.html">
                                            <i class="flaticon-dog"></i>
                                            <span>Read More</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:info@example.com">
                                            <i class="flaticon-mail-inbox-app"></i>
                                            <span>info@example.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 explore-block">
                <div class="explore-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('frontend/images/resource/explore-2.jpg')}}" alt=""></figure>
                        <div class="content-box">
                            <div class="text">
                                <div class="icon-box"><i class="flaticon-goverment"></i></div>
                                <h4>Business & Administration</h4>
                            </div>
                            <div class="overlay-content">
                                <h4>Business & <br />Administration</h4>
                                <p>Toil and pain can procure him some great take a trivial example.</p>
                                <ul class="link-box clearfix">
                                    <li>
                                        <a href="about.html">
                                            <i class="flaticon-dog"></i>
                                            <span>Read More</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:info@example.com">
                                            <i class="flaticon-mail-inbox-app"></i>
                                            <span>info@example.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 explore-block">
                <div class="explore-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('frontend/images/resource/explore-3.jpg')}}" alt=""></figure>
                        <div class="content-box">
                            <div class="text">
                                <div class="icon-box"><i class="flaticon-budget"></i></div>
                                <h4>Budget & Govt. Policies</h4>
                            </div>
                            <div class="overlay-content">
                                <h4>Budget & <br />Govt. Policies</h4>
                                <p>Toil and pain can procure him some great take a trivial example.</p>
                                <ul class="link-box clearfix">
                                    <li>
                                        <a href="about.html">
                                            <i class="flaticon-dog"></i>
                                            <span>Read More</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:info@example.com">
                                            <i class="flaticon-mail-inbox-app"></i>
                                            <span>info@example.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- explore-section end -->


<!-- explore-banner -->
<div class="explore-banner bg-color-1">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="single-item">
                <div class="title-box">
                    <h3>Recent Documents</h3>
                    <p>Enjoy a pleasure that annoying consequences.</p>
                </div>
            </div>
            <div class="single-item">
                <div class="inner-box">
                    <figure class="icon-box"><img src="{{asset('frontend/images/icons/icon-1.png')}}" alt=""></figure>
                    <h4>Tax_Paid_Challan</h4>
                    <p><a href="/">Download the Challan Details file</a></p>
                </div>
            </div>
            <div class="single-item">
                <div class="inner-box">
                    <figure class="icon-box"><img src="{{asset('frontend/images/icons/icon-1.png')}}" alt=""></figure>
                    <h4>Tender_Schedules</h4>
                    <p><a href="/">Download Your List at Free of Cost</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- explore-banner end -->


<!-- service-section -->
<section class="service-section" style="background-image: url({{asset('frontend/images/background/service-bg.jpg')}});">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="police-crime.html">Membership Management</a></h4>
                        <div class="btn-box"><a href="police-crime.html">More</a></div>
                        <div class="icon-box"><i class="flaticon-police"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 title-column">
                <div class="sec-title centred">
                    <div class="sec-title centred">
                        <h6><i class="flaticon-star"></i><span>Modules</span><i class="flaticon-star"></i></h6>
                        <h2>Explore Our Modules</h2>
                        <div class="title-shape"></div>
                        <a href="departments.html" class="links">All Modules<i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="/">Committee Management</a></h4>
                        <div class="btn-box"><a href="/">More</a></div>
                        <div class="icon-box"><i class="flaticon-justice"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="/">Event Management</a></h4>
                        <div class="btn-box"><a href="/">More</a></div>
                        <div class="icon-box"><i class="flaticon-traffic-sign"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="/">Accounting</a></h4>
                        <div class="btn-box"><a href="/">More</a></div>
                        <div class="icon-box"><i class="flaticon-statue"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="/">Contact Management</a></h4>
                        <div class="btn-box"><a href="/">More</a></div>
                        <div class="icon-box"><i class="flaticon-chinese-house"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="/">Meeting</a></h4>
                        <div class="btn-box"><a href="/">More</a></div>
                        <div class="icon-box"><i class="flaticon-hospital"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-section end -->


<!-- schedules-section -->
<section class="schedules-section sec-pad bg-color-1">
    <div class="bg-layer" style="background-image: url({{asset('frontend/images/background/schedule-bg.jpg')}});"></div>
    <div class="auto-container">
        <div class="title-inner">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 title-column">
                    <div class="sec-title light">
                        <h6><i class="flaticon-star"></i><span>Our Calendars</span></h6>
                        <h2>Our Schedules & Routines</h2>
                        <div class="title-shape"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                    <div class="text">
                        <p>We denounce with righteous indignation and dislike men who are so beguiled demoralized charms of pleasure.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="schedule-tab">
            <div class="tab-btn-box">
                <ul class="tab-btns schedule-tab-btns clearfix">
                    <li class="p-tab-btn active-btn" data-tab="#tab-1">Upcoming Events</li>
                    <li class="p-tab-btn" data-tab="#tab-2">Upcoming Metings</li>
                    <li class="p-tab-btn" data-tab="#tab-3">Community Calendar</li>
                </ul>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 form-column">
                        <div class="subscribe-inner centred">
                            <div class="upper-box" style="background-image: url({{asset('frontend/images/resource/schedule-1.jpg')}});">
                                <div class="icon-box"><i class="flaticon-letter"></i></div>
                                <h3>Subscribe Us</h3>
                                <p>Get latest News & Events Details.</p>
                            </div>
                            <div class="lower-box">
                                <form action="contact.html" method="post" class="subscribe-form">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="mailid@example.com" required="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn">Subscribe Us</button>
                                    </div>
                                </form>
                                <div class="text">
                                    <h6>Never share your email with others.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                        <div class="p-tabs-content">
                            <div class="p-tab active-tab" id="tab-1">
                                <div class="two-column-carousel owl-carousel owl-theme owl-dots-none">
                                    <div class="schedule-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('frontend/images/resource/schedule-2.jpg')}}" alt=""></figure>
                                                <div class="content-box">
                                                    <div class="post-date"><h3>28<span>Jan’21</span></h3></div>
                                                    <div class="text">
                                                        <span class="category"><i class="flaticon-star"></i>Celebration</span>
                                                        <h4><a href="event-details.html">Public Affairs & Public Safety Committee Meeting</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="flaticon-clock-circular-outline"></i>3.00 pm - 4.30 pm</li>
                                                    <li><i class="flaticon-gps"></i>Heaton Park, Mt Road M25 2SW</li>
                                                </ul>
                                                <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                <div class="share-box"><a href="/">Share<i class="fas fa-share-alt"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('frontend/images/resource/schedule-3.jpg')}}" alt=""></figure>
                                                <div class="content-box">
                                                    <div class="post-date"><h3>15<span>Feb’21</span></h3></div>
                                                    <div class="text">
                                                        <span class="category"><i class="flaticon-star"></i>Art & Culture</span>
                                                        <h4><a href="event-details.html">Street San Antonio Sketches & Urban History</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="flaticon-clock-circular-outline"></i>10.00 am - 6.30 pm</li>
                                                    <li><i class="flaticon-gps"></i>182 St Georges Road, San Antonio</li>
                                                </ul>
                                                <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                <div class="share-box"><a href="/">Share<i class="fas fa-share-alt"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-tab" id="tab-2">
                                <div class="two-column-carousel owl-carousel owl-theme owl-dots-none">
                                    <div class="schedule-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('frontend/images/resource/schedule-2.jpg')}}" alt=""></figure>
                                                <div class="content-box">
                                                    <div class="post-date"><h3>28<span>Jan’21</span></h3></div>
                                                    <div class="text">
                                                        <span class="category"><i class="flaticon-star"></i>Celebration</span>
                                                        <h4><a href="event-details.html">Public Affairs & Public Safety Committee Meeting</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="flaticon-clock-circular-outline"></i>3.00 pm - 4.30 pm</li>
                                                    <li><i class="flaticon-gps"></i>Heaton Park, Mt Road M25 2SW</li>
                                                </ul>
                                                <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                <div class="share-box"><a href="/">Share<i class="fas fa-share-alt"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('frontend/images/resource/schedule-3.jpg')}}" alt=""></figure>
                                                <div class="content-box">
                                                    <div class="post-date"><h3>15<span>Feb’21</span></h3></div>
                                                    <div class="text">
                                                        <span class="category"><i class="flaticon-star"></i>Art & Culture</span>
                                                        <h4><a href="event-details.html">Street San Antonio Sketches & Urban History</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="flaticon-clock-circular-outline"></i>10.00 am - 6.30 pm</li>
                                                    <li><i class="flaticon-gps"></i>182 St Georges Road, San Antonio</li>
                                                </ul>
                                                <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                <div class="share-box"><a href="/">Share<i class="fas fa-share-alt"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-tab" id="tab-3">
                                <div class="two-column-carousel owl-carousel owl-theme owl-dots-none">
                                    <div class="schedule-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('frontend/images/resource/schedule-2.jpg')}}" alt=""></figure>
                                                <div class="content-box">
                                                    <div class="post-date"><h3>28<span>Jan’21</span></h3></div>
                                                    <div class="text">
                                                        <span class="category"><i class="flaticon-star"></i>Celebration</span>
                                                        <h4><a href="event-details.html">Public Affairs & Public Safety Committee Meeting</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="flaticon-clock-circular-outline"></i>3.00 pm - 4.30 pm</li>
                                                    <li><i class="flaticon-gps"></i>Heaton Park, Mt Road M25 2SW</li>
                                                </ul>
                                                <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                <div class="share-box"><a href="/">Share<i class="fas fa-share-alt"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('frontend/images/resource/schedule-3.jpg')}}" alt=""></figure>
                                                <div class="content-box">
                                                    <div class="post-date"><h3>15<span>Feb’21</span></h3></div>
                                                    <div class="text">
                                                        <span class="category"><i class="flaticon-star"></i>Art & Culture</span>
                                                        <h4><a href="event-details.html">Street San Antonio Sketches & Urban History</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="flaticon-clock-circular-outline"></i>10.00 am - 6.30 pm</li>
                                                    <li><i class="flaticon-gps"></i>182 St Georges Road, San Antonio</li>
                                                </ul>
                                                <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                <div class="share-box"><a href="/">Share<i class="fas fa-share-alt"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- schedules-section end -->


<!-- solutions-section -->
<section class="solutions-section">
    <figure class="image-layer"><img src="{{asset('frontend/images/resource/statue-1.png')}}" alt=""></figure>
    <div class="pattern-box">
        <div class="pattern-1" style="background-image: url({{asset('frontend/images/shape/shape-2.png')}});"></div>
        <div class="pattern-2" style="background-image: url({{asset('frontend/images/shape/shape-3.png')}});"></div>
        <div class="pattern-3" style="background-image: url({{asset('frontend/images/shape/shape-3.png')}});"></div>
        <div class="pattern-4 float-bob-y" style="background-image: url({{asset('frontend/images/shape/shape-4.png')}});"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred">
            <h6><i class="flaticon-star"></i><span>AMS Services</span><i class="flaticon-star"></i></h6>
            <h2>Packages and Facilities for Members</h2>
            <div class="title-shape"></div>
        </div>
        <div class="inner-container">
            <div class="upper-box clearfix">
                <div class="solution-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-click"></i></div>
                        <h4>Become a member</h4>
                        <p>File grievances against department</p>
                    </div>
                </div>
                <div class="solution-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-click"></i></div>
                        <h4>Online Payment</h4>
                        <p>Apply & Track birth registration</p>
                    </div>
                </div>
                <div class="solution-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-click"></i></div>
                        <h4>Event Solution</h4>
                        <p>Login or Register to get NOC</p>
                    </div>
                </div>
                <div class="solution-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-click"></i></div>
                        <h4>Internal Communication</h4>
                        <p>Information about registration ...</p>
                    </div>
                </div>
                <div class="solution-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-click"></i></div>
                        <h4>Business Scope</h4>
                        <p>Apply & Track death registration</p>
                    </div>
                </div>
                <div class="solution-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-click"></i></div>
                        <h4>Business to Business</h4>
                        <p>Apply & Track death registration</p>
                    </div>
                </div>
                
            </div>
            <div class="lower-box clearfix">
                <div class="bg-layer" style="background-image: url({{asset('frontend/images/background/bg-1.jpg')}});"></div>
                <div class="text pull-left">
                    <div class="icon-box"><i class="flaticon-idea"></i></div>
                    <h3>Donate through the Organization</h3>
                    <p>Donation is a powerful act which can make a meaningful impact on the lives of those in need.</p>
                </div>
                <div class="btn-box pull-right">
                    <a href="/" class="theme-btn">Donate</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- solutions-section end -->


<!-- testimonial-section -->
<section class="testimonial-section centred" style="background-image: url({{asset('frontend/images/background/testimonial-bg.jpg')}});">
    <div class="auto-container">
        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('frontend/images/resource/testimonial-1.png')}}" alt=""></figure>
                    <div class="text">
                        <p>Perfectly simple & easy to free hour when our power choice is nothing too prevents our being able what all get we like best pleasure.</p>
                    </div>
                    <div class="author-box">
                        <h4>Bertram Irvin</h4>
                        <span class="designation test-white">Citizen</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('frontend/images/resource/testimonial-2.png')}}" alt=""></figure>
                    <div class="text">
                        <p>I am highly impressed with the professionalism and passion of the people in this warehouse well educated, neat and clean city life.</p>
                    </div>
                    <div class="author-box">
                        <h4>Ivan Johny</h4>
                        <span class="designation">Visitors from Indonasia</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('frontend/images/resource/testimonial-3.png')}}" alt=""></figure>
                    <div class="text">
                        <p>The wise man therefore always holds in these matters to this on principle off selection rejects  to secure others greater pleasures.</p>
                    </div>
                    <div class="author-box">
                        <h4>Lucian Manroe</h4>
                        <span class="designation">Citizen</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->


<!-- team-section -->
<section class="team-section sec-pad bg-color-1">
    <div class="pattern-layer" style="background-image: url({{asset('frontend/images/shape/shape-5.png')}});"></div>
    <div class="auto-container">
        <div class="sec-title">
            <h6><i class="flaticon-star"></i><span>AMS Team</span></h6>
            <h2>Meet AMS Commettiee</h2>
            <div class="title-shape"></div>
            <a href="/" class="theme-btn">All members</a>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="/"><img src="{{asset('frontend/images/team/team-1.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="author-box">
                                <h4><a href="/">Sabur Khan</a></h4>
                                <span class="designation">President</span>
                            </div>
                            <ul class="othre-info clearfix">
                                <li class="mail-box"><a href="/"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                <li class="share-option">
                                    <i class="share-icon flaticon-share"></i>
                                    <ul class="share-links clearfix">
                                        <li><a href="/"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="/"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="/"><img src="{{asset('frontend/images/team/team-2.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="author-box">
                                <h4><a href="/">Rafiqul Islam Rubel</a></h4>
                                <span class="designation">Vise President</span>
                            </div>
                            <ul class="othre-info clearfix">
                                <li class="mail-box"><a href="/"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                <li class="share-option">
                                    <i class="share-icon flaticon-share"></i>
                                    <ul class="share-links clearfix">
                                        <li><a href="/"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="/"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="/"><img src="{{asset('frontend/images/team/team-3.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="author-box">
                                <h4><a href="/">Kazi Sobuj</a></h4>
                                <span class="designation">CMO</span>
                            </div>
                            <ul class="othre-info clearfix">
                                <li class="mail-box"><a href="/"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                <li class="share-option">
                                    <i class="share-icon flaticon-share"></i>
                                    <ul class="share-links clearfix">
                                        <li><a href="/"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="/"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="/"><img src="{{asset('frontend/images/team/team-4.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="author-box">
                                <h4><a href="/">Mahmud Hasan</a></h4>
                                <span class="designation">Developer</span>
                            </div>
                            <ul class="othre-info clearfix">
                                <li class="mail-box"><a href="/"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                <li class="share-option">
                                    <i class="share-icon flaticon-share"></i>
                                    <ul class="share-links clearfix">
                                        <li><a href="/"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="/"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section end -->


<!-- news-section -->
<section class="news-section bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <h6><i class="flaticon-star"></i><span>News & Blog</span><i class="flaticon-star"></i></h6>
            <h2>Latest From Our Newsroom</h2>
            <div class="title-shape"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                <img src="{{asset('frontend/images/news/news-1.jpg')}}" alt="">
                            </figure>
                            <div class="post-date"><h3>28<span>Jan’21</span></h3></div>
                        </div>
                        <div class="lower-content">
                            <div class="category"><a href="/"><i class="flaticon-star"></i>Announcement</a></div>
                            <h4><a href="blog-details.html">AMS Demo heading 01</a></h4>
                            <ul class="post-info clearfix">
                                <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban</a></li>
                                <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                <img src="{{asset('frontend/images/news/news-2.jpg')}}" alt="">
                            </figure>
                            <div class="post-date"><h3>14<span>Dec’20</span></h3></div>
                        </div>
                        <div class="lower-content">
                            <div class="category"><a href="/"><i class="flaticon-star"></i>Education</a></div>
                            <h4><a href="blog-details.html">AMS Demo heading 02</a></h4>
                            <ul class="post-info clearfix">
                                <li><i class="far fa-user"></i><a href="blog-details.html">Bert Anslem</a></li>
                                <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                <img src="{{asset('frontend/images/news/news-3.jpg')}}" alt="">
                            </figure>
                            <div class="post-date"><h3>06<span>Nov’20</span></h3></div>
                        </div>
                        <div class="lower-content">
                            <div class="category"><a href="/"><i class="flaticon-star"></i>Announcement</a></div>
                            <h4><a href="blog-details.html">AMS Demo heading 03</a></h4>
                            <ul class="post-info clearfix">
                                <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban</a></li>
                                <li><i class="far fa-comment"></i><a href="blog-details.html">0 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news-section end -->


<!-- funfact-section -->
<section class="funfact-section">
    <div class="pattern-layer" style="background-image: url({{asset('frontend/images/shape/shape-7.png')}});"></div>
    <div class="auto-container">
        <div class="funfact-content">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <h6><i class="flaticon-star"></i><span>Interesting Facts</span></h6>
                        <h2>AMS In Numbers</h2>
                        <div class="title-shape"></div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                    <div class="funfact-inner centred">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                <div class="funfact-block-one">
                                    <div class="inner-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="1500" data-stop="45">0</span><span>k</span>
                                        </div>
                                        <h6>City Population</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                <div class="funfact-block-one">
                                    <div class="inner-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="1500" data-stop="168">0</span>
                                        </div>
                                        <h6>Total Area in Sq.mi</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                <div class="funfact-block-one">
                                    <div class="inner-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="1500" data-stop="1.5">0</span><span>M</span>
                                        </div>
                                        <h6>Average Revenue</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                <div class="funfact-block-one">
                                    <div class="inner-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="1500" data-stop="7">0</span><span>th</span>
                                        </div>
                                        <h6>Largest City in Us</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="twitter-feed">
            <div class="inner-content clearfix">
                <div class="single-item">
                    <div class="title-box centred">
                        <div class="pattern" style="background-image: url({{asset('frontend/images/shape/shape-6.png')}});"></div>
                        <div class="icon-box"><i class="fab fa-twitter"></i></div>
                        <h4>Follow AMS on Twitter</h4>
                        <a href="/">Follow Us</a>
                    </div>
                </div>
                <div class="single-item">
                    <div class="inner-box">
                        <h5><i class="far fa-calendar"></i>01 January, 2023</h5>
                        <div class="text">
                            <p>Finally AMS has been released its official website and opened the official Twitter Account. This is not a political account and cannot respond to political tweets.</p>
                            <a href="/">Visit: https://ams.com.bd</a>
                        </div>
                        <ul class="post-info clearfix">
                            <li><i class="far fa-comment"></i><a href="/">66 Cmnts</a></li>
                            <li><i class="far fa-heart"></i><a href="/">105 Likes</a></li>
                        </ul>
                        <div class="share"><a href="/"><i class="fas fa-share-alt"></i>Share</a></div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="inner-box">
                        <h5><i class="far fa-calendar"></i>25 December, 2022</h5>
                        <div class="text">
                            <p>AMS first product become the most hit product in market. President said in a TalkShow. Visit the following link to watch full Talkshow on YouTube.</p>
                            <a href="/">Visit: https://www.youtube.com/ams_tk</a>
                        </div>
                        <ul class="post-info clearfix">
                            <li><i class="far fa-comment"></i><a href="/">130 Cmnts</a></li>
                            <li><i class="far fa-heart"></i><a href="/">260 Likes</a></li>
                        </ul>
                        <div class="share"><a href="/"><i class="fas fa-share-alt"></i>Share</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section end -->
@endsection