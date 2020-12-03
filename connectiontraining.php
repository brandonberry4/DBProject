<?php
$participation = filter_input(INPUT_POST, 'TrainingParticipation');
$workout = filter_input(INPUT_POST, 'TrainingWorkout');
$avghr = filter_input(INPUT_POST, 'TrainingAvgHR');
$injuriespain = filter_input(INPUT_POST, 'TrainingInjuriesOrPain');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student athlete health tracker";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO trainingdata (TrainingParticipation, TrainingWorkout, TrainingAvgHR, TrainingInjuriesOrPain)
values ('$participation','$workout','$avghr','$injuriespain')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>

<body>
<p>Click to go to view data</p>
<form method="post" action="connectionhomepage.php">
<input type="submit" value="View All Data" />
</body>