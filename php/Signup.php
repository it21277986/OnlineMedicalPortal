<?php
    include_once 'connect.php';

    $First_Name = $_POST['First_Name'];
    $Last_Name	 = $_POST['Last_Name'];
    $NIC = $_POST['NIC'];
    $DOB = $_POST['DOB'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Address = $_POST['Address'];
    $Contact_No = $_POST['Contact_No'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO signupdata (First_Name,Last_Name,NIC,DOB,Age,Gender,Address,Contact_No,Email,Password) 
    VALUES ('$First_Name','$Last_Name','$NIC','$DOB','$Age','$Gender','$Address','$Contact_No','$Email','$Password')";
    mysqli_query($conn, $sql);

    header("Location: ../Patient login.php");
?>               
