<?php
session_start();
include_once('connect.php');

if (isset($_POST['First_name']) && isset($_POST['Last_name']) && isset($_POST['SSN']) && isset($_POST['IRS']) && isset($_POST['Street']) && isset($_POST['Number']) && isset($_POST['City']) && isset($_POST['Postal_code']) && isset($_POST['username']) && isset($_POST['password'])) {
  unset($_SESSION['signup']);
  unset($_SESSION['invalid']);
  $first = $_POST['First_name'];
  $last = $_POST['Last_name'];
  $ssn = $_POST['SSN'];
  $irs = $_POST['IRS'];
  $street = $_POST['Street'];
  $number = $_POST['Number'];
  $city = $_POST['City'];
  $postal = $_POST['Postal_code'];
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $query = "INSERT INTO customer (First_Name_C, Last_Name_C, SSN_C, IRS_C, A_Street_C, A_Number_C, A_City_C, A_Postal_Code_C, User_C, Pass_C) VALUES ('".$first."', '".$last."', '".$ssn."', '".$irs."', '".$street."', '".$number."', '".$city."', '".$postal."', '".$user."', '".$pass."') ";

  if($res = mysqli_query($con, $query)){
    $_SESSION['signup'] = 1;
    header("Location: customer_login.php");
    exit();
  }
  else{
    $_SESSION['invalid'] = 1;
    header("Location: customer_login.php");
    exit();
  }
}
?>
