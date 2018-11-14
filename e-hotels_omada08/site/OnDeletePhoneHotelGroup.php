<?php
	require_once('connect.php');
	
	$sqldel = "DELETE FROM phone_hotel_group WHERE Phone_HG_ID = '$_GET[phoneid]'";
	
	session_start();
	$hg = $_SESSION['hg'];
	
	if (mysqli_query($con,$sqldel))
		header("refresh:0; url=DeleteContactInfoHotelGroup.php?hgid=".$hg."");
	else
		echo "Not Deleted";
?>