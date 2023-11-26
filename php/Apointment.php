<?php
    include_once 'connect.php';

    $Doctor = $_POST['Doctor'];
    $Specialization = $_POST['Specialization'];
    $Date = $_POST['Date'];

    $sql = "INSERT INTO book_appointment (Doctor,Specialization,Date) VALUES ('$Doctor','$Specialization','$Date')";
    mysqli_query($conn, $sql);

    header("Location: ../appointmentpayment.php?signup=success");
?>               
