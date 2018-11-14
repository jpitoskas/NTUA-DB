<?php

session_start();
include_once('connect.php');

if (isset($_POST['username']) && isset($_POST['password'])){
  unset( $_SESSION['errorMessage']);
  unset( $_SESSION['logina']);
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $query = "SELECT * FROM administrator WHERE Username_of_Admin = '".$user."' AND Password_of_Admin = '".$pass."' LIMIT 1";

  $res = mysqli_query($con, $query);

  if (mysqli_num_rows($res) == 1){
    $_SESSION['logina'] = 1;
    header("Location: DeleteHotelGroup.php");
    exit();
  }
  else {
    $_SESSION['errorMessage'] = 1;
    header("Location: admin_login.php");
    exit();
  }
}

?>
