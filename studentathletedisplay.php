<!DOCTYPE html>
<html>
<head>
<title>Student Athlete Data</title>
</head>
<body>
<link href = "stylesheet.css" type = "text/css" rel = "stylesheet" />
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

<body>
<table>
<tr>
<th>Weight</th>
<th>Blood Pressure</th>
<th>Avg Rest Heart Rate</th>
<th>Avg Active Heart Rate</th>
<th>VO2 Max</th>
<th>ECG</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "student athlete health tracker");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//Data from StudentAthlete
$sql = "SELECT BaseWeight, BaseBloodPressure, BaseAvgRestingHR, BaseAvgActiveHR, BaseVO2Max, BaseECG FROM baselinedata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["BaseWeight"]. "</td><td>" . $row["BaseBloodPressure"] . "</td><td>"
. $row["BaseAvgRestingHR"]. "</td></tr>" . $row["BaseAvgActiveHR"] . "</td></tr>" . $row["BaseVO2Max"] . "</td></tr>"
. $row["BaseECG"] . "</td></tr>";
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
<th>Weight</th>
<th>Number Meals Eaten</th>
<th>Hours of Sleep</th>
<th>Blood Pressure</th>
<th>Avg Rest Heart Rate</th>
<th>Avg Active Heart Rate</th>
<th>Abnormal Symptoms</th>
<th>Health Tests Taken</th>
<th>Test Results</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "student athlete health tracker");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//Data from StudentAthlete
$sql = "SELECT DailyWeight, MealsEaten, HoursSlept, DailyBloodPressure, DailyAvgRestingHR, DailyAvgActiveHR, DailyAbnormalSymptoms, DailyHealthTestTaken, DailyTestResults FROM dailydata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["DailyWeight"]. "</td><td>" . $row["MealsEaten"] . "</td><td>"
. $row["HoursSlept"]. "</td></tr>" . $row["DailyBloodPressure"] . "</td></tr>" . $row["DailyAvgRestingHR"] . "</td></tr>"
. $row["DailyAvgActiveHR"] . "</td></tr>" . $row["DailyAbnormalSymptoms"] . "</td></tr>"
. $row["DailyHealthTestTaken"] . "</td></tr>" . $row["DailyTestResults"] . "</td></tr>";
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
<th>Weight</th>
<th>Blood Pressure</th>
<th>Avg Rest Heart Rate</th>
<th>Avg Active Heart Rate</th>
<th>VO2 Max</th>
<th>ECG</th>
<th>Abnormal Symptoms</th>
<th>Health Tests Taken</th>
<th>Test Results</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "student athlete health tracker");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//Data from StudentAthlete
$sql = "SELECT SickWeight, SickBloodPressure, SickAvgRestingHR, SickAvgActiveHR, SickVO2Max, SickECG, 
SickAbnormalSymptoms, SickHealthTestTaken, SickTestResults FROM sickdata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["SickWeight"]. "</td><td>" . $row["SickBloodPressure"] . "</td><td>"
. $row["SickAvgRestingHR"]. "</td></tr>" . $row["SickAvgActiveHR"] . "</td></tr>" . $row["SickVO2Max"] . "</td></tr>"
. $row["SickECG"] . "</td></tr>" . $row["SickAbnormalSymptoms"] . "</td></tr>"
. $row["SickHealthTestTaken"] . "</td></tr>" . $row["SickTestResults"] . "</td></tr>";
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
<th>Participation</th>
<th>Workout</th>
<th>Avg Heart Rate</th>
<th>Injuries or Pains</th>
<th>Test Results</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "student athlete health tracker");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//Data from StudentAthlete
$sql = "SELECT TrainingParticipation, TrainingWorkout, TrainingAvgHR, TrainingInjuriesOrPain FROM trainingdata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["TrainingParticipation"]. "</td><td>" . $row["TrainingWorkout"] . "</td><td>"
. $row["TrainingAvgHR"]. "</td></tr>" . $row["TrainingInjuriesOrPain"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>