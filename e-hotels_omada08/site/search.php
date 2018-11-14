<?php

session_start();
include_once('connect.php');

$query = "SELECT * FROM search_table WHERE TRUE ";

if (!empty($_POST['capacity'])){
  $cap = $_POST['capacity'];
  $query = $query . "AND Capacity = '$cap' ";
}
if (!empty($_POST['city'])){
  $city = $_POST['city'];
  $query = $query . "AND A_City_H = '$city' ";
}
if (!empty($_POST['hotel_group'])){
  $hg = $_POST['hotel_group'];
  $query = $query . "AND Name_HG = '$hg' ";
}
if (!empty($_POST['stars'])){
  $stars = $_POST['stars'];
  $query = $query . "AND Stars = '$stars' ";
}
if (!empty($_POST['maxprice'])){
  $max = $_POST['maxprice'];
  $query = $query . "AND '$max'>= Price ";
}
if (!empty($_POST['air_cond'])){
  $air = $_POST['air_cond'];
  $query = $query . "AND Air_Conditioning = '$air' ";
}
if (!empty($_POST['fridge'])){
  $fridge = $_POST['fridge'];
  $query = $query . "AND Refridgerator = '$fridge' ";
}
if (!empty($_POST['tv'])){
  $tv = $_POST['tv'];
  $query = $query . "AND TV = '$tv' ";
}
if (!empty($_POST['wifi'])){
  $wifi = $_POST['wifi'];
  $query = $query . "AND Wifi = '$wifi' ";
}
if (!empty($_POST['park'])){
  $park = $_POST['park'];
  $query = $query . "AND Parking = '$park' ";
}
if (!empty($_POST['smoke'])){
  $smoke = $_POST['smoke'];
  $query = $query . "AND Smoking = '$smoke' ";
}
if (!empty($_POST['balcony'])){
  $balcony = $_POST['balcony'];
  $query = $query . "AND Balcony = '$balcony' ";
}
if (!empty($_POST['sea'])){
  $sea = $_POST['sea'];
  $query = $query . "AND Sea_View = '$sea' ";
}

//$query = $query . "AND NOT EXISTS (SELECT * FROM reserves WHERE reserves.Room_ID_reserves = hotel_room.Room_ID) ";

if (!empty($_POST['ardate']) && !empty($_POST['dedate'])){
  unset( $_SESSION['errorMessage']);
  $ardate = date('Y-m-d',strtotime($_POST['ardate']));
  $dedate = date('Y-m-d',strtotime($_POST['dedate']));
  if ($ardate >= $dedate || $dedate <= $ardate){
    $_SESSION['errorMessage'] = 1;
    header("Location: hotels.php");
    exit();
  }
  else{
    $_SESSION['ardate'] = date('Y-m-d',strtotime($ardate));
    $_SESSION['dedate'] = date('Y-m-d',strtotime($dedate));
    $query = $query . "AND NOT EXISTS (SELECT * FROM reserves WHERE reserves.Room_ID_reserves = Room_ID AND ((reserves.Finish_Date >= '$ardate' AND reserves.Start_Date <= '$ardate') OR (reserves.Finish_Date >= '$dedate' AND reserves.Start_Date <= '$dedate')) )";
    //$query = $query . "AND NOT EXISTS (SELECT * FROM reserves WHERE reserves.Room_ID_reserves = hotel_room.Room_ID AND ((reserves.Start_Date > '$ardate' AND reserves.Start_Date > '$dedate') OR (reserves.Finish_Date < '$ardate' AND reserves.Finish_Date < '$dedate')) )";/*OR (reserves.Start_Date IS NULL AND reserves.Finish_Date IS NULL)) ";*/
  }
}



$results = mysqli_query($con, $query);

echo '<html>';
echo '<head>';
echo '<title>Search Results</title>';
// echo '<link rel="stylesheet" type="text/css" href="graphics.css"/>';
echo '<style>
body{
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

table td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

table tr:nth-child(even) {
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
    background: #ffffff;
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
echo '</head>';
echo '<body>';
echo '<div id="results">';
echo '<table id="table2">';
echo "<h3>Total Available Hotel Rooms for selected Dates in:</h3>";
$cities = "SELECT * FROM cities";
$return = mysqli_query($con, $cities);
echo '<tr>';
while($city = mysqli_fetch_array($return)){
  echo "<td><b>".$city['A_City_H']."</td>";
}
echo '</tr>';
$return = mysqli_query($con, $cities);
echo '<tr>';
while($city = mysqli_fetch_array($return)){
  $city1 = $city['A_City_H'];
  $total = "SELECT * FROM search_table WHERE A_City_H = '$city1' AND NOT EXISTS (SELECT * FROM reserves WHERE reserves.Room_ID_reserves = Room_ID AND ((reserves.Finish_Date >= '$ardate' AND reserves.Start_Date <= '$ardate') OR (reserves.Finish_Date >= '$dedate' AND reserves.Start_Date <= '$dedate')) )";
  $number = mysqli_query($con, $total);
  echo "<td>".mysqli_num_rows($number)."</td>";
}
echo '</tr>';
echo '</table>';
echo '<table id="table1">';
echo "<h2>Available Hotel Rooms for Dates from ".$ardate." to ".$dedate."</h2>";
if (mysqli_num_rows($results) == 0 || (!empty($_POST['nrooms']) && mysqli_num_rows($results) < $_POST['nrooms'])){
  echo "No results found! :(";
}
else{
echo '<tr>';
// printing table headers
echo "<td><b>Hotel Group Name</td>";
echo "<td><b>Hotel Name</td>";
echo "<td><b>Hotel Stars</td>";
echo "<td><b>Hotel City</td>";
echo "<td><b>Room Number</td>";
echo "<td><b>Room Capacity</td>";
echo "<td><b>Room Price (€)</td>";
echo "<td><b>Air Conditioning</td>";
echo "<td><b>Refridgerator</td>";
echo "<td><b>TV</td>";
echo "<td><b>WiFi</td>";
echo "<td><b>Parking</td>";
echo "<td><b>Smoking</td>";
echo "<td><b>Balcony</td>";
echo "<td><b>Sea View</td>";
echo "<td><b>Repairs Needed</td>";
echo "<td><b>Expandable</td>";
echo "</tr>\n";

  // printing table rows
  while($row = mysqli_fetch_array($results))
  {
      echo "<tr>";
      echo "<td><a target='_blank' href=contact_info_hotel_group.php?hotelgroupid=".($row['Hotel_Group_ID'])."><font color='FFFFF'>".$row['Name_HG']."</font></a></td>";
      echo "<td><a target='_blank' href=contact_info_hotel.php?hotelid=".($row['Hotel_ID'])."><font color='FFFFF'>".$row['Name_H']."</font></a></td>";
      echo "<td>".$row['Stars']."</td>";
      echo "<td>".$row['A_City_H']."</td>";
      echo "<td>".$row['Room_ID']."</td>";
      echo "<td>".$row['Capacity']."</td>";
      echo "<td>".$row['Price']."</td>";
      echo "<td>".$row['Air_Conditioning']."</td>";
      echo "<td>".$row['Refridgerator']."</td>";
      echo "<td>".$row['TV']."</td>";
      echo "<td>".$row['Wifi']."</td>";
      echo "<td>".$row['Parking']."</td>";
      echo "<td>".$row['Smoking']."</td>";
      echo "<td>".$row['Balcony']."</td>";
      echo "<td>".$row['Sea_View']."</td>";
      echo "<td>".$row['Repairs_Needed']."</td>";
      echo "<td>".$row['Expandable']."</td>";
      echo "<td><form action=booknow.php?roomid=".$row['Room_ID']." method=POST>
      <input type='submit' name='book' value='Book Now!'>
      </form></td>";
      echo "</tr>\n";
  }
}

mysqli_free_result($results);

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

?>
