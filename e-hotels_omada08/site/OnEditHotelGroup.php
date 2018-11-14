<?php
	require_once('connect.php');
	
	$sqled = "UPDATE hotel_group SET A_Street_HG='$_POST[StreetName]', A_Number_HG='$_POST[StreetNumber]', A_Postal_Code_HG='$_POST[PostalCode]', A_City_HG='$_POST[City]' WHERE Hotel_Group_ID = '$_POST[hgid]'";
	
	if (mysqli_query($con,$sqled)) 
		header("refresh:1; url=EditHotelGroup.php");
	else
		echo "Not Updated";
?>