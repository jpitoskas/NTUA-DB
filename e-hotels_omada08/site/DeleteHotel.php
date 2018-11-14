<head>
<title> Delete Records</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
<div id="results">
<h2>Hotels</h2>
<table >
	<tr>
		<th>Hotel</th>
		<th>Contact Info</th>
		<th>Street Name</th>
		<th>Street Number</th>
		<th>Postal Code</th>
		<th>City</th>
		<th>Number of Rooms</th>
		<th>Stars</th>
		<th>Delete</th>
		<th>Rooms</th>
		<th>Employees</th>
	</tr>
	<?php
		require_once('connect.php');
		
		$sqlhot = "SELECT * FROM hotel WHERE Hotel_Group_ID_H = '$_GET[hgid]'";
		$recordss = mysqli_query($con,$sqlhot);
		
		session_start();
		$_SESSION['hg'] = $_GET['hgid'];
		
		while ($row = mysqli_fetch_array($recordss))
		{
			echo "<tr>";
			echo "<td>".$row['Name_H']."</td>";
			echo "<td align=center><a href=DeleteContactInfoHotel.php?hotid=".($row["Hotel_ID"]).">Contact Info</a></td>";
			echo "<td align=center>".$row['A_Street_H']."</td>";
			echo "<td align=center>".$row['A_Number_H']."</td>";
			echo "<td align=center>".$row['A_Postal_Code_H']."</td>";
			echo "<td align=center>".$row['A_City_H']."</td>";
			echo "<td align=center>".$row['Number_of_Rooms']."</td>";
			echo "<td align=center>".$row['Stars']."</td>";
			echo "<td align=center><a href=OnDeleteHotel.php?hotid=".$row['Hotel_ID'].">Delete</a></td>";	
			echo "<td align=center><a href=DeleteRoom.php?hotid=".$row['Hotel_ID'].">Manage Rooms</a></td>";
			echo "<td align=center><a href=DeleteEmployee.php?hotid=".$row['Hotel_ID'].">Manage Employee</a></td>";
			
		}
	?>
</table>
</div>

<nav class="options">
	<ul>
		<li><a href=DeleteHotelGroup.php>Hotel Group</a></li>
		<li><a href=EditHotel.php>Update Hotels</a></li>
		<li><a href=InsertHotel.php>Add a new Hotel</a></li>
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