/*
screen_size.js

author: Robert Barry
date created: 9/29/2012
date changed: 10/1/2012

This script determines the size of a user's monitor.
If the monitor is less than the width of the document,
then the document loads a stylesheet for handheld 
devices.

*/

// Check the users screen width
if (window.screen.width < 1020) {
	// Get the link tag
	var changeCss = document.getElementsByTagName("link");
	// change the link tag's HREF property
	changeCss[0].href = "http://www.robertbarry.net/zombie_survival/css/handheld.css";
}