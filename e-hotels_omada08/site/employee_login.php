<?php
session_unset();
session_start();
?>
<html>
<head>
    <title> Employee Sign In </title>
    <link rel="stylesheet" type="text/css" href="employee_login_C.css">
</head>
<body>
<?php
  if (isset($_SESSION['errorMessage'])) {
    echo '<script language="javascript">';
    echo 'alert("Wrong Credentials");';
    echo '</script>';
    unset( $_SESSION['errorMessage'] );
  }
 ?>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Employee information</h1>
            <form action="login_employee.php" method="post">
            <p>Employee ID</p>
            <input type="text" name="IRS" placeholder="Enter Employee ID (IRS)">
            <input type="submit" name="submit" value="Login">
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
    </body>
</html>
