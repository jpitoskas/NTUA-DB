<?php
session_start();

include_once('connect.php');

if(isset($_GET['roomid'])){
  unset($_SESSION['booked']);
  unset($_SESSION['notbooked']);
  $start = $_SESSION['ardate'];
  $finish = $_SESSION['dedate'];
  $irs = $_SESSION['IRS_C'];
  $roomid = $_GET['roomid'];

  $query = "INSERT INTO reserves (Start_Date, Finish_Date, IRS_C_reserves, Room_ID_reserves) VALUES ('".$start."', '".$finish."', '".$irs."', '".$roomid."')";

  if(!$res = mysqli_query($con, $query)){
    $_SESSION['notbooked'] = 1;
  }
  else{
    $_SESSION['booked'] = 1;
  }
  header("Location: hotels.php");
}

?>
