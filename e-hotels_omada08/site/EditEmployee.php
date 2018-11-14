<html>
<head>
<title> Update Records In Employee</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>

<?php
	require_once('connect.php');
	
	session_start();
	$h = $_SESSION['h'];

	
	$sqlhot = "SELECT * FROM employee INNER JOIN works ON employee.IRS_E = works.IRS_E_works WHERE Hotel_ID_works = '$h'";
	$rechoted = mysqli_query($con,$sqlhot);
?>
<div id="results">
<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>IRS Number</th>
		<th>Social Security Number</th>
		<th>Street Name</th>
		<th>Street Number</th>
		<th>Postal Code</th>
		<th>City</th>
		<th>Start Date</th>
		<th>Finish Date</th>
		<th>Position</th>
		<th>Update</th>
	</tr>
	
	<?php
		while ( $row = mysqli_fetch_array($rechoted) )
		{
			echo "<tr><form action=OnEditEmployee.php method=post>";
			echo "<td><input type=text name=Fname value='".$row['First_Name_E']."'</td>";
			echo "<td><input type=text name=Lname value='".$row['Last_Name_E']."'</td>";
			echo "<td><input type=text name=IRS value='".$row['IRS_E']."'</td>";
			echo "<td><input type=text name=SSN value='".$row['SSN_E']."'</td>";
			echo "<td><input type=text name=StreetName value='".$row['A_Street_E']."'</td>";
			echo "<td><input type=text name=StreetNumber value='".$row['A_Number_E']."'</td>";
			echo "<td><input type=text name=PostalCode value='".$row['A_Postal_Code_E']."'</td>";
			echo "<td><input type=text name=City value='".$row['A_City_E']."'</td>";
			echo "<td><input type=date name=Sdate value='".$row['Start_Date']."'</td>";
			echo "<td><input type=date name=Fdate value='".$row['Finish_Date']."'</td>";
			echo "<td><input type=text name=JobPosition value='".$row['Job_Position']."'</td>";
			echo "<input type=hidden name=empid value='".$row['IRS_E']."'>";
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