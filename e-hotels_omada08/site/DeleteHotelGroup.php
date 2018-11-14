<?php session_start();?>
<html>
<head>
<title> Delete Records</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
	<?php
	  if (isset($_SESSION['logina'])) {
	    echo '<script language="javascript">';
	    echo 'alert("Admin Login Successful!");';
	    echo '</script>';
	    unset( $_SESSION['logina'] );
	  }
	 ?>
<div id="results">
<h2>Hotel Group</h2>
<table>
	<tr>
		<th>Hotel Group</th>
		<th>Contact Info</th>
		<th>Street Name</th>
		<th>Street Number</th>
		<th>Postal Code</th>
		<th>City</th>
		<th>Number of Hotels</th>
		<th>Delete</th>
		<th>Hotels</th>
	</tr>
	<?php
		require_once('connect.php');

		$sql = "SELECT * FROM hotel_group";
		$records = mysqli_query($con,$sql);

		while ($row = mysqli_fetch_array($records))
		{
			echo "<tr>";
			echo "<td>".$row['Name_HG']."</td>";
			echo "<td align=center><a href=DeleteContactInfoHotelGroup.php?hgid=".($row["Hotel_Group_ID"]).">Contact Info</a></td>";
			echo "<td align=center>".$row['A_Street_HG']."</td>";
			echo "<td align=center>".$row['A_Number_HG']."</td>";
			echo "<td align=center>".$row['A_Postal_Code_HG']."</td>";
			echo "<td align=center>".$row['A_City_HG']."</td>";
			echo "<td align=center>".$row['Number_of_Hotels']."</td>";
			echo "<td align=center><a href=OnDeleteHotelGroup.php?hgid=".$row['Hotel_Group_ID'].">Delete</a></td>";
			echo "<td align=center><a href=DeleteHotel.php?hgid=".($row["Hotel_Group_ID"]).">Check Hotels</a></td>";
		}
	?>
</table>
</div>
<nav class="options">
	<ul>
		<li><a href=RentsHistory.php>Check Rent History</a>
		<li><a href=ReserveHistory.php>Check Reservation History</a>
		<li><a href=InsertHotelGroup.php>Add new Hotel Group</a></li>
		<li><a href=EditHotelGroup.php>Edit Hotel Group</a></li>
		<li><a href=DeleteCustomer.php>Customers</a></li>
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
