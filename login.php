<?php
include 'init.php';
if(empty($_POST) === false)
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(empty($username) === true || empty($password) === true)
	{
		$errors[] = 'You need to enter a username and password!';
	}
	else if (user_exists($username) === false)
	{
		$errors[] = 'We can\'t find that username! Have you registered?'; 
	}
	else if (user_active($username) === false)
	{
		$errors[] = 'You haven\'t activated your account!';
	}
	else {
		$login = login($username, $password);
		if ($login === false)
		{
			$errors[] = 'That username/password combination is incorrect!';
		}
		else {
			//set session here
			$_SESSION['user_id'] = $login;
			//redirect to homepage
			header('Location: index.php');
			exit();
		}
	}
}
include 'includes/header.php';
if(empty($errors) === false) {
?>
<div class="hero">
	<div class="hero-unit1"><div class="hero-text">Welcome!</div></div>
	<div class="login">
	<form class="form" action="logindatabase.php" method="post">
	<button class="btn btn-large btn-info btn-primary"> signup </button>
	</form>
	</div>

    </div>

    <div class="abc" style="color: white">
    <div style="text-align:center; list-style:none;" >
<h2> we tried to log you in, but.. </h2>
	


<?php
echo output_errors($errors); 
}
?>
</div>
	</div>