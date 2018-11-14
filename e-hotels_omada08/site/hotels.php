<!DOCTYPE html>
<?php session_start();?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Hotels Home Page</title>
		<link rel="stylesheet" type="text/css" href="graphics.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<?php
	  if (isset($_SESSION['errorMessage'])) {
	    echo '<script language="javascript">';
	    echo 'alert("Invalid Arrival Date/ Departure Date");';
	    echo '</script>';
	    unset( $_SESSION['errorMessage']);
	  }
		if (isset($_SESSION['login'])) {
			echo '<script language="javascript">';
			echo 'alert("Customer Login successful!");';
			echo '</script>';
			unset( $_SESSION['login']);
		}
		if (isset($_SESSION['booked'])) {
			echo '<script language="javascript">';
			echo 'alert("Successful Reservation!");';
			echo '</script>';
			unset( $_SESSION['booked']);
		}
		if (isset($_SESSION['notbooked'])) {
			echo '<script language="javascript">';
			echo 'alert("Reservation Unsuccessful, Login First as a Customer");';
			echo '</script>';
			unset( $_SESSION['notbooked']);
		}
		unset($_SESSION['ardate']);
		unset($_SESSION['dedate']);
	 ?>
		<h1>Welcome</h1>
		<form action="search.php" method = "post">
			<div id="choices">
				<table  height="80px" width="1200px">
					<tr>
						<td>
							<table>
								<tr>
									<td>
										Arival Date <br/> <input type="date" id="ardate" name="ardate" required/>
									</td>
									<td>
										Departure Date <br/> <input type="date" id="dedate" name="dedate" required/>
									</td>
								</tr>
							</table>
						</td>
						<td>
							Capacity <br/>
							<div class="select1">
							<select name="capacity" id="select1">
								<option value="" selected>-</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
							</div>
						</td>
						<td>
							City <br/> <input type="text" name="city"/>
						</td>
						<td>
							Hotel Group <br/> <input type="text" name="hotel_group"/>
						</td>
						<td>
							Stars <br/>
							<div class="select2">
							<select name="stars">
								<option value="" selected>-</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						</td>
						<td>
							<table>
								<tr>
									<td>
										Number of Rooms <br/> <input type="number" name="nrooms"/>
									</td>
									<td>
										Maximum price <br/> <input type="number" name="maxprice"/>
									</td>
								</tr>
							</table>
						</td>
						<td>
							<br/><button type="submit"><i class="fa fa-search"></i></button>
						</td>
					</tr>
					<tr>
						<table>
							<input type="checkbox" name="air_cond" value="Yes">Air Conditioning

							<input type="checkbox" name="fridge" value="Yes">Refridgerator

							<input type="checkbox" name="tv" value="Yes">TV

							<input type="checkbox" name="wifi" value="Yes">WiFi

							<input type="checkbox" name="park" value="Yes">Parking

							<input type="checkbox" name="smoke" value="Yes">Smoking

							<input type="checkbox" name="balcony" value="Yes">Balcony

							<input type="checkbox" name="sea" value="Yes">Sea View
						</table>
					</tr>
				</table>
			</div>
		</form>
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
		<!-- <section class="sec1"></section>
		<section class="sec2"></section> -->
	</body>
</html>
