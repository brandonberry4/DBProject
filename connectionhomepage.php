<html>
<body>
<?php 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student athlete health tracker"; 
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname); 
$query = "SELECT * FROM studentathlete";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          <td> <font face="Arial">Value4</font> </td> 
          <td> <font face="Arial">Value5</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $studentid = $row["StudentID"];
        $firstname = $row["FirstName"];
        $lastname = $row["LastName"];
        $sportname = $row["SportName"];
        $position = $row["Position"]; 

        echo '<tr> 
                  <td>'.$studentid.'</td> 
                  <td>'.$firstname.'</td> 
                  <td>'.$lastname.'</td> 
                  <td>'.$sportname.'</td> 
                  <td>'.$position.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>