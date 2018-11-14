<?php
	require_once('connect.php');
	
	session_start();
	$h = $_SESSION['h'];
	
	$sqlins = 	"INSERT INTO email_hotel (Email_H, Hotel_ID_email)
				VALUES ('$_POST[email]','$h')";

	if (mysqli_query($con,$sqlins)) 
		echo "Email Address added successfully";
	else
		echo "No Email Address Added";
	
	header("refresh:3; url=DeleteContactInfoHotel.php?hotid=".$h."");
?>