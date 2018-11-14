<html>
<head>
<title> Update Records In Hotel Group</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>

<?php
	require_once('connect.php');
	
	$sqlEdit = "SELECT * FROM Hotel_Group";
	$recEdit = mysqli_query($con,$sqlEdit);
?>
<div id="results">
<table>
	<tr>
		<th>Street Name</th>
		<th>Street Number</th>
		<th>Postal Code</th>
		<th>City</th>
		<th>Number of Hotels</th>
		<th>Update</th>
	</tr>
	
	<?php
		while ( $row = mysqli_fetch_array($recEdit) )
		{
			echo "<tr><form action=OnEditHotelGroup.php method=post>";
			echo "<td><input type=text name=StreetName value='".$row['A_Street_HG']."'</td>";
			echo "<td><input type=text name=StreetNumber value='".$row['A_Number_HG']."'</td>";
			echo "<td><input type=text name=PostalCode value='".$row['A_Postal_Code_HG']."'</td>";
			echo "<td><input type=text name=City value='".$row['A_City_HG']."'</td>";
			echo "<td align=center>".$row['Number_of_Hotels']."</td>";
			echo "<input type=hidden name=hgid value='".$row['Hotel_Group_ID']."'>";
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