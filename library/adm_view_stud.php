<?php include "page_header.php"; ?>
<div id="page_title">
	Registered Student Details
</div>
<table class="tbl" border="1" width="700px">
	<thead>
		<tr>
			<th>Stud Id</th>
			<th>Stud Name</th>
			<th>Department</th>
			<th>Phone</th>
			<th>Email</th>
		</tr>
	<thead>
	<tbody>

<?php
	include "dbcon.php";
	
	$qry = "select * from stud_tbl";
	
	$res = mysqli_query($con,$qry);
	while($row = mysqli_fetch_array($res))
	{
?>
		<tr>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
		</tr>
<?php
	}
?>
	</tbody>
</table>
<?php include "page_footer.php"; ?>