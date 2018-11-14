<?php
	require_once('connect.php');
	
	$sqled = "UPDATE email_hotel_group SET Email_HG='$_POST[email]' WHERE Email_HG_ID = '$_POST[emailid]'";
	
	session_start();
	$hg = $_SESSION['hg'];
	
	if (mysqli_query($con,$sqled)) 
		header("refresh:0; url=DeleteContactInfoHotelGroup.php?hgid=".$hg."");
	else
		echo "Not Updated";
?>