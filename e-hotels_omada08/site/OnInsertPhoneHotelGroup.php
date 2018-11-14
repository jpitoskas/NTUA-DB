<?php
	require_once('connect.php');
	
	session_start();
	$hg = $_SESSION['hg'];
	
	$sqlins = 	"INSERT INTO phone_hotel_group (Phone_HG, Hotel_Group_ID_phone)
				VALUES ('$_POST[phone]','$hg')";

	if (mysqli_query($con,$sqlins)) 
		echo "Phone Number added successfully";
	else
		echo "No Phone Number Added";
	
	header("refresh:3; url=DeleteContactInfoHotelGroup.php?hgid=".$hg."");
?>