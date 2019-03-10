
<!DOCTYPE html>

<html lang="en">

<head>


	<title>Table V02</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/customcss.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body >








    <div class="card  card-title text-center">
    <h1> Bill Payment</h1>
	</br>
	<div class="container mt-3">
	<input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br></br>
    </div>
	<div class="container">
<table class="table  table-bordered ">
	<h1><th>Employee number</th>
	 <th>Name</th>
	 <th>Bill</th>
	 <th>Amount</th>
	 <th>Action</th></h1>
	 <tbody id="myTable">
	 @foreach($user as $user1)
	 
			<tr> 
			<form method=post action="/dopay">
			{{csrf_field()}}
			<td> {{$user1->Empno}}</td>
			<td> {{$user1->Uname}}</td>
			<td> {{$user1->Abill}}</td>
			
		
		 
		 <input type="hidden" id="custId" name="Empno" value= {{$user1->Empno}}>
		 <input type="hidden" id="custId" name="cur" value= {{$user1->Abill}}>
     <td><input type="text" class="form-control" name="/payinfo" placeholder="Amount"></td>
		 
     <td><input type="submit" class="btn btn-primary" value="pay"></td>
    </form>


	
			<!--<td> <a href="/paybillinfo/{{$user1->Empno}}" class="btn btn-primary">
			Pay</a>
			</td>
			</tr> -->
     @endforeach
	 </table >
	 
	 </br>
	 <td> <a href="home" class="btn btn-primary">Home</a>

	 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>