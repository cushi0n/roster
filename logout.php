<?php
session_start();
	include('includes/roster_functions.php');
?>
<head>
<link rel=Stylesheet type="text/css" href="style.css" >
<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="images/favicon.png">
<title>Roster</title>
</head>

<body>
<div id="rosterheading">
<img src="images/roster1.png">
</div>
<?php 
	if(isset($_SESSION['userName'])){
		logout();
?>
		<p>You've logged out!</p>
		<a href="view_roster.php"><< Return to roster.</a>

<?php 
} else {
?>

		<p>You have already logged out :(</p>
		<a href="view_roster.php"><< Return to roster.</a>
<?php } ?>

</body>