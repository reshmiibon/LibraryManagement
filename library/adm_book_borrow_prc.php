<?php

	//Retrieving the data from html
	$book_id = $_REQUEST["book_id"];
	$stud_id = $_REQUEST["stud_id"];
	$brw_date = $_REQUEST["brw_date"];
	$ret_date = $_REQUEST["ret_date"];
	
	//connect to database
	include "dbcon.php";

	//prepare the query
	$qry = "insert into borrow_tbl (book_id, stud_id, brw_date, ret_date) values($book_id,$stud_id,'$brw_date','$ret_date')";

	//execute the query
	mysqli_query($con, $qry);

	echo "<script>alert('Book Borrowed Details Added Successfully'); location='adm_book_borrow.php';</script>";



