<!DOCTYPE html>
<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

		<script type="text/javascript" src="script/script.js"></script>
		<link rel="stylesheet" type="text/css" href="style/style.css" >
	</head>
	<body>
		<div id="container">
			
			<?php include "header.php"; ?>
			<main id="reg_page">	
				<form action="stud_reg_prc.php" method="post">
					<table width="300px" style="margin:50px auto;border:5px double black;">
						<tr><th colspan=2> <i class="icon-user"></i> Student Registration Form </th></tr>
						<tr><td colspan=2><hr></td></tr>
						<tr><td>Stud Id </td><td> : <input type="text" name="stud_id"></td></tr>
						<tr><td>Name </td><td> : <input type="text" name="stud_name"></td></tr>
						<tr><td>Department </td><td> : <input type="text" name="dept"></td></tr>
						<tr><td>Phone </td><td> : <input type="text" name="phone"></td></tr>
						<tr><td>Email </td><td> : <input type="text" name="email"></td></tr>
						<tr><td>Username </td><td> : <input type="text" name="uname"></td></tr>
						<tr><td>Password </td><td> : <input type="password" name="upass"></td></tr>
						<tr><td colspan=2 class="center">
							<button type="submit" class="btn_red"> 
								<i class="icon-ok"></i> Register
							</button>
						</td></tr>
						<tr>
							<td colspan=2 class="center">
								Already Registered <a href="index.php"> Login Here </a>
							</td>
						</tr>
					</table>
				</form>
<?php include "page_footer.php"; ?>			
