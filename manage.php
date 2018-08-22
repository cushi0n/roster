<?php
session_start();
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
?>
	<div id="home-text">
		Welcome, <?php echo $_SESSION['firstName']; ?>. <br />
		<a href="test_roster.php">Add New Shift</a>  -  
		<a href="view_roster.php">View Roster</a>  -  
		<a href="test_roster_edit.php">Update Roster</a>  -  
		<a href="delete_roster.php">Delete Roster</a>  -  
		<a href="logout.php">Logout</a>
	</div>
<?php 
} else {
?>

You are not logged in.

<?php } ?>

</body>