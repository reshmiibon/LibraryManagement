<?php

	//Retrieving the data from html
	$book_name = $_REQUEST["book_name"];
	$author = $_REQUEST["author"];
	$pub = $_REQUEST["pub"];
	$edition= $_REQUEST["edition"];
	$qty = $_REQUEST["qty"];

	//connect to database
	include "dbcon.php";

	//prepare the query
	$qry = "insert into books_tbl (book_name, author, publisher, edition, qty) values('$book_name','$author','$pub',$edition,$qty)";

	//execute the query
	mysqli_query($con, $qry);

	//Get the last id from table
	$last_id = mysqli_insert_id($con);

	//create a unique name for image with id
	$book_img_name = $last_id."_".$_FILES["book_img"]["name"];

	//upload it to books folder with new unique name
	move_uploaded_file($_FILES["book_img"]["tmp_name"],"books/".$book_img_name);

	//update this new book name in books_table
	$qry = "update books_tbl set book_img='$book_img_name' where book_id=$last_id";
	mysqli_query($con, $qry);

	echo "<script>alert('Book Added Successfully'); location='adm_book_add.php';</script>";



