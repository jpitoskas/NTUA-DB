<html>
<head>
	<title> Insert Email Adress in Current Group Hotel</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<div class="container">
	<form id="contact" action="OnInsertEmailHotelGroup.php" method="post">
		<h3>Add a new Email Address</h3>
		<fieldset>
		  <input placeholder="Email Address" type="text" name="email" tabindex="1" required >
		</fieldset>
		<fieldset>
		  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
		</fieldset>
		<a href=DeleteHotelGroup.php>Hotel Group </a>
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