<!DOCTYPE html>
<html>

<head>
    <title> Signup Page</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" type="text/css" href="styles/signuppage.css">
    <script src="js/signuppage.js"></script>
</head>

<body>
    <table style="width: 100%; background-color: #fae3d9; border-radius: 12px; " border="0">
        <tr>
            <th width="25%">
                <img src="icon/logo.jpg" width="100" height="100">
            </th>
            <th>
                <h1 align="center" style="font-size: 50px;">HEALTH CARE CENTER</h1>
            </th>
            <th width="25%"><br><br><br>
            </th>
        </tr>
    </table><br>
    <table border="1" style="width: 100%; background-image:url('image/backgroundimage6.jpg')">
        <tr>
            <th align="left">
                <form action="php/Signup.php" onsubmit="return checkPassword()" method="POST">
                    <h3 class="fcolor"> First name:</h3>
                    <input type="text" name="First_Name" value="First name" class="design1" required> <br /> <br />
                    <h3 class="fcolor"> Last name:</h3>
                    <input type="text" name="Last_Name" value="Last name" class="design1" required> <br /> <br />
                    <h3 class="fcolor"> NIC:</h3>
                    <input type="text" name="NIC" value="NIC" class="design1" required> <br /> <br />
                    <h3 class="fcolor"> Date of Birth:</h3>
                    <input type="date" name="DOB" style="width: 15%;" class="design1" required><br /><br />
                    <h3 class="fcolor"> Age:</h3>
                    <input type="number" name="Age" style="width: 10%;" class="design1" required> <br /><br />
                    <h3 class="fcolor"> Gender:</h3>
                    <input type="radio" name="Gender" value="Male" checked> Male
                    <input type="radio" name="Gender" value="Female" checked> Female <br /><br />
                    <h3 class="fcolor"> Address:</h3>
                    <textarea name="Address" rows="8" cols="50" class="design1" required></textarea> <br /><br />
                    <h3 class="fcolor"> Contact Number:</h3>
                    <input type="phone" name="Contact_No" pattern="{10}" placeholder="1234567890" class="design1" required>
                    <br /><br />
                    <h3 class="fcolor"> Email:</h3>
                    <input type="email" name="Email" placeholder="abc@gmail.com" pattern="{2,3}" class="design1" required> <br /><br />
                    <h3 class="fcolor"> Password:</h3>
                    <input type="password" name="Password" id="pwd" class="design1" required> <br/><br/>
                    <h3 class="fcolor"> Confirm Password:</h3>
                    <input type="password" name="cnfr_Password" id="cnfrmpwd" class="design1" required> <br /><br />
                    <input type="checkbox" required>
                    <h3 class="fcolor">Accept privacy policy and terms.</h3>
                    <button type="submit" name="submit" class="subBtn" onclick="enableButton()">Submit</button>
            </th>
        </tr>
    </table>
    </form>
</body>

</html>