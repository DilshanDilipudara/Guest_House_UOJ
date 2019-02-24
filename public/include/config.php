<?php
	$severname = "localhost";
	$username = "root";
	$password = "";
	$db = "carrentaldb";

	$conn = mysqli_connect($severname,$username,$password);
	mysqli_select_db($conn,$db);

	$dbh = new PDO("mysql:dbname={$db};host={$severname};port={3306}", $username, $password);

   if(!$dbh){

      echo "unable to connect to database";
   }
?>
