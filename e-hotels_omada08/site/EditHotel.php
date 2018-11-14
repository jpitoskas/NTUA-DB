<html>
<head>
<title> Update Records In Hotel</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>

<?php
	require_once('connect.php');
	
	session_start();
	$hg = $_SESSION['hg'];

	
	$sqlhoted = "SELECT * FROM hotel WHERE Hotel_Group_ID_H = '$hg'";
	$rechoted = mysqli_query($con,$sqlhoted);
?>
<div id="results">

<table>
	<tr>
		<th>Hotel</th>
		<th>Street Name</th>
		<th>Street Number</th>
		<th>Postal Code</th>
		<th>City</th>
		<th>Number of Rooms</th>
		<th>Stars</th>
		<th>Update</th>
	</tr>
	
	<?php
		while ( $row = mysqli_fetch_array($rechoted) )
		{
			echo "<tr><form action=OnEditHotel.php method=post>";
			echo "<td><input type=text name=Hname value='".$row['Name_H']."'</td>";
			echo "<td><input type=text name=StreetName value='".$row['A_Street_H']."'</td>";
			echo "<td><input type=text name=StreetNumber value='".$row['A_Number_H']."'</td>";
			echo "<td><input type=text name=PostalCode value='".$row['A_Postal_Code_H']."'</td>";
			echo "<td><input type=text name=City value='".$row['A_City_H']."'</td>";
			echo "<td align=center>".$row['Number_of_Rooms']."</td>";
			echo "<td><input type=text name=Stars value='".$row['Stars']."'</td>";
			echo "<input type=hidden name=hotid value='".$row['Hotel_ID']."'>";
			echo "<td><input type=submit>";
			echo "</form></tr>";
		}
	?>
	
</table>
</div>

<nav class="options">
	<ul>
		<li><a href=DeleteHotelGroup.php>Hotel Group</a></li>
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