<!DOCTYPE html>
<html>
<head>
<title>Coach Data</title>
</head>
<body>
<link href = "stylesheet.css" type = "text/css" rel = "stylesheet" />
<table>
<tr>
<th>Faculty ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Sport</th>
<th>Position Coached</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "student athlete health tracker");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//Data from StudentAthlete
$sql = "SELECT FacultyID, FirstName, LastName, SportCoached, PositionCoached FROM coach";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["FacultyID"]. "</td><td>" . $row["FirstName"] . "</td><td>"
. $row["LastName"]. "</td></tr>" . $row["SportCoached"] . "</td></tr>" . $row["PositionCoached"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>

<body>
<table>
<tr>
<th>SportID</th>
<th>Sport</th>
<th>Number of Athletes</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "student athlete health tracker");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//Data from StudentAthlete
$sql = "SELECT SportID, SportName, NumOfAthletes FROM sport";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["SportID"]. "</td><td>" . $row["SportName"] . "</td><td>"
. $row["NumOfAthletes"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>

<body>
<table>
<tr>
<th>Student ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Sport</th>
<th>Position</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "student athlete health tracker");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//Data from StudentAthlete
$sql = "SELECT StudentID, FirstName, LastName, SportName, Position FROM studentathlete";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["StudentID"]. "</td><td>" . $row["FirstName"] . "</td><td>"
. $row["LastName"]. "</td></tr>" . $row["SportName"] . "</td></tr>" . $row["Position"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>