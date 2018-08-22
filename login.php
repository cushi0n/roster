<?php 
session_start();
include('includes/roster_functions.php');
?>
<head>
<link rel=Stylesheet type="text/css" href="style.css" >
<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="images/favicon.png">
<title></title>
</head>

<body>
<div id="rosterheading">
<img src="images/roster1.png">
</div>


<?php 
	if(isset($_POST['userName'])){
		$userName = $_POST['userName'];
		$password = $_POST['password'];
		
		if(checkAdminDetails($userName, $password)){
		
			login($userName, $password);
		?> 
			<p>Thankyou for logging in, <?php echo $_SESSION['firstName']; ?>. <a href="manage.php">Continue to management..</a></p>
		
		<?php
			} else {
		?>
			<p>The username and password you provided don't match.</p>
		<?php
					}
	} else { ?> <p>You cannot access this page without logging in.</p>
	
		<?php
			}
		?>		
		




</body>