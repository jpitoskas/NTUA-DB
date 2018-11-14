<?php
session_unset();
session_start();
?>
<html>
<head>
    <title> Customer Sign In </title>
    <link rel="stylesheet" type="text/css" href="customer_login_C.css">
</head>
    <body>
      <?php
        if (isset($_SESSION['errorMessage'])) {
          echo '<script language="javascript">';
          echo 'alert("Wrong Credentials");';
          echo '</script>';
          unset( $_SESSION['errorMessage'] );
        }
        if (isset($_SESSION['signup'])) {
    			echo '<script language="javascript">';
    			echo 'alert("Customer Signup Successful!");';
    			echo '</script>';
    			unset( $_SESSION['signup']);
    		}
        if (isset($_SESSION['invalid'])) {
    			echo '<script language="javascript">';
    			echo 'alert("Invalid Field(s), Sign Up Unsuccesssful (User may already exist)");';
    			echo '</script>';
    			unset( $_SESSION['invalid']);
    		}
       ?>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Customer Login</h1>
            <form action="login_customer.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <li align = "center"><a href="customer_form.php">Sign Up</a></li>
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
