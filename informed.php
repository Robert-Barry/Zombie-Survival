<!--
ZOMBIE SURVIVAL SITE

author: Robert Barry
date created: 9/27/2012
date changed: 10/1/2012
address: http://www.robertbarry.net/zombie_survival/informed.php

This HTML5 site is a zombie survival site for the 
Zappos TechU development apprenticeship. It is based
on the FEMA site http://www.ready.gov/hurricanes.

-->

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Federal Department of Emergency Management :: Zombie Attacks :: Be Informed</title>
		<link href="css/global.css" rel="stylesheet" type="text/css" />
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="javascript/links_crumbs.js"></script>
		<script src="javascript/screen_size.js"></script>
	</head>
	
	<body id="informed">
		<div id="wrapper">
		<div id="inner_wrapper">
<?php
	require("includes/head.php");
	require("includes/navigation.php");
?>	
						
			<div id="crumbs">
			</div> <!-- end crumbs -->
			
			<aside>
				<div id="zombies_hype_container" style="position:relative;overflow:hidden;width:180px;height:400px;">
					<script type="text/javascript" charset="utf-8" src="zombies_Resources/zombies_hype_generated_script.js?44416"></script>
				</div>
			</aside>
			
			<div id="main_content">
				<blockquote>
				<p id="quote"><i>"We choose to go to the moon...not because it is easy, but because there are no zombies on the moon!"</i></p>
				<p id="quoter">-John F. Kennedy</p>
			</blockquote>
				<article>
					<h1>Know Your Zombies</h1>
					<img class="left" src="images/question_guy.jpg" alt="Picture of man questioning his knowledge of the zombie menace." />
					<p>Knowledge of  zombies and zombie outbreaks could be just the thing that saves your life. Television news reports, radio, newspapers, and community gossip are all tools in your arsenal of knowing about zombies and where outbreaks are occurring.</p>
					<p>Know your neighbors. A goog pair of binoculars to keep an eye on the people on your block is always a way to keep informed on what those around you are doing. Be aware and report any suspicious zombie-like activity, such as the smell of rotten flesh, or sudden mounds of dirt appearing in a neighbor's backyard. Has a teenager in your area been struck with a sudden illness? Perhaps it's time to call the authorities. It is up to you to remain vigilant.</p>
					<p>Be sure to check out your city's zombie registration page to see if there have been any families harboring zombies near you. While the have the good intention of keeping their loved one quarantined in hopes of finding a cure, they could have inadvertently become exposed to zombieism themselves and should be carefully monitored.</p>
					<p>One special not is to mention is that the internet is especially unreliable when it comes to up-to-date information about zombies. Things like the Twitter, Face-book, and "blogs" are all teeming with anonymous youths bent on wrecking havoc and causing anarchy. They collectively are the single worst threat to the nation when it comes to defending ourselves against zombie attacks. DO NOT BELIEVE THE INTERNET!</p>
			</div> <!-- end div main_content -->
		</div> <!-- end inner_wrapper -->
		<footer class="clear">
<?php
	require("includes/footer.php");
?>
		</footer>
		</div> <!-- end wrapper -->
	</body>
</html>