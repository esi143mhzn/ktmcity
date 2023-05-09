@extends('frontend.layouts.app')
@section('content')
<div class="destinations">



      {{-- <div class="desc2 animate-box">
                                <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                                    <div class="package-box">
                                        <div class="tour">
                                            <div class="package-image">
                                                <img src="../image/1.jpg">
                                            </div>
                                            <div class="package-description">
                                                <div class="package-name">KirtipurHoliday Tour</div>
                                                <div class="package-second">
                                                    <div class="package-duration">
                                                        <i class="material-icons">access_time</i>
                                                        <span >7 days</span>
                                                    </div>
                                                    <div class="package-people">
                                                        <i class="material-icons">group</i>
                                                        <span style="color: black;">Max people : 5<span>
                                                    </div>
                                                </div>
                                                <div class="package-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut
                                                    efficitur ante. Donec dapibus dictum scelerisque.</div>
                                                <div class="package-price">
                                                    <span style="color: black;">Rs 8000</span>
                                                    <a href="destination-detail.html"> <i class="material-icons">arrow_forward</i></a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
 --}}
                            
        <div class="top-destination">
            <div class="service-title">Top-Destination</div>
        </div>

     
        <div class="packages">
            <div class="top-blog">
                <div class="service-title">Cultural Tours</div>
                <div class="service-subtitle">Tourism is travel for pleasure or business; also the theory and practice
                of touring, the business of attracting, accommodating, and entertaining tourists, and the business
                of operating tours. </div>
            </div>
            <div class="package-box">
                @foreach($destinations as $destination)
                <div class="tour">
                    <div class="package-image">
                        <img src="{{ $destination->destination_image() }}">
                    </div>
                    <div class="package-description">

                        <div class="package-name"> {{ $destination->title }}</div>

                        <div class="package-second">
                            <div class="package-duration">
                                <i class="material-icons">access_time</i>
                                <span> {{ $destination->duration }}</span>
                            </div>
                            <div class="package-people">
                                <i class="material-icons">group</i>
                                <span>Max people :  {{ $destination->max_people }}<span>
                            </div>
                        </div>
                        <div class="package-detail"> {{ $destination->description }}</div>
                        <div class="package-price">

                            <span>Rs  {{ $destination->price }}</span>
                            <a href="destination-detail.html"> <i class="material-icons">arrow_forward</i></a>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
        <div class="packages">
            <div class="top-blog">
                <div class="service-title">Hiking</div>
                <div class="service-subtitle">Tourism is travel for pleasure or business; also the theory and practice
                of touring, the business of attracting, accommodating, and entertaining tourists, and the business
                of operating tours. </div>
            </div>
            <div class="package-box">
                <div class="tour">
                    <div class="package-image">
                        <img src="{{ asset('assets/image/7.jpg') }}">
                    </div>
                    <div class="package-description">
                        <div class="package-name">Pokhara Holiday Tour</div>
                        <div class="package-second">
                            <div class="package-duration">
                                <i class="material-icons">access_time</i>
                                <span>7 days</span>
                            </div>
                            <div class="package-people">
                                <i class="material-icons">group</i>
                                <span>Max people : 5<span>
                            </div>
                        </div>
                        <div class="package-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut
                            efficitur ante. Donec dapibus dictum scelerisque.</div>
                        <div class="package-price">
                            <span>Rs 8000</span>
                            <i class="material-icons">arrow_forward</i>
                        </div>
                    </div>
                </div>
                <div class="tour">
                    <div class="package-image">
                        <img src="{{ asset('assets/image/8.jpg') }}">
                    </div>
                    <div class="package-description">
                        <div class="package-name">Pokhara Holiday Tour</div>
                        <div class="package-second">
                            <div class="package-duration">
                                <i class="material-icons">access_time</i>
                                <span>7 days</span>
                            </div>
                            <div class="package-people">
                                <i class="material-icons">group</i>
                                <span>Max people : 5<span>
                            </div>
                        </div>
                        <div class="package-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut
                            efficitur ante. Donec dapibus dictum scelerisque.</div>
                        <div class="package-price">
                            <span>Rs 8000</span>
                            <i class="material-icons">arrow_forward</i>
                        </div>
                    </div>
                </div>
                <div class="tour">
                    <div class="package-image">
                        <img src="{{ asset('assets/image/9.jpg') }}">
                    </div>
                    <div class="package-description">
                        <div class="package-name">Pokhara Holiday Tour</div>
                        <div class="package-second">
                            <div class="package-duration">
                                <i class="material-icons">access_time</i>
                                <span>7 days</span>
                            </div>
                            <div class="package-people">
                                <i class="material-icons">group</i>
                                <span>Max people : 5<span>
                            </div>
                        </div>
                        <div class="package-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut
                            efficitur ante. Donec dapibus dictum scelerisque.</div>
                        <div class="package-price">
                            <span>Rs 8000</span>
                            <i class="material-icons">arrow_forward</i>
                        </div>
                    </div>
                </div>
                <div class="tour">
                    <div class="package-image">
                        <img src="{{ asset('assets/image/10.jpg') }}">
                    </div>
                    <div class="package-description">
                        <div class="package-name">Pokhara Holiday Tour</div>
                        <div class="package-second">
                            <div class="package-duration">
                                <i class="material-icons">access_time</i>
                                <span>7 days</span>
                            </div>
                            <div class="package-people">
                                <i class="material-icons">group</i>
                                <span>Max people : 5<span>
                            </div>
                        </div>
                        <div class="package-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut
                            efficitur ante. Donec dapibus dictum scelerisque.</div>
                        <div class="package-price">
                            <span>Rs 8000</span>
                            <i class="material-icons">arrow_forward</i>
                        </div>
                    </div>
                </div>
                <div class="tour">
                    <div class="package-image">
                        <img src="{{ asset('assets/image/mustangtwo.jpg') }}">
                    </div>
                    <div class="package-description">
                        <div class="package-name">Pokhara Holiday Tour</div>
                        <div class="package-second">
                            <div class="package-duration">
                                <i class="material-icons">access_time</i>
                                <span>7 days</span>
                            </div>
                            <div class="package-people">
                                <i class="material-icons">group</i>
                                <span>Max people : 5<span>
                            </div>
                        </div>
                        <div class="package-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut
                            efficitur ante. Donec dapibus dictum scelerisque.</div>
                        <div class="package-price">
                            <span>Rs 8000</span>
                            <i class="material-icons">arrow_forward</i>
                        </div>
                    </div>
                </div>
                <div class="tour">
                    <div class="package-image">
                        <img src="{{ asset('assets/image/11.jpg') }}">
                    </div>
                    <div class="package-description">
                        <div class="package-name">Pokhara Holiday Tour</div>
                        <div class="package-second">
                            <div class="package-duration">
                                <i class="material-icons">access_time</i>
                                <span>7 days</span>
                            </div>
                            <div class="package-people">
                                <i class="material-icons">group</i>
                                <span>Max people : 5<span>
                            </div>
                        </div>
                        <div class="package-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut
                            efficitur ante. Donec dapibus dictum scelerisque.</div>
                        <div class="package-price">
                            <span>Rs 8000</span>
                            <i class="material-icons">arrow_forward</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection