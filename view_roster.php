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
			
						<div id="table1">
						<table class="roster" cellspacing="10">
						<tr class="roster">
						<th></th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th>Saturday</th>
						<th>Sunday</th>
						</tr>
				
<?php
				//open the database connection
				require('includes/connection.php');
				
				//create my sql query
				$sqlQuery = "SELECT * FROM lachlan;";
				
				//run query and capture result set
				$resultSet = mysqli_query($dbConnect, $sqlQuery);
				
				//get 1st record from result set
				$row = mysqli_fetch_assoc($resultSet);
				
				//run LOOP to display each row in the result set
				do{
				
					//extract record fields from row
					$staff_name = $row['staff_name'];
					$mon_start = $row['mon_start'];
					$mon_fin = $row['mon_fin'];
					$tues_start = $row['tues_start'];
					$tues_fin = $row['tues_fin'];
					$wed_fin = $row['wed_fin'];
					$wed_start = $row['wed_start'];
					$thur_fin = $row['thur_fin'];
					$thur_start = $row['thur_start'];
					$fri_fin = $row['fri_fin'];
					$fri_start = $row['fri_start'];
					$sat_fin = $row['sat_fin'];
					$sat_start = $row['sat_start'];
					$sun_fin = $row['sun_fin'];
					$sun_start = $row['sun_start'];

					//display the record in a div
					echo "<tr>
				<td>$staff_name</td>
				<td><p>$mon_start</p><p>$mon_fin</p></td>
				<td><p>$tues_start</p><p>$tues_fin</p></td>
				<td><p>$wed_start</p><p>$wed_fin</p></td>
				<td><p>$thur_start</p><p>$thur_fin</p></td>
				<td><p>$fri_start</p><p>$fri_fin</p></td>
				<td><p>$sat_start</p><p>$sat_fin</p></td>
				<td><p>$sun_start</p><p>$sun_fin</p></td>";
					
					//get NEXT record from result set
					$row = mysqli_fetch_assoc($resultSet);
				} while ($row);
				?>
					</table>
				
<div id="admin">
		<a <?php if(!isset($_SESSION['userName'])){ ?> href="login_form.php"<?php } else { ?> href="manage.php" <?php } ?>><img src="images/admin-on.png" onmouseover="this.src='images/admin-off.png'" onmouseout="this.src='images/admin-on.png'" /></a>
	</div>
				
				

				
</body>
				
				
				
			
