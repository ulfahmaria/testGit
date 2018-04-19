@extends('masterAdmin')

@section('category')
    {!! Form::open(['route'=>'food-save','files'=>true]) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="name" name="name" value="{{$value->name}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="price" name="price" value="{{$value->price}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control textarea" rows="5" placeholder="description" name="description">{{$value->description}}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Discount</label>
                <input type="text" class="form-control" placeholder="discount" name="discount" value="{{$value->discount}}">
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
                        @foreach($categories as $cat)
                            <option @if($cat->id==$value->category_id) selected @endif  value="{{$cat->id}}">{{$cat->title}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <input type="hidden" value="{{$value->id}}" name="id">
            <button type="submit" class="btn main-btn pull-right">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
    @stop

