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
    <title>Teacher Registration</title>
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

  <div class="container mt-5 m-auto">
    <br> <br>    
    <h2> Teacher Registration </h2>
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

            <div class="col-md-12">
                <label class="form-label">Email</label>
                <input type="text" class="form-control py-2" name="email" required>
            </div>

            <div class="col-md-12">
                <label class="form-label">Password</label>
                <input type="text" class="form-control py-2" name="password" required>
            </div>

            <h4> Educational Qualification </h4>

            <div class="col-md-6">
                <label class="form-label">Education</label>
                <select class="form-select py-2" name="diseasesType" required>
                <option selected disabled value="">Choose...</option>
                    <option>Autism</option>
                    <option>Downsyndrom</option>
                    <option>Hyperactive</option>
                    
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Skills</label>
                <select class="form-select py-2" name="diseasesLevel" required>
                <option selected disabled value="">Choose...</option>
                    <option>Level 1</option>
                    <option>Level 2</option>
                    <option>Level 3</option>
                    
                </select>
            </div>


            <br><br>
            <br><br>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
               
            </div>  
            <br> 
        </div>        
        </form>

        <br>

</body>
</html>