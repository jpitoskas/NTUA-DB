<head>
<title>Customer Sign Up Form</title>
<link rel="stylesheet" type="text/css" href="form.css">
</head>
<div class="container">
  <form id="contact" action="customer_signup.php" method="post">
    <h3>Customer Sign Up Form</h3>
    <fieldset>
      <input placeholder="First name" type="text" name="First_name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Last name" type="text" name="Last_name" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="SSN" type="number" name="SSN" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="IRS" type="number" name="IRS" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Address Street" type="text" name="Street" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input placeholder="Address Street Number" type="number" name="Number" tabindex="6" required>
    </fieldset>
    <fieldset>
      <input placeholder="Address City" type="text" name="City" tabindex="7" required>
    </fieldset>
    <fieldset>
      <input placeholder="Address Postal Code" type="number" name="Postal_code" tabindex="8" required>
    </fieldset>
    <fieldset>
      <input placeholder="Username" type="text" name="username" tabindex="9" required>
    </fieldset>
    <fieldset>
      <input placeholder="Password" type="text" name="password" tabindex="10" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
