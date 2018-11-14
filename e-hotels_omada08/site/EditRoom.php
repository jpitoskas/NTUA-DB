<html>
<head>
<title> Update Records In Hotel Group</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>

<?php
	require_once('connect.php');
	
	session_start();
	$h = $_SESSION['h'];

	
	$sqlhoted = "SELECT * FROM hotel_room WHERE Hotel_ID_R = '$h'";
	$rechoted = mysqli_query($con,$sqlhoted);
?>
<div id="results">
<h2>Hotel Rooms</h2>
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
		<th>Update</th>
	</tr>
	
	<?php
		while ( $row = mysqli_fetch_array($rechoted) )
		{
			echo "<tr><form action=OnEditRoom.php method=post>";
			echo '<td align="center">'.$row['Room_ID'].'</td>';
			echo "<td><input type=text name=Price value='".$row['Price']."'</td>";
			
			$types = array('1','2','3','4');	
			
			echo '<td align="center"><select name="Capacity">';			
			foreach($types as $option) {
				echo '<option value="'.$option.'"'.(strcmp($option,$row['Capacity'])==0?' selected=':'').'>'.$option.'</option>';
			}
			echo '</select></td>';
			
			$types = array('None', 'Extra Bed', 'Extra Room', 'Both');
			echo '<td align="center"><select name="Expandable">';			
			foreach($types as $option) {
				echo '<option value="'.$option.'"'.(strcmp($option,$row['Expandable'])==0?' selected=':'').'>'.$option.'</option>';
			}
			echo '</select></td>';
			
			$types = array('Yes', 'No');
			
			echo '<td align="center"><select name="SeaView">';			
			foreach($types as $option) {
				echo '<option value="'.$option.'"'.(strcmp($option,$row['Sea_View'])==0?' selected=':'').'>'.$option.'</option>';
			}
			echo '</select></td>';
			
			
			echo '<td align="center"><select name="Balcony">';			
			foreach($types as $option) {
				echo '<option value="'.$option.'"'.(strcmp($option,$row['Balcony'])==0?' selected=':'').'>'.$option.'</option>';
			}
			echo '</select></td>';
			
			
			echo '<td align="center"><select name="Smoking">';			
			foreach($types as $option) {
				echo '<option value="'.$option.'"'.(strcmp($option,$row['Smoking'])==0?' selected=':'').'>'.$option.'</option>';
			}
			echo '</select></td>';
			
			
			echo '<td align="center"><select name="Parking">';			
			foreach($types as $option) {
				echo '<option value="'.$option.'"'.(strcmp($option,$row['Parking'])==0?' selected=':'').'>'.$option.'</option>';
			}
			echo '</select></td>';
			
			
			echo '<td align="center"><select name="Wifi">';			
			foreach($types as $option) {
				echo '<option value="'.$option.'"'.(strcmp($option,$row['Wifi'])==0?' selected=':'').'>'.$option.'</option>';
			}
			echo '</select></td>';
			
			
			echo '<td align="center"><select name="TV">';			
			foreach($types as $option) {
				echo '<option value="'.$option.'"'.(strcmp($option,$row['TV'])==0?' selected=':'').'>'.$option.'</option>';
			}
			echo '</select></td>';
			

			echo '<td align="center"><select name="Refridgerator">';			
			foreach($types as $option) {
				echo '<option value="'.$option.'"'.(strcmp($option,$row['Refridgerator'])==0?' selected=':'').'>'.$option.'</option>';
			}
			echo '</select></td>';
			
			
			echo '<td align="center"><select name="AirConditioning">';			
			foreach($types as $option) {
				echo '<option value="'.$option.'"'.(strcmp($option,$row['Air_Conditioning'])==0?' selected=':'').'>'.$option.'</option>';
			}
			echo '</select></td>';
			
			
			echo '<td align="center"><select name="RepairsNeeded">';			
			foreach($types as $option) {
				echo '<option value="'.$option.'"'.(strcmp($option,$row['Repairs_Needed'])==0?' selected=':'').'>'.$option.'</option>';
			}
			echo '</select></td>';
			
			echo "<input type=hidden name=roomid value='".$row['Room_ID']."'>";
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