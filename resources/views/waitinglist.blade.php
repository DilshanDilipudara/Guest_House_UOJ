<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/><script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

	<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
 <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
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
</head>
<body>
<div class="container">
<h1> Waiting List</h1>
</div>


<div class="container">
<table class="table table-bordered table-dark table-striped">
	<h1><th>Employee name</th>
	 <th>Type</th>
	 <th>Room number</th>
	 <th>Start Date</th>
	 <th>End date</th></h1>
	 @foreach($user as $user1)
			<tr> 
			<td> {{$user1->Uname}}</td>
			<td> {{$user1->Jtype}}</td>
			<td> {{$user1->Roomid}}</td>
			<td> {{$user1->Strd}}</td>
			<td> {{$user1->Endd}}</td>
			</tr>
     @endforeach
	 </table >
	
	 </br>
	 <td> <a href="index" class="btn btn-primary">Home</a>

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