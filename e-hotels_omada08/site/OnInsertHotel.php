<?php
	require_once('connect.php');
	
	session_start();
	$hg = $_SESSION['hg'];
	
	$sqlins = 	"INSERT INTO hotel (A_Street_H, A_Number_H, A_Postal_Code_H, A_City_H, Stars, Hotel_Group_ID_H, Name_H)
				VALUES ('$_POST[StreetName]', '$_POST[StreetNumber]', '$_POST[PostalCode]', '$_POST[City]','$_POST[Stars]','$hg',  '$_POST[Hname]')";

	if (mysqli_query($con,$sqlins)) 
		echo "Hotel added successfully";
	else
		echo "No Hotel Added";
	
	header("refresh:3; url=DeleteHotel.php?hgid=".$hg."");
?>