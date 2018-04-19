@extends('masterAdmin')

@section('category')
    {!! Form::open(['route'=>'categoryListSave','files'=>true]) !!}
    <div class="row">
        <div class="col-md-10">
            <h3>Items</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="title" name="title">
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
                {{--<input type="text" class="form-control" placeholder="category" name="category">--}}
                <select type="text" class="form-control" name="parent_id">
                    <option value="">Select</option>
                    @if(isset($categories[0]))
                        @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->title}}</option>
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
