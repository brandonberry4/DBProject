<?php
// Initialize the session
session_start();
 
// Include config file
require_once "connectionsignin.php";
 
// Define variables and initialize with empty values
$firstname = $lastname = $id = "";
$firstname_err = $lastname_err = $id_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["firstname"]))){
        $firstname_err = "Please enter FirstName.";
    } else{
        $firstname = trim($_POST["firstname"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["lastname"]))){
        $lastname_err = "Please enter your LastName.";
    } else{
        $lastname = trim($_POST["lastname"]);
    }
	
	// Check if password is empty
    if(empty(trim($_POST["id"]))){
        $id_err = "Please enter your ID.";
    } else{
        $id = trim($_POST["id"]);
    }
    
    // Validate credentials
    if(empty($firstname_err) && empty($lastname_err) && empty($id_err)){
        // Prepare a select statement
        $sql = "SELECT StudentID, FirstName, LastName FROM studentathlete";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_firstname);
            
            // Set parameters
            $param_firstname = $firstname;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $firstname);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($lastname)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["StudentID"] = $id;
                            $_SESSION["FirstName"] = $firstname;                            
                            
                            // Redirect user to welcome page
                            header("location: connectionhomepage.php");
                        } else{
                            // Display an error message if password is not valid
                            $lastname_err = "The last name you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $firstname_err = "No account found with that first name.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                <span class="help-block"><?php echo $firstname_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control">
                <span class="help-block"><?php echo $lastname_err; ?></span>
            </div>
			<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
                <label>ID</label>
                <input type="text" name="id" class="form-control">
                <span class="help-block"><?php echo $id_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="homepage.html">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>