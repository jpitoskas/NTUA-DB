<head>
<title> Delete Contact Info</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
<div id="results">
<h2>Hotel Contact Info</h2>
<table >
	<tr>
		<th>Hotel Email Adress</th>
		<th>Delete</th>
	</tr>
	<?php
		require_once('connect.php');

		$sqlhot = "SELECT * FROM email_hotel WHERE Hotel_ID_email = '$_GET[hotid]'";
		$recordss = mysqli_query($con,$sqlhot);

		session_start();
		$_SESSION['h'] = $_GET['hotid'];

		while ($row = mysqli_fetch_array($recordss))
		{
			echo "<tr>";
			echo "<td>".$row['Email_H']."</td>";
			echo "<td><a href=OnDeleteEmailHotel.php?emailid=".$row['Email_H_ID'].">Delete</a></td>";
			echo "</tr>";

		}
	?>
	<tr>
		<th>Hotel Phone Number</th>
		<th>Delete</th>
	</tr>
	<?php
		$sqlhot = "SELECT * FROM phone_hotel WHERE Hotel_ID_phone = '$_GET[hotid]'";
		$recordss = mysqli_query($con,$sqlhot);


		while ($row = mysqli_fetch_array($recordss))
		{
			echo "<tr>";
			echo "<td>".$row['Phone_H']."</td>";
			echo "<td><a href=OnDeletePhoneHotel.php?phoneid=".$row['Phone_H_ID'].">Delete</a></td>";
			echo "</tr>";

		}
	?>
</table>
</div>

<nav class="options">
	<ul>
		<li><a href=DeleteHotelGroup.php>Hotel Group</a></li>
		<li><a href=InsertEmailHotel.php>Insert New Email</a></li>
		<li><a href=InsertPhoneHotel.php>Insert New Phone</a></li>
		<li><a href=EditContactInfoHotel.php>Update Contact Info</a></li>
		<ul>
	<nav class="homeoptions">
	<nav>
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
