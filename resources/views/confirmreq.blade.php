<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body>
<!--	<div class="container">
    <form method=post action="/savetask">
    {{csrf_field()}}
     <input type="text" class="form-control" name="/tasks" placeholder="enter here">
     <input type="submit" class="btn btn-primary" value="save">
    </form>
    </div>
-->	

    <div class="card  card-title text-center">
    <h1> Waiting List</h1>
	</br></br>
    </div>
	<div class="container">
<table class="table  table-bordered ">
	<h1><th>Employee name</th>
	 <th>Type</th>
	 <th>Room number</th>
	 <th>Start Date</th>
	 <th>End date</th></h1>
	 <th>Action</th></h1>
	 @foreach($user as $user1)
			<tr> 
			<td> {{$user1->Uname}}</td>
			<td> {{$user1->Jtype}}</td>
			<td> {{$user1->Roomid}}</td>
			<td> {{$user1->Strd}}</td>
			<td> {{$user1->Endd}}</td>
			<td> <a href="/confirm/{{$user1->Empno}}" class="btn btn-primary">
			Confirm</a>
			</td>
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