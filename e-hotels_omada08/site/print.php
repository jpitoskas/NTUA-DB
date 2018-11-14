<?php

session_start();
include_once('connect.php');
$fname = $_SESSION['fname_E'];

$jmsg="Employee login successful! ".'\n'."Hello, ".$fname.'.\n';
echo '<script language="javascript">';
echo 'alert("'.$jmsg.'");';  //not showing an alert box.
echo '</script>';

$table = 'hotel_room';

$query="SELECT * FROM {$table} WHERE Hotel_ID_R = '".$hotel_id."'";
$results = mysqli_query($con, $query);

$fields_num = mysqli_num_fields($results);

echo "<h1>Hotel Rooms</h1>";
echo "<table><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysqli_fetch_field($results);
    if ($i>=1 && $i<$fields_num-1){
      echo "<td>{$field->name}</td>";
    }
}
echo "</tr>\n";
// printing table rows
while($row = mysqli_fetch_row($results))
{
  $cnt = 0;
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell){
      if ($cnt>=1 && $cnt<$fields_num-1){
        echo "<td>$cell</td>";
      }
      $cnt++;
    }
    echo "</tr>\n";
}
mysqli_free_result($results);

?>
