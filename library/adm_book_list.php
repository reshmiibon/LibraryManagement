<?php include "page_header.php"; ?>
<div id="page_title">
	Books Details
</div>
<table class="tbl" border="1" width="700px">
	<thead>
		<tr>
			<th>Book Name</th>
			<th>Author</th>
			<th>Publisher</th>
			<th>Edition</th>
			<th>Available Qty</th>
			<th><i class="icon-list"></i></th>
			<th><i class="icon-edit"></i></th>
			<th><i class="icon-trash"></i></th>
		</tr>
	<thead>
	<tbody>

<?php
	include "dbcon.php";
	
	$qry = "select book_id, book_name, author, publisher, edition, qty  from books_tbl";
	
	$res = mysqli_query($con,$qry);
	while($row = mysqli_fetch_array($res))
	{
?>
		<tr>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
			<td><?php echo $row[5]; ?></td>
			<td><a href="adm_book_view.php?id=<?php echo $row[0]; ?>"><i class="icon-list"></i></a></td>
			<td><a href="adm_book_edit.php?id=<?php echo $row[0]; ?>"><i class="icon-edit"></i></a></td>
			<td><a href="adm_book_del.php?id=<?php echo $row[0]; ?>"><i class="icon-trash"></i></a></td>
		</tr>
<?php
	}
?>
	</tbody>
</table>
<?php include "page_footer.php"; ?>