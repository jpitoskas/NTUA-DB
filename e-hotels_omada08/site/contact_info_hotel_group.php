<?php

session_start();
include_once('connect.php');

if (isset($_GET['hotelgroupid'])){
  $hgID = $_GET['hotelgroupid'];

  $query = "SELECT * FROM hotel_group WHERE Hotel_Group_ID = '$hgID'";
  $query2 = "SELECT * FROM phone_hotel_group WHERE Hotel_Group_ID_phone = '$hgID'";
  $query3 = "SELECT * FROM email_hotel_group WHERE Hotel_Group_ID_email = '$hgID'";

  $results = mysqli_query($con, $query);
  $phones = mysqli_query($con, $query2);
  $emails = mysqli_query($con, $query3);

  echo '<html>';
  echo '<head>';
  echo '<title>Hotel Group Contact Info</title>';
  // echo '<link rel="stylesheet" type="text/css" href="graphics.css"/>';
  echo '<style>
  body {
  	background-image:url("hotels.jpg");
  	// background-repeat : no-repeat;
  	margin: 0;
  	padding: 0;
    font-family: "Trebuchet MS", Verdana, sans-serif;
  }

  table {
      font-family: "Trebuchet MS", Verdana, sans-serif;
      color: #fff;
      border-collapse: collapse;
      width: 100%;
  }

  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even) {
      background-color: rgba(168, 168, 168, 0.4);
  }

  #results {
  	background: rgba(0, 0, 0, 0.7);
  	color: #fff;
  	// top: 55%;
    // left: 55%;
  	// position: absolute;
    // transform: translate(-50%,-50%);
  	box-sizing: border-box;
  	padding: 70px 20px;
  	font-size : 20px;
  	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }

  #results input[type="submit"]
  {
      border: none;
      outline: none;
      height: 30px;
      background: ##00ffff;
      color: #000;
      font-size: 16px;
      border-radius: 10px;
      display: block;
      margin: auto;
  }

  #results input[type="submit"]:hover
  {
      cursor: pointer;
      background: #0000FF;
      color: #FFF;
      -webkit-transition: background 0.3s ease-in-out;
      -moz-transition: background 0.3s ease-in-out;
      transition: background-color 0.3s ease-in-out;
  }

  nav
  {
  	position: fixed;
  	top: 0;
  	left: 0;
  	width: 100%;
  	height: 70px;
  	background: rgba(0,0,0,0.6);
  	padding: 0 100px;
  	box-sizing: border-box;
  }

  nav .brand
  {
  	float: left;
  	height: 100%;
    line-height: 70px;
  }

  nav .brand h2
  {
  	margin: 0;
  	padding: 0;
  	color: #fff;
  }

  nav ul
  {
  	float: right;
  	display: flex;
  	margin: 0;
  	padding: 0;

  }

  nav ul li
  {
  	list-style: none;
  }

  nav ul li a
  {
  	position: relative;
  	display: block;
  	height: 70px;
  	line-height: 70px;
  	padding: 0 20px;
  	box-sizing: border-box;
  	color: #fff;
  	text-decoration: none;
  	text-transform: uppercase;
  	transition: .5s;
  }

  nav ul li a
  {
  	display: block;
  }

  nav ul li a:hover
  {
  	color: black;
  	background-color: #fff;
  }

  </style>';

  $row = mysqli_fetch_array($results);

  echo '</head>';
  echo '<body>';
  echo '<div id="results">';
  echo '<table width="500px">';
  echo "<h2>Contact Info for ".$row['Name_HG']."</h2>";

  if (mysqli_num_rows($results) == 0){
    echo "No results found! :(";
  }

  else {
    echo '<tr>';
    // printing table headers
    echo "<td><b>City</b></td>";
    echo "<td><b>Street</b></td>";
    echo "<td><b>Number</b></td>";
    echo "<td><b>Postal Code</b></td>";
    echo "</tr>\n";

    // printing table rows
    echo "<tr>";
    echo "<td>".$row['A_City_HG']."</td>";
    echo "<td>".$row['A_Street_HG']."</td>";
    echo "<td>".$row['A_Number_HG']."</td>";
    echo "<td>".$row['A_Postal_Code_HG']."</td>";
    echo "</tr>\n";

    echo '</table>';
    echo '<table>';
    echo "<h2> </h2>";
    echo '<tr>';
    // printing phone table headers
    echo "<td><b>Phone(s)</b></td>";
    echo "</tr>\n";

    // printing table rows
    while($row2 = mysqli_fetch_array($phones))
    {
        echo "<tr>";
        echo "<td>".$row2['Phone_HG']."</td>";
        echo "</tr>\n";
    }

    echo '</table>';
    echo '<table>';
    echo "<h2> </h2>";
    echo '<tr>';
    // printing email table headers
    echo "<td><b>Email(s)</b></td>";
    echo "</tr>\n";

    // printing table rows
    while($row3 = mysqli_fetch_array($emails))
    {
        echo "<tr>";
        echo "<td>".$row3['Email_HG']."</td>";
        echo "</tr>\n";
    }

  }

  mysqli_free_result($results);
  mysqli_free_result($phones);
  mysqli_free_result($emails);

  echo '</table>';
  echo '</div>';
  echo '</body>';
  echo '</html>';
  echo '<nav>
    <div class="brand">
      <h2>Hotels</h2>
    </div>
    <ul>
      <li><a href="hotels.php">Home</a></li>
      <li><a href="customer_login.php">Customer</a></li>
      <li><a href="employee_login.php">Employee</a></li>
      <li><a href="admin_login.php">Admin</a></li>
    </ul>
  </nav>';
}

?>
