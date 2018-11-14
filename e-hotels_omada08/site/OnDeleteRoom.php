<?php
	require_once('connect.php');
	
	$sqldel = "DELETE FROM hotel_room WHERE Room_ID = '$_GET[roomid]'";
	
	session_start();
	$h = $_SESSION['h'];
	
	if (mysqli_query($con,$sqldel))
		header("refresh:0; url=DeleteRoom.php?hotid=".$h."");
	else
		echo "Not Deleted";
?>