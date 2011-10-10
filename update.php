<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>AutoIntro by Evolyte | Get Introduced:  Startups & Investors</title>
  <meta name="description" content="I am a Creator.">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
</head>
<body>
	<h1>Startups, Get Introduced to Investors</h1>
	<h2>Discover Mutual Friendships With Relevant Investors Through Twitter & Linkedin</h2>
	
	<p>Find Investors on AngelList (Angels & VCs Only):</p>
	<button>Search AngelList</button><br />
	<div id="container">	
		<div id="image-container" class="clearfix">
		</div>
		<div id="twitter-container" class="clearfix">
		</div>
		<div id="twitter-list-container" class="clearfix">
		</div>
	</div>
	<br /><br />
	<?php $_SESSION['twitter_profile']; ?>
		<div id="form"><!--Start form-->
			<p>Twitter: <a href="http://twitter.com/<?php echo $username ?>">@<?php echo $username ?></a></p>
			<p><?php echo "<img src='$profilepic' />" ?><br /></p>
			<label>Tweet Something:</label><br />
			<form method='post' action='index.php'><br />
			<textarea  name="tweet" cols="20" rows="5" id="tweet" ></textarea><br />
				<div align="left" id="character-count"><!--Start Character Count-->
 					<div id="count">140</div>
 					<div id="barbox"><div id="bar"></div></div>
 				</div><!--End Character Count--></br></br>
			<input type='submit' value='Tweet' name='submit' id='submit' /><br /><br /><br />
		</form>
		</div><!--End Form-->
	
 	<a href="http://www.twitter.com/seanmeverett">Developed by @SeanMEverett</a></br>
	<a href="http://angel.co">Data via AngelList</a>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript"></script>
<script src="js/angellist.js" type="text/javascript"></script>
<script src="js/tweetbox.js" type="text/javascript"></script>


<script>
   var _gaq = [['_setAccount', 'UA-12151040'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
</html>





