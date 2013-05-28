<? ob_start(); ?>
<?php 
include 'init.php';
logged_in_redirect();
//error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="stylesheet.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	<script src="js/imgresizer.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.carousel').carousel({
				interval:2000 });
		});

	    addLoadEvent(function() {
	         if (document.getElementById && document.getElementsByTagName) {
	              var aImgs = document.getElementById("content").getElementsByTagName("img");
	              imgSizer.collate(aImgs);
	         }
	    });
	    $('#my-alert').bind('closed', function () {
	    	  // do something…
	    	$(".alert").alert('close');
	    	});
	    
		
	</script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-41247951-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	<title>Mycoolstuff1989</title>
</head>
<body>
	<?php include  'includes/header.php';?>
	<div class="hero">
		<div class="hero-unit1">
			<div class="hero-text">Register!</div>
		</div>
		<?php include 'includes/hero.php';?>	
    </div>
    
    <div class="abc">
		<div style = "padding:5%; list-style: none;">
		<form class = "well" action="" method="post" style = "padding:5%; list-style: none;">
		<?php 
		if(empty($_POST) === false) {
			$required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
			foreach($_POST as $key=>$value) {
				if(empty($value) && in_array($key, $required_fields) === true) {
					$errors[] = 'Fields marked with asterisk are required';
					break 1;
				}
			}
			
			if(empty($errors) === true) {
				if(user_exists($_POST['username']) === true) {
					$errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
				}
				
				if(preg_match("/\\s/", $_POST['username']) == true) {
				
					$errors[] = 'Your username must not contain any spaces!';
				}
				if(strlen($_POST['password']) < 6) {
					$errors[] = 'Your password must be atleast 6 characters!';
				}
				
				if($_POST['password'] !== $_POST['password_again']){
					$errors[] = 'Your passwords do not match!';
				}
				
				if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
					$errors[] = 'A valid email address is required';
				}
				
				if (email_exists($_POST['email']) === true) {
					$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use';
				}
			}
			
		}
		?>
		<ul style = "list-style: none;">
			<li style = "list-style: none; text-align:center;"><h2>Registration Form</h2> </li><hr>
			
			<?php 
				if(isset($_GET['success']) && empty($_GET['success'])) {
					echo 'You\'ve been registered successfully!';
				} else {
					if(empty($_POST) === false && empty($errors) === true) {
						//register user
						$register_data = array(
								'username' => $_POST['username'],
								'password' => $_POST['password'],
								'first_name' => $_POST['first_name'],
								'last_name' => $_POST['last_name'],
								'email' => $_POST['email']
	
						);
						register_user($register_data);
						//redirect
						header('Location: signin.php?success');
						//exit
						exit();
						
					} else if(empty($errors) === false){ 
?> 
<div class="alert">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>Warning!</strong> <?php echo output_errors($errors); ?>
</div>
<?php 						
					}
			?>
			
			<li>
				Username*:<br/>
				<input type = "text" name = "username" style="height:25px;">
			</li>
			<li>
				Password*:<br/>
				<input type = "password" name = "password" style="height:25px;">
			</li>
			<li>
				Password again*:<br/>
				<input type = "password" name = "password_again" style="height:25px;">
			</li>
			<li>
				First Name*:<br/>
				<input type = "text" name = "first_name" style="height:25px;">
			</li>
			<li>
				Last Name:<br/>
				<input type = "text" name = "last_name" style="height:25px;">
			</li>
			<li>
				Email*:<br/>
				<input type = "text" name = "email" style="height:25px;">
			</li>
			<li>
				<button class="btn btn-primary"> submit </button>
			</li>
			
		</ul>
		<?php 
			}
		?>
		</form>
		</div>
			
	</div>

	<script src="js/carousel.js"></script> 

</body>
</html>
<? ob_flush(); ?>