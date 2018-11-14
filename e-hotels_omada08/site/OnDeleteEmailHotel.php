<?php
	require_once('connect.php');
	
	$sqldel = "DELETE FROM email_hotel WHERE Email_H_ID = '$_GET[emailid]'";
	
	session_start();
	$h = $_SESSION['h'];
	
	if (mysqli_query($con,$sqldel))
		header("refresh:0; url=DeleteContactInfoHotel.php?hotid=".$h."");
	else
		echo "Not Deleted";
?>