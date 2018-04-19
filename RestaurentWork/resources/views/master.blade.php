<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{('theme/images/food.png')}}">
    <link href="{{('theme/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{('theme/js/jquery.min.js')}}"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="{{('theme/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!---->
    <link href="{{('//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900')}}" rel='stylesheet' type='text/css'>
    <link href="{{('//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700')}}" rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{('theme/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{('theme/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="{{('theme/css/styles.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{('theme/css/component.css')}}" />
    <!-- animation-effect -->
    <link href="{{('theme/css/animate.min.css')}}" rel="stylesheet">
    <script src="{{('theme/js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
</head>

<body>
<div class="header">
    <div class="container">
        <div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
            <h1><a href="{{route('home')}}"><span>C</span><img src="{{('theme/images/oo.png')}}" alt=""><img src="{{('theme/images/oo.png')}}" alt="">kery</a></h1>
        </div>
        <div class="nav-icon">
           @include('navbar')
            <script>
                $('.navicon').on('click', function (e) {
                    e.preventDefault();
                    $(this).toggleClass('navicon--active');
                    $('.toggle').toggleClass('toggle--active');
                });
            </script>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- start search-->
    <div class="banner">
        <p class="animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">Sed ut perspiciatis unde omnis iste natus.</p>
        <label></label>
        <h4 class="animated wow fadeInTop" data-wow-duration="1000ms" data-wow-delay="500ms">Hello And Welcome To Food</h4>
        <a class="scroll down" href="#content-down"><img src="{{('theme/images/down.png')}}" alt=""></a>
    </div>
</div>


<!--content-->
<div class="content" id="content-down">
    @yield('homePageContent')
    </div>
<!--//content-->

<!--services-->
<div class="services">
    <div class="container">
       @yield('HomePageService')
    </div>
    </div>
<!--//services-->

<!--news-->
<div class="content-top-top">
     @yield('HomePageNews')
</div>
<!--//news-->

<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-head">
            <div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                <ul class=" in">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a  href="{{route('menu')}}">Menu</a></li>
                    <li><a  href="{{route('blog')}}">Blog</a></li>
                    <li><a  href="{{route('event')}}">Events</a></li>
                    <li><a  href="{{route('contact')}}">Contact</a></li>
                </ul>
                <span>There are many variations of passages</span>
            </div>
            <div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h2>Follow Us</h2>
                <label><i class="glyphicon glyphicon-menu-up"></i></label>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
                <ul class="social-ic">
                    <li><a href="#"><i></i></a></li>
                    <li><a href="#"><i class="ic"></i></a></li>
                    <li><a href="#"><i class="ic1"></i></a></li>
                    <li><a href="#"><i class="ic2"></i></a></li>
                    <li><a href="#"><i class="ic3"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>

        </div>
        <p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved </p>
    </div>
</div>
<!--//footer-->
</body>
</html>
