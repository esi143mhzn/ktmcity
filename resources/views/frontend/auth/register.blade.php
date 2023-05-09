<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <title>SignUp</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=PT+Sans|Roboto+Slab&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web&display=swap');
    body
    {
      background-image: url(../image/1.jpg);
      background-size: cover;
    }
        .card
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 750px;
            height: 650px;
      opacity: 0.8;
        }
        .su
        {
           font-family: 'Roboto',sans-serif;
           font-weight: bold;
           font-size: 30px;
           text-shadow: 3px;
           color: #70d47d;
           border-radius: 10px;
        }
        #a
        {
            border: none;
        }
    .logo
    {
          margin-left: 20px;
    }
    .row button
    {
        width: 26rem;
    }
    .navigation .navbar .navbar-nav .navbar-item .btn
         {
            background-color: #e96150;
             color: white;
          }
    </style>
</head>
<body>
<div class="navigation">
    <nav class="navbar  navbar-expand-md fixed-top">
        <ul class="navbar-nav ml-auto">
            <li class="navbar-item">
                <a href="ex.html" class="nav-link"><button class="btn">Home</button></a>
            </li>
        </ul>
    </nav>  
</div>
<div class="card " style="width: 38rem; height: 38em">       
    <div class="card-body" style="background-color: #f0f8f1;">
         <a href="ex.html" class="logo"><img src="{{asset('assets/image/logo.png')}}" height="80" width="400"><br></a><br>
        <form method="post"  action="{{ url('/register') }}">
        @csrf
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="Name">Full Name:</label>
                <div class="col-sm-9" id="Name">
                    <input type="text" id="a" name="name" class="form-control" placeholder="Enter Your Name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="Email">Email Address:</label>
                <div class="col-sm-9" id="Email">
                    <input type="text" name="email" id="a" class="form-control" placeholder="Enter Email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3" for="pw">Password</label>
                <div class="col-sm-9" id="pw">
                    <input type="Password" id="a" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3" for="cpw">Confirm Password</label>
                <div class="col-sm-9" id="cpw">
                    <input type="Password" id="a" class="form-control" name="confirm_password" placeholder="Confirm Password">
                </div>          
            </div>
            <div class="form-group row">
                <label class="col-sm-3" for="cpw">Sex</label>
                <div class="col-sm-9" id="cpw">
                    <select id="a" class="form-control" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option>Other</option>
                    </select>
                </div>          
            </div>
            <div class="row">
                <div class="col-sm-10 offset-sm-3">
                    <input type="checkbox" class="radioBtn"> By clicking the button below, you acknowledge and accept<br> our Terms of Service and Privacy Policy</button><br>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-12 offset-sm-3">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </div>
        </form>
           
    </div>

</div>




<!--- script part--->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!---End script--->
</body>
</html>