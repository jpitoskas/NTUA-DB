<?php
	require_once('connect.php');
	
	$sqled = "UPDATE email_hotel SET Email_H='$_POST[email]' WHERE Email_H_ID = '$_POST[emailid]'";
	
	session_start();
	$h = $_SESSION['h'];
	
	if (mysqli_query($con,$sqled)) 
		header("refresh:0; url=DeleteContactInfoHotel.php?hotid=".$h."");
	else
		echo "Not Updated";
?>