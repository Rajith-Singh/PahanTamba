<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <title>Student Registration</title>
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

    background-image: url('/images-p/kid1.png');

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


  <div class="container mt-5 m-auto">
    <br> <br>    
    <h2>Student Registration </h2>
        <form class="row g-3" nethod="post">
        {{ method_field('POST') }}
            @csrf
            @method('PUT')

            <h4> Personal Details </h4>
            <div class="col-md-12">
                <label class="form-label">Full Name</label>     
                <input type="text" class="form-control py-2" name="fullName" required>
            </div>

            <div class="col-md-12">
                <label class="form-label">Address</label>     
                <input type="text" class="form-control py-2" name="address" required>
            </div>

            <div class="col-md-3">
                <label class="form-label">Age</label>
                <select class="form-select" name="age" required>
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
            </div>

            <div class="col-md-6">
                <label class="form-label">Date Of Birth</label>
                <input type="date" class="form-control py-2" name="dateOfbirth" required>
            </div>

            <div class="col-md-3">
                <label class="form-label">Gender</label>
                <select class="form-select" name="gender" required>
                    <option selected disabled value="">Select...</option>
                    <option> Male </option>
                    <option> Female </option>
                </select>
            </div>

            <div class="col-md-12">
                <label class="form-label">Email</label>
                <input type="text" class="form-control py-2" name="email" required>
            </div>

            <div class="col-md-12">
                <label class="form-label">Password</label>
                <input type="text" class="form-control py-2" name="password" required>
            </div>

            
            <h4> Diseases Details </h4>
            <div class="col-md-6">
                <label class="form-label">Diseases Type</label>
                <select class="form-select py-2" name="diseasesType" required>
                <option selected disabled value="">Select...</option>
                    <option>Autism</option>
                    <option>Downsyndrom</option>
                    <option>Hyperactive</option>
                    
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Diseases Level</label>
                <select class="form-select py-2" name="diseasesLevel" required>
                <option selected disabled value="">Select...</option>
                    <option>Level 1</option>
                    <option>Level 2</option>
                    <option>Level 3</option>
                    
                </select>
            </div>

            
            <div class="col-md-12">
                <label class="form-label">Doctor Recommendation Letter </label>
                <input type="file" class="form-control py-2" name="doctorRecommendationLetter" required>
            </div>


            <h4> Guardian Details </h4>
            <div class="col-md-12">
                <label class="form-label">Name</label>
                <input type="text" class="form-control py-2" name="name" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Mobile Number</label>
                <input type="text" class="form-control py-2" name="mobileNumber" required>
            </div>

            
            <div class="col-md-6">
                <label class="form-label">Employee Or Not</label>
                <select class="form-select py-2" name="employeeOrNot" required>
                <option selected disabled value="">Select...</option>
                    <option>Employee</option>
                    <option>Non Employee</option>
                    
                </select>
            </div>
            
            <br>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
               
            </div>  
            <br> 
        </div>        
        </form>

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