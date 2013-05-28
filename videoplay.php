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
			<div class="hero-text">Video Player!</div>
		</div>
		<?php include 'includes/hero.php';?>	
    </div>
	
    <div class="abc well" style = "text-align:center; border:none;">
    			<div style="padding-top:1%"> <!-- video -->
			<?php switch($_POST["cool"]){
				case "1":
			?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/i1yGy2_uKjI"></iframe>
			<?php break; 
				case "2":
			?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/3oxFM_7E6b4"></iframe>
			<?php break; 
				case "3":
				?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/1L81eY9V56A"></iframe>
			<?php break; 
				case "4":
			?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/aX-fd75rC-M"></iframe>
			<?php break; 
				case "5":
			?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/z_g9qLf9nSY"></iframe>
			<?php break; 
				case "6":
			?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/4ZSylR9keYs"></iframe>
			<?php break; 
				case "7":
			?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/iws_19Y1V2A"></iframe>
			<?php break; 
				case "8":
			?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/Pdb1EGZouHU"></iframe>
			<?php break; 
				case "9":
			?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/Fbf1XHjktb8"></iframe>
			<?php break; 
				case "10":
			?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/fAUsG1iEX8A"></iframe>
			<?php break; 
				case "11":
			?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/J2D3Rx5POC8"></iframe>
			<?php break; 
				default:
			?>
					<iframe width="640" height="380" src="http://www.youtube.com/embed/dsujsuXxgyo"></iframe>
			<?php break; 
				}
			?>
			
				<div class="like" style="top:100px; width:8%;"> 
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
		</div>
	</div>


</body>
</html>