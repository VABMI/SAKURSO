<?php
$host="localhost";
$user="root";
$pass="";
$basa="users";

session_start();


    echo "<br>";
     echo $name=$_SESSION['qsa'];
      echo $message=$_REQUEST['p'];
	echo $yourr=$_SESSION['your'];
//





$conn=new mysqli($host,$user,$pass,$basa);



$sql=  "INSERT INTO smses (sms,gamgzavnisID,adresatisID) VALUES ('$message','$yourr','$name')";

if(mysqli_query($conn,$sql)){
mysqli_close($conn);


}
















$conn=new mysqli($host,$user,$pass,$basa);

///session_start();
  //echo $_SESSION['tablenameee']."es aris sesia send php shi login php dan";
  
$sql=  "INSERT INTO ".$name." (mess,name,who)VALUES ('$message','".$yourr."','1')";

if(mysqli_query($conn,$sql)){
mysqli_close($conn);


}












?>