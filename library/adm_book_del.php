<?php include "page_header.php"; ?>
<?php
	$id = $_REQUEST["id"];
	include "dbcon.php";
	
	$qry = "delete from books_tbl where book_id=$id";
	mysqli_query($con, $qry);
?>
<script>
	alert("Book Deleted Successfully !!!");
	location="adm_book_list.php";
</script>
<?php include "page_footer.php"; ?>