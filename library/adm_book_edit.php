<?php include "page_header.php"; ?>
<?php
	$id = $_REQUEST["id"];
	include "dbcon.php";
	
	$qry = "select * from books_tbl where book_id=$id";
	$res = mysqli_query($con, $qry);
	$row = mysqli_fetch_assoc($res);
?>
	<form action="adm_book_edit_prc.php" >
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table style="margin:50px auto;border:5px double black;">
			<tr>
				<td>
					<img class="book_img" src="books/<?php echo $row['book_img']; ?>">
				</td>
				<td>
					<table width="330px" >
						<tr><th colspan=2> <i class="icon-book"></i> Update Book Details </th></tr>
						<tr><td colspan=2><hr></td></tr>
						<tr><td>Book Name </td>
							<td> : <input type="text" name="book_name" value="<?php echo $row['book_name']; ?>"></td></tr>
						<tr><td>Author </td>
							<td> : <input type="text" name="author" value="<?php echo $row['author']; ?>"></td></tr>
						<tr><td>Publisher </td>
							<td> : <input type="text" name="pub" value="<?php echo $row['publisher']; ?>"></td></tr>
						<tr><td>Edition </td>
							<td> : <input type="text" name="edition" value="<?php echo $row['edition']; ?>"></td></tr>
						<tr><td>Qty </td>
							<td> : <input type="text" name="qty" value="<?php echo $row['qty']; ?>"></td></tr>
						<tr><td colspan=2 class="center">
							<button type="submit" class="btn_red"> 
								<i class="icon-ok"></i> Update Book
							</button>
						</td></tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
	
<?php include "page_footer.php"; ?>