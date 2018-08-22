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
<img src="images/roster_select1.png">
</div>
<?php 
	if(isset($_SESSION['userName'])){
?>
<div id="table1">
	
			<h2>Edit Shift Times</h2>
			<?php
	//test if device selection has been made from drop down list.
	//if so, show FORM with device details loaded and ready to be edited.
	//if not redisplay drop down list to allow selection of item.
				if(!isset($_POST[staff_id])){
				
				?><!--php closed, so drop down list form can be coded in HTML -->


			<form action="test_roster_edit.php" method="post">
			<p>Please select the staff member that you wish to update from the list below:</p>
			<p>
				<div class="edit-cont">
					<select name="staff_id" size="">
						<?php
						//call function to populate the product list
						getStaffList();
						?>
					</select>
				</div>
			</p>
			<p>
			<input class="select-btn" type="submit" value="Select Staff"/>

			</p>
			</form>
			<?php
		}
		else{
			//capture data from select product form
			$staff_id = $_POST['staff_id'];
			//call function to get selected selected products detail from product table in the database. 
			//Then display them in the form below ready to be edited/updated
			$field = getStaffDetailsToUpdate($staff_id);
			
		?><!--php closed, so update form can be coded in HTML -->
			
			

			
			<form action ="update_roster.php" method="post"> <!--onsubmit="return checkAddFruit(this)--> 
		
			<input type="hidden" name="staff_id" maxlength="12" value="<?php echo $field['0']; ?>" />
			<input type="text" name="staff_name" maxlength="12" size="20" value="<?php echo $field['1'];?>" readonly="readonly" />
			
			
			MONDAY
			<div class="roster_select">
				<select name="mon_start" size="1">
				    <option value="--:--" <?php if($field['2'] == '');?>>--:--</option>
					<option value="05:00" <?php if($field['2'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['2'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['2'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['2'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['2'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['2'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['2'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['2'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['2'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['2'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['2'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['2'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['2'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['2'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['2'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['2'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['2'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['2'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['2'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['2'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['2'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['2'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['2'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['2'] == '04:30') echo "selected='selected'";?>>04:30</option>
			</select>
			</div>
			<div class="roster_select">
				<select name="mon_fin">
				    
					<option value="--:--" <?php if($field['3'] == '');?>>--:--</option>
					<option value="05:00" <?php if($field['3'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['3'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['3'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['3'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['3'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['3'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['3'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['3'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['3'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['3'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['3'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['3'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['3'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['3'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['3'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['3'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['3'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['3'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['3'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['3'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['3'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['3'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['3'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['3'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
				</div>
			TUESDAY<div class="roster_select">
			
				<select name="tues_start" size="1">
					<option value=" <?php if($field['4'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['4'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['4'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['4'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['4'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['4'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['4'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['4'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['4'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['4'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['4'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['4'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['4'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['4'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['4'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['4'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['4'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['4'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['4'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['4'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['4'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['4'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['4'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['4'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['4'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
		</div>
			<div class="roster_select">
				<select name="tues_fin" size="1">
					<option value=" <?php if($field['5'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['5'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['5'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['5'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['5'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['5'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['5'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['5'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['5'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['5'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['5'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['5'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['5'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['5'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['5'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['5'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['5'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['5'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['5'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['5'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['5'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['5'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['5'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['5'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['5'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
				</div>
		WEDNESDAY	<div class="roster_select">
		
				<select name="wed_start" size="1">
					 <option value=" <?php if($field['6'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['6'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['6'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['6'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['6'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['6'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['6'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['6'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['6'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['6'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['6'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['6'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['6'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['6'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['6'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['6'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['6'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['6'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['6'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['6'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['6'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['6'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['6'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['6'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['6'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
	</div>
			<div class="roster_select">
				<select name="wed_fin" size="1">
					 <option value=" <?php if($field['7'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['7'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['7'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['7'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['7'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['7'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['7'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['7'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['7'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['7'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['7'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['7'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['7'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['7'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['7'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['7'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['7'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['7'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['7'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['7'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['7'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['7'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['7'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['7'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['7'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
				</div>
	THURSDAY		<div class="roster_select">
	
				<select name="thur_start" size="1">
					 <option value=" <?php if($field['8'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['8'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['8'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['8'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['8'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['8'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['8'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['8'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['8'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['8'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['8'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['8'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['8'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['8'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['8'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['8'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['8'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['8'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['8'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['8'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['8'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['8'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['8'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['8'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['8'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
</div>
			<div class="roster_select">
				<select name="thur_fin" size="1">
					<option value=" <?php if($field['9'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['9'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['9'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['9'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['9'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['9'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['9'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['9'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['9'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['9'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['9'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['9'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['9'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['9'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['9'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['9'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['9'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['9'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['9'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['9'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['9'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['9'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['9'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['9'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['9'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
				</div>
FRIDAY			<div class="roster_select">

				<select name="fri_start" size="1">
					<option value=" <?php if($field['10'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['10'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['10'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['10'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['10'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['10'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['10'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['10'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['10'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['10'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['10'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['10'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['10'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['10'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['10'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['10'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['10'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['10'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['10'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['10'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['10'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['10'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['10'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['10'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['10'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
		</div>
			<div class="roster_select">
				<select name="fri_fin" size="1">
					<option value=" <?php if($field['11'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['11'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['11'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['11'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['11'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['11'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['11'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['11'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['11'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['11'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['11'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['11'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['11'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['11'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['11'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['11'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['11'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['11'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['11'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['11'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['11'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['11'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['11'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['11'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['11'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
				</div>
			SATURDAY<div class="roster_select">
			
				<select name="sat_start" size="1">
					<option value=" <?php if($field['12'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['12'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['12'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['12'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['12'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['12'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['12'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['12'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['12'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['12'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['12'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['12'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['12'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['12'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['12'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['12'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['12'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['12'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['12'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['12'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['12'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['12'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['12'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['12'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['12'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
		</div>
			<div class="roster_select">
				<select name="sat_fin" size="1">
					<option value=" <?php if($field['13'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['13'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['13'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['13'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['13'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['13'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['13'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['13'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['13'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['13'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['13'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['13'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['13'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['13'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['13'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['13'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['13'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['13'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['13'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['13'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['13'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['13'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['13'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['13'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['13'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
				</div>
		SUNDAY	<div class="roster_select">
		
				<select name="sun_start" size="1">
					<option value=" <?php if($field['14'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['14'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['14'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['14'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['14'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['14'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['14'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['14'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['14'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['14'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['14'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['14'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['14'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['14'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['14'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['14'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['14'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['14'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['14'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['14'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['14'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['14'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['14'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['14'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['14'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
		</div>
			<div class="roster_select">
				<select name="sun_fin" size="1">
					<option value=" <?php if($field['10'] == '');?>">--:--</option>
					<option value="05:00" <?php if($field['15'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($field['15'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($field['15'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($field['15'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($field['15'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($field['15'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($field['15'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($field['15'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($field['15'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($field['15'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($field['15'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($field['15'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($field['15'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($field['15'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($field['15'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($field['15'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($field['15'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($field['15'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($field['15'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($field['15'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($field['15'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($field['15'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($field['15'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($field['15'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
				</div>
			
			</p>
			
			<p>
			<input type="submit" value="Submit"/>
			</p>
			</form>
<?php
	}
} else {
?>

You are not logged in.

<?php } ?>

</div>
</body>
</html>