<!DOCTYPE html>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body> -->

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <title>Student Register</title>
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

    background-image: url('/images-p/.jpg');

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
                  <center><h4><b>Student Register</b></h4></center>

                  <br>
                  <br>

                  <form action="{{ route('student.create') }}" method="post" autocomplete="off">
                    @if (Session::get('success'))
                         <div class="alert alert-success">
                             {{ Session::get('success') }}
                         </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf

                    <h4> Personal Details </h4>

                      <div class="form-group">
                          <label for="name">Full Name</label>
                          <input type="text" class="form-control" name="fullname" placeholder="Enter full name" value="{{ old('fullname') }}">
                          <span class="text-danger">@error('fullname'){{ $message }} @enderror</span>
                      </div>
                      <div class="form-group">
                          <label for="name">Address</label>
                          <input type="text" class="form-control" name="address" placeholder="Enter your  Address" value="{{ old('address') }}">
                          <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                      </div>
                      <div class="form-group">
                          <label for="name">Age</label>
                          <select class="form-select" name="age" placeholder="Select your Age" value="{{ old('age') }}">
                          <option selected disabled value="">Select...</option>
                                <option> 1 </option>
                                <option> 2 </option>
                                <option> 3 </option>
                                <option> 4 </option>
                                <option> 5 </option>
                                <option> 6 </option>
                                <option> 7 </option>
                                <option> 8 </option>
                                <option> 9 </option>
                                <option> 10 </option>
                            </select>
                          <span class="text-danger">@error('age'){{ $message }} @enderror</span>
                      </div>
                      <div class="form-group">
                          <label for="name">DOB</label>
                          <input type="date" class="form-control" name="dob" placeholder="Enter your birthday" value="{{ old('dob') }}">
                          <span class="date-danger">@error('name'){{ $message }} @enderror</span>
                      </div>
                      <div class="form-group">
                          <label for="name">Gender</label>
                          <select class="form-select" name="gender" placeholder="Select your Gender" value="{{ old('gender') }}">
                          <option selected disabled value="">Select...</option>
                                <option> Female </option>
                                <option> Male </option>>
                            </select>
                          <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <!-- <input type="password" class="form-control" name="password" placeholder="Enter password" > -->
                          <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                          <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                      </div>
                      <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <!-- <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password" value="{{ old('cpassword') }}"> -->
                        <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password" value="{{ old('cpassword') }}">
                        <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
                    </div>
                    <br>
                  
                    <h4> Diseases Details </h4>

                   <br>
                      <div class="form-group">
                          <label for="name">Diseases Type</label>
                          <select class="form-select" name="diseasestype" placeholder="Select the Diseases Type" value="{{ old('diseasestype') }}">
                          <option selected disabled value="">Select...</option>
                                <option>Autism</option>
                                <option>Downsyndrom</option>
                                <option>Hyperactive</option>
                            </select>
                          <span class="text-danger">@error('diseasestype'){{ $message }} @enderror</span>
                      </div>

                      <div class="form-group">
                          <label for="name">Diseases Level</label>
                          <select class="form-select" name="diseaseslevel" placeholder="Select the Diseases Level" value="{{ old('diseaseslevel') }}">
                          <option selected disabled value="">Select...</option>
                                <option>Level 1</option>
                                <option>Level 2</option>
                                <option>Level 3</option>
                          </select>
                          <span class="text-danger">@error('diseaseslevel'){{ $message }} @enderror</span>
                      </div>

                      <div class="form-group">
                          <label for="name">Doctor Recommendation Letter</label>
                          <input type="file" class="form-control" name="doctorrecommendationletter" placeholder="Choose Your Image" value="{{ old('doctorrecommendationletter') }}">
                          <span class="text-danger">@error('doctorrecommendationletter'){{ $message }} @enderror</span>
                      </div>
                      <br>
                      <h4> Guardian Details </h4>
                      <br>
                      <div class="form-group">
                          <label for="name"> Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                          <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                      </div>

                      <div class="form-group">
                          <label for="name">Mobile Number</label>
                          <input type="text" class="form-control" name="mobilenumber" placeholder="Enter Mobile Number" value="{{ old('mobilenumber') }}">
                          <span class="text-danger">@error('mobilenumber'){{ $message }} @enderror</span>
                      </div>


                      <div class="form-group">
                          <label for="name">Employee Or Not</label>
                          <select class="form-select" name="employeeornot" placeholder="Select...." value="{{ old('employeeornot') }}">
                          <option selected disabled value="">Select...</option>
                                <option> Employee </option>
                                <option> Non Employee </option>>
                            </select>
                          <span class="text-danger">@error('employeeornot'){{ $message }} @enderror</span>
                      </div>
                      <br>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">Register</button>
                      </div>
                      <br>
                      <a href="{{ route('student.login') }}">I already have an account</a>
                  </form>
            </div>
        </div>
    </div>

     <!-- Footer Starts -->
<footer class="footer">
      <div class="footer-container">
        <div class="footer-lists">
          <ul>
            <div class="micro-eye-logo">
              <a href="index.html">
                <img src="images-p/pahan_tamba_logo.png" alt="" width="80px" height="180px">
              </a>
            </div>
          </ul>
          <ul>
            <li class="list-head">Quick Links</li>
            <li><a href="#">My Pofile</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Timetables</a></li>
          </ul>
          <ul>
            <li class="list-head">Quick Links</li>
            <li><a href="#">My Tasks</a></li>
            <li><a href="#">Results</a></li>
            <li><a href="#">Classes</a></li>
            <li><a href="#">Notices</a></li>
          </ul>
          <ul>
            <li class="list-head">Sitemap</li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Login</a></li>
          </ul>
          <ul>
            <li class="list-head">Contact Us</li>
            <li><a href="#">124/B</a></li>
            <li><a href="#">Aluthgama</a></li>
            <li><a href="#">Bogamuwa</a></li>
            <li><a href="#">Yakkala</a></li>
          </ul>
        </div>
        <div class="divider"></div>
      </div>
    </footer>
<!-- Footer end -->

    <!-- Sitemap starts -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <img src="/images-p/pahan_tamba_logo.png" alt="" width="340px" height="150px">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="fw-bold h3 ms-3">
        Sample Test         
        </div>
          <div class="my-3">
            <ul class="lead">
                <li class="mb-2"><a href="add-exam" class="text-decoration-none">Sample link</a></li>
                <li class="mb-2"><a href="manage-exam" class="text-decoration-none">Sample link</a></li>
                <li class="mb-2"><a href="#" class="text-decoration-none">Sample link</a></li>
                <li class="mb-2"><a href="#" class="text-decoration-none">Sample link</a></li>
            </ul>
          </div>
        </div>
      </div>

        <!-- Sitemap Ends --> 

    
</body>
</html>