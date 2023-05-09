<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<title>KTM Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('dist/assets/custom/images/favicon/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/assets/custom/images/favicon/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/assets/custom/images/favicon/favicon-16x16.png')}}">
	<link rel="manifest" href="{{ asset('dist/assets/custom/images/favicon/site.webmanifest')}}">
	<link rel="mask-icon" href="{{ asset('dist/assets/custom/images/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="{{ asset('dist/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('dist/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('dist/assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('dist/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
	<link href="{{ asset('dist/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
	<link href="{{ asset('dist/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
	<link href="{{ asset('dist/assets/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
	<link href="{{ asset('dist/assets/plugins/mapplic/css/mapplic.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('dist/assets/plugins/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('dist/pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('dist/pages/css/themes/corporate.css')}}" rel="stylesheet" type="text/css" class="main-stylesheet"  />
	<link rel="stylesheet" href="{{ asset('dist/assets/custom/css/jasny-bootstrap.min.css') }}">
	<link href="{{ asset('dist/assets/custom/css/style.css') }}" rel="stylesheet" >
	@stack('styles')
</head>
<body class="fixed-header dashboard menu-pin menu-behind">
	<!-- BEGIN SIDEBPANEL-->
	<nav class="page-sidebar" data-pages="sidebar">
		<!-- BEGIN SIDEBAR MENU HEADER-->
		<div class="sidebar-header">
			<img src="{{ asset('dist/assets/img/logo_white.png')}}" alt="logo" class="brand" data-src="{{ asset('dist/assets/img/logo_white.png')}}" data-src-retina="{{ asset('dist/assets/img/logo_white_2x.png')}}" width="78" height="22">
			<div class="sidebar-header-controls">
				<button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
				</button>
				<button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
				</button>
			</div>
		</div>
		<!-- END SIDEBAR MENU HEADER-->
		<!-- START SIDEBAR MENU -->
		<div class="sidebar-menu">
			<ul class="menu-items">
				<li class="m-t-20 {{ (request()->segment(2) == 'food'
				) ? ' open active' : '' }}">
						<li class="{{ (request()->segment(2) == 'food') ? 'active' : '' }}">
							<a href="{{ route('backend.food.index') }}"><span class="title">Food</span></a>
						</li>
						<li class="{{ (request()->segment(2) == 'destination') ? 'active' : '' }}">
							<a href="{{ route('backend.destination.index') }}"><span class="title">Destination</span></a>
						</li>
						<li class="{{ (request()->segment(2) == 'hotel') ? 'active' : '' }}">
							<a href="{{ route('backend.hotel.index') }}"><span class="title">Hotel</span></a>
						</li>
						<li class="{{ (request()->segment(2) == 'bookride') ? 'active' : '' }}">
							<a href="{{ route('backend.bookride.index') }}"><span class="title">Book Ride</span></a>
						</li>					
			</li>
		</ul>
		<div class="clearfix"></div>
	</div><!-- END SIDEBAR MENU -->
</nav>
<!-- START PAGE-CONTAINER -->
<div class="page-container ">
	<!-- START HEADER -->
	<div class="header ">
		<!-- START MOBILE SIDEBAR TOGGLE -->
		<a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
		</a>
		<!-- END MOBILE SIDEBAR TOGGLE -->
		<div class="">
			<div class="brand inline  m-l-5">
				<img src="{{ asset('dist/assets/custom/images/logo.png')}}" alt="logo" data-src="{{ asset('dist/assets/custom/images/logo2.png')}}" data-src-retina="{{ asset('dist/assets/custom/images/logo.png') }}" width="50" height="50">
				<img src="{{ asset('dist/assets/custom/images/logo.png')}}" alt="logo" data-src="{{ asset('dist/assets/custom/images/logo.png')}}" data-src-retina="{{ asset('dist/assets/custom/images/logo.png') }}" width="50" height="50">
				<img src="{{ asset('assets/images/logo-text-np.png')}}" alt="logo" data-src="{{ asset('assets/images/logo-text-np.png')}}" data-src-retina="{{ asset('assets/images/logo-text-np.png') }}" width="155" height=" 58">
			</div>
		</div>
		<div class="d-flex align-items-center">
			<!-- START User Info-->
			<div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
				<span class="semi-bold">{{ Auth::user()->name }}</span>
			</div>
			<div class="dropdown pull-right d-lg-block d-none">
				<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="thumbnail-wrapper d32 circular inline">
						<img src="{{ asset('dist/assets/custom/images/default_user.jpeg')}}" alt="" data-src="{{ asset('dist/assets/custom/images/default_user.jpeg')}}" data-src-retina="{{ asset('dist/assets/custom/images/default_user.jpeg')}}" width="32" height="32">
					</span>
				</button>
				<div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
					@if(Auth::user()->role == 1)
					<a href="{{ route('backend.user.index') }}" class="dropdown-item">
						<i class="pg-settings_small"></i> Manage Users
					</a>
					@endif
					<a href="{{ route('backend.auth.logout') }}" class="clearfix bg-master-lighter dropdown-item">
						<span class="pull-left">Logout</span>
						<span class="pull-right"><i class="pg-power"></i></span>
					</a>
				</div>
			</div>
			<!-- END User Info-->
		</div>
	</div>
	<!-- END HEADER -->
	@include('backend.layouts.partials.alert')

	@yield('content')
</div>
<!-- END page-container -->

<!-- BEGIN VENDOR JS -->
<script src="{{ asset('dist/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/jquery/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/modernizr.custom.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/popper/umd/popper.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/jquery/jquery-easy.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/jquery-ios-list/jquery.ioslist.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/jquery-actual/jquery.actual.min.js')}}"></script>
<script src="{{ asset('dist/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{ asset('dist/assets/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/classie/classie.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/switchery/js/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/nvd3/lib/d3.v3.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/nvd3/nv.d3.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/nvd3/src/utils.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/nvd3/src/tooltip.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/nvd3/src/interactiveLayer.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/nvd3/src/models/axis.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/nvd3/src/models/line.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/nvd3/src/models/lineWithFocusChart.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/mapplic/js/hammer.min.js')}}"></script>
<script src="{{ asset('dist/assets/plugins/mapplic/js/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('dist/assets/plugins/mapplic/js/mapplic.js')}}"></script>
<script src="{{ asset('dist/assets/plugins/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{ asset('dist/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/plugins/skycons/skycons.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/pages/js/pages.js')}}"></script>
<!-- END CORE TEMPLATE JS -->
<script src="{{ asset('dist/assets/js/scripts.js')}}" type="text/javascript"></script>
<script src="{{ asset('dist/assets/custom/js/jasny-bootstrap.min.js') }}"></script>
@stack('scripts')
</body>
</html>