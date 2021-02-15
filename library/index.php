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
			<main id="login_page">	
				<form action="login_auth.php" method="post">
					<table width="300px" style="margin:100px auto;border:5px double black;">
						<tr><th colspan=2> <i class="icon-user"></i> Login Here </th></tr>
						<tr><td colspan=2><hr></td></tr>
						<tr><td>Username </td><td> : <input type="text" name="uname"></td></tr>
						<tr><td>Password </td><td> : <input type="password" name="upass"></td></tr>
						<tr><td colspan=2 class="center">
							<button type="submit" class="btn_red"> 
								<i class="icon-unlock"></i> Login
							</button>
						</td></tr>
						<tr>
							<td colspan=2 class="center">
								New Student <a href="stud_reg.php"> Register Here </a>
							</td>
						</tr>
					</table>
				</form>
<?php include "page_footer.php"; ?>			
