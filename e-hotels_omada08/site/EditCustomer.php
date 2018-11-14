<html>
<head>
<title> Update Records In Hotel Group</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>

<?php
	require_once('connect.php');
	
	$sqlEdit = "SELECT * FROM cust";
	$recEdit = mysqli_query($con,$sqlEdit);
?>
<div id="results">
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
		<th>Update</th>
	</tr>
	
	<?php
		while ( $row = mysqli_fetch_array($recEdit) )
		{
			echo "<tr><form action=OnEditCustomer.php method=post>";
			echo "<td><input type=text name=Fname value='".$row['First_Name_C']."'</td>";
			echo "<td><input type=text name=Lname value='".$row['Last_Name_C']."'</td>";
			echo "<td><input type=text name=StreetName value='".$row['A_Street_C']."'</td>";
			echo "<td><input type=text name=StreetNumber value='".$row['A_Number_C']."'</td>";
			echo "<td><input type=text name=PostalCode value='".$row['A_Postal_Code_C']."'</td>";
			echo "<td><input type=text name=City value='".$row['A_City_C']."'</td>";
			echo "<td><input type=text name=IRS value='".$row['IRS_C']."'</td>";
			echo "<td><input type=text name=SSN value='".$row['SSN_C']."'</td>";
			echo "<td align=center>".$row['First_Registration_C']."</td>";
			echo "<input type=hidden name=irscid value='".$row['IRS_C']."'>";
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