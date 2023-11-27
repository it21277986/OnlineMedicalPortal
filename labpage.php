<?php 
    
    include 'php/connect.php';

    if(isset($_POST['submit'])){
        $Email=$_POST['Email'];
        $AppointmentNO=$_POST['AppointmentNO'];
        $P_password=$_POST['P_password'];

        $sql="INSERT INTO laboratory_details(Email,AppointmentNO,P_password)
        values('$Email','$AppointmentNO','$P_password')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data inserted successfully";
         }
        else {
            die("Connection failed:" .mysqli_connect_error());
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Laboratory</title>
    <style>
      body{
        background-color: #8ac6d1;
      }
      .heading1 {
        font-family: Arial;
      }
      .image1 {
        width: 700px;
        margin-right: auto;
        border-radius: 25px;
        display: inline-block;
      }
      .p1 {
        margin-left: 10px;
      }
      .p2 {
        margin-left: 10px;
        font-weight: bold;
        margin-top: 80px;
      }
      .heading2 {
        font-family: Arial;
        margin-top: 10px;
        margin-left: 5px;
      }
      .image2 {
        background-image: linear-gradient(
            rgba(255, 255, 255, 0.651),
            rgba(0, 0, 0, 0.863)
          ),
          url(image/form.jpeg);
        background-position: center;
        background-size: 400px;
        background-repeat: no-repeat;
        display: inline-block;
      }
      .heading3 {
        font-family: Arial;
        margin-left: 45px;
        margin-top: 40px;
        font-weight: bold;
      }
      .textbox {
        margin-left: 20px;
        margin-top: 10px;
      }
      .button1 {
        height: 20px;
        margin-left: 140px;
        margin-top: 20px;
        background-color: black;
        color: aliceblue;
        border-color: aliceblue;
        border-width: 1px;
        cursor: pointer;
        border-radius: 5px;
      }
      .button1:hover {
        background-color: rgb(31, 44, 56);
      }
      .button1:active {
        background-color: blue;
      }
    </style>
    <script src="js/lab.js"></script>
  </head>
  <body>
    <div style="display: grid; grid-template-columns: 4fr 1fr; margin-right: 150px"> 
      <div>
        <h1 class="heading"><u>Laboratory </u></h1>
        <img class="image1" src="image/image2.jpeg" alt="Laboratory">
      </div>
      <div class="image2" style="border-radius: 50px">
        <h3 class="heading3"><u>Laboratory Appointments</u></h3>
        <div>
        <div id="error"></div>
        <form  id="form" method="POST">
          <label class="p2">E-mail:</label>
          <input id="appointmentNo" class="textbox" email="email" type="email" required>
        </div>
        <br>
        <div>
         <label class="p2">Appointment NO:</label>
         <div></div>
         <input id="appointmentNo" name="appointmentNo" class="textbox" placeholder="xxxxxxxx" type="text" required>
        </div>
        <br>
        <div>
          <label class="p2">Password:</label>
          <div></div>
          <input id="password" name="password" class="textbox" placeholder="xxxxxxxx" type="password" required>
        </div><br>
        <div>
          <button class="button1" id="register" >
            Register 
          </button>
        </div>
        </form>
      </div>
    </div>
    <br />
    <div
      style="
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        column-gap: 10px;
      "
    >
      <div
        style="
          border: 100px;
          background-color: rgb(243, 233, 233);
          border-radius: 10px;
        "
      >
        <h4 class="heading2">Our Services</h4>
        <p class="p1">
          We offer the best laboratory services. It has been designed to achieve
          optimal efficiency and laboratory is equipped with state-of-the-art
          equipment, supported by cloud based integrated computer system to
          manage high-volume specimen processing.
        </p>

        <p class="p1">
          As a complement to the numerous laboratory tests run daily, Ceymed has
          a team of experienced and skilled phlebotomist to conduct blood
          drawing at island wide medicalcenters to support our corporate
          partners at their mass health screening campaigns. We are also
          registered with the Ministry of Ports and Shipping to carry out
          medicals for seafarers.
        </p>
      </div>
      <div
        style="
          border: 100px;
          background-color: rgb(243, 233, 233);
          border-radius: 10px;
        "
      >
        <h4 class="heading2">Mobile Service</h4>
        <p class="p1">
          Don't struggle in traffic way with an empty stomach to the laboratory
          for your blood tests. Well trained and dedicated Ceymed team will be
          in your doorstep to collect your samples with the comfort of your
          home. Your report would be made available through email, whatsapp, or
          delivered by our medical coordinators.
        </p>
      </div>
      <div
        style="
          border: 100px;
          background-color: rgb(243, 233, 233);
          border-radius: 10px;
        "
      >
        <h4 class="heading2">Laboratory Scope</h4>
        <ul style="list-style: disc; margin-left: 10px; line-height: 25px">
          <li>Mirco biology</li>
          <li>Pathology</li>
          <li>Clinical Pathology</li>
          <li>Bio Chemistry</li>
          <li>Seriology</li>
          <li>Immunology</li>
          <li>Histo Pathology</li>
        </ul>
      </div>
    </div>
  </body>
</html>
