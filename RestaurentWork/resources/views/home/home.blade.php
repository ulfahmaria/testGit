@extends('master')


@section('title')
    Cookery A Food Category
@stop

@section('homePageContent')
    <div class="content-top-top">
        <div class="container">
            <div class="content-top">
                <div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h3>About</h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <span>There are many variations</span>
                </div>
                <div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour , or randomised words which don't look even slightly
                        believable.There are many variations by injected humour. There are many variations of passages of
                        Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form by injected humour , or randomised words</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="content-mid">
                @if(isset($foods[0]))
                    @foreach($foods as $food)
                <div class="col-md-4 food-grid animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms" style="margin-top: 28px">
                    <div class=" hover-fold">
                        {{--<a href="#">--}}
                            {{--<img src="{{asset('FoodImage/' . $food->image)}}" alt="" class="media-photo">--}}
                        <h4>{{$food->name}}</h4>
                        <div class="top">
                            <div class="front face" style="background: url('{{ asset('FoodImage/'.$food->image) }}') top; width: 350px; height: 300px"></div>
                            <div class="back face">
                                <p>{{$food->description}}</p>
                            </div>
                        </div>
                        <div class="bottom" style="background: url('{{ asset('FoodImage/'.$food->image) }}') bottom"></div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
            {{--<div class="custom-pagination">{{ $foods->links() }}</div>--}}
        </div>
@stop

@section('HomePageService')
                <div class="services-top">
                    <div class="col-md-8 services-right animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
                    </div>
                    <div class="col-md-4 services-left animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <h3>Services</h3>
                        <label><i class="glyphicon glyphicon-menu-up"></i></label>
                        <span>There are many variations</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="service-top">
                    <div class="col-md-5 service-top animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <div class=" service-grid">
                            <div class="col-md-6 service-grid1">
                                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                                    <a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-leaf"></a>
                                </div>
                            </div>
                            <div class="col-md-6 service-grid1">
                                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                                    <a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-star-empty"></a>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class=" service-grid">
                            <div class="col-md-6 service-grid1">
                                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                                    <a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-folder-open"></a>
                                </div>
                            </div>
                            <div class="col-md-6 service-grid1">
                                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                                    <a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-home"></a>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                    <div class="col-md-7 service-bottom animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <div class=" service-bottom1">
                            <div class=" ser-bottom">
                                <img src="{{('theme/images/sa.jpg')}}" class="img-responsive" alt="">
                            </div>
                            <div class="ser-top ">
                                <h5>Beautiful &amp; enjoyable designs</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class=" service-bottom1">
                            <div class=" ser-bottom">
                                <img src="{{('theme/images/sa1.jpg')}}" class="img-responsive" alt="">
                            </div>
                            <div class="ser-top ">
                                <h5>Beautiful &amp; enjoyable designs</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class=" service-bottom1">
                            <div class=" ser-bottom">
                                <img src="{{('theme/images/sa2.jpg')}}" class="img-responsive" alt="">
                            </div>
                            <div class="ser-top ">
                                <h5>Beautiful &amp; enjoyable designs</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

@stop

@section('HomePageNews')
            <div class="container">
                <div class="content-top">
                    <div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <h3>News</h3>
                        <label><i class="glyphicon glyphicon-menu-up"></i></label>
                        <span>There are many variations</span>
                    </div>
                    <div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="news-bottom">
                    <div class="news-bot">
                        @if(isset($eve[0]))
                            @foreach($eve as $event)
                        <div class="col-md-6 news-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms" style="margin-top: 28px">
                                    {{--{{dd($event->image)}}--}}
                            {{--{{ dd($event->id),$event->id }}--}}
                                    <a href="{{route('single', ['id' => $event->id])}}">
                                {{--<img src="{{asset('EventImage/' . $event->image)}}" alt="" class="media-photo">--}}
                                <div class="content-item" style="background: url('{{ asset('EventImage/'.$event->image) }}') no-repeat">
                                    <div class="overlay"></div>
                                    <div class=" news-bottom2">
                                        <ul class="grid-news">
                                            <li><span><i class="glyphicon glyphicon-calendar"> </i>{{$event->date}}</span><b>/</b></li>
                                            {{--<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>--}}
                                            {{--<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>--}}
                                        </ul>
                                        <p>{{$event->name}}</p>
                                        <p>{{$event->details}}</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                            @endforeach
                        @endif
                    </div>
                    </div>
                </div>
@stop