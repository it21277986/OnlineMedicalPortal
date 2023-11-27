<?php
    include_once 'php/connect.php'
?>

<!DOCTYPE html>
<html>

<head>
    <title>Total Payment</title>
	<link rel="stylesheet" href="styles/payment.css">
</head>

<body>
	<div class="container">
		<form action="">
			<div class="row">
				<div class="col">
					<h3 class="title">Billing Address</h3>

					<div class="inputbox">
						<span>patient name :
                        <?php
                                    $sql = "SELECT * FROM  input_billing_address WHERE Reference_No = '1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Patient_Name'];
                                        }
                                    }
                                ?>
                        </span>
					</div>

					<div class="inputbox">
						<span>Reference no :
                        <?php
                                    $sql = "SELECT * FROM input_billing_address WHERE Reference_No = '1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Reference_No'];
                                        }
                                    }
                                ?>
                        </span>

					</div>

					<div class="inputbox">
						<span>NIC :
                        <?php
                                    $sql = "SELECT * FROM  input_billing_address WHERE Reference_No = '1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['NIC'];
                                        }
                                    }
                                ?>
                        </span>

					</div>

					<div class="inputbox">
						<span>laboratory charges :
                        <?php
                                    $sql = "SELECT * FROM  input_billing_address WHERE Reference_No = '1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Laboratory_charges'];
                                        }
                                    }
                                ?>
                        </span>

					</div>

					<div class="inputbox">
						<span>pharmacy charges :
                        <?php
                                    $sql = "SELECT * FROM input_billing_address WHERE Reference_No = '1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Pharmacy_Charges'];
                                        }
                                    }
                                ?>
                        </span>
					</div>
					<div class="inputbox">
						<span>total bill :
                        <?php
                                    $sql = "SELECT * FROM input_billing_address WHERE Reference_No = '1 ';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Total_Bill'];
                                        }
                                    }
                                ?>
                        </span>
					</div>
				</div>

				<div class="col">

					<h3 class="title">payment details</h3>

					<div class="inputbox">
						<span>cards accepted</span>
						<img src="image/card1.png"><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name=card id="crd" required>
						<label for="crd">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
						<input type="radio" name="card" required>
					</div>

					<div class="inputbox">
						<span>card holder name</span>
						<input type="text" placeholder="enter name" required>
					</div>

					<div class="inputbox">
						<span>credit card number</span>
						<input type="number" placeholder="1111-2222-3333-4444" required>
					</div>

					<div class="inputbox">
						<span>CVN</span>
						<input type="text" placeholder="123" required>
					</div>

					<div class="inputbox">
						<span>expiration date</span>
						<input type="text" placeholder="MM/YY" required>
					</div>
					<input type="submit" value="procced to checkout" class=submit-btn>
				</div>
			</div>
		</form>
	</div>
	</div>
	</div>
</body>

</html>