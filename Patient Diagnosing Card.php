<?php
    include_once 'php/connect.php'
?>

<!DOCTYPE html>
<html>

<head>
    <title>Patient Diagnosing Card</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/Patient Diagnosing Card.css">
</head>

<Body>
    <table style="width: 100%; background-color: #fae3d9; border-radius: 12px;" border="0">
        <tr>
            <th width="25%">
                <img src="icon/logo.jpg" width="100" height="100">
            </th>
            <th>
                <h1 align="center" style="font-size: 50px;">HEALTH CARE CENTER</h1>
            </th>
            <th width="25%"><br>
                <img src="icon/profile.png" width="60" height="60"><br>
                <a class="button1 button" href="homepage.php" type="button">SignOut</a>
                <br><br>
            </th>
        </tr>
    </table><br>
    <ul class="menu">
        <li class="menu"><a href="homepage.php">HOME</a></li>
        <li class="menu"><a href="labpage.php">LABORATORY</a></li>
        <li class="menu"><a href="#">PHARMECY</a></li>
        <li class="menu"><a href="Rooms.html">ROOM</a></li>
        <li class="menu"><a href="payment.php">PAYMENT</a></li>
    </ul>
    <div>
        <table class="profile_table" border="0">
            <tr>
                <th width="50%">
                    <h2 align="left" style="padding-left: 20px;">Patient Profile</h2>
                    <table border="0" style="width: 100%;padding-left: 20px;">
                        <tr align="left">
                            <th>Name : 
                            <?php
                                    $sql = "SELECT * FROM signupdata WHERE Patient_ID = '4';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['First_Name'];
                                            echo $row['Last_Name'];
                                        }
                                    }
                                ?>
                            </th>
                        </tr>
                        <tr align="left">
                            <th>Age : 
                            <?php
                                    $sql = "SELECT * FROM signupdata WHERE Patient_ID = '4';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Age'];

                                        }
                                    }
                                ?>
                            </th>
                        </tr>
                    </table><br>
                    <div class="content">
                        <h3>Doctor Description</h3>
                        <a class="btn2" href="" type="button">View All</a>
                    </div>
                    <div class="content">
                        <h3>Lab Reports</h3>
                        <a class="btn2" href="" type="button">View All</a>
                    </div>
                    <div class="content">
                        <h3>Medicine Details</h3>
                        <a class="btn2" href="" type="button">View All</a>
                    </div>
                </th>
                <th  width="50%">
                    <img src="icon/profile.png" align="center" class="profile_pic"> 
                </th>
            </tr>
        </table>
    </div>
    <br>
    <table border="0" style="border-radius: 12px; background-color: #fae3d9; width: 100%;">
        <tr><th>
        <table style="width: 100%; color: black;" border="0">
            <tr align="left">
                <th width="50%">
                <h3><a class="textDeco" href="About page.html">About Us :</a></h3>
                </th>
                <th width="50%">
                    <h3>Contact Us :</h3>
                </th>
            </tr>
            <tr>
                <th align="left" width="50%">
                    It is our aim to make your visit with us a comfortable one.<br>
                    We practice with transparency, this means no suprises.<br>
                    Our doctors are locally trained, regulary educated,and are here<br>
                    to help you make informed decisions about the care we can provide for you.<br>
                    We are here to hold your hand and guide you through sometimes,<br>
                    unfortunately, difficult senarios.<br>
                    We are also here to provide some changing experiences that doctors can offer.<br>
                    Just ask our team that we can achieve for you!.<br>
                    <br><br>
                </th>
                <th>
                    <table border="0" width="100%">
                        <tr align="left">
                            <th><img src="icon/phone.png"></th>
                            <th>Phone Number : 0771234567</th>
                            <th><img src="icon/whatsapp.png"></th>
                        </tr>
                        <tr align="left">
                            <th><img src="icon/gmail.png"></th>
                            <th>Email : medical@gmail.com</th>
                            <th><img src="icon/fb.png"></th>
                        </tr>
                        <tr align="left">
                            <th><img src="icon/address.png"></th>
                            <th>Address : malabe</th>
                            <th><img src="icon/twitter.png"></th>
                        </tr>
                    </table>
                </th>
            </tr>
        </table>
        </th>
        </tr>
    </table>
</Body>

</html>