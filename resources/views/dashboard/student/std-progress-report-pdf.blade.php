<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <title>My Progress Report</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/../css/header/style.css">

<link rel="stylesheet" href="/../css/nicepage.css">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/../css/sidebar/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/../css/sidebar/bootstrap.min.css">
  
  <!-- Style -->
  <link rel="stylesheet" href="/../css/sidebar/style.css">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/../css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Style CSS -->
  <link rel="stylesheet" href="/../css/footer/style.css">

  <style>

    body {
        background-image: url('/../images/report.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }

      #report {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #report td, #report th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #report tr:nth-child(even){background-color: #f2f2f2;}

      #report tr:hover {background-color: #ddd;}

      #report th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
      }

        #not{
          font-family:Arial,Helvetica,sans-serif;
          border-collapse:collapse;
          width:100%;
        }

        #not td,#not th{
          border: 1px solid #ddd;
          padding: 8px;
        }  

        #not tr:nth-child(even){
          background-color: #cccccc;
        }

        #not th{
          padding-top: 12px;
          padding-bottom: 12px;
          text-align:left;
          background-color: #cccccc;
        }


        

body, table, input, select, textarea {

}


.graph {
	margin-bottom:1em;
  font:normal 100%/150% arial,helvetica,sans-serif;
}

.graph caption {
	font:bold 150%/120% arial,helvetica,sans-serif;
	padding-bottom:0.33em;
}

.graph tbody th {
	text-align:right;
}

@supports (display:grid) {

	@media (min-width:32em) {

		.graph {
			display:block;
      width:600px;
      height:300px;
		}

		.graph caption {
			display:block;
		}

		.graph thead {
			display:none;
		}

		.graph tbody {
			position:relative;
			display:grid;
			grid-template-columns:repeat(auto-fit, minmax(2em, 1fr));
			column-gap:2.5%;
			align-items:end;
			height:100%;
			margin:3em 0 1em 2.8em;
			padding:0 1em;
			border-bottom:2px solid rgba(0,0,0,0.5);
			background:repeating-linear-gradient(
				180deg,
				rgba(170,170,170,0.7) 0,
				rgba(170,170,170,0.7) 1px,
				transparent 1px,
				transparent 20%
			);
		}

		.graph tbody:before,
		.graph tbody:after {
			position:absolute;
			left:-3.2em;
			width:2.8em;
			text-align:right;
			font:bold 80%/120% arial,helvetica,sans-serif;
		}

		.graph tbody:before {
			content:"100%";
			top:-0.6em;
		}

		.graph tbody:after {
			content:"0%";
			bottom:-0.6em;
		}

		.graph tr {
			position:relative;
			display:block;
		}

		.graph tr:hover {
			z-index:999;
		}

		.graph th,
		.graph td {
			display:block;
			text-align:center;
		}

		.graph tbody th {
			position:absolute;
			top:-3em;
			left:0;
			width:100%;
			font-weight:normal;
			text-align:center;
      white-space:nowrap;
			text-indent:0;
			transform:rotate(-45deg);
		}

		.graph tbody th:after {
			content:"";
		}

		.graph td {
			width:100%;
			height:100%;
			background:#F63;
			border-radius:0.5em 0.5em 0 0;
			transition:background 0.5s;
		}

		.graph tr:hover td {
			opacity:0.7;
		}

		.graph td span {
			overflow:hidden;
			position:absolute;
			left:50%;
			top:50%;
			width:0;
			padding:0.5em 0;
			margin:-1em 0 0;
			font:normal 85%/120% arial,helvetica,sans-serif;
/* 			background:white; */
/* 			box-shadow:0 0 0.25em rgba(0,0,0,0.6); */
			font-weight:bold;
			opacity:0;
			transition:opacity 0.5s;
            color:white;
        }

		.toggleGraph:checked + table td span,
		.graph tr:hover td span {
			width:4em;
			margin-left:-2em; /* 1/2 the declared width */
			opacity:1;
		}

	} /* min-width:32em */

} /* grid only */

    </style>   

  </head>
	<body>

    <br> <br>

    <div class="container mt-5 m-auto">
    <br> <br>    
    <h2> My Progress Report </h2>
    </div>
        
        <section class="container">

        <table id="not" width="100%">

          <tr> 

            <th> Student Name </th>

            <td> {{ Auth::guard('student')->user()->fullname }} </td>

            <th> Class </th>

            <td> {{ Auth::guard('student')->user()->diseasestype }} - {{ Auth::guard('student')->user()->diseaseslevel }} </td>

          </tr>

        </table>

        <br>

        <table id="report">

          <tr> 

            <th> Title </th>

            <th> Marks </th>

            <th> Feedback </th>

          </tr>

          @foreach($data as $student)
          <tr>

            <td> {{$student->title}} </td>

            <td> <font color="blue"> <b> <center> {{$student->mark}} </center> </b> </font> </td>

            <td> {!!$student->feedback!!} </td> 

          </tr>

          @endforeach

        </table>



        <br> <br> <br>

        <center> <table class="graph">
	<caption>Student Progress</caption>
	<thead>
		<tr>
			<th scope="col">Item</th>
			<th scope="col">Percent</th>
		</tr>
	</thead><tbody>
    @foreach($data as $student)
		<tr style="height:{{$student->mark}}0%">
			<th scope="row">{{$student->title}}</th>
			<td><span>{{$student->mark}}0%</span></td>
		</tr>
        @endforeach
	</tbody>
</table> </center>

    <br><br><br><br><br><br>


	
	<script src="/../js/jquery-3.3.1.min.js"></script>
    <script src="/../js/popper.min.js"></script>
    <script src="/../js/bootstrap.min.js"></script>
    <script src="/../js/main.js"></script>

    <script>
		var preloader = document.getElementById("loading");

		function myFunction(){
			preloader.style.display = 'none';
		};
	</script>	

</body>