<?php

require_once '../model/model.php';


session_start();


if (isset($_POST['submit'])) {

   $packingErr = $packetErr = $areaErr =  "";



  $packing = $packet = $area = "";

 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["packing"])) {
    $packingErr= "Packing number is required";
    $flag=0;
  } else {

      $packing = test_input($_POST["packing"]);
      $packingErr= "";
  }

  if (empty($_POST["packet"])) {
    $packetErr= "Packet number is required";
    $flag=0;
  } else {

      $packet = test_input($_POST["packet"]);
      $packetErr= "";
  }

  if (empty($_POST["area"])) {
    $areaErr= "Area is required";
    $flag=0;
  } else {

      $area = test_input($_POST["area"]);
      $areaErr= "";
  }





if($flag==1)
{
  $data['username']=$_SESSION['username'];
  $data['packing']=$packing;
  $data['packet']=$packet;
  $data['area']=$area;


  if (addReportInfo($data)) {
    header('location:../view/dashboard.php');
  }

  else {
    echo 'Could not add!!';
  }
}
else {
  $args = array(
   'packingErr' => $packingErr,
   'packetErr' => $packetErr,
   'areaErr' => $areaErr,

);
     header("location:../view/report.php?" . http_build_query($args));
  }

}else {
  echo "You can not access this page!!";
}

?>
