<?php
	require_once('connect.php');
	
	$sqled = "UPDATE phone_hotel_group SET Phone_HG='$_POST[phone]' WHERE Phone_HG_ID = '$_POST[phoneid]'";
	
	session_start();
	$hg = $_SESSION['hg'];
	
	if (mysqli_query($con,$sqled)) 
		header("refresh:0; url=DeleteContactInfoHotelGroup.php?hgid=".$hg."");
	else
		echo "Not Updated";
?>