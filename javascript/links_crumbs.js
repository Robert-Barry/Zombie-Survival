/*
screen_size.js

author: Robert Barry
date created: 9/29/2012
date changed: 10/1/2012

This first part of the script creates a simple breadcrumb 
navigation of sites.
The second part creates a background style for the navigation
to mark the page that the user is on.

*/

// Run the script after the page loads
window.onload = function () {
	// the first script creates the breadcrumb
	var bodyTag = document.getElementsByTagName("body");
	var crumb = document.createElement("p");
	var crumbLink = document.createElement("a");
	// if the id of the body tag is home
	if (bodyTag[0].id == "home") {
		// assign the id to the text node
		var crumbText = document.createTextNode(bodyTag[0].id);
	} else {
		crumbLink.href = "index.php";
		// else assign home, then the id to the text node
		var crumbText = document.createTextNode(" >	 " + bodyTag[0].id);
		crumbLink.appendChild(document.createTextNode("home"));
	}
	crumbLink.style.color = "gray";
	crumb.appendChild(crumbLink);
	crumb.appendChild(crumbText);
	document.getElementById("crumbs").appendChild(crumb);
	
	// The following script marks the navigation
	// get all of the a tags on the document
	var pageLinks = document.getElementsByTagName("a");
	// cycle through all of the tags
	for (var i = 0; i < pageLinks.length; i++) {
		// strip the end of the id from the a tas and see if 
		// they are equal to the body tag's id
		if (pageLinks[i].id.split("L")[0] == bodyTag[0].id) {
			var child = pageLinks[i].firstChild;
			child.style.backgroundColor = "#8291c4";
			child.style.border = "0px solid #8291c4";
			child.style.borderRadius = "6px";
		}
	}
}