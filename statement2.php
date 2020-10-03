<?php
	#date_default_timezone_set("Asia/kolkata");
	#date_default_timezone_set("");
	if(isset($_GET['submit']))
	{
	$timezone=$_GET['timezone'];
	#date_default_timezone_get("Asia/kolkata");
	echo $timezone."<br>";
	if($timezone=="india")
	{
		date_default_timezone_set("Asia/kolkata");
		echo "Indian time is".date("d/m/y H:i:sa");
	}
	else if($timezone=="africa")
	{
		date_default_timezone_set("Africa/Accra");
		echo "African time is".date("d/m/y H:i:sa");
	}
	else if($timezone=="UK")
	{
		date_default_timezone_set("Europe/London");
		echo "London time is".date("d/m/y H:i:sa");
	}
	else if($timezone=="USA")
	{
		date_default_timezone_set("America/New_York");
		echo "American time is".date("d/m/y H:i:sa");
	}
	else if($timezone=="australia")
	{
		date_default_timezone_set("Australia/Melbourne");
		echo "australian time is".date("d/m/y H:i:sa");
	}
	}
?>	

<!DOCTYPE html>
<html>
<head>
	<title>TIMEZONES</title>
</head>
<body>
	<form>
		<select name="timezone">
			<option>SELECT a timezone</option>
			<option <?php if(isset($_GET['timezone'])  &&  $_GET['timezone']=="india" ){echo "selected" ;} ?>>india</option>
			<option   <?php if(isset($_GET['timezone'])  &&  $_GET['timezone']=="UK" ){echo "selected" ;} ?>>UK</option>
			<option>USA</option>
			<option>africa</option>
			<option>australia</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>