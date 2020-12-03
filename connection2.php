<?php
$firstname = filter_input(INPUT_POST, 'FirstName');
$lastname = filter_input(INPUT_POST, 'LastName');
$studentid = filter_input(INPUT_POST, 'StudentID');
$position = filter_input(INPUT_POST, 'Position');
$sportname = filter_input(INPUT_POST, 'SportName');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student athlete health tracker";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO studentathlete (FirstName, LastName, StudentID, Position, SportName)
values ('$firstname','$lastname','$studentid','$position','$sportname')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>