<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <title>User Dashboard | Home</title>
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

    background-image: url('/images-p/image1.jpg');

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
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
            <br>
            <br>
                 <center><h4><b>User Dashboard</b></h4></center>
                 <br>
                 <br>
                 <br>
                 <table class="table table-striped table-inverse table-responsive">
                     <thead class="thead-inverse">
                         <tr>
                             <th>Name</th>
                             <th>DOB</th>
                             <th>Mobile Number</th>
                             <th>Email</th>
                             <th>Action</th>
                         </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>{{ Auth::guard('web')->user()->name }}</td>
                                 <td>{{ Auth::guard('web')->user()->dob }}</td>
                                 <td>{{ Auth::guard('web')->user()->mobilenumber }}</td>
                                 <td>{{ Auth::guard('web')->user()->email }}</td>
                                 <td>
                                     <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                     <form action="{{ route('user.logout') }}" method="post" class="d-none" id ="logout-form">@csrf</form>
                                 </td>
                             </tr>
                         </tbody>
                 </table>
            </div>
        </div>
    </div>

<br>
<br>
<br>
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