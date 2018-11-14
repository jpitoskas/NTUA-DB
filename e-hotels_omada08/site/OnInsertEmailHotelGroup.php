<?php
	require_once('connect.php');
	
	session_start();
	$hg = $_SESSION['hg'];
	
	$sqlins = 	"INSERT INTO email_hotel_group (Email_HG, Hotel_Group_ID_email)
				VALUES ('$_POST[email]','$hg')";

	if (mysqli_query($con,$sqlins)) 
		echo "Email Address added successfully";
	else
		echo "No Email Address Added";
	
	header("refresh:3; url=DeleteContactInfoHotelGroup.php?hgid=".$hg."");
?>