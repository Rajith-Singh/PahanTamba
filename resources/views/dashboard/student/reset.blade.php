<!doctype html>
<html lang="en">
  <head>
  	<title>Reset-Password/Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/css/header/style.css">
	
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/sidebar/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/sidebar/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/css/sidebar/style.css">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/footer/style.css">
	
	

	</head>
  <body  onload="myFunction()">

  <div id="loading"></div>
  
	<section>

        	<!-- Start Sudebar -->
    <aside class="sidebar" style="margin-top:35px;">
      <div class="toggle">
        <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
      </div>
      <div class="side-inner">

        <div>
          <center> <img src="/images/pahan_tamba_logo.png" height="100px" width="130px" alt="Image" class="img-fluid"> </center>
        </div>

        <div class="counter d-flex justify-content-center">

        </div>
        
        <div class="nav-menu">
          <ul>
            <li><a href="#"><span class="icon-search2 mr-3"></span>Sample Link</a></li>
            <li><a href="#"><span class="icon-notifications mr-3"></span>Sample Link</a></li>
            <li><a href="#"><span class="icon-location-arrow mr-3"></span>Sample Link</a></li>
            <li><a href="#"><span class="icon-pie-chart mr-3"></span>Sample Link</a></li>
            <li><a href="#"><span class="icon-sign-out mr-3"></span>Logout</a></li>
          </ul>
        </div>
      </div>
      
    </aside>	
	
	<!-- Header Start -->

		<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col">
							<p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">+(94) 719726803</a></p>
						</div>
						<div class="col">
							<p class="mb-0 phone"><span class="fa fa-envelope"></span> <a href="#">pahantamba[at]gmail.com</a></p>
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-envelope"><i class="sr-only">Dribbble</i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
	    	<a class="navbar-brand" href="#"> <img src = "/images/pahan_tamba_logo.png" height = "100px" width = "130px"> </a>
			

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Class</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Timetable</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Notices</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Tasks</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Results</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Finance</a></li>
				<li class="nav-item" style="margin-top: 27px; margin-left: 10px"><a href="#" onMouseOver="this.style.color='#9b870c'" onMouseOut="this.style.color='red'">Logout</a></li>				
	        </ul>
	      </div>
	    </div>
	  </nav>
	</section>
	<!-- END header -->

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
                  <h4>Reset password</h4><hr>
                  <form action="{{ route('student.reset.password') }}" method="post" autocomplete="off">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif

                    @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                      <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ $email ?? old('email') }}">
                          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                      </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                      </div>
                      <div class="form-group">
                        <label for="password">Confirm password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Enter password" value="{{ old('password_confirmation') }}">
                        <span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
                    </div>
          
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">Reset password</button>
                      </div>
                      <br>
                      <a href="{{ route('student.login') }}">Login</a>
                  </form>
            </div>
        </div>
    </div>
    <!-- Start Footer -->
    <footer class="footer-32892 pb-0">
      <div class="site-section">
        <div class="container">

          
          <div class="row">

            <div class="col-md pr-md-5 mb-4 mb-md-0">
              <h3>About Us</h3>
              <p class="mb-4">
			  PahanTamba Special Needs empowers families with special needs to PahanTamba in their local and faith communities.
			   </p>
			   
			   <p class="mb-4">
			Families who have children with special needs face major challenges. PahanTamba is determined to walk beside them so that those challenges will not prevent them from obtaining a bright future.
			<a href="#"> See more...</a>
				</p>


            </div>
            <div class="col-md mb-4 mb-md-0">
              <h3>Contact Us</h3>
              <ul class="list-unstyled tweets">
                <li class="d-flex">
                  <div class="mr-4"><i class="fa fa-home" style="font-size:24px"></i></div>
                  <div>No 165/F <br> Aluthgama - Bogamuwa <br> Yakkala </div>
                </li>
                <li class="d-flex">
                  <div class="mr-4"><i class="fa fa-phone" style="font-size:24px"></i></div>
                  <div>+(94) 719726803</div>
                </li>
                <li class="d-flex">
                  <div class="mr-4"><i class="fa fa-envelope" style="font-size:24px"></i></div>
                  <div>pahantamba[at]gmail.com</div>
                </li>
              </ul>
			   <form action="#" class="subscribe">
                <input type="text" class="form-control" placeholder="Enter your e-mail">
                <input type="submit" class="btn btn-submit" value="Send" style="margin-top:-4px; margin-right:-5px;">
              </form>
            </div>


            <div class="col-md-3 mb-4 mb-md-0">
              <h3>Gallery</h3>
              <div class="row gallery">
                <div class="col-6">
                  <a href="#"><img src="/images/img_1.png" alt="Image" class="img-fluid"></a>
                  <a href="#"><img src="/images/img_2.png" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-6">
                  <a href="#"><img src="/images/img_3.png" alt="Image" class="img-fluid"></a>
                  <a href="#"><img src="/images/img_4.png" alt="Image" class="img-fluid"></a>
                </div>
              </div>
            </div>
            
            <div class="col-12">
              <div class="py-5 footer-menu-wrap d-md-flex align-items-center">
                <ul class="list-unstyled footer-menu mr-auto">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Class</a></li>
                  <li><a href="#">Timetable</a></li>
                  <li><a href="#">Notices</a></li>
                  <li><a href="#">Gallery</a></li>
                </ul>
                <div class="site-logo-wrap ml-auto">
                  <a href="#" class="site-logo">
                    PahanTamba
                  </a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </footer>
	
	<!-- End Footer -->
	
	<script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>

    <script>

var preloader = document.getElementById("loading");

function myFunction(){

  preloader.style.display = 'none';

};

</script>
    
</body>
</html>