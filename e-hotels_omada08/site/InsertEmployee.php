<html>
<head>
	<title> Insert New Employee in Current Hotel</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<div class="container">
  <form id="contact" action="OnInsertEmployee.php" method="post">
    <h3>Add a new Employee</h3>
    <fieldset>
      <input placeholder="First Name" type="text" name="Fname" tabindex="1" required >
    </fieldset>
    <fieldset>
      <input placeholder="Last Name" type="text" name="Lname" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="IRS Number" type="text" name="IRS" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Social Security Number" type="text" name="SSN" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Street Name" type="text" name="StreetName" tabindex="5" required>
    </fieldset>
	<fieldset>
      <input placeholder="Street Number" type="text" name="StreetNumber" tabindex="6" required>
    </fieldset>
	<fieldset>
      <input placeholder="Postal Code" type="text" name="PostalCode" tabindex="7" required>
    </fieldset>
	<fieldset>
      <input placeholder="City" type="text" name="City" tabindex="8" required>
    </fieldset>
	<fieldset>
      <input placeholder="Start Date" type="text" name="StartDate" tabindex="9" required>
    </fieldset>
	<fieldset>
      <input placeholder="Finish Date" type="text" name="FinishDate" tabindex="10" required>
    </fieldset>
	<fieldset>
      <input placeholder="Job Position" type="text" name="JobPosition" tabindex="11" required>
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