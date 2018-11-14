<?php

require_once('connect.php');

session_start();
$hot = $_SESSION['Hotel_ID_E'];
$irs = $_SESSION['IRS_E'];
$fname = $_SESSION['fname_E'];

if(isset($_SESSION['logine'])){
	$jmsg="Employee login successful! ".'\n'."Hello, ".$fname.'.\n';
	echo '<script language="javascript">';
	echo 'alert("'.$jmsg.'");';
	echo '</script>';
	unset($_SESSION['logine']);
}

$query = "SELECT * FROM employee_reservations WHERE Hotel_ID_R ='$hot'";

$recordss = mysqli_query($con,$query);

echo '<html>';
echo '<head>';
echo '<title>Hotel Reservations</title>';
// echo '<link rel="stylesheet" type="text/css" href="graphics.css"/>';
echo '<style>
body{
	background-image:url("reception.jpg");
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
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

#results input[type="text"]{
	border: 1px solid #ccc;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
  margin: 0 0 5px;
  padding: 2px 3px;
}

#accept
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
#accept:hover
{
    cursor: pointer;
    background: #00FF00;
    color: #000;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
}

#decline
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
#decline:hover
{
    cursor: pointer;
    background: #FF0000;
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
echo '<table width="500px">';
echo "<h2>Available Reservations for ".$_SESSION['Hotel_Name_E']."</h2>";
if (mysqli_num_rows($recordss) == 0){
  echo "No reservations available yet! :(";
}
else{
echo '<tr>';
// printing table headers
echo "<td><b>Room Number</td>";
echo "<td><b>Customer IRS Number</td>";
echo "<td><b>Arrival Date</td>";
echo "<td><b>Departure Date</td>";
echo "<td><b>Paid</td>";
echo "<td><b>Payment Amount (€)</td>";
echo "<td><b>Payment Method</td>";
echo "</tr>\n";

  // printing table rows
	while ($row = mysqli_fetch_array($recordss))
	{
		echo "<tr>";
		echo "<td>".$row['Room_ID']."</td>";
		echo "<td>".$row['IRS_C_reserves']."</td>";
		echo "<td>".$row['Start_Date']."</td>";
		echo "<td>".$row['Finish_Date']."</td>";
		echo "<td>".$row['Paid']."</td>";
		if ($row['Paid'] == 'No'){
			echo "<form action=OnAccept.php method=post>";
			echo "<td><input type=text name=Pamount></td>";
			echo "<td><select name=Pmethod><option value='Cash' selected>Cash</option>
											<option value='Card' >Credit Card</option>
											</select></td>";
			echo "<input type=hidden name=sdate value='".$row['Start_Date']."'>";
			echo "<input type=hidden name=fdate value='".$row['Finish_Date']."'>";
			echo "<input type=hidden name=roomid value='".$row['Room_ID']."'>";
			echo "<input type=hidden name=irsc value='".$row['IRS_C_reserves']."'>";
			echo "<td><input id='accept' type=submit value='Accept'></td>";
			echo "</form>";
			echo "<form action=OnDecline.php method=post>";
			echo "<input type=hidden name=sdate value='".$row['Start_Date']."'>";
			echo "<input type=hidden name=fdate value='".$row['Finish_Date']."'>";
			echo "<input type=hidden name=roomid value='".$row['Room_ID']."'>";
			echo "<td><input id='decline' type=submit value='Decline'></td>";
			echo "</form>";
		}
		echo "</tr>";
	}
}

mysqli_free_result($recordss);

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
