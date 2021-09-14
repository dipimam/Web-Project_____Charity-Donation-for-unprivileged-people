<script type="text/javascript">

function validation()
{
  var name= document.getElementById("packing");
  var email= document.getElementById("packet");
  var password= document.getElementById("area");


  //alert("hello");

  if(packing.value.trim()=="" )
  {
     document.getElementById("packingErr").innerHTML= "*Packing number is requied";
     return false;
  }
  else {

       document.getElementById("packingErr").innerHTML= "";
  }


  if(packet.value.trim()=="")
  {
    document.getElementById("packetErr").innerHTML= "*Packet number is requied";
    return false;
  }
  else {

      document.getElementById("packetErr").innerHTML= "";

  }

  if(area.value.trim()=="")
  {
    document.getElementById("areaErr").innerHTML= "*Area is requied";
    return false;
  }
  else {

      document.getElementById("areaErr").innerHTML= "";

  }


return true;


}


function checkPacking()
{
  var packing= document.getElementById("packing");
  if(packing.value.trim()=="" )
  {
     document.getElementById("packingErr").innerHTML= "*Packing number is requied";
     return false;
  }
  else {

       document.getElementById("packingErr").innerHTML= "";
  }
}

function checkPacket()
{
  var packet= document.getElementById("packet");
  if(packet.value.trim()=="")
  {
    document.getElementById("packetErr").innerHTML= "*Packet number is requied";
    return false;
  }
  else {

      document.getElementById("packetErr").innerHTML= "";

  }

}

function checkArea()
{
    var area= document.getElementById("area");

    if(area.value.trim()=="")
    {
      document.getElementById("areaErr").innerHTML= "*Area is requied";
      return false;
    }
    else {

        document.getElementById("areaErr").innerHTML= "";

    }
}






</script>
