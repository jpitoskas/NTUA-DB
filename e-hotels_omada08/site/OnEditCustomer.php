<?php
	require_once('connect.php');
	
	$sqled = "UPDATE customer SET A_Street_C='$_POST[StreetName]', A_Number_C='$_POST[StreetNumber]', A_Postal_Code_C='$_POST[PostalCode]',
	A_City_C='$_POST[City]', First_Name_C='$_POST[Fname]', Last_Name_C='$_POST[StreetNumber]', IRS_C='$_POST[IRS]',
	SSN_C='$_POST[SSN]' WHERE IRS_C = '$_POST[irscid]'";
	
	if (mysqli_query($con,$sqled)) 
		header("refresh:1; url=DeleteCustomer.php");
	else
		echo "Not Updated";
?>