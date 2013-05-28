<div class="login-text"><div class="well">Profile</div></div>
<div >
		<div class="form well">
			<h5>First Name: <?php echo $user_data['first_name'];?></h5>
			<h5>Last Name: <?php echo $user_data['last_name'];?></h5>
			<h5>username: <?php echo $user_data['username'];?></h5>
			<h5>email: <?php echo $user_data['email'];?></h5>
			<form action="logout.php" method="post" style="display: inline">
			<button class="btn btn-danger" style="display: inline"> Logout </button>
			</form>			
			<form action="logout.php" method="post" style="display: inline">
			<button class="btn btn-danger" style="display: inline"> Change Password </button>
			</form>
		</div>
</div>

