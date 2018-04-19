<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{('adminTheme/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{('adminTheme/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{('adminTheme/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{('adminTheme/assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{('adminTheme/assets/css/paper-dashboard.css')}}" rel="stylesheet"/>
    <link href="{{('adminTheme/assets/css/main.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{('adminTheme/assets/css/demo.css')}}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="{{('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{('https://fonts.googleapis.com/css?family=Muli:400,300')}}" rel='stylesheet' type='text/css'>
    <link href="{{('adminTheme/assets/css/themify-icons.css')}}" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    FOOD FUN
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{route('admin')}}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{route('categoryList')}}">
                        <i class="ti-view-grid"></i>
                        <p>Category</p>

                            {{--<li><a href="#">View</a></li>--}}
                            {{--<li><a href="{{route('categoryList')}}">List</a></li>--}}

                    </a>
                </li>
                <li>
                    <a href="{{route('fooditem')}}">
                        <i class="ti-view-list-alt"></i>
                        <p>Food List</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('eventPage')}}">
                        <i class="ti-shine"></i>
                        <p>Event</p>
                    </a>
                </li>
                {{--<li>--}}
                    {{--<a href="#">--}}
                        {{--<i class="ti-pencil-alt2"></i>--}}
                        {{--<p>Icons</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">--}}
                        {{--<i class="ti-map"></i>--}}
                        {{--<p>Maps</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">--}}
                        {{--<i class="ti-bell"></i>--}}
                        {{--<p>Notifications</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li class="active-pro">
                    <a href="#">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <p class="notification">5</p>
                                <p>Notifications</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-settings"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content contentAdd">
            <div class="container-fluid">
                @yield('category')
            </div>
        </div>

        {{--<footer class="footer">--}}
            {{--<div class="container-fluid">--}}
                {{--@yield('footer')--}}
                {{--<nav class="pull-left">--}}
                    {{--<ul>--}}

                        {{--<li>--}}
                            {{--<a href="http://www.creative-tim.com">--}}
                                {{--Creative Tim--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="http://blog.creative-tim.com">--}}
                                {{--Blog--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="http://www.creative-tim.com/license">--}}
                                {{--Licenses--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
                {{--<div class="copyright pull-right">--}}
                    {{--&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</footer>--}}

    </div>
</div>
</body>

<!--   Core JS Files   -->
<script src="{{('adminTheme/assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{('adminTheme/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{('adminTheme/assets/js/bootstrap-checkbox-radio.js')}}"></script>

<!--  Charts Plugin -->
<script src="{{('adminTheme/assets/js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{('adminTheme/assets/js/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="{{('https://maps.googleapis.com/maps/api/js')}}"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{('adminTheme/assets/js/paper-dashboard.js')}}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{('adminTheme/assets/js/demo.js')}}"></script>

{{--<script type="text/javascript">--}}
    {{--$(document).ready(function(){--}}

        {{--demo.initChartist();--}}

        {{--$.notify({--}}
            {{--icon: 'ti-gift',--}}
            {{--message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."--}}

        {{--},{--}}
            {{--type: 'success',--}}
            {{--timer: 4000--}}
        {{--});--}}

    {{--});--}}
{{--</script>--}}

</html>
