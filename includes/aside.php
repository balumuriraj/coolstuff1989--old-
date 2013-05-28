<aside>
<?php
	if(logged_in() === true) {
		include 'widgets/loggedin.php';
	}
	else {
		include 'includes/login.php';
	}
	include 'widgets/user_count.php';
?>
</aside>

