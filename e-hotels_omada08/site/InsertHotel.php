<html>
	<head>
		<title>Insert New Hotel in Current Hotel Group </title>
		<link rel="stylesheet" type="text/css" href="formstyle.css">
	</head>
	<div class="container">
	  <form id="contact" action="OnInsertHotel.php" method="post">
		<h3>Add a new hotel</h3>
		<fieldset>
		  <input placeholder="Street name" type="text" name="StreetName" tabindex="1" required >
		</fieldset>
		<fieldset>
		  <input placeholder="Street Number" type="number" name="StreetNumber" tabindex="2" required>
		</fieldset>
		<fieldset>
		  <input placeholder="Postal Code" type="number" name="PostalCode" tabindex="3" required>
		</fieldset>
		<fieldset>
		  <input placeholder="City" type="text" name="City" tabindex="4" required>
		</fieldset>
		<fieldset>
		  <input placeholder="Hotel Name" type="text" name="Hname" tabindex="5" required>
		</fieldset>
		<fieldset>
		  <input placeholder="Stars" type="number" name="Stars" tabindex="6" required>
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
