<?php include "page_header.php"; ?>
<div id="page_title">
	Books Borrowed Details
</div>
<table class="tbl" border="1" width="700px">
	<thead>
		<tr>
			<th>Stud Id</th>
			<th>Stud Name</th>
			<th>Book Name</th>
			<th>Borrowed Date</th>
			<th>Return Date</th>
			<th>Return</th>
		</tr>
	<thead>
	<tbody>

<?php
	include "dbcon.php";
	
	$qry = "select br.br_id, s.stud_id, s.name, b.book_name, br.brw_date, br.ret_date, br.status  from borrow_tbl br, books_tbl b, stud_tbl s where br.stud_id=s.stud_id and br.book_id=b.book_id and br.status='Borrowed'";
	
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
			<td><a href='adm_book_return_prc.php?id=<?php echo $row[0]; ?>'>
			<i class="icon-signin"></i> Returned</a></td>
		</tr>
<?php
	}
?>
	</tbody>
</table>
<?php include "page_footer.php"; ?>