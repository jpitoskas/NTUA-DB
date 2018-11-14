<?php
	require_once('connect.php');
	
	$sqled = "UPDATE hotel_room 
	SET Price='$_POST[Price]', Capacity='$_POST[Capacity]', 
	Expandable='$_POST[Expandable]', Sea_View='$_POST[SeaView]', 
	Balcony='$_POST[Balcony]', Smoking='$_POST[Smoking]',
	Parking='$_POST[Parking]', Wifi='$_POST[Wifi]',
	TV='$_POST[TV]', Refridgerator='$_POST[Refridgerator]',
	Air_Conditioning='$_POST[AirConditioning]', Repairs_Needed='$_POST[RepairsNeeded]'
	WHERE Room_ID = '$_POST[roomid]'";
	
	session_start();
	$h = $_SESSION['h'];
	
	if (mysqli_query($con,$sqled)) 
		header("refresh:0; url=DeleteRoom.php?hotid=".$h."");
	else
		echo "Not Updated";
?>