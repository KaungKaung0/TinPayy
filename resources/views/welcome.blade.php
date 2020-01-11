<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{secure_asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('styles/responsive.css')}}">
</head>
<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header d-flex flex-row">
            <div class="header_content d-flex flex-row align-items-center">
                <!-- Logo -->
                <div class="logo_container">
                    <div class="logo">
                        <img src="images/logo.png" alt="">
                        <span>course</span>
                    </div>
                </div>

                <!-- Main Navigation -->
                <nav class="main_nav_container">
                    <div class="main_nav">
                        <ul class="main_nav_list">
                            <li class="main_nav_item"><a href="{{route('home')}}">home</a></li>
                            <li class="main_nav_item"><a href="#">about us</a></li>
                            <li class="main_nav_item"><a href="{{route('list_course')}}">Courses</a></li>
                            <li class="main_nav_item"><a href="{{route('write_course')}}">Add Courses</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="header_side d-flex flex-row justify-content-center align-items-center">
                <img src="images/phone-call.svg" alt="">
                <span>+43 4566 7788 2457</span>
            </div>

            <!-- Hamburger -->
            <div class="hamburger_container">
                <i class="fas fa-bars trans_200"></i>
            </div>

        </header>

        <!-- Menu -->
        <div class="menu_container menu_mm">

            <!-- Menu Close Button -->
            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>

            <!-- Menu Items -->
            <div class="menu_inner menu_mm">
                <div class="menu menu_mm">
                    <ul class="menu_list menu_mm">
                        <li class="menu_item menu_mm"><a href="{{route('home')}}}">Home</a></li>
                        <li class="menu_item menu_mm"><a href="#">About us</a></li>
                        <li class="menu_item menu_mm"><a href="{{route('list_course')}}">Courses</a></li>
                        <li class="menu_item menu_mm"><a href="{{route('write_course')}}">Add Courses</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <!-- Home -->

        <div class="home">

            <!-- Hero Slider -->
            <div class="hero_slider_container">
                <div class="hero_slider owl-carousel">

                    <!-- Hero Slide -->
                    <div class="hero_slide">
                        <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                        <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                            <div class="hero_slide_content text-center">
                                <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                            </div>
                        </div>
                    </div>

                    <!-- Hero Slide -->
                    <div class="hero_slide">
                        <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                        <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                            <div class="hero_slide_content text-center">
                                <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                            </div>
                        </div>
                    </div>

                    <!-- Hero Slide -->
                    <div class="hero_slide">
                        <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                        <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                            <div class="hero_slide_content text-center">
                                <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
                <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
            </div>

        </div>

        <div class="hero_boxes">
            <div class="hero_boxes_inner">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 hero_box_col">
                            <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                                <img src="images/earth-globe.svg" class="svg" alt="">
                                <div class="hero_box_content">
                                    <h2 class="hero_box_title">Online Courses</h2>
                                    <a href="{{route('list_course')}}" class="hero_box_link">view more</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 hero_box_col">
                            <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                                <img src="images/books.svg" class="svg" alt="">
                                <div class="hero_box_content">
                                    <h2 class="hero_box_title">Our Library</h2>
                                    <a href="{{route('list_course')}}" class="hero_box_link">view more</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{secure_asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{secure_asset('styles/bootstrap4/popper.js')}}"></script>
    <script src="{{secure_asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{secure_asset('plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{secure_asset('plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{secure_asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{secure_asset('plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{secure_asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{secure_asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{secure_asset('plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
    <script src="{{secure_asset('plugins/easing/easing.js')}}"></script>
    <script src="{{secure_asset('js/custom.js')}}"></script>

</body>
</html>