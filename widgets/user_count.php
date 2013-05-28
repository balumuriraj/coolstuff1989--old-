<br>
<br>
	<div class= "well" style = "position: relative; top:10px; text-align:center; font-size:25px;"> <b>USERS</b></div>
	<div class = "inner">
	<?php 
	$user_count = user_count();
	$suffix = ($user_count!=1) ? 's' : '';
	?>
		<div class= "well">We currently have <?php echo user_count();?> registered user<?php echo $suffix;?>!</div>
	</div>
