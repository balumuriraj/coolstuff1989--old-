<?php 
include 'init.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
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
	<title>Videos</title>
</head>
<body>
	<script src="js/bootstrap.js"></script>
	<?php include  'includes/header.php';?>
	<div class="hero">
		<div class="hero-unit1">
			<div class="hero-text">Videos!</div>
		</div>
		<?php include 'includes/hero.php';?>	
    </div>
    
	<div class="abc">
	<form class="well form-search">
	<input type="text" class="span3 search-query" placeholder="search"/>
	<button class="btn"> Search </button>
	</form>
	<div class="videos">
			<div class="imag">
				<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="1"/>
				<input type="image" class="focus pic" src="images/image1.gif">
			</form>
			</div >
			
			<div class="imag">
			<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="2"/>
				<input type="image" class="focus pic" src="images/image2.gif">
			</form>
			</div>
			<div class="imag">
			<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="3"/>
				<input type="image" class="focus pic" src="images/image3.gif">
			</form>
			</div>	
	
	<div class="imag">
			<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="4"/>
				<input type="image" class="focus pic" src="images/ITSA.gif">
			</form>
	</div>

	<div class="imag">
			<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="5"/>
				<input type="image" class="focus pic" src="images/image5.gif">
			</form>
	</div>

	<div class="imag">
			<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="6"/>
				<input type="image" class="focus pic" src="images/image6.gif">
			</form>
	</div>
	<div class="imag">
			<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="7"/>
				<input type="image" class="focus pic" src="images/image7.gif">
			</form>
	</div>

	<div class="imag">
			<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="8"/>
				<input type="image" class="focus pic" src="images/image8.gif">
			</form>
	</div>

	<div class="imag">
			<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="9"/>
				<input type="image" class="focus pic" src="images/image9.gif">
			</form>
	</div>

	<div class="imag">
			<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="10"/>
				<input type="image" class="focus pic" src="images/image10.gif">
			</form>
	</div>

	<div class="imag">
			<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="11"/>
				<input type="image" class="focus pic" src="images/image11.gif">
			</form>
	</div>

	<div class="imag">
			<form action="videoplay.php" method="post">
				<input type="hidden" name = "cool" value="12"/>
				<input type="image" class="focus pic" src="images/image12.gif">
			</form>
	</div>
	
	</div>
	
	</div>

	
</body>
</html>