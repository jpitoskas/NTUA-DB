<?php
	require_once('connect.php');
	
	$sqled = "UPDATE phone_hotel SET Phone_H='$_POST[phone]' WHERE Phone_H_ID = '$_POST[phoneid]'";
	
	session_start();
	$h = $_SESSION['h'];
	
	if (mysqli_query($con,$sqled)) 
		header("refresh:0; url=DeleteContactInfoHotel.php?hotid=".$h."");
	else
		echo "Not Updated";
?>