<?php
$facultyid = filter_input(INPUT_POST, 'FacultyID');
$firstname = filter_input(INPUT_POST, 'FirstName');
$lastname = filter_input(INPUT_POST, 'LastName');
$sportassigned = filter_input(INPUT_POST, 'SportAssigned');


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student athlete health tracker";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO trainingstaff (FacultyID, FirstName, LastName, SportAssigned)
values ('$facultyid','$firstname','$lastname','$sportassigned')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>