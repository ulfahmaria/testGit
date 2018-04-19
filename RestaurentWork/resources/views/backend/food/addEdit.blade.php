@extends('masterAdmin')

@section('category')
    <div class="row">
        <div class="col-md-6">
            <h3 class="title">
                Food Items
                <a href="{{route('foodList')}}" class="btn btn-primary btn-sm rounded">Add New Food</a>
            </h3>
        </div>
        {{--<div class="row grid-divider">--}}
        <div class="table-container">
            <table class="table table-bordered table-filter">
                <thead>
                <tr>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Discount</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @if(isset($posts[0]))
                    @foreach($posts as $post)
                        <tr style="">
                            <td>
                                <img src="{{asset('FoodImage/' . $post->image)}}" class="media-photo" style="width: 150px; height: 100px">
                            </td>
                            <td>{{$post->name}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->price}}</td>
                            <td>{{$post->discount}}</td>
                            <td>
                                <a href="{{route('delete', $post->id)}}" class="btn btn-inverse"><i class="ti-trash"></i></a>
                                <a href="{{route('foodEdit',$post->id)}}" class="btn btn-inverse"><i class="ti-share-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        {{--</div>--}}
    </div>
    @stop
