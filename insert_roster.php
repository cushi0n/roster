<?php 
session_start();
include('includes/roster_functions.php');
?>
<head>
<link rel=Stylesheet type="text/css" href="style.css" >
<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="images/favicon.png">
<title>roster</title>
</head>
<body>
<div id="rosterheading">
<img src="images/roster1.png">
</div>
<?php 
	if(isset($_SESSION['userName'])){
?>
<div id="table1">
<?php
	//capture data from form and store variables
	$staff_id = $_POST['staff_id'];
	$staff_name = $_POST['staff_name'];
	$mon_start = $_POST['mon_start'];
	$mon_fin = $_POST['mon_fin'];
	$tues_start = $_POST['tues_start'];
	$tues_fin = $_POST['tues_fin'];
	$wed_fin = $_POST['wed_fin'];
	$wed_start = $_POST['wed_start'];
	$thur_fin = $_POST['thur_fin'];
	$thur_start = $_POST['thur_start'];
	$fri_fin = $_POST['fri_fin'];
	$fri_start = $_POST['fri_start'];
	$sat_fin = $_POST['sat_fin'];
	$sat_start = $_POST['sat_start'];
	$sun_fin = $_POST['sun_fin'];
	$sun_start = $_POST['sun_start'];
	




	
	//open the database connection
	require('includes/connection.php');

	// Add this product into the database now
	$sqlInsert ="INSERT INTO lachlan VALUES('', '$staff_name','$mon_start','$mon_fin','$tues_start','$tues_fin','$wed_start','$wed_fin','$thur_start','$thur_fin','$fri_start','$fri_fin','$sat_start','$sat_fin','$sun_start','$sun_fin');";

		//run the sql insert statement
		$insertResult = mysqli_query($dbConnect, $sqlInsert);
				
		//test if insert was successfully done
		if($insertResult) {
			echo "<p>Successfully added 1 new roster entry.</p><br /><a href='test_roster.php'><< Return to roster entry.</a> or <a href='manage.php'><< Return to Home</a>";
		}
		else{
			echo"<p>Unable to execute, please <a href='test_roster.php'>try again</a> or contact Lach.</p>";
		}
				
		//close the database connection
		require('includes/disconnect.php');
		
} else {
?>

You are not logged in.

<?php } ?>
</body>
	