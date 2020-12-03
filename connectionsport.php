<?php
$sportid = filter_input(INPUT_POST, 'SportID');
$sportname = filter_input(INPUT_POST, 'SportName');
$numathletes = filter_input(INPUT_POST, 'NumOfAthletes');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student athlete health tracker";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO sport (SportID, SportName, NumOfAthletes)
values ('$sportid','$sportname','$numathletes')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>