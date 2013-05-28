<?php 
include 'init.php';
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
		
	</script>

	<title>Mycoolstuff1989</title>
</head>
<body>
	<?php include  'includes/header.php';?>
	<div class="hero">
		<div class="hero-unit1">
			<div class="hero-text">About Me!</div>
		</div>
		<?php include 'includes/hero.php';?>	
    </div>
    
    <div class="abc">
    
		<div style = "padding:40px; text-align:center;">
			<div class = "well" >
				<h2>Welcome to CoolStuff1989!</h2>
			</div>
			<div class = "well" >
					<p id="para2">Hi! This website consists of animation and digital graphics videos made by me. As of now this is just a simple websites playing the embeded videos. In future, tutorials will be added along with rating, feedback and more!</p>

				<div style = "text-align: right;">
					<p>Name: MohanRaj Balumuri <br>
						 Address: Tempe, AZ 85281</p>
				</div>
			</div>
		</div>
	</div>

	<div class="like" > 
    					<!--facbook and twitter-->
				<div class="main_share_blog">
					<div class="share_blog">
							<table id="social_share_links">
								<tr>
									<td>
									<a href="https://twitter.com/share" 
									class="twitter-share-button" 
									data-url="http://coolstuff1989.co.nf/" 
									data-via="balumuriraj" data-lang="en" 
									data-related="CoolStuff1989" data-count="vertical">Tweet</a>
									
										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
											if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
											js.src="//platform.twitter.com/widgets.js";
											fjs.parentNode.insertBefore(js,fjs);}
											}(document,"script","twitter-wjs");</script>
									</td>
								</tr>
								<tr> <td> <br> </td> </tr>
								<tr>
									<td>
										<div id="fb-root"></div>
											<script>(function(d, s, id) {
											  var js, fjs = d.getElementsByTagName(s)[0];
											  if (d.getElementById(id)) return;
											  js = d.createElement(s); js.id = id;
											  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
											  fjs.parentNode.insertBefore(js, fjs);
											}(document, 'script', 'facebook-jssdk'));</script>
											<div class="fb-like" data-href="http://coolstuff1989.co.nf/" data-send="true" data-layout="box_count" data-width="500" data-show-faces="true" data-font="arial"></div>
									</td>
								</tr>
						</table>
					</div>
				</div>
    </div>
	
</body>
</html>