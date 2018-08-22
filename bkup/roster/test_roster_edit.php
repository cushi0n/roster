<?php 
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
<div id="table1">
	
			<h2>Edit Shift Times</h2>
			<?php
	//test if device selection has been made from drop down list.
	//if so, show FORM with device details loaded and ready to be edited.
	//if not redisplay drop down list to allow selection of item.
				if(!isset($_POST[staff_id])){
				
				?><!--php closed, so drop down list form can be coded in HTML -->


			<form action="test_roster_edit.php" method="post">
			<p>Please select the product you wish to update from the list below.</p>
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
			<input class="select-btn" type="submit" value="Select Product"/>
			<input class="select-btn" type="reset" value="Reset Form"/>
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
			<p>Please complete the form and submit when finished.</p>
			<p>Fields marked with an * are required values.</p>
			<p>
				<label>
					<input name="staff_id" type="text" id="prod_id" size="40" value="<?php echo $field['0'];?>" readonly="readonly" />
				</label>
			</p>
			<p>* Employee Name:
			<input type="text" name="staff_name" maxlength="12" size="20" value="<?php echo $field['1'];?>" readonly="readonly" />
			</p>
			
			MONDAY
			<div class="roster_select">
				<select name="mon_start" size="1">
				    
					<option value="05:00" <?php if($fields['2'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($fields['2'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($fields['2'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($fields['2'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($fields['2'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($fields['2'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($fields['2'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($fields['2'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($fields['2'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($fields['2'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($fields['2'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($fields['2'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($fields['2'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($fields['2'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($fields['2'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($fields['2'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($fields['2'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($fields['2'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($fields['2'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($fields['2'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($fields['2'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($fields['2'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($fields['2'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($fields['2'] == '04:30') echo "selected='selected'";?>>04:30</option>
			</select>
			</div>
			<div class="roster_select">
				<select name="mon_fin">
				    
					<option value="05:00" <?php if($fields['3'] == '05:00') echo "selected='selected'";?>>05:00</option>
					<option value="05:30" <?php if($fields['3'] == '05:30') echo "selected='selected'";?>>05:30</option>
					<option value="06:00" <?php if($fields['3'] == '06:00') echo "selected='selected'";?>>06:00</option>
					<option value="06:30" <?php if($fields['3'] == '06:30') echo "selected='selected'";?>>06:30</option>
					<option value="07:00" <?php if($fields['3'] == '07:00') echo "selected='selected'";?>>07:00</option>
					<option value="07:30" <?php if($fields['3'] == '07:30') echo "selected='selected'";?>>07:30</option>
					<option value="08:00" <?php if($fields['3'] == '08:00') echo "selected='selected'";?>>08:00</option>
					<option value="08:30" <?php if($fields['3'] == '08:30') echo "selected='selected'";?>>08:30</option>
					<option value="09:00" <?php if($fields['3'] == '09:00') echo "selected='selected'";?>>09:00</option>
					<option value="09:30" <?php if($fields['3'] == '09:30') echo "selected='selected'";?>>09:30</option>
					<option value="10:00" <?php if($fields['3'] == '10:00') echo "selected='selected'";?>>10:00</option>
					<option value="10:30" <?php if($fields['3'] == '10:30') echo "selected='selected'";?>>10:30</option>
					<option value="11:00" <?php if($fields['3'] == '11:00') echo "selected='selected'";?>>11:00</option>
					<option value="11:30" <?php if($fields['3'] == '11:30') echo "selected='selected'";?>>11:30</option>
					<option value="12:00" <?php if($fields['3'] == '12:00') echo "selected='selected'";?>>12:00</option>
					<option value="12:30" <?php if($fields['3'] == '12:30') echo "selected='selected'";?>>12:30</option>
					<option value="01:00" <?php if($fields['3'] == '01:00') echo "selected='selected'";?>>01:00</option>
					<option value="01:30" <?php if($fields['3'] == '01:30') echo "selected='selected'";?>>01:30</option>
					<option value="02:00" <?php if($fields['3'] == '02:00') echo "selected='selected'";?>>02:00</option>
					<option value="02:30" <?php if($fields['3'] == '02:30') echo "selected='selected'";?>>02:30</option>
					<option value="03:00" <?php if($fields['3'] == '03:00') echo "selected='selected'";?>>03:00</option>
					<option value="03:30" <?php if($fields['3'] == '03:30') echo "selected='selected'";?>>03:30</option>
					<option value="04:00" <?php if($fields['3'] == '04:00') echo "selected='selected'";?>>04:00</option>
					<option value="04:30" <?php if($fields['3'] == '04:30') echo "selected='selected'";?>>04:30</option>
				</select>
				</div>
			TUESDAY<div class="roster_select">
			
				<select name="tues_start" size="1">
					 <option value="<?php echo $field['4'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
		</div>
			<div class="roster_select">
				<select name="tues_fin" size="1">
					 <option value="<?php echo $field['5'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
				</div>
		WEDNESDAY	<div class="roster_select">
		
				<select name="wed_start" size="1">
					 <option value="<?php echo $field['6'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
	</div>
			<div class="roster_select">
				<select name="wed_fin" size="1">
					 <option value="<?php echo $field['7'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
				</div>
	THURSDAY		<div class="roster_select">
	
				<select name="thur_start" size="1">
					 <option value="<?php echo $field['8'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
</div>
			<div class="roster_select">
				<select name="thur_fin" size="1">
					<option value="<?php echo $field['9'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
				</div>
FRIDAY			<div class="roster_select">

				<select name="fri_start" size="1">
					<option value="<?php echo $field['10'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
		</div>
			<div class="roster_select">
				<select name="fri_fin" size="1">
					<option value="<?php echo $field['11'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
				</div>
			SATURDAY<div class="roster_select">
			
				<select name="sat_start" size="1">
					<option value="<?php echo $field['12'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
		</div>
			<div class="roster_select">
				<select name="sat_fin" size="1">
					<option value="<?php echo $field['13'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
				</div>
		SUNDAY	<div class="roster_select">
		
				<select name="sun_start" size="1">
					<option value="<?php echo $field['14'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
		</div>
			<div class="roster_select">
				<select name="sun_fin" size="1">
					<option value="<?php echo $field['15'];?>">--:--</option>
					<option value="05:00">05:00</option>
					<option value="05:30">05:30</option>
					<option value="06:00">06:00</option>
					<option value="06:30">06:30</option>
					<option value="07:00">07:00</option>
					<option value="07:30">07:30</option>
					<option value="08:00">08:00</option>
					<option value="08:30">08:30</option>
					<option value="09:00">09:00</option>
					<option value="09:30">09:30</option>
					<option value="10:00">10:00</option>
					<option value="10:30">10:30</option>
					<option value="11:00">11:00</option>
					<option value="11:30">11:30</option>
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="01:00">01:00</option>
					<option value="01:30">01:30</option>
					<option value="02:00">02:00</option>
					<option value="02:30">02:30</option>
					<option value="03:00">03:00</option>
					<option value="03:30">03:30</option>
					<option value="04:00">04:00</option>
					<option value="04:30">04:30</option>
				</select>
				</div>
			
			</p>
			

	


<table class="roster" cellspacing="10">
<tr class="roster"><th>
</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></tr>
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr><td>Name</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
</table>
			<p>
			<input type="submit" value="Submit"/>
			</p>
			</form>
<?php
}
?>
	<div id="admin">
		
		<a href="#"><img src="images/admin-on.png" onmouseover="this.src='images/admin-off.png'" onmouseout="this.src='images/admin-on.png'" /></a>
		<a href="#"><img src="images/back.png" onmouseover="this.src='images/back-on.png'" onmouseout="this.src='images/back.png'" /></a>
		<a href="#"><img src="images/forward.png" onmouseover="this.src='images/forward-on.png'" onmouseout="this.src='images/forward.png'" /></a>
	</div>
</div>
</body>
</html>