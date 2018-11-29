<?php
$hostname="localhost";
$user="root";
$pass="";
$base="users";

$conn=new mysqli($hostname,$user,$pass,$base);



if(!$conn){echo "not connecting ";}
else{

if(isset($_POST['Name'])&&isset($_POST['LastName'])&&isset($_POST['Email'])&&isset($_POST['Psw'])&&isset($_POST['Psw-repeat']))
{


	if($_POST['Psw']==$_POST['Psw-repeat']){


$name=$_POST['Name'];
$lastname=$_POST['LastName'];
$password=$_POST['Psw'];
$email=$_POST['Email'];
$rank=$_POST['RankName'];



$sql="INSERT INTO user (name,lastname,password,email,tablename) VALUES ('$name','$lastname','$password','$email','$rank')";

if(!mysqli_query($conn,$sql)){print "not innsert";}

mysqli_close($conn);

///////////////////////  BAZIS SHEQMNA  /////////////////////////////////////


$con=new mysqli($hostname,$user,$pass,$base);

if(!$conn){echo "not connecting ";}

else{

$sqli = "CREATE TABLE ".$rank." (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
mess TEXT  ,
name INT(11) ,
who TINYINT(1)
)";



if(mysqli_query($con,$sqli)){

	echo "baza sheiqmna";
mysqli_close($con);
}
else
echo "baza ar sheiqmna";
}
///////////////////////////////////////




}

else {


}




}
}


?>