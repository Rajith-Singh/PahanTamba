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
    <title>Add Exam</title>
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
    <h2> Add Fees </h2>
        <form class="row g-3" nethod="post">
        {{ method_field('POST') }}
            @csrf
            @method('PUT')

            <div class="col-md-2">
                <label class="form-label">Name</label>     
                <input type="text" class="form-control py-2" name="examTitle" required>
               
            </div>

            

            

            <div class="col-md-12">
                <label class="form-label">Class</label>
                <select class="form-select py-2" name="examDuration" required>
                    <option>30 Minutes</option>
                    <option>60 Minutes</option>
                    <option>90 Minutes</option>
                    <option>120 Minutes</option>
                    <option>180 Minutes</option>
                    <option>1 Minutes</option>
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
        <div class="col-md-6">
                <label class="form-label">Payment Proof</label>
                <input type="text" class="form-control py-2" name="examTitle" required>
            </div>
<br>
<div class="col-md-6">
                <label class="form-label">Note</label>
                <input type="text" class="form-control py-2" name="examTitle" required>
            </div>


    
            <br>

            <div class="col-12">
                <button class="btn btn-primary" type="Submit">Submit</button>
                
            </div>  
            <br> 
        </div>        
        </form>

        <br>


</body>