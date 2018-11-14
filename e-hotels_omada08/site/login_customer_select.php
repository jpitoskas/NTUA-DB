<?php

session_start();

include_once('connect.php');

if (isset($_GET['irs'])){
  unset( $_SESSION['login']);
  $_SESSION['IRS_C'] = $_GET['irs'];
  $_SESSION['login'] = 1;
  header("Location: hotels.php");
  exit();
}

?>
