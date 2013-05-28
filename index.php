<?php 
include 'init.php';
?>

<!DOCTYPE html>
<html>
<head>

<meta name="description" content="My Animation Videos">
<meta name="keywords" content="coolstuff1989">
<meta name="author" content="MohanRaj Balumuri">
<meta charset="UTF-8">
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

	<title>Coolstuff1989</title>
</head>
<body>
	<?php include  'includes/header.php';?>
	<div class="hero">
		<div class="hero-unit1">
			<div class="hero-text">Welcome!</div>
		</div>
		<?php include 'includes/hero.php';?>	
    </div>


    <div class="abc">
    <div style="width:55%; display:inline-block;">
    <div class="abc-text"><div class="well">Explore<form action="videos.php" method="post" style="display: inline"> <button class="btn btn-success"> videos </button></form> to find more! </div></div>
				<div class="car">
				<div class="well">
				<div id="myCarousel" class="carousel">
					<div class="carousel-inner">
						<div class="item active"> <img src="images/m1.gif" class="img-rounded"> </div>
						<div class="item"> <img src="images/m2.gif" class="img-rounded"> </div>
						<div class="item"> <img src="images/m3.gif" class="img-rounded"> </div>
						<div class="item"> <img src="images/m4.gif" class="img-rounded"> </div>
					</div>
					</div>
				</div>
			</div>
		</div>
	<div style="display:inline-block; float:right; padding:4% 6% 0 0;">
	
	
<?php 
if(logged_in() === true){
include 'widgets/loggedin.php';
}
else{
include  'includes/login.php';
}
include 'widgets/user_count.php';?>


	</div>
	
	</div>
	<script src="js/carousel.js"></script> 

</body>
</html>