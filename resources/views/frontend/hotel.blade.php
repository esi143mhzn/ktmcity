@extends('frontend.layouts.app')
@section('content')
 <div class="top-hotel">
        <div class="top-blog">
            <div class="service-title">Top-rated Hotels</div>
            <div class="service-subtitle">Hotels that are available for your trip</div>
        </div>
        <div class="hotel-all">
            @foreach($hotels as $hotel)
            <div class="box-hotel">
                <div class="image-top">
                    <img src="{{ $hotel->hotel_image() }}">
                    <div class="image-over">
                        <i class="material-icons">favorite_border</i>
                    </div>
                    
                </div>
                <div class="hotel-description">
                    <div class="hotel-hour">
                        <i class="material-icons">access_time</i>
                        <span id="hour">Open</span>
                        <span>until {{ $hotel->open_time }}</span>
                    </div>
                    <div class="hotel-title">{{ $hotel->title }}</div>
                    <div class="rating">
                        <div class="review-left">
                            
                        </div>
                        <div class="review">
                           
                        </div>
                    </div>
                    <div class="hotel-location">
                        <i class="material-icons"> place</i>
                        <span>{{ $hotel->location}} </span>
                      {{--  <a href="{{ url('/pay') }}"> --}} <button class="button">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>

@endsection