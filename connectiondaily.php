<?php
$weight = filter_input(INPUT_POST, 'DailyWeight');
$nummeals = filter_input(INPUT_POST, 'MealsEaten');
$hrssleep = filter_input(INPUT_POST, 'HoursSlept');
$bp = filter_input(INPUT_POST, 'DailyBloodPressure');
$avgresthr = filter_input(INPUT_POST, 'DailyAvgRestingHR');
$avgactivehr = filter_input(INPUT_POST, 'DailyAvgActiveHR');
$abnormalsymp = filter_input(INPUT_POST, 'DailyAbnormalSymptoms');
$healthtest = filter_input(INPUT_POST, 'DailyHealthTestTaken');
$testresults = filter_input(INPUT_POST, 'DailyTestResults');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student athlete health tracker";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO dailydata (DailyWeight, MealsEaten, HoursSlept, DailyBloodPressure, DailyAvgRestingHR, DailyAvgActiveHR, DailyAbnormalSymptoms, DailyHealthTestTaken, DailyTestResults)
values ('$weight','$nummeals','$hrssleep','$bp','$avgresthr','$avgactivehr','$abnormalsymp','$healthtest','$testresults')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>

<body>
<p>If you are sick click here</p>
<form method="post" action="sickness.html">
<input type="submit" value="Sickness Page" />
</body>

<body>
<p>If you aren't sick click here</p>
<form method="post" action="training.html">
<input type="submit" value="Training Data" />
</body>