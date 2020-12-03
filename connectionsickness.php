<?php
$weight = filter_input(INPUT_POST, 'SickWeight');
$vo2max = filter_input(INPUT_POST, 'SickVO2Max');
$ecg = filter_input(INPUT_POST, 'SickECG');
$bp = filter_input(INPUT_POST, 'SickBloodPressure');
$avgresthr = filter_input(INPUT_POST, 'SickAvgRestingHR');
$avgactivehr = filter_input(INPUT_POST, 'SickAvgActiveHR');
$abnormalsymp = filter_input(INPUT_POST, 'SickAbnormalSymptoms');
$healthtest = filter_input(INPUT_POST, 'SickHealthTestTaken');
$testresults = filter_input(INPUT_POST, 'SickTestResults');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student athlete health tracker";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO sickdata (SickWeight, SickVO2Max, SickECG, SickBloodPressure, SickAvgRestingHR, SickAvgActiveHR, SickAbnormalSymptoms, SickHealthTestTaken, SickTestResults)
values ('$weight','$vo2max','$ecg','$bp','$avgresthr','$avgactivehr','$abnormalsymp','$healthtest','$testresults')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>

<body>
<p>Click to go to training data page</p>
<form method="post" action="training.html">
<input type="submit" value="Training" />
</body>