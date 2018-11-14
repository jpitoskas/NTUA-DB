<html>
<head>
	<title> Insert New Hotel in Current Hotel Group</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
	<div class="container">
	  <form id="contact" action="OnInsertRoom.php" method="post">
		<h3>Add a new room</h3>
		<fieldset>
			Price : <br>
			<input type="text" name=Price>		
		</fieldset>
		<fieldset>
			Capacity : <br>
			<select name=Capacity><option value="1" selected>1</option>
								  <option value="2" >2</option>
								  <option value="3" >3</option>
								  <option value="4" >4</option>
			</select>					
		</fieldset>
		<fieldset>
			  Expandable : <br>
			  <select name=Expandable><option value="None" selected>None</option>
										<option value="Extra Beds" >Extra Beds</option>
										<option value="Extra Rooms" >Extra Rooms</option>
										<option value="Both" >Both</option>
				</select>
		</fieldset>
		<fieldset>
			Balcony : <br>
			<select name=Balcony><option value="No" selected>No</option>
									<option value="Yes" >Yes</option>
			</select>
		</fieldset>
		<fieldset>
			Smoking : <br>
			<select name=Smoking><option value="No" selected>No</option>
									<option value="Yes" >Yes</option>
			</select>
		</fieldset>
		<fieldset>
			Parking : <br>
			<select name=Parking><option value="No" selected>No</option>
									<option value="Yes" >Yes</option>
			</select>
		</fieldset>
		<fieldset>
			Wifi : <br>
			<select name=Wifi><option value="No" selected>No</option>
									<option value="Yes" >Yes</option>
			</select>
		<fieldset>
			TV : <br>
			<select name=TV><option value="No" selected>No</option>
									<option value="Yes" >Yes</option>
			</select>
		</fieldset>
		<fieldset>
			Refridgerator : <br>
			<select name=Refridgerator><option value="No" selected>No</option>
									<option value="Yes" >Yes</option>
			</select>
		</fieldset>
			Air Conditioning : <br>
			<select name=AirConditioning><option value="No" selected>No</option>
									<option value="Yes" >Yes</option>
			</select>
		<fieldset>
			Repairs Needed : <br>
			<select name=RepairsNeeded><option value="No" selected>No</option>
									<option value="Yes" >Yes</option>
			</select>
			</select>
		</fieldset>
		<fieldset>
		  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
		</fieldset>
		<a href=DeleteHotelGroup.php>Hotel Group</a>
	  </form>
	</div>

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
</html>