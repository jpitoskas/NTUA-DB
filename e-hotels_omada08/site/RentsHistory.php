<html>
<head>
<title> Rents</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
<div id="results">
<table>
	<tr>
		<th>Start Date</th>
		<th>Finish Date</th>
		<th>Customer's IRS</th>
		<th>Employee's IRS</th>
		<th>Room</th>
		<th>Payment Amount</th>
		<th>Payment Method</th>
	</tr>
	<?php
		require_once('connect.php');
		
		$sql = "SELECT * FROM backup";
		$records = mysqli_query($con,$sql);
		
		while ($row = mysqli_fetch_array($records))
		{
			echo "<tr>";
			echo "<td align=center>".$row['Start_Date_back']."</td>";
			echo "<td align=center>".$row['Finish_Date_back']."</td>";
			echo "<td align=center>".$row['IRS_C_rents_back']."</td>";
			echo "<td align=center>".$row['IRS_E_rents_back']."</td>";
			echo "<td align=center>".$row['Room_ID_rents_back']."</td>";
			echo "<td align=center>".$row['Payment_Amount_back']."</td>";
			echo "<td align=center>".$row['Payment_Method_back']."</td>";
		}
	?>
</table>
</div>


<nav class="options">
	<ul>
		<li><a href=DeleteHotelGroup.php>Hotel Group</a></li>
		<li><a href=ReserveHistory.php>Check Reservation History</a></li>
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