<?php
session_start();
require('php/connect.php'); 
include('php/function.php');


/* login */
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
  $Email = $_POST['Email']; 
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
    $sql = "SELECT * FROM signupdata WHERE Email = '$Email' AND Password = '$Password'";
    $result = mysqli_query ($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0)
    {
      $signupdata_data = mysqli_fetch_assoc($result);
      $_SESSION['userid'] = $signupdata_data['user_id'];
      
      header("Location: Appointment page.php");
      die;
    }
    
  }    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Patient Login page</title>
        <link rel="stylesheet" href="styles/Patient login.css">
    </head>
    <body>
        <div class="login-container">
            <div class="login">
              <form name="login" method="POST">
                <label id="title">Log In</label>
                <br/> <br/> <br/>
                <label id="id-label">Usename<br/></label>
                <input type="text" id="email-input" name="Email" placeholder="Username.." required>
        
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
