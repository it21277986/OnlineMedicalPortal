<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $Patient_Name=$_POST['Patient_Name'];
    $Reference_No=$_POST['Reference_No'];
    $NIC=$_POST['NIC'];
    $Laboratory_charges=$_POST['Laboratory_charges'];
    $Pharmacy_Charges=$_POST['Pharmacy_Charges'];
    $Total_Bill=$_POST['Total_Bill'];

    $sql="INSERT INTO input_billing_address(Patient_Name,Reference_No,NIC,Laboratory_charges,Pharmacy_Charges,Total_Bill)
    values('$Patient_Name','$Reference_No','$NIC','$Laboratory_charges','$Pharmacy_Charges','$Total_Bill')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted successfully";

    }else{
        die("Connection failed: " . mysqli_connect_error());
    }
}


?>