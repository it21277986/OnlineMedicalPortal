<?php
session_start();
require('php/connect.php'); 
include('php/function.php');


/* login */
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
  $DID = $_POST['DID']; 
  $Password = $_POST['Password'];

  if ($username == "admin")
  {
    $_SESSION['userid'] = "Admin";
    $_SESSION['account'] = "admin";
    header("Location: adminIndex.php");
    die;
  }
  else
 {
    $sql = "SELECT * FROM admin_doctor WHERE DID = '$DID' AND Password = '$Password'";
    $result = mysqli_query ($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0)
    {
      $admin_doctor_data = mysqli_fetch_assoc($result);
      $_SESSION['userid'] = $admin_doctor_data['user_id'];
      
      header("Location: doctor page.php");
      die;
    }
    
  }    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Doctor Login page</title>
        <link rel="stylesheet" href="styles/Patient login.css">
    </head>
    <body>
        <div class="login-container">
            <div class="login">
              <form name="login" method="POST">
                <label id="title">Log In</label>
                <br/> <br/> <br/>
                <label id="id-label">Usename<br/></label>
                <input type="text" id="email-input" name="DID" placeholder="Username.." required>
        
                <label id="password-label"><br/>Password<br/></label>
                <input type="password" id="password-input" name="Password" placeholder="Password.." required>
                <br/>
                <input id="submit" type="submit" value="Login">
                <h4 class="word" style="color: black;"><a>Forget password ?</a></h4>
              </form>
            </div>
          </div>
    </body>
</html>
