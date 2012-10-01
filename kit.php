<!--
ZOMBIE SURVIVAL SITE

author: Robert Barry
date created: 9/27/2012
date changed: 10/1/2012
address: http://www.robertbarry.net/zombie_survival/kit.php

This HTML5 site is a zombie survival site for the 
Zappos TechU development apprenticeship. It is based
on the FEMA site http://www.ready.gov/hurricanes.

-->

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Federal Department of Emergency Management :: Zombie Attacks :: Survival Kit</title>
		<link href="css/global.css" rel="stylesheet" type="text/css" />
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="javascript/links_crumbs.js"></script>
		<script src="javascript/screen_size.js"></script>
	</head>
	
	<body id="kit">
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
					<p id="quote"><i>"I am not a zombie!"</i></p>
					<p id="quoter">-Richard M. Nixon</p>
				</blockquote>
				<article>
					<h1>Make a Zombie Survival Kit</h1>
					<img class="right" src="images/axe.jpg" alt="Picture of an axe, ready to chop up zombies." />
					<p>A zombie survival kit is essential to any zombie incident. Along with things like food and water, you will also want to arm yourself with defensive weapons and other essentials. You may be without power, without shelter, and without an infested store in your area. It is important to have a kit prepared in the event that you must survive on your own for days, or even weeks, on end.</p>
					<p>The main thing is to make sure that your kit is small and able to go with you. It may be necessary to divide supplies among family members if you must proceed to escape the zombies on foot. The FDEM recommends hiking backpacks, which are able to hold a lot of gear, yet can withstand the rigors of a zombie invasion.</p>
					<p>Here are a few of the things you should carry in your zombie survival kit:</p>
					<ol>
						<li>Food.</li>
						<li>Water</li>
						<li>A change of socks</li>
						<li>Tent</li>
						<li>Flashlight</li>
						<li>Batteries</li>
						<li>Candles</li>
						<li>Aspirin and other medications</li>
						<li>Matches</li>
						<li>An axe</li>
						<li>A gun (preferably a shotgun)</li>
						<li>Ammunition</li>
					</ol>
					<p>Of course feel free to add to your own kit. You could even make it a game for your family! See who can pack the lightest bag, or decide on a point system to decide who in your family will live or who will die! Survival can be fun!</p>
				</article>
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