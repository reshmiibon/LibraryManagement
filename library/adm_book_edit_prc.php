<?php

	//Retrieving the data from html
	$id = $_REQUEST["id"];
	$book_name = $_REQUEST["book_name"];
	$author = $_REQUEST["author"];
	$pub = $_REQUEST["pub"];
	$edition= $_REQUEST["edition"];
	$qty = $_REQUEST["qty"];

	//connect to database
	include "dbcon.php";

	//prepare the query
	$qry = "update books_tbl set book_name='$book_name', author='$author', publisher='$pub', edition=$edition, qty=$qty where book_id=$id";

	//execute the query
	mysqli_query($con, $qry);

	echo "<script>alert('Book Updated Successfully'); location='adm_book_list.php';</script>";



