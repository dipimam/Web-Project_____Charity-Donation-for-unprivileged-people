<?php

require_once '../model/model.php';

session_start();



if (isset($_POST['submit'])) {

   $amountErr = $locationErr = $nameErr = $websiteErr =$error= "";

  $usernameErr=$passwordErr="";

 $confirmpasswordErr="";

  $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = $birth="";
  $username=$password="";
 $confirmpassword="";
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }


    if(empty($_POST["location"]))
    {
      $locationErr= "Location is required";
      $flag=0;
    }
    else {
      $location=test_input($_POST["location"]);
      $locationErr= "";
    }


    if(empty($_POST["amount"]))
    {
      $amountErr= "Phone Number is required";
      $flag=0;
    }
    else {
      $amount=test_input($_POST["amount"]);
   $amountErr= "";
    }



if($flag==1)
{
  $data['username']=$_SESSION['username'];
  $data['location']=$location;
  $data['amount']=$amount;

  if (addRequestDonationInfo($data)) {
    header('location:../view/dashboard.php');
  }

  else {
    echo 'Could not add!!';
  }
}
else {
  $args = array(
   'locationErr' => $locationErr,
   'amountErr' => $amountErr,

);
     header("location:../view/requestDonation.php?" . http_build_query($args));
  }

}else {
  echo "You can not access this page!!";
}

?>
