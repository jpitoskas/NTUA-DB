<html>
<head>
<title> Reservations </title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
<div id="results">
<table>
	<tr>
		<th>Start Date</th>
		<th>Finish Date</th>
		<th>Paid</th>
		<th>Customer's IRS</th>
		<th>Room</th>
	</tr>
	<?php
		require_once('connect.php');
		
		$sql = "SELECT * FROM history";
		$records = mysqli_query($con,$sql);
		
		while ($row = mysqli_fetch_array($records))
		{
			echo "<tr>";
			echo "<td align=center>".$row['Start_Date_hist']."</td>";
			echo "<td align=center>".$row['Finish_Date_hist']."</td>";
			echo "<td align=center>".$row['Paid_hist']."</td>";
			echo "<td align=center>".$row['IRS_C_hist']."</td>";
			echo "<td align=center>".$row['Room_ID_hist']."</td>";
		}
	?>
</table>
</div>

<nav class="options">
	<ul>
		<li><a href=DeleteHotelGroup.php>Hotel Group</a></li>
		<li><a href=RentsHistory.php>Check Rent History</a></li>
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