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

    <link rel="stylesheet" href="../css/dulsara.css">
  <link rel="stylesheet" href="css/dulsara1.css">
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
</style>

    

</head>

  <body>
<center>
<h2>Add Lessons</h2>
</center>
<br><br>
    
    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
    <div class="container">
    <div class="row">
   <div class="col-md-20">
     <br>
    <div class="form-group">
      <h4>Enter ClassID</h4>
      <input type="text" class="form-control py-2" name="ClassID" placeholder="Enter the class ID">
    </div>
     @error('ClassLname')
    <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
     @enderror
      <br>
                    
    <div class="form-group">
    <h4>Subject</h4>
    <input type="text" class="form-control py-2" name="class-subject" placeholder="Enter the subject">
    </div>
    @error('classLtype')
    <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
    @enderror
    <br>


    <div class="form-group">
    <h4>Disease</h4>
   
    <div class="form-group">
    <input type="radio" id="html" name="class-Disease" value="HTML">
<label for="html">Autism</label><br>
<input type="radio" id="css" name="fav_language" value="CSS">
<label for="css">Down Syndrome</label><br>
<input type="radio" id="javascript" name="fav_language" value="JavaScript">
<label for="javascript">Hyperactive</label>
    </div>
    @error('classLtype')
    <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
    @enderror
    <br>
     
    <h4>Level</h4>
    <div class="form-group">
    <input type="radio" id="html" name="class-level" value="HTML">
<label for="html">Level 01</label><br>
<input type="radio" id="css" name="fav_language" value="CSS">
<label for="css">Level 02</label><br>
<input type="radio" id="javascript" name="fav_language" value="JavaScript">
<label for="javascript">Leve 03</label>
    </div>
    @error('classLSubject')
   <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
     @enderror
    <br>

    <h4>Enter Grade</h4>
    <div class="form-group">
    <input type="text"  class="form-control py-2" name="class-grade" placeholder="Enter the grade" id="file">
    </div>
    @error('file')
   <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
  @enderror
<br>


    <h4> Enter the content</h4>
    <div class="form-group">
    <input type="file"  class="form-control py-2" name="class-file" placeholder="Choose file" id="file">

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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 

</body>
</html>