@extends('masterAdmin')

@section('category')
    {!! Form::open(['route'=>'addEvent','files'=>true]) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Event Name</label>
                <input type="text" class="form-control" placeholder="eventName" name="name" value="{{$value->name}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Start Date</label>
                <input type="text" class="form-control" placeholder="date" name="date" value="{{$value->date}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Details</label>
                <textarea class="form-control textarea" rows="5" placeholder="Details" name="details">{{$value->details}}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Image Upload</label>
                <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
            </div>
        </div>
        {{--<div class="col-md-6">--}}
        {{--<div class="form-group">--}}
        {{--<label>Category</label>--}}
        {{--<select type="text" class="form-control" name="category_id">--}}
        {{--<option>select</option>--}}
        {{--@if(isset($categories[0]))--}}
        {{--@foreach($categories as $category_id)--}}
        {{--<option value="{{$category_id->id}}">{{$category_id->title}}</option>--}}
        {{--@endforeach--}}
        {{--@endif--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="form-group">
            <input type="hidden" value="{{$value->id}}" name="id">
            <button type="submit" class="btn main-btn pull-right">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop