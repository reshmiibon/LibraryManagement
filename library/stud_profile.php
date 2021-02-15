<?php include "page_header.php"; ?>	
<?php
	$id = $_SESSION["id"];
	include "dbcon.php";
	
	$qry = "select * from stud_tbl where stud_id=$id";
	$res = mysqli_query($con, $qry);
	$row = mysqli_fetch_array($res);
?>
	<table width="300px" style="margin:50px auto;border:5px double black;">
		<tr><th colspan=2> <i class="icon-user"></i> My Profile </th></tr>
		<tr><td colspan=2><hr></td></tr>
		<tr><td>Stud Id </td><td> : <?php echo $row[0]; ?></td></tr>
		<tr><td>Name </td><td> : <?php echo $row[1]; ?></td></tr>
		<tr><td>Department </td><td> : <?php echo $row[2]; ?></td></tr>
		<tr><td>Phone </td><td> : <?php echo $row[3]; ?></td></tr>
		<tr><td>Email </td><td> : <?php echo $row[4]; ?></td></tr>

	</table>
<?php include "page_footer.php"; ?>			
