<!--
ZOMBIE SURVIVAL SITE

author: Robert Barry
date created: 9/27/2012
date changed: 10/1/2012
address: http://www.robertbarry.net/zombie_survival/index.php

This HTML5 site is a zombie survival site for the 
Zappos TechU development apprenticeship. It is based
on the FEMA site http://www.ready.gov/hurricanes.

-->

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Federal Department of Emergency Management :: Zombie Attacks</title>
		<link href="css/global.css" rel="stylesheet" type="text/css" media="screen" />
		<!-- HTML5 shiv for ie -->
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="javascript/links_crumbs.js"></script>
		<script src="javascript/screen_size.js"></script>
	</head>
	
	<body id="home">
		<div id="wrapper">
		<div id="inner_wrapper">
<?php
	require("includes/head.php");
	require("includes/navigation.php");
?>
						
			<div id="crumbs">
			</div> <!-- end crumbs -->
			
			<aside> <!-- aside for HTML animation -->
				<div id="zombies_hype_container" style="position:relative;overflow:hidden;width:180px;height:400px;">
					<script type="text/javascript" charset="utf-8" src="zombies_Resources/zombies_hype_generated_script.js?44416"></script>
				</div>
			</aside>

			
			<div id="main_content">
			<blockquote>
				<p id="quote"><i>"We have nothing to fear but zombies!"</i></p>
				<p id="quoter">-Franklin Delano Roosevelt</p>
			</blockquote>
				<article>
					<h1>Zombie Outbreaks and You</h1>
					<img class="left" src="images/zombies.jpg" alt="Picture of man pointing to himself" />
					<p>A zombie outbreak occurs when the dead rise from their graves and attack the living, usually eating their brains. While modern outbreaks have been caused by scientific experiments gone wrong, many are also caused by supernatural phenomenon, such as signals from space or the work of demons. A zombie out break can happen at anytime, and anywhere, and usually without warning.</p>
					<p>While zombie outbreaks are rare, they do happen, and it is up to each individual citizen to be prepared for when an outbreak occurs. The Federal Department of Emergency Management has been studying the problem of zombie outbreaks and have assembled a team of experts to help you survive the next outbreak of zombies when it occurs.</p>
					<p>The FDEM has come up with a few recommendations that will easily help you through any zombie attack that may occur. The links at the top of the page will give you detailed information for helping you and your family survive a zombie outbreak. These include:</p>
					<ul>
						<li>Be informed and aware of any outbreaks.</li>
						<li>Be prepared for an outbreak in your area.</li>
						<li>Assemble a kit for when zombies do attack.</li>
						<li>Get involved in your community to help prevent outbreaks from spreading.</li>
					</ul>
					<p>With a little preparation, some common sense, and a few basic supplies, you too can survive a zombie attack. Remember, only YOU can prevent and survive a zombie attack.</p>
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