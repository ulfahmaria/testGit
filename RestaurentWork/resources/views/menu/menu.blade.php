@extends('main')

@section('title')
    Cookery A Food Category
@stop

@section('Content')
        <div class="menu-top">
            <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h3>Menu</h3>
                <label><i class="glyphicon glyphicon-menu-up"></i></label>
                <span>There are many variations</span>
            </div>
            <div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="row">
            <form method="get" action="{{route('menu')}}">{{csrf_field()}}
                <div class="col-md-3">
                    <div class="form-group">
                        {{--<h3 class="category">Category</h3>--}}
                        <select type="text" class="form-control" name="parent_id" id="parent_id">
                            <option value="">Select</option>
                            @if(isset($categories[0]))
                                @foreach($categories as $cat)
                                    <option @if($cat_id==$cat->id) selected @endif value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            {{--<div class="col-md-3">--}}
                {{--<div class="form-group">--}}
                    {{--<h3 class="category">Category</h3>--}}
                    {{--<select type="text" class="form-control" name="category_id">--}}
                        {{--<option value="">Select</option>--}}
                        {{--@if(isset($categories[0]))--}}
                            {{--@foreach($categories as $category_id)--}}
                                {{--<option value="{{$category_id->id}}">{{$category_id->title}}</option>--}}
                            {{--@endforeach--}}
                        {{--@endif--}}
                    {{--</select>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-5">--}}
                {{--<div class="search">--}}
                    {{--<input type="text" placeholder="Search" name="search" required="" >--}}
                    {{--<input type="submit" value=""  >--}}
                {{--</div>--}}
            {{--</div>--}}
                <div class="col-md-2">
                <div class="single-grid">
                <div class="send">
                <input type="submit" value="Send" >
                </div>
                </div>
                </div>
            </form>
        </div>
        {{--<hr>--}}
        <div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
            @if(isset($posts[0]))
                @foreach($posts as $post)
                    <div class="col-md-4 menu-bottom1" style="margin-top: 28px">
                        <div class="btm-right">
                            <a href="{{route('single', ['id' => $post->id])}}">
                                <img src="{{asset('FoodImage/' . $post->image)}}" alt="" class="media-photo">
                                <div class="captn">
                                    <h4>{{$post->name}}</h4>
                                    <p>{{$post->description}}</p>
                                    <p>{{$post->price}}</p>
                                    <p>{{$post->discount}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
            {{--<div class="clearfix"> </div>--}}
        <div class="custom-pagination">{{ $posts->links() }}</div>
    @stop