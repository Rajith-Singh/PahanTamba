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
    <title>View</title>
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
    <h2>View Fee Details</h2>
        <form class="row g-3" nethod="post">
        {{ method_field('POST') }}
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label class="form-label">Name</label>     
                <input type="text" class="form-control py-2" name="examTitle" required>
               
            </div>

            

            

            <div class="col-md-6">
                <label class="form-label">Class</label>
                <select class="form-select py-2" name="examDuration" required>
                    <option>Level 1</option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                </select>




            </div>

            <div class="col-md-6">
                <label class="form-label">Month</label>
                <input type="text" class="form-control py-2" name="examTitle" required>
            </div>

            <br>
            <div class="col-md-6">
                <label class="form-label">Fee</label>
                <input type="text" class="form-control py-2" name="examTitle" required>
            </div>
        <br>
        <div class="col-md-12">
                <label class="form-label">Payment Proof</label>
                <input type="file" class="form-control py-2" name="examTitle" required>
            </div>
<br>
<div class="col-md-12">
                <label class="form-label">Note</label>
                <textarea class="form-control rounded-0" rows="10">
</textarea>
            </div>


    
            <br>

            <div class="col-12">
                <button class="btn btn-primary" type="Update">Update</button>
                <button class="btn btn-warning" type="reset">Clear</button>
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
                <img src="images/pahan_tamba_logo.png" alt="" width="80px" height="180px">
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


</body>