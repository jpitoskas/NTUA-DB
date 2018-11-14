<?php
	require_once('connect.php');
	
	session_start();
	$h = $_SESSION['h'];
	
	$sqled = "UPDATE employee SET A_Street_E='$_POST[StreetName]', A_Number_E='$_POST[StreetNumber]',
	A_Postal_Code_E='$_POST[PostalCode]', A_City_E='$_POST[City]', First_Name_E='$_POST[Fname]',Last_Name_E='$_POST[Lname]',
	IRS_E='$_POST[IRS]', SSN_E='$_POST[SSN]'
	WHERE IRS_E = '$_POST[empid]'";
	
	$query = "UPDATE works SET Start_Date='$_POST[Sdate]', Finish_Date='$_POST[Fdate]', Job_Position='$_POST[JobPosition]',
	IRS_E_works= '$_POST[IRS]', Hotel_ID_works = '$h' WHERE IRS_E_works = '$_POST[IRS]'";
	
	
	if (mysqli_query($con,$sqled))
	{
		if (mysqli_query($con,$query))
		{
			header("refresh:0; url=DeleteEmployee.php?hotid=".$h."");
		}
	}
	else
	{
		echo "Not Updated";
	}
?>