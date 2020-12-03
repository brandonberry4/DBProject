<?php
$basweight = filter_input(INPUT_POST, 'BaseWeight');
$basebp = filter_input(INPUT_POST, 'BaseBloodPressure');
$baseavgresthr = filter_input(INPUT_POST, 'BaseAvgRestingHR');
$baseavgactivehr = filter_input(INPUT_POST, 'BaseAvgActiveHR');
$basevo2 = filter_input(INPUT_POST, 'BaseVO2Max');
$baseecg = filter_input(INPUT_POST, 'BaseECG');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student athlete health tracker";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO baselinedata (BaseWeight, BaseBloodPressure, BaseAvgRestingHR, BaseAvgActiveHR, BaseVO2Max, BaseECG )
values ('$basweight','$basebp','$baseavgresthr','$baseavgactivehr','$basevo2','$baseecg')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>