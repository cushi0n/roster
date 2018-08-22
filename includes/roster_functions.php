<?php
function getStaffList() //this is a function I wrote, created and defined.
	{
	//open the database connection
	require('includes/connection.php');

	//create my sql query
	$sqlQuery = "SELECT staff_id, staff_name FROM lachlan;";
	
	//run the query and get the results set
	$resultSet = mysqli_query($dbConnect, $sqlQuery);
	
	//get 1st record from result set
	$row = mysqli_fetch_assoc($resultSet);
	
	//run LOOP to output each row in the result set as an option tag
	do{
		//extract record fields from row
		$staff_id = $row['staff_id'];
		$staff_name = $row['staff_name'];
		//display the record in an option tag
		echo "<option value='$staff_id'>$staff_name</option>";
		
		//get next record from result set
		$row = mysqli_fetch_assoc($resultSet);
	} while ($row);
	
	//free the result set
	mysqli_free_result($resultSet);
	
	//close the database connection
	require('includes/disconnect.php');

}
//------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------------
//UPDATE PRODUCT DETAILS


function getStaffDetailsToUpdate($staff_id) //this is a function I wrote, created and defined.
	{
	//open the database connection
	require('includes/connection.php');

	//create my sql query
	$sqlQuery = "SELECT * FROM lachlan WHERE staff_id  = $staff_id;";

	//run the query and get the results set
	$resultSet = mysqli_query($dbConnect, $sqlQuery);
	
	//get THE record from result set
	$row = mysqli_fetch_assoc($resultSet);
	
//no need for a loop, as we are just pullling the one result

		//declare array to store product deatils 
		$staffArray = array();
		
		$staffArray[0] = $row[staff_id];
		$staffArray[1] = $row[staff_name];
		$staffArray[2] = $row[mon_start];
		$staffArray[3] = $row[mon_fin];
		$staffArray[4] = $row[tues_start];
		$staffArray[5] = $row[tues_fin];
		$staffArray[6] = $row[wed_start];
		$staffArray[7] = $row[wed_fin];
		$staffArray[8] = $row[thur_start];
		$staffArray[9] = $row[thur_fin];
		$staffArray[10] = $row[fri_start];
		$staffArray[11] = $row[fri_fin];
		$staffArray[12] = $row[sat_start];
		$staffArray[13] = $row[sat_fin];
		$staffArray[14] = $row[sun_start];
		$staffArray[15] = $row[sun_fin];
		
	//close the database connection
	require('includes/disconnect.php');

	//return product record array to form
	return $staffArray;	

}//end function
//------------------------------------------------------------------------------------------------
//----------------------------------------Roster Login Functions----------------------------------

function checkAdminDetails($userName, $password) {
	
	//open the database connection
	require('includes/connection.php');

	//create my sql query
	$sqlQuery = "SELECT * FROM admin WHERE userName = '$userName' AND password = '$password';
	";

	//run the query and get the results set
	$resultSet = mysqli_query($dbConnect, $sqlQuery);
	
	//get THE record from result set
	$rowCount = mysqli_affected_rows($dbConnect);
	
	//test
	if ($rowCount == 0){
		
		return false;
		
		} else {
		
		return true;
		
		}
		
	//close result set\
	mysqli_free_result($resultSet);
	require('includes/disconnect.php');
	}
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------

function login($userName, $password) {	
	
	//open the database connection
	require('includes/connection.php');

	//create my sql query
	$sqlQuery = "SELECT * FROM admin WHERE userName = '$userName' AND password = '$password';
	";

	//run the query and get the results set
	$resultSet = mysqli_query($dbConnect, $sqlQuery);
	
	if(!$resultSet){
		die(mysqli_error($dbConnect));
		}
	
	//get THE record from result set
	$row = mysqli_fetch_assoc($resultSet);
	
	$_SESSION['userName'] = $userName;
	$_SESSION['password'] = $password;
	$_SESSION['firstName'] = $row['firstName'];
	$_SESSION['lastName'] = $row['lastName'];
	
	//disconnect
	mysqli_free_result($resultSet);
	require('includes/disconnect.php');
	}
	
//-------------------------------------------------------------------------
//-------------------------------------------------------------------------

function logout(){
		session_unset();
		session_destroy();
		}
		
?>