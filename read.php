








<?php


session_start();

 echo  $yourtable=$_SESSION['your'];/// rchebaa 
if (isset($_SESSION['qsa'])&&$_SESSION['qsa']!=null) {
	# code...

             echo $otherid=$_SESSION['qsa']."<br>";
   // $otherid=$_REQUEST['q'];




$base="users";
$pass="";
$user="root";
$host="localhost";


$conn=new mysqli($host,$user,$pass,$base);
if(!$conn){ echo "errorr";}
$sql="SELECT * FROM smses where adresatisID='$otherid' AND gamgzavnisID='$yourtable' OR adresatisID='$yourtable' AND gamgzavnisID='$otherid'";

$result=mysqli_query($conn,$sql);

//$chek=mysqli_num_row($result);

while ($row=mysqli_fetch_assoc($result)) {
	
	if($row['gamgzavnisID']==$yourtable){
echo "<span style='color:red';>".$row['sms']."</span><br>";}
else
{echo "<span style='color:green';>".$row['sms']."</span><br>";

}

}


}





?>