<?php
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
     <a href="donate.php" class="w3-bar-item w3-button">Donate</a><br>
     <a href="donationHistory.php" class="w3-bar-item w3-button">Donation History</a><br>
       <a href="liveSearch.php" class="w3-bar-item w3-button">Search Donation</a><br>
     <a href="viewProfile.php" class="w3-bar-item w3-button w3-hover-black">View Profile</a><br>
     <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-green">Edit Profile</a><br>
     <a href="changeProfilePicture.php" class="w3-bar-item w3-button w3-hover-blue">Change Profile Picture</a><br>
     <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
     <a href="../controller/logout.php" class="w3-bar-item w3-button w3-hover-red">Logout</a><br>
</div>

<div style="margin-left:25%">

<div class="w3-container w3-dark-grey" style="margin-top:150px">
  <?php
require_once '../controller/Info.php';

$donation = fetchAllDonations();

?>

<table border="1" style="width:100%;padding:10px;">
	<thead>
		<tr>
			<th>Donated to</th>
			<th>Amount</th>
			<th>Location</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($donation as $i => $donation): ?>
			<tr>
				<td><?php echo $donation['DONATEDTO'] ?></a></td>
				<td><?php echo $donation['LOCATION'] ?></td>
				<td><?php echo $donation['AMOUNT'] ?></td>
			</tr>
		<?php endforeach; ?>


	</tbody>


</table>


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
