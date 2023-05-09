@extends('frontend.layouts.app')
@section('content')


{{-- 
       </div>
                            <div class="desc2 animate-box">
                                <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                                    <div class="package-box" id="hover-box">
                                      <div class="tour"  >
               <div class="package-image">
                    <img src="../image/food1.png">
                </div>
                <div class="package-description">
                    <div class="package-name">Chowila Baji</div>
                    <div class="package-second">

                    </div>
                    <div class="package-detail">It is the one of the typical newari food which includes the meat and some vegetables on it.</div>
                    <div class="package-price">
                        <span style="color:green;">Rs 500</span>
                        <a href="food.html"><button class="button1">See More </button></a>

                    </div>
                </div>
            </div>
 --}}
            
    <div class="packages">
        <div class="top-blog">
            <div class="service-title">
                Cultural foods
            </div>
            <div class="service-subtitle">
                As kathmandu valley has the highest population of
                    the newars.Newar people seems to be promoting their local food products which
            </div>
        </div>
        <div class="package-box">
            @foreach($foods as $food)
            <div class="tour">
                <div class="package-image">

                    <img src="{{ $food->food_image() }}">
                    </img>
                </div>
                <div class="package-description">
                    <div class="package-name">
                        {{ $food->title }}
                    </div>
                    <div class="package-second">
                       {{--  <a href="{{ url('/pay') }}"> --}} <button class="button">
                            Book Now
                        </button>
                    </div>
                    <div class="package-detail">
                        {{ $food->description }}
                    </div>
                    <div class="package-price">
                        <span>

                            Rs {{ $food->price }}

                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
   
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')

@endpush