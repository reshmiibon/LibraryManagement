<?php include "page_header.php"; ?>
<?php
	include "dbcon.php";
	
	$qry = "select book_id, book_name from books_tbl";
	$book_res = mysqli_query($con, $qry);
	
	$qry = "select stud_id, name from stud_tbl";
	$stud_res = mysqli_query($con, $qry);
	
	$brw_date = date('Y-m-d');
	$ret_date = date('Y-m-d',strtotime ( $brw_date . ' + 10 days' ));
?>

	<form action="adm_book_borrow_prc.php" >
		<table width="380px" style="margin:50px auto;border:5px double black;">
			<tr><th colspan=2> <i class="icon-book"></i> Add Book Borrow Details </th></tr>
			<tr><td colspan=2><hr></td></tr>
			<tr><td>Book Name </td><td> : 
			<select name="book_id">
				<option value="0">Select</option>
			<?php
				while($brow = mysqli_fetch_array($book_res))
				{
					echo "<option value='".$brow[0]."'> $brow[1] </option>";
				}
			?>
			</select>
			</td></tr>
			<tr><td>Stud Id </td><td> : 
			<select name="stud_id">
				<option value="0">Select</option>

			<?php
				while($srow = mysqli_fetch_array($stud_res))
				{
					echo "<option value='".$srow[0]."'> $srow[0] : $srow[1] </option>";
				}
			?>
			</select>
			</td></tr>
			<tr><td>Borrow Date </td><td> : <input type="date" name="brw_date" value="<?php echo $brw_date; ?>"></td></tr>
			<tr><td>Return Date </td><td> : <input type="date" name="ret_date" value="<?php echo $ret_date;?>"></td></tr>
			<tr><td colspan=2 class="center">
				<button type="submit" class="btn_red"> 
					<i class="icon-ok"></i> Submit
				</button>
			</td></tr>
		</table>
	</form>
	
<?php include "page_footer.php"; ?>