<head>
<title> Delete Employee</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
<div id="results">
<h2>Employees</h2>
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
		<th>Delete</th>
	</tr>
	<?php
		require_once('connect.php');
		
		$sqlhot = "SELECT * FROM employee INNER JOIN works ON employee.IRS_E = works.IRS_E_works WHERE Hotel_ID_works = '$_GET[hotid]'";
		$recordss = mysqli_query($con,$sqlhot);
		
		session_start();
		$_SESSION['h'] = $_GET['hotid'];
		
		while ($row = mysqli_fetch_array($recordss))
		{
			echo "<tr>";
			echo "<td>".$row['First_Name_E']."</td>";
			echo "<td>".$row['Last_Name_E']."</td>";
			echo "<td>".$row['IRS_E']."</td>";
			echo "<td>".$row['SSN_E']."</td>";
			echo "<td>".$row['A_Street_E']."</td>";
			echo "<td>".$row['A_Number_E']."</td>";
			echo "<td>".$row['A_Postal_Code_E']."</td>";
			echo "<td>".$row['A_City_E']."</td>";
			echo "<td>".$row['Start_Date']."</td>";
			echo "<td>".$row['Finish_Date']."</td>";
			echo "<td>".$row['Job_Position']."</td>";
			echo "<td><a href=OnDeleteEmployee.php?empid=".$row['IRS_E'].">Delete</a></td>";			
		}
	?>
</table>
</div>

<nav class="options">
	<ul>
		<li><a href=DeleteHotelGroup.php>Hotel Group</a></li>
		<li><a href=InsertEmployee.php>Add New Employee</a></li>
		<li><a href=EditEmployee.php>Edit Employee Info</a></li>
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