<?php
    include_once 'php/connect.php'
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Upcoming Patient Details</title>
        <link rel="stylesheet" href="styles/upcomingpatient.css">
    </head>
    <body>
        <h3> Upcoming Patient Details </h3>
        <table border="1" class="design" align="center">
            <tr>
                <th> Patient ID</th>
                <th> Patient name</th>
            </tr>
            <tr>
                <th> 
                     <?php
                        $sql ="SELECT * FROM signupdata WHERE Patient_ID";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['Patient_ID']."<br>";
                            }
                        }
                     ?>
                </th>
                <th> 
                <?php
                        $sql ="SELECT * FROM signupdata WHERE Patient_ID";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['First_Name'];
                                echo $row['Last_Name']."<br>";
                            }
                        }
                     ?>
                </th>
            </tr>
            
            
        </table>
    </body>
</html>