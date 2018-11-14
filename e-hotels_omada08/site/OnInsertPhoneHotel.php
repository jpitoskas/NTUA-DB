<?php
	require_once('connect.php');
	
	session_start();
	$h = $_SESSION['h'];
	
	$sqlins = 	"INSERT INTO phone_hotel (Phone_H, Hotel_ID_phone)
				VALUES ('$_POST[phone]','$h')";

	if (mysqli_query($con,$sqlins)) 
		echo "Phone Number added successfully";
	else
		echo "No Phone Number Added";
	
	header("refresh:3; url=DeleteContactInfoHotel.php?hotid=".$h."");
?>