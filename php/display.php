  <?php
    include_once 'connect.php'
?>

<!DOCTYPE html>
<html>
<head>
   
    <title>display</title>
    <link rel="stylesheet" href="../styles/display.css">
</head>
<body>
    <div class="bdy">
        <button class="butn"><a href="../admin doctor login.php" >Add Account</a></button>
        <table border="1" align="center" style="width: 80%" class="table">
                <tr>
                    <th>Doctor ID </th>
                    <th>Name</th>
                    <th>specialization field</th>
                    <th>email</th>
                    <th>password</th>
                    <th>operations</th>
                </tr>
                <tr>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['DID'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Doctor_Name'];
                                        }
                                    }
                                ?> 
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Specialization'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Email'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Password'];
                                        }
                                    }
                                ?>
                    </th>
                     
                <th>
                    <button class="update"><a href="update.php">update</a></button>
                    <button class="delete"><a href="delete.php?deleteid='.$DID.'">delete</a></button>
                    
                </th>

                </tr>
               
                
                
                <tr>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '2';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['DID'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '2';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Doctor_Name'];
                                        }
                                    }
                                ?> 
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '2';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Specialization'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '2';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Email'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '2';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Password'];
                                        }
                                    }
                                ?>
                    </th>
                     
                <th>
                    <button class="update"><a href="update.php">update</a></button>
                    <button  class="delete"><a href="delete.php">delete</a></button>
                    
                </th>


                </tr>


                <tr>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '3';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['DID'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '3';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Doctor_Name'];
                                        }
                                    }
                                ?> 
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '3';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Specialization'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '3';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Email'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '3';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Password'];
                                        }
                                    }
                                ?>
                    </th>
                     
                <th>
                    <button class="update"><a href="update.php">update</a></button>
                    <button class="delete"><a href="delete.php">delete</a></button>
                    
                </th>

                </tr>


               
                <tr>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '4';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['DID'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '4';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Doctor_Name'];
                                        }
                                    }
                                ?> 
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '4';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Specialization'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '4';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Email'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '4';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Password'];
                                        }
                                    }
                                ?>
                    </th>
                     
                <th>
                    <button class="update"><a href="update.php">update</a></button>
                    <button  class="delete"><a href="delete.php">delete</a></button>
                    
                </th>

                </tr>


               
                <tr>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '5';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['DID'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '5';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Doctor_Name'];
                                        }
                                    }
                                ?> 
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '5';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Specialization'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                    <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '5';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Email'];
                                        }
                                    }
                                ?>
                    </th>
                    <th>
                        <?php
                                    $sql = "SELECT * FROM admin_doctor WHERE DID = '5';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Password'];
                                        }
                                    }
                                ?>
                                </th>
                
                <th>
                    <button class="update"><a href="update.php">update</a></button>
                    <button  class="delete"><a href="delete.php">delete</a></button>
                    
                </th>

                </tr>

               

        </table>
</div>
    
</body>
</html>
