<?php

session_start();
include_once('connect.php');

if (isset($_POST['username']) && isset($_POST['password'])){
  unset( $_SESSION['errorMessage']);
  unset( $_SESSION['login']);

  $user = $_POST['username'];
  $pass = $_POST['password'];

  $query = "SELECT * FROM customer WHERE User_C = '".$user."' AND Pass_C = '".$pass."'";

  $results = mysqli_query($con, $query);

  if (mysqli_num_rows($results) == 0){
    $_SESSION['errorMessage'] = 1;
    header("Location: customer_login.php");
    exit();
  }

  else {
    $row = mysqli_fetch_assoc($results);
    $_SESSION['First_Name_C'] = $row['First_Name_C'];
    $_SESSION['Last_Name_C'] = $row['Last_Name_C'];
    $_SESSION['IRS_C'] = $row['IRS_C'];
    $_SESSION['login'] = 1;
    header("Location: hotels.php");
    exit();
  }
}

?>
