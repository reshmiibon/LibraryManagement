<nav>
	<?php
	if($_SESSION['usertype']=="admin") {
	?>
	<a href="admin_home.php"><i class="icon-home"></i> Home</a>
	<a href="adm_book_add.php"><i class="icon-book"></i> Add Books</a>
	<a href="adm_book_list.php"><i class="icon-edit"></i> Manage Books</a>
	<a href="adm_book_borrow.php"><i class="icon-arrow-right"></i> Borrow Books</a>
	<a href="adm_book_borrow_list.php"><i class="icon-reorder"></i> View Borrowed Books</a>
	<a href="adm_book_return.php"><i class="icon-arrow-left"></i> Return Books</a>
	<a href="adm_book_return_list.php"><i class="icon-book"></i> View Returned Books</a>
	<a href="adm_view_stud.php"><i class="icon-user"></i> View Students</a>
	<?php
		}
		else
		{
	?>
	
	<a href="stud_home.php"><i class="icon-home"></i> Home</a>
	<a href="stud_profile.php"><i class="icon-user"></i> Profile</a>
	<a href="stud_book_borrow_list.php"><i class="icon-book"></i> Borrowed Books</a>
	<?php
		}
	?>
	<a href="logout.php"><i class="icon-off"></i> Logout</a>

	
</nav>