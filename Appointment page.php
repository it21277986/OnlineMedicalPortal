<!DOCTYPE html>
<html>

<head>
    <title>Book an Appointment</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/appointment page.css">
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
                <a class="button1 button" href="homepage.html" type="button">SignOut</a>
                <br><br>
            </th>
        </tr>
    </table><br>
    <ul class="menu">
        <li class="menu"><a href="homepage.php">HOME</a></li>
        <li class="menu"><a href="labpage.php">LABORATORY</a></li>
        <li class="menu"><a href="#">PHARMECY</a></li>
        <li class="menu"><a href="#">ROOM</a></li>
        <li class="menu"><a href="#">PAYMENT</a></li>
    </ul>
    <table border="0" class="ap_table">
        <tr>
            <th align="left">
                <form action="php/Apointment.php" method="POST">
                    <img src="image/appointment_img1.jpg" class="app_img">
                    <h2 style="padding-left: 5%;">
                        <p>Find a Doctor.Book an Appointment.</p>Pay Easy
                    </h2>
                    <select name="Doctor" class="app_doc" required>
                        <option value="SelectDoctor1">--Select Doctor--</option>
                        <option value="Dr.Chinthaka De Silva">Dr.Chinthaka De Silva</option>
                        <option value="Dr.Neranjan Ramanayake">Dr.Neranjan Ramanayake</option>
                        <option value="Dr.Hiran Amarsekara">Dr.Hiran Amarsekara</option>
                        <option value="Dr.Ananda Perera">Dr.Ananda Perera</option>
                        <option value="Dr.Anusha Dias">Dr.Anusha Dias</option>
                    </select><br><br>
                    <select name="Specialization" class="app_doc" required>
                        <option value="SelectSpecialization">--Select Specialization--</option>
                        <option value="Genaral Phisician">Genaral Phisician</option>
                        <option value="Genaral Surgeon">Genaral Surgeon</option>
                        <option value="Genaral Phisician">Genaral Phisician</option>
                        <option value="Orthopedic Surgeon">Orthopedic Surgeon</option>
                        <option value="Eye Surgeon">Eye  Surgeon</option>
                    </select><br><br>
                    <input  type="date" name="Date" class="app_doc" style="width: 30%;" required><br><br>
                    <button type="submit" name="submit" align="center" class="button_1 submit_btn" >Submit</button>           
                </form>
                <br>
            </th>
            <th>
                <div class="content">
                    <h3>Patient Reports</h3>
                    <a class="btn2" href="" type="button">View All</a>
                </div>
                <div class="content">
                    <h3>Lab Reports</h3>
                    <a class="btn2" href="" type="button">View All</a>
                </div>
            </th>
        </tr>
    </table>

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
</Body>

</html>