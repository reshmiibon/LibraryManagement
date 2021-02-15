<?php include "page_header.php"; ?>
<?php
	$id = $_REQUEST["id"];
	include "dbcon.php";
	
	$qry = "select * from books_tbl where book_id=$id";
	$res = mysqli_query($con, $qry);
	$row = mysqli_fetch_assoc($res);
?>
		<table style="margin:50px auto;border:5px double black;">
			<tr>
				<td>
					<img class="book_img" src="books/<?php echo $row['book_img']; ?>">
				</td>
				<td>
					<table width="330px" >
						<tr><th colspan=2> <i class="icon-book"></i> View Book Details </th></tr>
						<tr><td colspan=2><hr></td></tr>
						<tr><td>Book Name </td>
							<td> : <?php echo $row['book_name']; ?></td></tr>
						<tr><td>Author </td>
							<td> : <?php echo $row['author']; ?></td></tr>
						<tr><td>Publisher </td>
							<td> : <?php echo $row['publisher']; ?></td></tr>
						<tr><td>Edition </td>
							<td> : <?php echo $row['edition']; ?></td></tr>
						<tr><td>Qty </td>
							<td> : <?php echo $row['qty']; ?></td></tr>
					</table>
				</td>
			</tr>
		</table>
	
<?php include "page_footer.php"; ?>