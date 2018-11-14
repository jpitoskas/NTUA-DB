<?php
	require_once('connect.php');
	
	$sqldel = "DELETE FROM employee WHERE IRS_E = '$_GET[empid]'";
	$query = "DELETE FROM works WHERE IRS_E_works = '$_GET[empid]'";
	
	session_start();
	$h = $_SESSION['h'];
	
	if (mysqli_query($con,$sqldel) && mysqli_query($con,$query))
		header("refresh:0; url=DeleteEmployee.php?hotid=".$h."");
	else
		echo "Not Deleted";
?>