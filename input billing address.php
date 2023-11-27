<!DOCTYPE html>
<html>

<head>
    <title>Input Billing Details</title>
</head>

<body >
    <table border="1" style="width: 100%;" align="center">
        <tr>
            <th>
                <form action="php/input billing address.php" method="post">
                    <h3 >Patient Name:</h3>
                    <input type="text" name="Patient_Name" required>

                    <h3 >Reference No:</h3>
                    <input type="number" name="Reference_No" required>

                    <h3 >NIC:</h3>
                    <input type="number" name="NIC" required>

                    <h3 >Laboratory charges:</h3>
                    <input type="number" name="Laboratory_charges" required>

                    <h3 >Pharmacy Charges:</h3>
                    <input type="number" name="Pharmacy_Charges" required>

                    <h3 >Total Bill:</h3>
                    <input type="number" name="Total_Bill" required><br><br>

                    <button name="submit" type="submit" class="btn btn-primary">submit</button>
                </form>
            </th>
        </tr>
    </table>


</body>


</html>