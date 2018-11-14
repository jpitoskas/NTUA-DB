<head>
<title> Delete Contact Info</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
<div id="results">
<h2>Hotel Group Contact Info</h2>
<table>
	<tr>
		<th>Hotel Group Email Adress</th>
		<th>Delete</th>
	</tr>
	<?php
		require_once('connect.php');

		$sqlhot = "SELECT * FROM email_hotel_group WHERE Hotel_Group_ID_email = '$_GET[hgid]'";
		$recordss = mysqli_query($con,$sqlhot);

		session_start();
		$_SESSION['hg'] = $_GET['hgid'];

		while ($row = mysqli_fetch_array($recordss))
		{
			echo "<tr>";
			echo "<td>".$row['Email_HG']."</td>";
			echo "<td><a href=OnDeleteEmailHotelGroup.php?emailid=".$row['Email_HG_ID'].">Delete</a></td>";
			echo "</tr>";

		}
	?>
	<tr>
		<th>Hotel Group Phone Number</th>
		<th>Delete</th>
	</tr>
	<?php
		$sqlhot = "SELECT * FROM phone_hotel_group WHERE Hotel_Group_ID_phone = '$_GET[hgid]'";
		$recordss = mysqli_query($con,$sqlhot);


		while ($row = mysqli_fetch_array($recordss))
		{
			echo "<tr>";
			echo "<td>".$row['Phone_HG']."</td>";
			echo "<td><a href=OnDeletePhoneHotelGroup.php?phoneid=".$row['Phone_HG_ID'].">Delete</a></td>";
			echo "</tr>";

		}
	?>
</table>
</div>
<nav class="options">
	<ul>
		<li><a href=DeleteHotelGroup.php>Hotel Group</a></li>
		<li><a href=InsertEmailHotelGroup.php>Insert New Email</a></li>
		<li><a href=InsertPhoneHotelGroup.php>Insert New Phone</a></li>
		<li><a href=EditContactInfoHotelGroup.php>Update Contact Info</a></li>
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
