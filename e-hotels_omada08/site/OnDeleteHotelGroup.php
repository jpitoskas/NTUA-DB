<?php
	require_once('connect.php');
	
	$sqldel = "DELETE FROM hotel_group WHERE Hotel_Group_ID = '$_GET[hgid]'";
	
	if (mysqli_query($con,$sqldel))
		header("refresh:1; url=DeleteHotelGroup.php");
	else
		echo "Not Deleted";
?>