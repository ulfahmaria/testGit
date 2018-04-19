@extends('masterAdmin')

@section('category')
    <div class="row">
        <div class="col-md-6">
               <h3 class="title">
                   Items
                  <a href="{{route('category')}}" class="btn btn-primary btn-sm rounded">Add New</a>
               </h3>
        </div>
        {{--<div class="row grid-divider">--}}
        <div class="table-container">
            <table class="table table-bordered table-filter">
                <thead>
                <tr>
                    <td style="width: 30%; height: 25%">Image</td>
                    <td>Title</td>
                    <td style="width: 15%">Action</td>
                </tr>
                </thead>
                <tbody>
                @if(isset($posts[0]))
                    @foreach($posts as $post)
                    <tr style="">
                        <td>
                            <img src="{{asset('postImage/' . $post->image)}}" class="media-photo" style="width: 150px; height: 100px">
                        </td>
                        <td>{{$post->title}}</td>
                        <td>
                            <a href="{{route('deletepost', $post->id)}}" class="btn btn-inverse"><i class="ti-trash"></i></a>
                            <a href="{{route('categoryEdit',$post->id)}}" class="btn btn-inverse"><i class="ti-share-alt"></i></a>
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

