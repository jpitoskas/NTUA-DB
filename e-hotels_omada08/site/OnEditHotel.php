<?php
	require_once('connect.php');
	
	$sqled = "UPDATE hotel SET A_Street_H='$_POST[StreetName]', A_Number_H='$_POST[StreetNumber]', A_Postal_Code_H='$_POST[PostalCode]', A_City_H='$_POST[City]', Stars='$_POST[Stars]', Name_H='$_POST[Hname]' WHERE Hotel_ID = '$_POST[hotid]'";
	
	session_start();
	$hg = $_SESSION['hg'];
	
	if (mysqli_query($con,$sqled)) 
		header("refresh:0; url=DeleteHotel.php?hgid=".$hg."");
	else
		echo "Not Updated";
?>