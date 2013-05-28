<?php
include 'init.php';
if($_SESSION['user_id']){
	session_destroy();
	include 'includes/header.php';
		?>
	<div class="hero">
		<div class="hero-unit1"><div class="hero-text">Logout!</div></div>
		<div class="login">
		<form class="form" action="logindatabase.php" method="post">
		<button class="btn btn-large btn-info btn-primary"> signup </button>
		</form>
		</div>
	
	    </div>
	
	    <div class="abc">
	    <div style="text-align:center; width:35%; margin:20px auto 20px auto;" >
	<div class="login-text"><div class="well">LOGOUT</div></div>
	<div class="login1">
	<form class="form well" action="index.php" method="post">
	<h3>You are kicked out successfuly!</h3>
	<div ><button class="btn btn-large btn-danger" style="width:100%; margin:auto;"> ok </button>
	</div>
	</form>
	</div>
	    
	</div>
		</div>

<?php 
}
?>