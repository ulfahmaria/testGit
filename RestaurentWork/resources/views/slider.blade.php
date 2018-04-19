{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>--}}
{{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
<!------ Include the above in your HEAD tag ---------->
@extends('main')

@section('Content')
    <style>
        h3 {
            display: inline-block;
            padding: 10px;
            background: #B9121B;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .full-screen {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>


<div id="mycarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>
        <li data-target="#mycarousel" data-slide-to="3"></li>
        <li data-target="#mycarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">

        <div class="item">
            <img src="{{asset('EventImage/' . $event->image)}}" data-color="lightblue" alt="First Image">
            <div class="carousel-caption">
                <h3>First Image</h3>
            </div>

        </div>
        {{--<div class="item">--}}
            {{--<img src="https://unsplash.it/2000/1250?image=689" data-color="firebrick" alt="Second Image">--}}
            {{--<div class="carousel-caption">--}}
                {{--<h3>Second Image</h3>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="item">--}}
            {{--<img src="https://unsplash.it/2000/1250?image=675" data-color="violet" alt="Third Image">--}}
            {{--<div class="carousel-caption">--}}
                {{--<h3>Third Image</h3>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="item">--}}
            {{--<img src="https://unsplash.it/2000/1250?image=658" data-color="lightgreen" alt="Fourth Image">--}}
            {{--<div class="carousel-caption">--}}
                {{--<h3>Fourth Image</h3>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="item">--}}
            {{--<img src="https://unsplash.it/2000/1250?image=638" data-color="tomato" alt="Fifth Image">--}}
            {{--<div class="carousel-caption">--}}
                {{--<h3>Fifth Image</h3>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<script>
    var $item = $('.carousel .item');
    var $wHeight = $(window).height();
    $item.eq(0).addClass('active');
    $item.height($wHeight);
    $item.addClass('full-screen');

    $('.carousel img').each(function() {
        var $src = $(this).attr('src');
        var $color = $(this).attr('data-color');
        $(this).parent().css({
            'background-image' : 'url(' + $src + ')',
            'background-color' : $color
        });
        $(this).remove();
    });

    $(window).on('resize', function (){
        $wHeight = $(window).height();
        $item.height($wHeight);
    });

    $('.carousel').carousel({
        interval: 6000,
        pause: "false"
    });
</script>
@stop