<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $DID=$_POST['DID'];
    $Doctor_Name=$_POST['Doctor_Name'];
    $Specialization=$_POST['Specialization'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $sql="INSERT INTO admin_doctor(DID,Doctor_Name,Specialization,Email,Password)values('$DID','$Doctor_Name','$Specialization','$Email','$Password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted successfully";

    }else{
        die("Connection failed: " . mysqli_connect_error());
    }
}


?>