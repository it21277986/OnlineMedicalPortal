<?php
include 'connect.php';
if(isset($_GET['deleteid']))
 $DID=$_GET['deleteid'];

 $sql="delete from'admin_doctor' where id=$DID ";
 $result=mysqli_query($conn,$sql);
 if($result){
    echo "deleted successfull";
    header('location:display.php');

 }else
 die("Connection failed: " .mysqli_connect_error($con));
?>