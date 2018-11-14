<html>
<head>
<title> Customers</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<div id="results">
<body>
<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Street Name</th>
		<th>Street Number</th>
		<th>Postal Code</th>
		<th>City</th>
		<th>IRS</th>
		<th>Social Security Number</th>
		<th>First Registration</th>
		<th>Delete</th>
	</tr>
	<?php
		require_once('connect.php');
		
		$sql = "SELECT * FROM cust";
		$records = mysqli_query($con,$sql);
		
		while ($row = mysqli_fetch_array($records))
		{
			echo "<tr>";
			echo "<td>".$row['First_Name_C']."</td>";
			echo "<td>".$row['Last_Name_C']."</td>";
			echo "<td align=center>".$row['A_Street_C']."</td>";
			echo "<td align=center>".$row['A_Number_C']."</td>";
			echo "<td align=center>".$row['A_Postal_Code_C']."</td>";
			echo "<td align=center>".$row['A_City_C']."</td>";
			echo "<td align=center>".$row['IRS_C']."</td>";
			echo "<td align=center>".$row['SSN_C']."</td>";
			echo "<td align=center>".$row['First_Registration_C']."</td>";
			echo "<td align=center><a href=OnDeleteCustomer.php?irscid=".$row['IRS_C'].">Delete</a></td>";
		}
	?>
</table>
</div>

<nav class="options">
	<ul>
		<li><a href=DeleteHotelGroup.php>Hotel Group</a></li>
		<li><a href=ReserveHistory.php>Check Reservation History</a></li>
		<li><a href=RentsHistory.php>Check Rent History</a></li>
		<li><a href=EditCustomer.php>Edit Customer Info</a></li>
	<ul>
</nav>
<nav class="homeoptions">
	<div class="brand">
		<h2>Hotels</h2>
	</div>
		<ul>
			<li><a href="hotels.php">Home</a></li>
			<li><a href="customer_login.php">Customer</a></li>
			<li><a href="employee_login.php">Employee</a></li>
			<li><a href="admin_login.php">Admin</a></li>
		</ul>
</nav>
</body>
</html>