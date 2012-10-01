<!--
ZOMBIE SURVIVAL SITE

author: Robert Barry
date created: 9/27/2012
date changed: 10/1/2012
address: http://www.robertbarry.net/zombie_survival/involved.php

This HTML5 site is a zombie survival site for the 
Zappos TechU development apprenticeship. It is based
on the FEMA site http://www.ready.gov/hurricanes.

-->

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Federal Department of Emergency Management :: Zombie Attacks :: Get Involved</title>
		<link href="css/global.css" rel="stylesheet" type="text/css" />
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="javascript/links_crumbs.js"></script>
		<script src="javascript/screen_size.js"></script>
	</head>
	
	<body id="involved">
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
				<p id="quote"><i>"Read my lips: No new zombies!"</i></p>
				<p id="quoter">-George H.W. Bush</p>
			</blockquote>
				<article>
					<h1>Community Involvement</h1>
					<p id="image"><img src="images/homes.jpg" alt="Picture of man questioning his knowledge of the zombie menace." /></p>
					<p>As with any disease, the best way to avoid contracting it is prevention. If you can keep a zombie attack from occurring, then you could save your life, your family's life, your neighbors, and perhaps even your country.</p>
					<p>The FDEM recommends the forming of neighborhood zombie awareness groups. These groups are the "watchdogs" of the neighborhood, ensuring that no zombie incursions are able to penetrate your local neighborhood.</p>
					<p>These groups monitor neighbor activity, stranger danger, neighbor behavior, and any other unusual happenings in a given area. These can include but are not limited to:</p>
					<ul>
						<li>Unusual medical conditions</li>
						<li>Strange behavior</li>
						<li>Disappearance of pets</li>
						<li>Finding of body parts</li>
						<li>Cult activity</li>
						<li>Change in routine</li>
					</ul>
					<p>While the FDEM does not want to condone spying on neighbors, we want to encourage you to know your neighbors, get to know their habits, and report any unusual activity to the proper authorities. <b>Never attempt to ascertain a possible zombie infestation on your own! You could accidentally trigger a world-wide zombie epidemic! Always alert the proper authorities!</b></p>
					<p>As a citizen, it is your responsibility to keep you and your family safe from zombies. Community vigilance is key to preventing zombie infestations in your city and neighborhood.</p>
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