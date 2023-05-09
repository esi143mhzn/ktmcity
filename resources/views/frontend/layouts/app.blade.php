<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slider.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/index.css') }}">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{ asset('assets/css/superfish.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{ asset('assets/css/cs-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxslide.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/destination.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styless.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-border.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    <!-- Modernizr JS -->
    
    <title>KTM City Planner</title>

</head>

<body>
    <div class="navigation">
        <div class="nav-bar">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/image/logo.png') }}"></a>
            </div>
            <div class="menu-items">
                <ul id="myTopnav">
                    
                    <li class="menu-item">Home</li>
                    <li class="menu-item"><a href="{{ url('/food') }}">Food</a></li>
                    <li class="menu-item"><a href="{{ url('/destination') }}">Destination</a></li>
                    <li class="menu-item"><a href="{{ url('/hotel') }}">Hotel</a></li>
                    <li class="menu-item"><a href="{{ url('/ride') }}">Ride</a></li>
                    <li class="menu-item"><a href="{{ url('/guide') }}">Guide</a></li>

                    
                    <li class="menu-item"><a href="{{ url('/contact') }}">Contact</a></li>
                 
                </ul>
            </div>
            <div class="icons">
                <div class="signin">
                    @if(!Auth::user())
                    <a href="{{ url('/userlogin') }}" class="dropdown-item">
                        <i class="pg-settings_small"></i> Login
                    </a>
                    @else
                    <a href="{{ url('/userlogin') }}" class="clearfix bg-master-lighter dropdown-item">
                        <span class="pull-left">Logout</span>
                        <span class="pull-right"><i class="pg-power"></i></span>
                    </a>
                    @endif
                    {{-- <a href="{{ url('/userlogin') }}"> 
                        <li class="menu-item">
                            <i class="material-icons">vpn_key</i>
                            <span>Log In</span>
                        </li>
                    </a> --}}
                </div>
                @if(!Auth::user())
                <div class="register">
                    <a href="{{ url('/register') }}"> 
                        <li class="menu-item">
                            <i class="material-icons">perm_identity</i>
                            <span>Register</span>
                        </li>
                    </a> 
                </div>
                @endif
            </div>
                
            </div>
        </div>
    </div>
    <div class="backgrounds">
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
            <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
                <div class="desc">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5 col-md-5">
                                <div class="tabulation animate-box">

                                  <!-- Nav tabs -->
                                   <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Destination</a>
                                        </li>
                                        <li role="presentation">
                                               <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a>
                                        </li>
                                        <li role="presentation">
                                               <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Food</a>
                                        </li>
                                        <li role="presentation">
                                               <a href="#ride" aria-controls="ride" role="tab" data-toggle="tab">Ride</a>
                                        </li>
                                        <li role="presentation">
                                               <a href="#guide" aria-controls="guide" role="tab" data-toggle="tab">Guide</a>
                                        </li>
                                   </ul>

                                   <!-- Tab panes -->
                                    <div class="tab-content">
                                     <div role="tabpanel" class="tab-pane active" id="flights">
                                        <div class="row">
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Select Destination</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>Kathmandu</option>
                                                        <option value="economy">Basantapur</option>
                                                        <option value="first">Kirtipur</option>
                                                        <option value="business">Swombhunath</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Select Duration</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1-4 days</option>
                                                        <option value="economy">1-4 days</option>
                                                        <option value="first">1 week</option>
                                                        <option value="business">1 month</option>
                                                    </select>
                                                </section>
                                            </div>
                                           
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Select Activity</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>Tour</option>
                                                        <option value="economy">Treeking</option>
                                                        <option value="first">Cultural Tour</option>
                                                        <option value="business">Sightseeing Tour</option>
                                                    </select>
                                                </section>
                                            </div>
                                           
                                            
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Search Destination">
                                            </div>
                                        </div>
                                     </div>

                                     <div role="tabpanel" class="tab-pane" id="hotels">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-12 mt">
                                                <div class="input-field">
                                                    <label for="from">City:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Return:</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Check Out:</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Rooms:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="economy">1</option>
                                                        <option value="first">2</option>
                                                        <option value="business">3</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adult:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Children:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
                                            </div>
                                        </div>
                                     </div>

                                     <div role="tabpanel" class="tab-pane" id="packages">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-12 mt">
                                                <div class="input-field">
                                                    <label for="from">Search for food:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Momo /Samaybaji / Khajaset"/>
                                                </div>
                                            </div>
                                           
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Search Food">
                                            </div>
                                        </div>
                                     </div>

                                     <div role="tabpanel" class="tab-pane" id="ride">
                                        <form method="post" class="form-control" action="{{ route('frontend.book-ride') }}">
                                        @csrf
                                            
                                            <div class="col-xxs-12 col-xs-12 mt">
                                                <div class="input-field">
                                                    {{-- <label for="from">Full Name:</label> --}}
                                                    <input type="text" class="form-control" id="from-place" placeholder="Full Name" name="fullname" />
                                                </div>
                                            </div>

                                            <div class="col-xxs-12 col-xs-12 mt">
                                                <div class="input-field">
                                                    <label for="from">Contact No.:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Contact No." name="contact" />
                                                </div>
                                            </div>

                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Choose a type of vechiels</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>Select</option>
                                                        <option value="two_wheelers">Two wheeler</option>
                                                        <option value="four_wheelers">Four wheeler</option>
                                                        
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-12 mt">
                                                <div class="input-field">
                                                    <label for="from">Destination:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Destination" name="destination" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Return:</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" name="return_date" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Check Out:</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy" name="checkout_date" />
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Book Ride"><br>
                                            </div>
                                        </form>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="guide">
                                        <div class="row">
                                        </div>
                                        <div class="col-xxs-12 col-xs-12 mt">
                                           <div class="input-field">
                                               <label for="from">Full Name:</label>
                                               <input type="text" class="form-control" id="from-place" placeholder="Nikesh Maharjan"/>
                                           </div>
                                       </div>
      
                                       <div class="col-xxs-12 col-xs-12 mt">
                                           <div class="input-field">
                                               <label for="from">Contact N.o:</label>
                                               <input type="text" class="form-control" id="from-place" placeholder="+9779813503419"/>
                                           </div>
                                       </div>
   
                                        <div class="col-sm-12 mt">
                                           <section>
                                               <label for="class">Choose a guide</label>
                                               <select class="cs-select cs-skin-border">
                                                   <option value="" disabled selected>English Guide</option>
                                                   <option value="economy">English Guide</option>
                                                   <option value="first">Chineses Guide</option>
                                                   
                                                   <option value="first">Japanese Guide</option>
                                                   
                                               </select>
                                           </section>
                                       </div>
                                       <div class="col-xxs-12 col-xs-12 mt">
                                           <div class="input-field">
                                               <label for="from"> Your Destination</label>
                                               <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                           </div>
                                       </div>
                                       <div class="col-xxs-12 col-xs-6 mt alternate">
                                           <div class="input-field">
                                               <label for="date-start">Return:</label>
                                               <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                           </div>
                                       </div>
                                       <div class="col-xxs-12 col-xs-6 mt alternate">
                                           <div class="input-field">
                                               <label for="date-end">Check Out:</label>
                                               <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                           </div>
                                       </div>
                                       <div class="col-xs-12">
                                           <input type="submit" class="btn btn-primary btn-block" value="Book  Guide"><br>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="desc2 animate-box">
                                <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                                    <p>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></p>
                                    <h2>Exclusive Limited Time Offer</h2>
                                    <h3>Fly to Hong Kong via Los Angeles, USA</h3>
                                    <span class="price">$599</span>
                                    <!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="content" class="site-content">
        @yield('content')
    </div>
    <footer>
        <div class="footer">
            <div class="about-us">
                <div class="about-title">About Us</div>
                <div class="about-description">
                    We are the locals of the kathmandu valley promoting the local products and foods that are avilable within a valley. We also provide package related to the travles around thr kathmanduvalley. We can create the most unforgettable
                    holiday for you, your family, and friends!
                </div>
            </div>
            <div class="contact-information">
                <div class="about-title">Contact Information</div>
                <div class="contact-place">
                    <i class="material-icons">place</i>
                    <span>Kirtipur 05</span>
                </div>
                <div class="contact-place">
                    <i class="material-icons">call</i>
                    <span>-+977 9813 503 4199</span>
                </div>
                <div class="contact-place">
                    <i class="material-icons">email</i>
                    <span>ktmcity@gmail.com</span>
                </div>
            </div>
            <div class="news">
                <div class="about-title">Newsletter</div>
                <div class="about-description">Sign up to our newsletter and be the first to know about the latest news,
                    special offers, events,
                    and discounts.</div>
                <div class="subscribe">
                    <input type="text" placeholder="Email">
                    <i class="material-icons">email</i>
                </div>
            </div>
        </div>
        <div class="footer-logo">
            
            <div>© 2020 All Rights Reserved</div>
        </div>
    </footer>
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <script src="{{ asset('assets/js/hour.js') }}"></script>
     <script src="{{ asset('assets/js/boxslide.js') }}"></script>
      <script src="{{ asset('assets/js/google_map.js') }}"></script>
 <script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>

  <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- Stellar -->
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <!-- Superfish -->
    <script src="{{ asset('assets/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('assets/js/superfish.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup-options.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- CS Select -->
    <script src="{{ asset('assets/js/classie.js') }}"></script>
    <script src="{{ asset('assets/js/selectFx.js') }}"></script>
    
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>