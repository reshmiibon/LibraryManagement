<?php include "page_header.php"; ?>

	<form action="adm_book_add_prc.php" method="post" enctype="multipart/form-data">
		<table width="380px" style="margin:50px auto;border:5px double black;">
			<tr><th colspan=2> <i class="icon-book"></i> Add Book Details </th></tr>
			<tr><td colspan=2><hr></td></tr>
			<tr><td>Book Name </td><td> : <input type="text" name="book_name"></td></tr>
			<tr><td>Book Image </td><td> : <input type="file" name="book_img"></td></tr>
			<tr><td>Author </td><td> : <input type="text" name="author"></td></tr>
			<tr><td>Publisher </td><td> : <input type="text" name="pub"></td></tr>
			<tr><td>Edition </td><td> : <input type="text" name="edition"></td></tr>
			<tr><td>Qty </td><td> : <input type="text" name="qty"></td></tr>
			<tr><td colspan=2 class="center">
				<button type="submit" class="btn_red"> 
					<i class="icon-ok"></i> Insert Book
				</button>
			</td></tr>
		</table>
	</form>
	
<?php include "page_footer.php"; ?>