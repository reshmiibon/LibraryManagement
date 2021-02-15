<header>
	<i class="icon-book"></i>
	Library Management Application
	<?php if(isset($_SESSION['name'])) { ?>
	<div class="header_user">Welcome <?php echo $_SESSION['name']; ?></div>
	<?php } ?>
</header>