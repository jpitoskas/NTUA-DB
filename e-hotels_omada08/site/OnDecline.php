<?php
	require_once('connect.php');
	
	session_start();
	$irse = $_SESSION['IRS_E'];
	
	$query = "DELETE FROM reserves WHERE Room_ID_reserves = '$_POST[roomid]' AND Start_Date='$_POST[sdate]' AND Finish_Date='$_POST[fdate]'";

	if (mysqli_query($con, $query)) 
		echo "Reservation Declined. Deleting Reservation...";
	else
		echo "Reservation not Valid";
	
	header("Location: EmployeeReserves.php");
?>