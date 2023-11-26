<?php
    function check_login($conn)
    {
        if (isset($_SESSION['Email'])) 
        {
            $Email = $_SESSION['Email'];
            $sql = "SELECT * FROM signupdata WHERE Email = '$Email' limit 1";

            $result = mysqli_query($conn,$sql);
            if ($result && mysqli_num_rows($result) > 0) 
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        header("Location: ../Patient login.php");
        die;
    }
?>