<?php
	require_once('connect.php');
	
	$sqldel = "DELETE FROM customer WHERE IRS_C = '$_GET[irscid]'";
	
	if (mysqli_query($con,$sqldel))
		header("refresh:1; url=DeleteCustomer.php");
	else
		echo "Not Deleted";
?>