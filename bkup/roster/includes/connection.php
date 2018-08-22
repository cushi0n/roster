<?php
	
	
	// open database connection (domain, username, mySQL database password)
	$dbConnect = mysqli_connect('localhost', 'babyblac_admin', 'coffee3');
	
	// test if connection was successful
	if(!$dbConnect){
		die('<p>Computer says no! </br>The localhost server is not available</p>');
	}
	
	//remove following line from live system
	//echo '<p>Successfully connected to the localhost server</p>';
	
	// select the required database
	$dbSelect = mysqli_select_db ($dbConnect, 'babyblac_roster');
	
	// test if database was selected successfully
	if(!$dbSelect){
		die('<p>BABY BLACK! </br>STAFF roster is not available! Sorry.</p>');
	}
	
	//remove following line from live system
	//echo '<p>Successfully selected the awesome database</p>';
?>s