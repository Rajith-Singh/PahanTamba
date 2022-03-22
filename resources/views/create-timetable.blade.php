<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/dulaksha.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MicroEye Educational Institute</title>

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
  
    

    
<section class="container">

  <center><h1 class="topic1">Create Timetable</h1></center>
    
        
      <form method= "post" action="">
            {{csrf_field()}}

       
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Teacher Id</label>   
        
            <select class="form-select py-2 shadow p-3 mb-3 bg-body rounded" name ="grade" aria-label="Default select example">
            <span class="text-danger">@error('grade'){{$message}}@enderror</span>
            <option selected>Select your grade</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
        </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Subject</label>   
        
            <select class="form-select py-2 shadow p-3 mb-3 bg-body rounded" name ="subject" aria-label="Default select example">
            <span class="text-danger">@error('subject'){{$message}}@enderror</span>
            <option selected>Select your subject</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Sinhala">Sinhala</option>
            <option value="History">History</option>
            <option value="English">English</option>
            <option value="Science">Science</option>
            <option value="ICT">ICT</option>
            <option value="Tamil">Tamil</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Biology">Biology</option>
            <option value="C-Mathematics">C-Mathematics</option>
            <option value="Accounting">Accounting</option>
            <option value="Business">Business</option>
            <option value="Economics">Economics</option>
        </select>
        </div>

        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Topic</label>
            <input type="text" class="form-control py-2 shadow p-3 mb-3 bg-body rounded" name="topic" aria-describedby="emailHelp">
            <span class="text-danger">@error('topic'){{$message}}@enderror</span>    
        </div>

        <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label fs-5">Start Date</label>   
        
            <select class="form-select py-2 shadow p-3 mb-3 bg-body rounded" name ="sDate" aria-label="Default select example">
            <span class="text-danger">@error('start_date'){{$message}}@enderror</span> 
            <option selected>Select Date</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select>
        </div>

        <h4>Level</h4>
    <div class="form-group">
    <input type="radio" id="html" name="class-level" value="HTML">
<label for="html">Level 01</label><br>
<input type="radio" id="css" name="fav_language" value="CSS">
<label for="css">Level 02</label><br>
<input type="radio" id="javascript" name="fav_language" value="JavaScript">
<label for="javascript">Leve 03</label>
    </div>

<br>
        
        <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label fs-5">Start Time</label>
            <input type="time" id="stime" name="sTime" class = "form-control py-2 shadow p-3 mb-3 bg-body rounded">
            <span class="text-danger">@error('sTime'){{$message}}@enderror</span> 
        </div>

        <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label fs-5">End Date</label>   
        
            <select class="form-select py-2 shadow p-3 mb-3 bg-body rounded" name ="eDate" aria-label="Default select example">
            <span class="text-danger">@error('end_date'){{$message}}@enderror</span> 
            <option selected>Select Date</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select>
        </div>

        <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label fs-5">End Time</label>
            <input type="time" id="etime" name="eTime" class = "form-control py-2 shadow p-3 mb-3 bg-body rounded">
            <span class="text-danger">@error('eTime'){{$message}}@enderror</span> 
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Link</label>
            <input type="text" class="form-control py-2 shadow p-3 mb-3 bg-body rounded" name="link" aria-describedby="emailHelp"> 
            <span class="text-danger">@error('link'){{$message}}@enderror</span>   
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Description</label>
            <input type="text" class="form-control py-5 shadow p-3 mb-3 bg-body rounded" name="description" aria-describedby="emailHelp">  
            <span class="text-danger">@error('description'){{$message}}@enderror</span>  
        </div>
        
        <center>
            <button type="submit" class="btn btn-primary fs-5">Create</button>
        </center>  
        
        
    </form>
     
    

</section>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>