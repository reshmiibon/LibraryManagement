<?php
	session_start();
	session_destroy(); //Delete the session details
?>

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
				<div style="text-align:center; margin:150px auto;font-size:30pt;">
					<i class="icon-off"> </i> <b>Logged Out</b> Successfully !!!
					<br>
					<div style="font-size:20pt;margin-top:30px;">
						<i class="icon-hand-right"></i>
						<a href="index.php">Click Here</a> to Login Again
					</div>
				</div>
<?php include "page_footer.php"; ?>			
