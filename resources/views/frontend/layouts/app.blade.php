<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <title>Association Management System</title>

        <!-- Fav Icon -->
        <link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

        <!-- Stylesheets -->
        <link href="{{asset('frontend/css/font-awesome-all.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/owl.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/jquery.fancybox.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/nice-select.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/color.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

    </head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
         @include('frontend.common.preloader')
        <!-- preloader end -->


        <!-- search-popup -->
        @include('frontend.common.search_popup')
        <!-- search-popup end -->

        <!-- sidebar cart item -->
        @include('frontend.common.sidebar_cart')
        <!-- END sidebar widget item -->


        <!-- main header -->
        @include('frontend.common.header')
        <!-- main-header end -->

        <!-- banner-section end -->
        @include('frontend.common.banner')
        <!-- banner-section end -->

        <!-- main body -->
        @yield('content')
        <!-- end main body -->


        <!-- main-footer -->
        @include('frontend.common.footer')
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fas fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.js')}}"></script>
    <script src="{{asset('frontend/js/wow.js')}}"></script>
    <script src="{{asset('frontend/js/validation.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('frontend/js/appear.js')}}"></script>
    <script src="{{asset('frontend/js/scrollbar.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/js/nav-tool.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset('frontend/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>
