<?php

session_start();
include_once('connect.php');

if (isset($_POST['IRS'])){
  unset( $_SESSION['errorMessage'] );
  unset($_SESSION['Hotel_ID_E']);
  unset($_SESSION['fname_E']);
  unset($_SESSION['lname_E']);
  unset($_SESSION['IRS_E']);
  unset($_SESSION['Hotel_Name_E']);
  unset($_SESSION['logine']);

  $irs = $_POST['IRS'];

  $query = "SELECT * FROM employee WHERE IRS_E = '".$irs."' LIMIT 1";
  $query2 = "SELECT * FROM works WHERE IRS_E_works = '".$irs."'";


  $res = mysqli_query($con, $query);
  $res2 = mysqli_query($con, $query2);

  while($row = mysqli_fetch_assoc($res)) {
    $fname = $row['First_Name_E'];
    $lname = $row['Last_Name_E'];
    $irse = $row['IRS_E'];
  }

  $temp = mysqli_fetch_array($res2);
  $hotel_id = $temp['Hotel_ID_works'];

  $query3 = "SELECT * FROM hotel WHERE Hotel_ID = '".$hotel_id."'";
  $res3 = mysqli_query($con, $query3);

  $temp = mysqli_fetch_array($res3);
  $hotel_name = $temp['Name_H'];

  $_SESSION['Hotel_ID_E'] = $hotel_id;
  $_SESSION['fname_E'] = $fname;
  $_SESSION['lname_E'] = $lname;
  $_SESSION['IRS_E'] = $irse;
  $_SESSION['Hotel_Name_E'] = $hotel_name;

  if (mysqli_num_rows($res) == 1){
    $_SESSION['logine'] = 1;
    header("Location: EmployeeReserves.php");
    exit();
  }
  else {
    $_SESSION['errorMessage'] = 1;
    header("Location: employee_login.php");
    exit();
  }
}
mysqli_free_result($res);
mysqli_free_result($res2);
mysqli_free_result($res3);

?>
