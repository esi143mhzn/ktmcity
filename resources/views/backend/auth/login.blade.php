<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Log In | KTM</title>
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
  <style>
    .register-container {
      align-items: center;
      justify-content: center;
      display: flex;
    }
    .inner-center{
      margin: auto;
      vertical-align: unset;
      background: #fff;
      padding: 40px;
      border-radius: 3px;
      box-shadow: #ececec 1px 1px 10px;
    }
  </style>

</head>

<body class="fixed-header menu-pin menu-behind">

  <div class="register-container full-height sm-p-t-30">
    <div class="d-flex justify-content-center flex-column inner-center">
      <div class="logo-wrap" style="text-align: center; margin-bottom: 20px;">
        <img src="{{ asset('assets/image/logo.png')}}" alt="logo"width="" height="">
        {{-- <img src="{{ asset('assets/images/logo-text-np.png')}}" alt="logo" width="155" height=" 58" style="margin-left: 50px; margin-right: 50px;">
        <img src="{{ asset('dist/assets/custom/images/logo.png')}}" alt="logo" width="50" height="50"> --}}
      </div>
      <h3>KTM Login</h3>
      <form action="{{ route('backend.auth.login') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="form-group form-group-default">
              <label>Email</label>
              <input type="email" name="email" placeholder="Enter Your Email Address" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group form-group-default">
              <label>Password</label>
              <input type="password" name="password" placeholder="Enter Your Password" class="form-control" required>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-cons m-t-10" type="submit">Log In</button>
      </form>
    </div>
  </div>

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
<script>
  $(function()
  {
    $('#form-register').validate()
  })
</script>
</body>
</html>