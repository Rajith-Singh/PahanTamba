<!DOCTYPE html>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body> -->

<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <title>User Login</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css-p/piyumika1.css">
    <style>

    body {

    background-image: url('/images-p/tea3.jpg');

    background-repeat: no-repeat;

    background-attachment: fixed;

    background-size: cover;

    }

    </style>


</head>
<body>


<!-- Header Starts -->
<nav class="navigaation-bar background-dark">
      <h1>
        <a href="index.html">
            <i class="fas fa-graduation-cap"> </i> PahanTamba
        </a>
      </h1>

      <ul>
        <li><a href="#">Classes</a></li>
        <li><a href="#">Timetable</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="#">Tasks</a></li>
        <li><a href="#">Results</a></li>
        <li><a href="#">Finance</a></li>
        <li>
          <i class="fas fa-bars align-items-center" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"></i>
        </li>
	      <li><a href="#">Logout</a></li>      
      </ul>
    </nav>

        <!-- Header Ends -->  


    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
                  <br>
                  <br>
                  <center><h4><b>User Login</b></h4></center>
                  <br>
                  <form action="{{ route('user.check') }}" method="post" autocomplete="off">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif

                    @if (Session::get('info'))
                        <div class="alert alert-info">
                            {{ Session::get('info') }}
                        </div>
                    @endif

                    @csrf
                      <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ Session::get('verifiedEmail') ? Session::get('verifiedEmail') : old('email') }}">
                          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                      </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                      </div>
                      <br>
                    
                      <a href="{{ route('user.forgot.password.form') }}">Forgot password</a>
                      <br>
                      <br>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">Login</button>
                      </div>
                      <br>
                      
                      <a href="{{ route('user.register') }}"><b><i>Create new Account</i></b></a>
                      <br>
                      <a href="{{ route('student.register') }}"><b><i>New Students Register</i></b> </a>
                      <br>
                      <a href="{{ route('teacher.register') }}"><b><i>New Teachers Register</i></b></a>
                  </form>
            </div>
        </div>
    </div>

    
    
</body>
</html>