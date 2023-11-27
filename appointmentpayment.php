<?php
    include_once 'php/connect.php';

    if (isset($_POST['Continue'])) {
        $Card_H_Name = $_POST['Card_H_Name'];
        $Card_Type = $_POST['Card_Type'];
        $Card_No = $_POST['Card_No'];
        $Expiration_Date = $_POST['Expiration_Date'];
        $CVV = $_POST['CVV'];

        $sql = "INSERT INTO card_details (Card_H_Name,Card_Type,Card_No,Expiration_Date,CVV) VALUES ('$Card_H_Name','$Card_Type','$Card_No','$Expiration_Date','$CVV')";
        mysqli_query($conn, $sql);

        header("Location: ../Patient Diagnosing Card.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Appointment Payment</title>
        <link rel="stylesheet" type="text/css" href="styles/appointmentpayment.css">
        <link rel="stylesheet" href="styles/home.css">
    </head>
    <boady>
        <table class="appointmnetpaymnet" border="0">
            <tr>
                <th width="50%">
                    <h2 align="left" style="padding-left:20px;">Appointmnet Details</h2>
                    <table border="0" style="width:100%;padding-left:20px;">
                        <tr align="left">
                            <th>Doctor Name:
                                <?php
                                    $sql = "SELECT * FROM book_appointment WHERE AppointmentID = '25';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Doctor'];
                                        }
                                    }
                                ?>
                            </th>
                        </tr>
                        <tr align="left">
                            <th>Specialization:
                            <?php
                                    $sql = "SELECT * FROM book_appointment WHERE AppointmentID = '25';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Specialization'];
                                        }
                                    }
                                ?>
                            </th>
                        </tr>
                        <tr align="left">
                            <th>Appointment Date:
                            <?php
                                    $sql = "SELECT * FROM book_appointment WHERE AppointmentID = '25';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Date'];
                                        }
                                    }
                                ?>
                            </th>
                        </tr>
                        <tr align="left">
                            <th>Appointment No: 
                            <?php
                                    $sql = "SELECT * FROM book_appointment WHERE AppointmentID = '25';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['AppointmentID'];
                                        }
                                    }
                                ?>
                            </th>
                        </tr>
                    </table> 
                 </th>
            </tr>
        </table> <br>
        <h2 align="left" style="padding-left:20px;">Billing Information</h2>
        <img src="image/payment.png" align="left"> <br><br><br><br><br><br>

        <form onsubmit="return " method="POST" >
            <h3 class="fcolor">Card holder name:</h3>
            <input type="text" name="Card_H_Name" class="inputcard" required> <br>
            <h3 class="fcolor">Card type:</h3>
            <select name="Card_Type" id="cardtype" required>
				<option value="Selectcard1">--Card Type--</option>
                <option value="Visa Card">--Visa Card--</option>
                <option value="Credit Card">--Credit Card--</option>
                <option value="Debit Card">--Debit Card--</option>
                <option value="Master Card">--Master Card--</option>
            </select>
            <h3 class="fcolor">Card no:</h3>
            <input type="text" name="Card_No" class="inputcard" required> <br>
            <h3 class="fcolor">Expiration date:</h3>
            <input type="text" name="Expiration_Date" class="inputcard" required> <br>
            <h3 class="fcolor">CVV:</h3>
            <input type="text" name="CVV" class="inputcard" required> <br>
            <h3 class="fcolor">Accept terms and conditions</h3>
            <input type="checkbox" required>
            <button type="submit" name="Continue" class="inputcard"><a href="Patient Diagnosing Card.php">Continue</a></button>
        </form>

    </boady>
</html>