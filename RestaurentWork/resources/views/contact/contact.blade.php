@extends('main')

@section('Content')
    <div class="menu-top">
        <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
            <h3>Contact</h3>
            <label><i class="glyphicon glyphicon-menu-up"></i></label>
            <span>There are many variations</span>
        </div>
        <div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="contact-top">
        <div class="col-md-5 contact-map">
            <h5>Google Map</h5>
            {{--<div id="map">sdasdasd</div>--}}
            {{--<div class="map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">--}}
                <div id="map">sdasdasd</div>
            {{--</div>--}}
            {{--<div class="address">--}}
                {{--<h4>Address</h4>--}}
                {{--<p> Richard McClintock</p>--}}
                {{--<p>Letraset sheets</p>--}}
                {{--<p>ph : +123 859 6050</p>--}}
                {{--<p>Email : <a href="mailto:example@gmail.com">example@gmail.com</a></p>--}}
            {{--</div>--}}
        </div>
        <div class="col-md-7 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
            <h5>Contact Form</h5>
            <form method="post" action="{{route('mail')}}"> {{csrf_field()}}
                {{--<div class="grid-contact">--}}
                    {{--<div class="col-md-6 contact-grid">--}}
                        {{--<p class="your-para">Name </p>--}}
                        {{--<input type="text" name="name" class="form-control">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 contact-grid">--}}
                        {{--<p class="your-para">Phone number</p>--}}
                        {{--<input type="text" name="phoneNumber" class="form-control">--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"> </div>--}}
                {{--</div>--}}
                <div class="grid-contact">
                    <div class="col-md-6 contact-grid">
                        <p class="your-para">Email</p>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="col-md-6 contact-grid">
                        <p class="your-para">Subject</p>
                        <input type="text" name="subject" class="form-control">
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <p class="your-para msg-para">MESSAGE</p>
                <textarea cols="77" rows="6" name="message" class="form-control"></textarea>
                <div class="send">
                    <input type="submit" value="Send " >
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
           @stop
@section('script')
            <script>
                function initMap() {
                    var uluru = {lat: -25.363, lng: 131.044};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 4,
                        center: uluru
                    });
                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCb7jjTyiwxekKSruZAnuTmAFjVXMtEw3c&callback=initMap"></script>
@endsection