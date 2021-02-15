<?php

	//Retrieving the data from html
	$id = $_REQUEST["id"];
	

	//connect to database
	include "dbcon.php";

	//prepare the query
	$qry = "update borrow_tbl set status='Returned' where br_id=$id";

	//execute the query
	mysqli_query($con, $qry);

	//prepare the query
	$qry = "insert into return_tbl (br_id) values ($id)";

	//execute the query
	mysqli_query($con, $qry);

	echo "<script>alert('Book Returned Successfully'); location='adm_book_borrow_list.php';</script>";



