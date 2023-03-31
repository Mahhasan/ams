@extends('frontend.layouts.app')
@section('content')
        <!-- Page Title -->
        <section class="page-title" style="background-image: url({{asset('frontend/images/background/page-title.jpg')}});">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title centred">
                        <h1>About Us</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- about-style-three -->
        <section class="about-style-three">
            <div class="auto-container">
                <div class="row clearfix align-items-center">
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="content_block_5">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h6><i class="flaticon-star"></i><span>Welcome to Whitehall</span></h6>
                                    <h2>Inner Metropolitan Municipality</h2>
                                    <div class="title-shape"></div>
                                </div>
                                <div class="text">
                                    <h4>City Was “Founded in 1839”</h4>
                                    <p>Righteous indignation & dislike men who are so beguiled demoralized by the charms pleasure the moment so blinded by desires that they cannot foresee to bound.</p>
                                    <ul class="list clearfix">
                                        <li><i class="flaticon-bird"></i>Administrative Practices</li>
                                        <li><i class="flaticon-bird"></i>Carry out the Duties</li>
                                        <li><i class="flaticon-bird"></i>Develop the Municipaity</li>
                                        <li><i class="flaticon-bird"></i>Maintain Financial Integrity</li>
                                        <li><i class="flaticon-bird"></i>Represent the Public</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                        <figure class="image-box"><img src="{{asset('frontend/images/resource/about-2.jpg')}}" alt=""></figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 inner-column">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <figure class="image"><img src="{{asset('frontend/images/resource/feature-1.jpg')}}" alt=""></figure>
                                <div class="text">
                                    <h4>Council Information</h4>
                                    <a href="/about"><i class="flaticon-right-arrow"></i></a>
                                </div>
                                <div class="overlay-content">
                                    <h4>Council Information</h4>
                                    <p>Demoralized by the charm some pleasure of the moment so blinded.</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <figure class="image"><img src="{{asset('frontend/images/resource/feature-2.jpg')}}" alt=""></figure>
                                <div class="text">
                                    <h4>Latest Annual Plan</h4>
                                    <a href="/about"><i class="flaticon-right-arrow"></i></a>
                                </div>
                                <div class="overlay-content">
                                    <h4>Latest Annual Plan</h4>
                                    <p>Demoralized by the charm some pleasure of the moment so blinded.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-three end -->


        <!-- discover-section -->
        <section class="discover-section sec-pad" style="background-image: url({{asset('frontend/images/background/discover-bg.jpg')}});">
            <div class="auto-container">
                <div class="sec-title centred light">
                    <h6><i class="flaticon-star"></i><span>Discover Our City</span><i class="flaticon-star"></i></h6>
                    <h2>Diverse & Exciting City</h2>
                    <div class="title-shape"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 discover-block">
                        <div class="discover-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="icon-box"><i class="flaticon-job"></i></div>
                                    <h4>Jobs at <br />Our City Govt</h4>
                                    <a href="/about"><i class="flaticon-right-arrow"></i></a>
                                    <span class="count">01</span>
                                </div>
                                <div class="overlay-content">
                                    <h4>Jobs at <br />Our City Govt</h4>
                                    <p>Except to obtain some from it but who has any right find enjoy a pleasure.</p>
                                    <a href="/about"><i class="flaticon-right-arrow"></i></a>
                                    <span class="count">01</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 discover-block">
                        <div class="discover-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="icon-box"><i class="flaticon-building"></i></div>
                                    <h4>Our Building & <br />Squares</h4>
                                    <a href="/about"><i class="flaticon-right-arrow"></i></a>
                                    <span class="count">02</span>
                                </div>
                                <div class="overlay-content">
                                    <h4>Our Building & <br />Squares</h4>
                                    <p>Except to obtain some from it but who has any right find enjoy a pleasure.</p>
                                    <a href="/about"><i class="flaticon-right-arrow"></i></a>
                                    <span class="count">02</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 discover-block">
                        <div class="discover-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="icon-box"><i class="flaticon-teamwork"></i></div>
                                    <h4>Partner <br />Oraganisations</h4>
                                    <a href="/about"><i class="flaticon-right-arrow"></i></a>
                                    <span class="count">03</span>
                                </div>
                                <div class="overlay-content">
                                    <h4>Partner <br />Oraganisations</h4>
                                    <p>Except to obtain some from it but who has any right find enjoy a pleasure.</p>
                                    <a href="/about"><i class="flaticon-right-arrow"></i></a>
                                    <span class="count">03</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 discover-block">
                        <div class="discover-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="icon-box"><i class="flaticon-location"></i></div>
                                    <h4>Venue & <br />Facilities Hire</h4>
                                    <a href="/about"><i class="flaticon-right-arrow"></i></a>
                                    <span class="count">04</span>
                                </div>
                                <div class="overlay-content">
                                    <h4>Venue & <br />Facilities Hire</h4>
                                    <p>Except to obtain some from it but who has any right find enjoy a pleasure.</p>
                                    <a href="/about"><i class="flaticon-right-arrow"></i></a>
                                    <span class="count">04</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- discover-section end -->


        <!-- team-section -->
        <section class="team-section sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h6><i class="flaticon-star"></i><span>Whitehall Team</span></h6>
                    <h2>Meet Council Members</h2>
                    <div class="title-shape"></div>
                    <a href="#" class="theme-btn">All members</a>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/team/team-1.jpg')}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <h4><a href="#">Bertram Irvin</a></h4>
                                        <span class="designation">President</span>
                                    </div>
                                    <ul class="othre-info clearfix">
                                        <li class="mail-box"><a href="#"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                        <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                        <li class="share-option">
                                            <i class="share-icon flaticon-share"></i>
                                            <ul class="share-links clearfix">
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
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
                                <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/team/team-2.jpg')}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <h4><a href="#">Elvina Julie</a></h4>
                                        <span class="designation">Actuary</span>
                                    </div>
                                    <ul class="othre-info clearfix">
                                        <li class="mail-box"><a href="#"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                        <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                        <li class="share-option">
                                            <i class="share-icon flaticon-share"></i>
                                            <ul class="share-links clearfix">
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
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
                                <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/team/team-3.jpg')}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <h4><a href="#">Herman Gordon</a></h4>
                                        <span class="designation">Director</span>
                                    </div>
                                    <ul class="othre-info clearfix">
                                        <li class="mail-box"><a href="#"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                        <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                        <li class="share-option">
                                            <i class="share-icon flaticon-share"></i>
                                            <ul class="share-links clearfix">
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
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
                                <figure class="image-box"><a href="#"><img src="{{asset('frontend/images/team/team-4.jpg')}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <h4><a href="#">Marian Lenora</a></h4>
                                        <span class="designation">Speaker</span>
                                    </div>
                                    <ul class="othre-info clearfix">
                                        <li class="mail-box"><a href="#"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                        <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                        <li class="share-option">
                                            <i class="share-icon flaticon-share"></i>
                                            <ul class="share-links clearfix">
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
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


        <!-- information-section -->
        <section class="information-section bg-color-1">
            <div class="bg-layer" style="background-image: url({{asset('frontend/images/background/information-bg.jpg')}});"></div>
            <div class="auto-container">
                <div class="sec-title centred light">
                    <h6><i class="flaticon-star"></i><span>City Information</span><i class="flaticon-star"></i></h6>
                    <h2>Information & Attractions</h2>
                    <div class="title-shape"></div>
                </div>
                <div class="inner-content">
                    <div class="schedule-carousel">
                        <div class="information-block-one">
                            <div class="inner-box">
                                <span class="count">01.</span>
                                <div class="icon-box"><i class="flaticon-diagram"></i></div>
                                <div class="text">
                                    <h4>Statistics and Census</h4>
                                    <p>Human happiness no one rejects dislikes avoids pleasure itself because it is pleasure but because those who do not know.</p>
                                    <a href="/about">Read More<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="information-block-one">
                            <div class="inner-box">
                                <span class="count">02.</span>
                                <div class="icon-box"><i class="flaticon-diagram"></i></div>
                                <div class="text">
                                    <h4>Statistics and Census</h4>
                                    <p>Human happiness no one rejects dislikes avoids pleasure itself because it is pleasure but because those who do not know.</p>
                                    <a href="/about">Read More<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="information-block-one">
                            <div class="inner-box">
                                <span class="count">03.</span>
                                <div class="icon-box"><i class="flaticon-diagram"></i></div>
                                <div class="text">
                                    <h4>Statistics and Census</h4>
                                    <p>Human happiness no one rejects dislikes avoids pleasure itself because it is pleasure but because those who do not know.</p>
                                    <a href="/about">Read More<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- information-section end -->


        <!-- award-section -->
        <section class="award-section bg-color-1">
            <figure class="image-layer"><img src="{{asset('frontend/images/resource/award-1.jpg')}}" alt=""></figure>
            <div class="vector-image" style="background-image: url({{asset('frontend/images/icons/vector-2.png')}});"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <h6><i class="flaticon-star"></i><span>Our Awards</span></h6>
                    <h2>City Council Be Proud Awards</h2>
                    <div class="title-shape"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-xl-3 col-lg-4 col-md-6 award-block">
                        <div class="award-block-one">
                            <div class="inner-box">
                                <figure class="award-box">
                                    <div class="bg-pattern" style="background-image: url({{asset('frontend/images/icons/icon-bg-1.png')}});"></div>
                                    <img src="frontend/images/icons/award-1.png" alt="">
                                </figure>
                                <h4>City Women’s Day <br />Awards</h4>
                                <div class="overlay-content">
                                    <div class="bg-pattern-2" style="background-image: url({{asset('frontend/images/icons/icon-bg-2.png')}});"></div>
                                    <h4>City Women’s Day <br />Awards</h4>
                                    <p>Righteous indignation and men who are so demoralized by the charm pleasure.</p>
                                    <a href="/about">Read More<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 award-block">
                        <div class="award-block-one">
                            <div class="inner-box">
                                <figure class="award-box">
                                    <div class="bg-pattern" style="background-image: url({{asset('frontend/images/icons/icon-bg-1.png')}});"></div>
                                    <img src="frontend/images/icons/award-2.png" alt="">
                                </figure>
                                <h4>City Community <br />Awards</h4>
                                <div class="overlay-content">
                                    <div class="bg-pattern-2" style="background-image: url({{asset('frontend/images/icons/icon-bg-2.png')}});"></div>
                                    <h4>City Community <br />Awards</h4>
                                    <p>Righteous indignation and men who are so demoralized by the charm pleasure.</p>
                                    <a href="/about">Read More<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 award-block">
                        <div class="award-block-one">
                            <div class="inner-box">
                                <figure class="award-box">
                                    <div class="bg-pattern" style="background-image: url({{asset('frontend/images/icons/icon-bg-1.png')}});"></div>
                                    <img src="frontend/images/icons/award-3.png" alt="">
                                </figure>
                                <h4>City Sustainability <br />Awards</h4>
                                <div class="overlay-content">
                                    <div class="bg-pattern-2" style="background-image: url({{asset('frontend/images/icons/icon-bg-2.png')}});"></div>
                                    <h4>City Sustainability <br />Awards</h4>
                                    <p>Righteous indignation and men who are so demoralized by the charm pleasure.</p>
                                    <a href="/about">Read More<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- award-section end -->


        <!-- feature-section -->
        <section class="feature-section sec-pad" style="background-image: url({{asset('frontend/images/background/feature-bg.jpg')}});">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6><i class="flaticon-star"></i><span>Council Information</span><i class="flaticon-star"></i></h6>
                    <h2>More About Our Government</h2>
                    <div class="title-shape"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('frontend/images/resource/feature-3.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="icon-box"><i class="flaticon-group"></i></div>
                                    <div class="light-icon"><i class="flaticon-group"></i></div>
                                    <h4><a href="/about">More About Our Councilors</a></h4>
                                    <div class="btn-box"><a href="/about">Read More<i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('frontend/images/resource/feature-4.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="icon-box"><i class="flaticon-award"></i></div>
                                    <div class="light-icon"><i class="flaticon-award"></i></div>
                                    <h4><a href="/about">Apply for Whitehall Awards</a></h4>
                                    <div class="btn-box"><a href="/about">Read More<i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('frontend/images/resource/feature-5.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="icon-box"><i class="flaticon-analytics"></i></div>
                                    <div class="light-icon"><i class="flaticon-analytics"></i></div>
                                    <h4><a href="/about">Current Annual Report</a></h4>
                                    <div class="btn-box"><a href="/about">Read More<i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('frontend/images/resource/feature-6.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="icon-box"><i class="flaticon-calendar-2"></i></div>
                                    <div class="light-icon"><i class="flaticon-calendar-2"></i></div>
                                    <h4><a href="/about">Upcoming Council Meetings</a></h4>
                                    <div class="btn-box"><a href="/about">Read More<i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->
@endsection
