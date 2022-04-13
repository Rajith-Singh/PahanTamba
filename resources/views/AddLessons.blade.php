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
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../css-d/dulsara1.css">
  <link rel="stylesheet" href="css-d/dulsara1.css">
    <title>Add lessons</title>
   


    <style>
  .sidebar-logo {

width: 300px !important;

height: 140px !important;

margin-left: 1.2rem !important;

margin-top: 1.2rem !important;

margin-bottom: 1.2rem !important;

}



.fa-bars:before {

margin-top: 0.3rem !important;

}





body {

background-image: url('/images-d/kids11.jpg');

background-repeat: no-repeat;

background-attachment: fixed;

background-size: cover;

}








</style>

<link rel="stylesheet" href="/css-d/header-footer.css">

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


<br><br><br>

<center>
<h2>Add Lessons</h2>
</center>
<br><br>




    <form action="/Lesson-store" method="POST"  enctype="multipart/form-data">
        {{csrf_field()}}
    <div class="container">
    <div class="row">
   <div class="col-md-20">
     <br>
    <div class="form-group">
      <h4>Enter ClassID</h4>
      <input type="text" class="form-control py-2" name="ClassID" placeholder="Enter the class ID">
    </div>


     @error('ClassID')
    <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
     @enderror
      <br>
                    
    <div class="form-group">
    <h4>Subject</h4>
    <input type="text" class="form-control py-2" name="csubject" placeholder="Enter the subject">
    </div>
    @error('classLtype')
    <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
    @enderror
    <br>


    <div class="form-group">
    <h4>Disease</h4>
   
  
     

    <div class="col-md-3">
                <label class="form-label">Select Disease</label>
                <select class="form-select" name="cDisease" required>
                    <option selected disabled value="">Choose...</option>
                    <option> Autism </option>
                    <option> DownSyndrome </option>
                    <option> Hyperactive </option>
                   
                </select>
            </div>

            @error('classLtype')
    <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
    @enderror
    <br>




    <div class="col-md-3">
                <label class="form-label">Select Level</label>
                <select class="form-select" name="clevel" required>
                    <option selected disabled value="">Choose...</option>
                    <option> 1 </option>
                    <option> 2 </option>
                    <option> 3 </option>
                    
                </select>
            </div>
    @error('classLSubject')
   <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
     @enderror
    <br>

    <h4>Enter Grade</h4>
    <div class="form-group">
    <input type="text"  class="form-control py-2" name="cgrade" placeholder="Enter the grade" id="file">
    </div>
    @error('file')
   <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
  @enderror
<br>


    <h4> Enter the content</h4>
    <div class="form-group">
    <input type="file"  class="form-control py-2" name="cfile" placeholder="Choose file" id="file">

    </div>
    @error('file')
   <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
   @enderror
<br>


</br><button type="submit" width="50%" class="btn btn-primary btn-lg"  >Add</button>


</div>
</div>
</div>
</div>
</form>
<br><br><br>

<!-- Footer Starts -->
<footer class="footer">
      <div class="footer-container">
        <div class="footer-lists">
          <ul>
            <div class="micro-eye-logo">
              <a href="index.html">
                <img src="images-d/pahan_tamba_logo.png" alt="" width="80px" height="180px">
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
          <img src="/images-d/pahan_tamba_logo.png" alt="" width="340px" height="150px">
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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 

</body>
</html>