<?php
 require_once "../javascript/report.php";

session_start();

if(isset($_SESSION['username']))
{

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  </head>
  <body>

    <ul>
       <li style="float:left"><a href="../../homepage.php"> Charity Donation Ltd</a></li>
       <li><a href="#about">About</a></li>
       <li><a href="#contact">Contact</a></li>
      <!-- <li><a href="#news">Registration</a></li> -->
      <li><a href="../../homepage.php">Home</a></li>
    </ul>

   <div class="w3-sidebar w3-bar-block w3-light-grey" style="width:25%">
     <a href="dashboard.php" class="w3-bar-item w3-button">Dashboard</a><br>
     <a href="report.php" class="w3-bar-item w3-button">Report</a><br>
     <a href="reportHistory.php" class="w3-bar-item w3-button">Report History</a><br>
     	<a href="liveSearch.php" class="w3-bar-item w3-button">Search Report</a><br>
     <a href="viewProfile.php" class="w3-bar-item w3-button w3-hover-black">View Profile</a><br>
     <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-green">Edit Profile</a><br>
     <a href="changeProfilePicture.php" class="w3-bar-item w3-button w3-hover-blue">Change Profile Picture</a><br>
     <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
     <a href="../controller/logout.php" class="w3-bar-item w3-button w3-hover-red">Logout</a><br>
</div>

<div style="margin-left:25%">

<div class="w3-container w3-dark-white" style="margin-top:50px">

  <form class="loginbox" onclick="return validation()" method="post" action="../controller/report.php">


    <p>NUMBER OF FOOD PACKING:</p><br> <input type="number" onkeypress="checkPacking()" onblur="checkPacking()" name="packing" id="packing" placeholder="Enter the number">
    <br><br>
    <span class="error" id="packingErr">* <?php if(!empty($_GET['packingErr'])){echo $_GET['packingErr'];} ?></span>
    <br>
    <p>NUMBER OF DISTRIBUTED PACKET:</p><br> <input type="number" onkeypress="checkPacket()" onblur="checkPacket()" name="packet" id="packet" placeholder="Enter the number">
    <br><br>
    <span class="error" id="packetErr">* <?php if(!empty($_GET['packetErr'])){echo $_GET['packetErr'];} ?></span>
    <br>
    <p>DISTRIUTED AREA:</p><br> <input type="text" onkeypress="checkArea()" onblur="checkArea()" name="area" id="area" placeholder="Enter the number">
    <br><br>
    <span class="error" id="areaErr">* <?php if(!empty($_GET['areaErr'])){echo $_GET['areaErr'];} ?></span>
    <br>
    <br>


    <input type="submit" name="submit" value="Submit">
  </form>

</div>



</div>



  </body>
</html>





<?php
//include("../Model/foot.php");

}
else {
header("location:../view/login.php");
}
 ?>
