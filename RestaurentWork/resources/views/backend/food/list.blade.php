@extends('masterAdmin')

@section('category')
    {!! Form::open(['route'=>'food-save','files'=>true]) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="name" name="name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="price" name="price">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control textarea" rows="5" placeholder="description" name="description"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Discount</label>
                <input type="text" class="form-control" placeholder="discount" name="discount">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Image Upload</label>
                <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Category</label>
                <select type="text" class="form-control" name="category_id">
                    <option>select</option>
                    @if(isset($categories[0]))
                        @foreach($categories as $category_id)
                            <option value="{{$category_id->id}}">{{$category_id->title}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn main-btn pull-right">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
    @stop

{{--@section('footer')--}}
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
{{--@stop--}}