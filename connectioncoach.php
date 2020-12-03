<?php
$facultyid = filter_input(INPUT_POST, 'FacultyID');
$firstname = filter_input(INPUT_POST, 'FirstName');
$lastname = filter_input(INPUT_POST, 'LastName');
$sportcoached = filter_input(INPUT_POST, 'SportCoached');
$positioncoached = filter_input(INPUT_POST, 'PositionCoached');


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student athlete health tracker";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO coach (FacultyID, FirstName, LastName, SportCoached, PositionCoached)
values ('$facultyid','$firstname','$lastname','$sportcoached','$positioncoached')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>
<body>
<p>Click to go to sign-in page</p>
<form method="post" action="signin.html">
<input type="submit" value="Sign in" />
</body>