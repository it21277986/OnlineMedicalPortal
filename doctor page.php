<!DOCTYPE html>
<html>

<head>
    <title> Doctor interface</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/doctorinterface.css">
    <style>
        .btn1{
            font-size: 14px;
            background: #fae3d9;
            padding: 5px;
            text-align: center;
            text-decoration: none;
            color: black;
            border-radius: 20px;
            cursor: pointer;
        }
    </style>
</head>

<Body>
    <div class="container">
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
                <a class="button1 button" href="home.html" type="button">Sign Out</a>
                <br><br>
            </th>
        </tr>
    </table><br>
    <ul class="menu">
        <li class="menu"><a href="homepage.php">HOME</a></li>
        <li class="menu"><a href="#">LABORATORY</a></li>
        <li class="menu"><a href="#">PHARMECY</a></li>
        <li class="menu"><a href="#">ROOM</a></li>
        <li class="menu"><a href="#">PAYMENT</a></li>
    </ul>
    <br>
    <div class="content">
        <a class="btn1" href="upcomingpatient.php" type="button" class="btn1">Upcoming Patient</a><br><br>
        <a class="btn1" href="" type="button" class="btn1">Laboratory</a><br><br>
        <a class="btn1" href="" type="button" class="btn1">Pharmecy</a><br><br>
    </div>
    <align=left>
        <div class="content">
            <h3>Patient's History</h3>
            <a class="btn2" href="" type="button">View All</a>
        </div>
        </align>
        <br>
        <table border="0" style="border-radius: 12px; background-color: #fae3d9; width: 100%;">
            <tr>
                <th>
                    <table style="width: 100%; color: black;" border="0">
                        <tr align="left">
                            <th width="50%">
                                <h3>About Us :</h3>
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
    </div>
</body>

</html>