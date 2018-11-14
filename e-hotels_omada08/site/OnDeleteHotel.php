<?php
	require_once('connect.php');
	
	$sqldel = "DELETE FROM hotel WHERE Hotel_ID = '$_GET[hotid]'";
	
	session_start();
	$hg = $_SESSION['hg'];
	
	if (mysqli_query($con,$sqldel))
		header("refresh:0; url=DeleteHotel.php?hgid=".$hg."");
	else
		echo "Not Deleted";
?>