<?php
	//capture data from form and store variables
	$staff_name = $_POST['staff_name'];
	$mon_start = $_POST['mon_start'];
	$mon_fin = $_POST['mon_fin'];
	$tues_start = $_POST['mon_start'];
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
	echo $sqlInsert = "INSERT INTO lachlan VALUES('', '$staff_name','$mon_start','$mon_fin','$tues_start','$tues_fin','$wed_start','$wed_fin','$thur_start','$thur_fin','$fri_start','$fri_fin','$sat_start','$sat_fin','$sun_start','$sun_fin')";

		//run the sql insert statement
		$insertResult = mysqli_query($dbConnect, $sqlInsert);
				
		//test if insert was successfully done
		if($insertResult) {
			echo"<p>Successfully added 1 new staff member.</p>";
		}
		else{
			echo"<p>Unable to execute the insert.</p>";
		}
				
		//close the database connection
		require('includes/disconnect.php');
?>

	