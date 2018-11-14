<html>
<head>
<title> Update Records In Hotel's Contact Info </title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>

<?php
	require_once('connect.php');
	
	session_start();
	$h = $_SESSION['h'];

	
	$sqlhoted = "SELECT * FROM email_hotel WHERE Hotel_ID_email = '$h'";
	$rechoted = mysqli_query($con,$sqlhoted);
?>
<div id="results">
<table>
	<tr>
		<th>Hotel Email Adress</th>
		<th>Update</th>
	</tr>
	
	<?php
		while ( $row = mysqli_fetch_array($rechoted) )
		{
			echo "<tr><form action=OnEditEmailHotel.php method=post>";
			echo "<td><input type=text name=email value='".$row['Email_H']."'</td>";
			echo "<input type=hidden name=emailid value='".$row['Email_H_ID']."'>";
			echo "<td><input type=submit>";
			echo "</form></tr>";
		}
	?>
	<tr>
		<th>Hotel Phone Number</th>
		<th>Delete</th>
	</tr>
	<?php	
	
	$sqlhoted = "SELECT * FROM phone_hotel WHERE Hotel_ID_phone = '$h'";
	$rechoted = mysqli_query($con,$sqlhoted);
	
	while ( $row = mysqli_fetch_array($rechoted) )
		{
			echo "<tr><form action=OnEditPhoneHotel.php method=post>";
			echo "<td><input type=text name=phone value='".$row['Phone_H']."'</td>";
			echo "<input type=hidden name=phoneid value='".$row['Phone_H_ID']."'>";
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