<head>
<title> Delete Hotel Rooms</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
<div id="results">
<h2>Rooms</h2>
<table>
	<tr>
		<th>Room Number</th>
		<th>Price</th>
		<th>Capacity</th>
		<th>Expandable</th>
		<th>Sea View</th>
		<th>Balcony</th>
		<th>Smoking</th>
		<th>Parking</th>
		<th>Wifi</th>
		<th>TV</th>
		<th>Refridgerator</th>
		<th>Air-Conditioning</th>
		<th>Repairs-Needed</th>
		<th>Delete</th>
	</tr>
	<?php
		require_once('connect.php');
		
		$sqlhot = "SELECT * FROM hotel_room WHERE Hotel_ID_R = '$_GET[hotid]'";
		$recordss = mysqli_query($con,$sqlhot);
		
		session_start();
		$_SESSION['h'] = $_GET['hotid'];
		
		while ($row = mysqli_fetch_array($recordss))
		{
			echo "<tr>";
			echo "<td>".$row['Room_ID']."</td>";
			echo "<td>".$row['Price']."</td>";
			echo "<td>".$row['Capacity']."</td>";
			echo "<td>".$row['Expandable']."</td>";
			echo "<td>".$row['Sea_View']."</td>";
			echo "<td>".$row['Balcony']."</td>";
			echo "<td>".$row['Smoking']."</td>";
			echo "<td>".$row['Parking']."</td>";
			echo "<td>".$row['Wifi']."</td>";
			echo "<td>".$row['TV']."</td>";
			echo "<td>".$row['Refridgerator']."</td>";
			echo "<td>".$row['Air_Conditioning']."</td>";
			echo "<td>".$row['Repairs_Needed']."</td>";			
			echo "<td><a href=OnDeleteRoom.php?roomid=".$row['Room_ID'].">Delete</a></td>";	
		}
	?>
</table>
</div>

<nav class="options">
	<ul>
		<li><a href=DeleteHotelGroup.php>Hotel Group</a></li>
		<li><a href=EditRoom.php>Update Rooms</a></li>
		<li><a href=InsertRoom.php>Add a new Room</a></li>
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