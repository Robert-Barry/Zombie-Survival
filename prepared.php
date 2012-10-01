<!--
ZOMBIE SURVIVAL SITE

author: Robert Barry
date created: 9/27/2012
date changed: 10/1/2012
address: http://www.robertbarry.net/zombie_survival/prepared.php

This HTML5 site is a zombie survival site for the 
Zappos TechU development apprenticeship. It is based
on the FEMA site http://www.ready.gov/hurricanes.

-->

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Federal Department of Emergency Management :: Zombie Attacks :: Be Prepared</title>
		<link href="css/global.css" rel="stylesheet" type="text/css" />
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="javascript/links_crumbs.js"></script>
		<script src="javascript/screen_size.js"></script>
	</head>
	
	<body id="prepared">
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
					<p id="quote"><i>"A house divided against itself cannot stand against the zombie hoards!"</i></p>
					<p id="quoter">-Abraham Lincoln</p>
				</blockquote>
				<article>
					<h1>Have a Plan</h1>
					<p id="image"><img src="images/exercise.jpg" alt="Picture of people exercising on stationary bikes in preparation for a zombie attack." /></p>
					<p>On the occasion of a full-scale zombie attack, preparation could be all that stands between you and a massive army of the undead. Having a plan, assembling supplies, and reviewing the plan with your family could save your life.</p>
					<p>The FDEM has the following recommendations for how you should prepare for a possible zombie invasion:</p>
					<ol>
						<li>Exercise. The ability to run away from zombes has proven time and time again to be the best way to survive until government personnel arrive on the scene. You should do at least 20 minutes of cardio every other day, and also 20 minutes of resistance training on the days you aren't doing cardio. Cardio may help you escape, but it won't help you to fight off a hungry zombie if the need arises.</li>
						<li>Have an escape route. While many families will be tempted to hole up in their homes and prepare to wait out the zombies, what they fail to realize is that zombies don't need to take a break. Boarding up your home and sitting still is NOT the proper course of action. The FDEM recommends that you have at least 3 escape routes in the occasion that you are confronted by zombies, and you should practice escaping with your family regularly.</li>
						<li>Make a kit. You can read more about making a <a href="kit.php">zombie survival kit</a> on our web site.</li>
					</ol>
					<p>Remember, preparation is the best way to survive the zombies. Make sure you and your family are prepared to any eventuality, and that each person is ready to fulfill their role in helping each other survive. Together, you can survive a zombie attack.</p>
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