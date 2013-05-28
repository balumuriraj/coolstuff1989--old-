<?php 
if(logged_in() === true){ ?>
		<div class="hero-unit2">
			<div style="display: inline">
				Hello, <?php echo $user_data['first_name'];?>!
				<form action="signin.php" method="post" style="display: inline">
				<button class="btn btn-small btn-info btn-primary" style=""> Profile </button>	
				</form>
				<form action="signin.php" method="post" style="display: inline">
				<button class="btn btn-small btn-info btn-primary" style=""> Settings </button>	
				</form>
				<form action="logout.php" method="post" style="display: inline">
				<button class="btn btn-small btn-info btn-primary" style=""> Logout </button>	
				</form>
			</div>
		</div>
<?php 
}
else{ ?>
		<div class="login">
			<form class="form" action="signin.php" method="post">
				<button class="btn btn-large btn-info btn-primary" style=""> signup </button>	
			</form>
		</div>
<?php 
}
?>