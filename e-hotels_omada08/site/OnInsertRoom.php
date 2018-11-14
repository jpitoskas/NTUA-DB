<?php
	require_once('connect.php');
	
	session_start();
	$h = $_SESSION['h'];
	
	$sqlins = 	"INSERT INTO hotel_room (Price, Capacity, Expandable, Balcony, Smoking, Parking, Wifi, TV, Refridgerator, Air_Conditioning, Repairs_Needed, Hotel_ID_R)
				VALUES ('$_POST[Price]', '$_POST[Capacity]', '$_POST[Expandable]', '$_POST[Balcony]', '$_POST[Smoking]','$_POST[Parking]','$_POST[Wifi]','$_POST[TV]','$_POST[Refridgerator]','$_POST[AirConditioning]','$_POST[RepairsNeeded]','$h')";

	if (mysqli_query($con,$sqlins)) 
		echo "Hotel added successfully";
	else
		echo "No Hotel Added";
	
	header("refresh:3; url=DeleteRoom.php?hotid=".$h."");
?>