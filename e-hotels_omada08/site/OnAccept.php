<?php
	require_once('connect.php');
	
	session_start();
	$irse = $_SESSION['IRS_E'];
	
	
	$sqlins = 	"INSERT INTO rents (Start_Date, Finish_Date, Payment_Amount, Payment_Method, IRS_C_rents, IRS_E_rents, Room_ID_rents)
				VALUES ('$_POST[sdate]', '$_POST[fdate]', '$_POST[Pamount]','$_POST[Pmethod]','$_POST[irsc]','$irse','$_POST[roomid]')";
	
	$query = "UPDATE reserves SET Paid = 'Yes' WHERE Room_ID_reserves = '$_POST[roomid]' AND Start_Date='$_POST[sdate]' AND Finish_Date='$_POST[fdate]'";

	if (mysqli_query($con,$sqlins)) 
		if (mysqli_query($con, $query))
			echo "Reservation successfully became a Rent";
		else 
			echo "Reservation not Valid";
	else
		echo "Reservation not Valid";
	
	header("Location: EmployeeReserves.php");
?>