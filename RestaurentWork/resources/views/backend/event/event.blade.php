@extends('masterAdmin')

@section('category')
    <div class="row">
        <div class="col-md-6">
            <h3 class="title">
                Event List
                <a href="{{route('AddEventPage')}}" class="btn btn-primary btn-sm rounded">Add New Event</a>
            </h3>
        </div>

        <div class="table-container">
            <table class="table table-bordered table-filter">
                <thead>
                <tr>
                    <td>Image</td>
                    <td>Event Name</td>
                    <td>Description</td>
                    <td>Date</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @if(isset($events[0]))
                    @foreach($events as $event)
                        <tr style="">
                            <td>
                                <img src="{{asset('EventImage/' . $event->image)}}" class="media-photo" style="width: 150px; height: 100px">
                            </td>
                            <td>{{$event->name}}</td>
                            <td>{{$event->details}}</td>
                            <td>{{$event->date}}</td>
                            <td>
                                <a href="{{route('deleteEvent', $event->id)}}" class="btn btn-inverse"><i class="ti-trash"></i></a>
                                <a href="{{route('EditEvent',$event->id)}}" class="btn btn-inverse"><i class="ti-share-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>


    @stop