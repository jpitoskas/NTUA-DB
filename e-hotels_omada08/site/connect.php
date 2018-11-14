<?php

$host="localhost";
$user="root";
$password="hotels08";
$dbname="hotels";

$con = new mysqli($host, $user, $password, $dbname)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

?>
