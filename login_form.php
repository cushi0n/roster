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
	if(!isset($_SESSION['userName'])){
?>

<form action="login.php" method="post">
	<label for="userName">Username:</label>
	<input type="text" name="userName" size="20" />
	
	<label for="password">Password:</label>
	<input type="password" name="password" size="20" />
	
	<input type="submit" value="Submit">

</form>
<?php 

} else {
?>	
<h1>You are already logged in. <a href="manage.html"><< Management</a></h1>
<?php 
}
?>

</body>