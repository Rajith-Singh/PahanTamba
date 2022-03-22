<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
    <link rel="stylesheet" href="/css/dulsara.css" />
    <link rel="stylesheet" href="/css/dulsara1.css">

    <title>Classes</title>
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


<br><br><br>
<center>
  <h1>Select Class Type</h1><br>
<form method="get"  action="{{ url('/redirect-ol') }}">
<input class="MyButton" type="submit" value="6-11 Classes" />
</form>
<br></br>
<form method="get"  action="{{ url('/redirect-bio') }}">
<input class="MyButton" type="submit" value="AL Biology Classes" />
</form>
<br><br>
<form method="get"  action="{{ url('/redirect-phy') }}">
<input class="MyButton" type="submit" value="AL Physical science Classes" />
</form>
<br><br>
<form method="get"  action="{{ url('/redirect-cmz') }}">
<input class="MyButton" type="submit" value="AL Commerce Classes" />
</form>
</center>

<br>



</body>
</html>