@extends('frontend.layouts.app')
@section('content')
  <div class="details">
        <div class="sub-destination">
            <div class="service-title destination-package-name">Kirtipur-Tour - 5 Days</div>
            <div class="destination-package-image">
                 <img src="{{ asset('assets/image/2.jpg') }}">
            </div>
            <div class="detail-description">
                <span> कीर्तिपुर, Nepal Bhasa: किपू Kipoo) is an ancient city of Nepal. It is located in the Kathmandu Valley 5 km south-west of the city of Kathmandu. It is one of the five municipalities in the valley, the others being Kathmandu, Lalitpur, Bhaktapur and Madhyapur Thimi. It is one of the most famous and religious places to visit. Many people visit this place to not only to see the beauty of nature but also to visit temples. The city was listed as a UNESCO tentative site in 2008.</span>

                <span>Originally a Newar foundation, Kirtipur is still a center of Newar culture. It has been merged with surrounding villages to form the municipality of Kirtipur with a population of 67,171. southern Part of Kirtipur is surrounded by ChampaDevi Hill. On Nepali new Year (Bishak 1) people around kathmandu Valley hike up to the Hill.
It has many temples, gumbas (Buddhist monasteries) and churches..</span>
            </div>
            <div class="stepbystep">
                <div class="message-wrap">
                    <div class="message">
                        <div class="circle">1</div>
                        <div class="step-detail">
                            <span class="step-title">Airpot to Kirtipur (By  Bus)</span>
                            <span class="step-description">Arrive at Tribhuwan International Airport, Kathmandu, you are welcomed by the team and then you and all ypur belongings  will be transferred to the bus. And we will be here within 20 -30 mintus from the bus.
                                </span>
                        </div>
                    </div>
                    <div class="message">
                        <div class="circle">2</div>
                        <div class="step-detail">
                            <span class="step-title">Kathmandu to Kirtipur (By two wheeler)</span>
                            <span class="step-description">Arrive at Tribhuwan International Airport, Kathmandu, you are
                                welcomed by the team and then you will be picked by the availale bike or scotter rides. This ride goes
                               straight from there  to kirtipur and leave in the hotel that ypu want to stay. .</span>
                        </div>
                    </div>
                    <div class="message">
                        <div class="circle">3</div>
                        <div class="step-detail">
                            <span class="step-title">Religious places of kirtipur (By Ride and Short walk )</span>
                            <span class="step-description">Arrive at Kiripur, Kathmandu, you are
                                welcomed by the team and then you will be taken from exploring the cultural places of the kathmandu valley . Normally, you will explore all the ancient sculputre of the god and godes .</span>
                        </div>
                    </div>
                    <div class="message">
                        <div class="circle">4</div>
                        <div class="step-detail">
                            <span class="step-title">Hike to champadevi</span>
                            <span class="step-description">Arrive at Tribhuwan International Airport, Kathmandu, you are
                                welcomed by the team and then you will be transferred to your hotel. This trail goes
                                through Ghorepani Poon Hill. Normally, the trek starts like Phokhara to Nayapul and ends
                                like Phedi to Pokhara.</span>
                        </div>
                    </div>
                    <div class="message">
                        <div class="circle">5</div>
                        <div class="step-detail">
                            <span class="step-title">Explore Taudha and Chovar</span>
                            <span class="step-description">Arrive at Tribhuwan International Airport, Kathmandu, you are
                                welcomed by the team and then you will be transferred to your hotel. This trail goes
                                through Ghorepani Poon Hill. Normally, the trek starts like Phokhara to Nayapul and ends
                                like Phedi to Pokhara.</span>
                        </div>
                    </div>
                    <div class="message">
                        <div class="circle">6</div>
                        <div class="step-detail">
                            <span class="step-title">Praticpate in jatra</span>
                            <span class="step-description">Arrive at Tribhuwan International Airport, Kathmandu, you are
                                welcomed by the team and then you will be transferred to your hotel. This trail goes
                                through Ghorepani Poon Hill. Normally, the trek starts like Phokhara to Nayapul and ends
                                like Phedi to Pokhara.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="enquiry">
                <div class="enquiry-package">
                    <div class="enquiry-detail">You can send your enquiry via the form below.</div>
                    <div class="package-names">Package name: <span>Kirtipur Tour</span></div>
                    <div class="forms">
                         <div class="package-second">
                       {{--  <a href="{{ url('/pay') }}"> --}} <button class="button">
                            Book Now
                        </button>
                        
                    </div>
                </div>
            </div>
    </div>




@endsection