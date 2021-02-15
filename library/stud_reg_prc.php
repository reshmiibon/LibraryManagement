<?php
	
	//Retrieving the data from html
	$id = $_REQUEST["stud_id"];
	$name = $_REQUEST["stud_name"];
	$dept = $_REQUEST["dept"];
	$phone = $_REQUEST["phone"];
	$email = $_REQUEST["email"];
	$uname = $_REQUEST["uname"];
	$upass = $_REQUEST["upass"];
	
	//connect to database
	include "dbcon.php";
	
	//prepare the query
	$qry = "insert into stud_tbl values($id,'$name','$dept','$phone','$email','$uname','$upass')";
	
	//execute the query
	mysqli_query($con, $qry);
	
	echo "<script>alert('Registration Success'); location='index.php';</script>";
	
	
	
	