<?php
//   include("config.php");
//   session_start();
   
//   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
//     $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
//      $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
//	  $id = mysqli_real_escape_string($db,$_POST['id']); 
      
//      $sql = "SELECT StudentID FROM studentathlete WHERE LastName = '$lastname' and ID = '$id'";
//      $result = mysqli_query($db,$sql);
//      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
//      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
//      if($count == 1) {
//         session_register("StudentID");
//         $_SESSION['login_user'] = id;
         
//         header("location: signin.php");
//      }else {
//         $error = "Your Login Name or Password is invalid";
//      }
//   }
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in</title>
</head>
<body>
<link href = "stylesheet.css" type = "text/css" rel = "stylesheet" />
    <div class="wrapper">
        <h2>Sign in</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="connectionhomepage.php" method="post">
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control"">
            </div>    
            <div>
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control">
            </div>
			<div>
                <label>ID</label>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="homepage.html">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>