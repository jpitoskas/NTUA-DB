<?php
	require_once('connect.php');
	
	session_start();
	$h = $_SESSION['h'];
	
	$sqlins = 	"INSERT INTO employee (A_Street_E, A_Number_E, A_Postal_Code_E, A_City_E, First_Name_E, Last_Name_E, IRS_E, SSN_E)
				VALUES ('$_POST[StreetName]', '$_POST[StreetNumber]', '$_POST[PostalCode]', '$_POST[City]', '$_POST[Fname]','$_POST[Lname]', '$_POST[IRS]','$_POST[SSN]')";
	
	$query = 	"INSERT INTO works ( Start_Date, Finish_Date, Job_Position, IRS_E_works, Hotel_ID_works )
				VALUES ('$_POST[StartDate]', '$_POST[FinishDate]', '$_POST[JobPosition]', '$_POST[IRS]', '$h')";
	
	if (mysqli_query($con,$sqlins) && mysqli_query($con,$query) ) 
		echo "Employee added successfully";
	else
		echo "No Employee Added";
	
	header("refresh:3; url=DeleteEmployee.php?hotid=".$h."");
?>