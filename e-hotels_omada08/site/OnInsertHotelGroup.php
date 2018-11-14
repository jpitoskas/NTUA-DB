<?php
	require_once('connect.php');
	
	$sqlins = 	"INSERT INTO hotel_group (A_Street_HG, A_Number_HG, A_Postal_Code_HG, A_City_HG, Name_HG)
				VALUES ('$_POST[StreetName]', '$_POST[StreetNumber]', '$_POST[PostalCode]', '$_POST[City]', '$_POST[HGname]')";
	
	session_start();
	$hg = $_SESSION['hg'];
	
	if (mysqli_query($con,$sqlins)) 
		echo "Hotel Group added successfully";
	else
		echo "No Hotel Group Added";
	
	header("refresh:2; url=InsertHotelGroup.html");
?>