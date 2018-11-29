<?php



if(isset($_REQUEST['q'])){
	session_unset($_SESSION['qsa']);  

session_start();

//$_SESSION['qsa']=$_POST['others'];

$_SESSION['qsa']=$_REQUEST['q'];




}


///require_once("");
//echo $_SESSION['qsa'] ;


if (isset($_POST['send'])) {
	# code...
//include("send.php");

}

    if(isset($_POST['logout']))
    {

      echo "<br>"."<br>"."<br>".$_POST['logout']; 

    }
      echo "<br>"."<br>"."<br>".$_POST['logout']; 

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Website Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  <link rel="stylesheet" type="text/css" href="page.css">
  <style>
  .navbar{
margin-bottom:0;
border-radius:0;
background-color:red;
color:#fff;
padding: 0.5% 0;
font-size: 1.2em;
border:0;
}
.navbar-brand{
float: left;
min-height: 55px;
padding: 0 15px 5px;
	}
	.navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus, .navbar-inverse .navbar-nav .active a:hover{
		color:#FFF;
		background-color:#45F8F3; 
	}


.navbar-inverse .navbar-nav li a{
	color:#D5D5D5;
}
.carousel-caption{
	top:50%;
	transform: translateY(-50%);
	text-transform: :uppercase;
}
.btn{
	font-size:18px;
	color:#FFF;
	padding:12px 22px;
	background:#1a3300;
	border:2px solid #FFF;
}

#icon{
	max-width: 200px;
	margin: 30% auto;

}

.smstable{ 
overflow-y: scroll;
height: 400px;

}

td{

	border:1px solid black;
}

.td1{
width: 670px;

border: 1px solid hsla(200, 10%, 50%,100);

	
}
.usrd{
  width: 200px;
  
}
.sms{
	float: left;
	width: 85%;
	height: 60px;
}
.image{


  height: 60px;
   right:0;
}
.span{
   font-size: 30px;
   padding: 30px;
    src: url(sansation_light.woff);
}
@media(max-width: 600px){
	.carousel-caption{
		display: none;
	}
}
.search{
  height: 30px;

}
#srch1{

  padding-right: 30px; 
}


  </style>

</head>
<body>        <form method="post">
	<nav class="navbar navbar-inverse">
		<div class="conteiner-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
                  </button>
                  <a  class="navbar-brand" href="" ><span><img class="image" src="male-shadow-circle-512.png"></span><span class="span"><strong id="YOURNAME"><?php  session_start();echo $_SESSION['yourname']." ".$_SESSION['yourlastname'];   ?></strong></span></a> 
               

			</div>
<div class="collapse navbar-collapse" id="myNavbar">

        <ul class="nav navbar-nav navbar-right">
        	<!--<li class="">  <span id="srch1"><input type="text"  class="search" ><a href="#" > <img src="search-512.png" height="40" width="40"></a></span></li>
        <li class="active"><button class="btn btn-info btn-lg"  type="button">home</button></li>--->
        <li class=""><button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" type="button">sms</button></li>

        <!--
        <li class=""><button type="button" class="btn btn-info btn-lg" >service</button></li>
        <li class=""><button type="button" class="btn btn-info btn-lg" >service</button></li>-->

        <li class=""><form method="post"><button type="button" class="btn btn-info btn-lg" name="logout" value="logout" onclick="logoutt()">Log Out</button></form></li>
         
          </form>

        </ul>
</form>
</div>

		</div>

	</nav>




	  <!-- modal windows start -->

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <nav> <h4 class="modal-title">Modal Header</h4></nav>
        <button type="button" id="bty">users</button>

        </div>
        <div class="modal-body">
       
         	<table>
         		<tr>
         			<td class="td1" >
                <div class="smstable" id="read111">
         	<?php //include("read.php");?>
         </div>
         			</td>



         			<td id="users" class="usrd">
         				       		

                          <?php// include("users.php");?>
         				<script type="text/javascript">
         					
         					function refreshuse(){
  
                              $('#users').load("users.php");


                              setTimeout(refreshuse,1000);
         					}

         					refreshuse();
         					


         				</script> 
         			</div>
         		</div>
                        
         			</td>










         		</tr>


         	</table>
      
          

        </div>
        <div class="modal-footer">
	          <form method="post" >


            
        	<input type="text" id="textt" name="send" class="sms" >
            <input type="button"   onclick="sendhit(this.value)" class="btn btn-default" >SEND</input>




                         </form>





        </div>
      </div>
    </div>
  </div>



  <!-- modal windows end -->






	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	
		<div class="carousel-inner" role="listbox">
			<div class="item active">
			




			</div>		<!-- active-->

		</div>
	
		<span class="sr-only"> next</span>
	</div>
	



<form method="post">
  



<button type="submit" name="vaxo" value="aaa">aaasd</button>
</form>



</body>
</html>
<script>
function showHint(str) {
    if (str.length == 0) { 
       // document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             //  document.getElementById("read111").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "index1.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>




<script>
function sendhit() {
	var str=$('#textt').val();
    if (str.length == 0) { 
       // document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             //  document.getElementById("read111").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "send.php?p=" + str, true);
        xmlhttp.send();
    }
}


var logd=true;
var w;
function sdk(){



  w = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;

if(w<420){

   $("#YOURNAME").hide();
}
else
{
  $("#YOURNAME").show();
}

if(w<=500&&logd){

    $("#users").hide();
 $("#bty").show();

}
else if(w>500){
 $("#bty").hide();
    
    $("#users").show();
     $("#read111").show();
    logd=true;
}


} setInterval(sdk,10);
//sdk();


$(document).ready(function(){
    $("#bty").click(function(){
        $("#users").toggle(500);
        $("#read111").toggle(100);
       logd=false;
    });

  });
</script>

















<script type="text/javascript">



/*
	$(document).ready(function(){
     $('#others').on('click', function(){

          var other=$("#others").val();
         // if (email==""||pass=="") {alert("input");}
          $.ajax(
                 {
                    url:'index.php',
                    method: 'POST',
                    data:{
                    	login:1,
                    	other:other,
                    	
                    },
                    success: function(response){
                      console.log(response);


                    }
                


                 }




          	)

          console.log(other);
     });

	});
*/

</script>
<script type="text/javascript">
	

	function refreshuser(){
  
                              $('#read111').load("read.php");
                              setTimeout(refreshuser,100);
         					}
         					refreshuser();


  function logoutt()
  {

 $('#users').load("logout.php");

    alert("asdada"); 


  }

         					
</script>