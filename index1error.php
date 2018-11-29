<?php



if(isset($_REQUEST['q'])){
	session_unset($_SESSION['qsa']);  

session_start();

//$_SESSION['qsa']=$_POST['others'];

$_SESSION['qsa']=$_REQUEST['q'];




}


///require_once("");
echo $_SESSION['qsa'] ;

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
  <style>
  .navbar{
margin-bottom:0;
border-radius:0;
background-color:#025F4D;
color:#fff;
padding: 1% 0;
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
	background:#5E4485;
	border:2px solid #FFF;
}

#icon{
	max-width: 200px;
	margin: 30% auto;
}

td{

	border:1px solid black;
}

.td1{
width: 670px;
	
}
.sms{
	float: left;
	width: 85%;
	height: 60px;
}
@media(max-width: 600px){
	.carousel-caption{
		display: none;
	}
}

  </style>

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="conteiner-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
                  </button>
                  <a  class="navbar-brand" href="#"><img src="img/w3newbie.png"></a>

			</div>
<div class="collapse navbar-collapse" id="myNavbar">
	
<ul class="nav navbar-nav navbar-right">
	
<li class="active"><button class="btn btn-info btn-lg"  type="button">home</button></li>
<li class=""><button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" type="button">sms</button></li>
<li class=""><button type="button" class="btn btn-info btn-lg" >service</button></li>
<li class=""><button type="button" class="btn btn-info btn-lg" >service</button></li>
<li class=""><button type="button" class="btn btn-info btn-lg" >service</button></li>


</ul>

</div>

		</div>

	</nav>




	  <!-- modal windows start -->

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
         
         	<table>
         		<tr>
         			<td class="td1" id="read111">
         	<?php //include("read.php");?>
         			</td>
         			<td id="users">
         			
         		 <form method="post" action="index.php">

                          <?php //include("users.php");?>
         				<script type="text/javascript">
         					
         					function refreshuse(){
  
                              $('#users').load("users.php");
                              setTimeout(refreshuse,1000);
         					}
         					refreshuse();
         					



         				</script> 
                        </form>
         			</td>

         		</tr>


         	</table>
      
          

        </div>
        <div class="modal-footer">
	 <form method="post" action="index.php">


            
        	<input type="text" name="" class="sms">
            <button type="button" onclick="send()" class="btn btn-default" >SEND</button>




</form>





        </div>
      </div>
    </div>
  </div>



  <!-- modal windows end -->






	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="2" class="active"></li>

		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="img/mountains.png">
				<div class="carousel-caption">
					<h1> get known</h1>
                    <br>
                    <buttonc type="button" class="btn btn-default">go to the page</button>
				</div>






			</div>		<!-- active-->
            <div class="item">
            	<img src="img/snow.png">
            </div>
               <div class="item">
            	<img src="img/red.png">
            </div>
		</div>
		<a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev"></a>
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only"> Previous</span>
				<a href="#myCarousel" class="right carousel-control" role="button" data-slide="next"></a>
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only"> next</span>
	</div><!--slider -->
	








<div class="container text-center">
	



	<h2>what are you </h2>
	<div class="row">
		<div class="col-sm-4">
			<img src="img/html5.png" id="icon">
			<h4>HTML5</h4>

		</div>
<div class="col-sm-4">
			<img src="img/html5.png" id="icon">
			<h4>HTML5</h4>

		</div>

		<div class="col-sm-4">
			<img src="img/html5.png" id="icon">
			<h4>HTML5</h4>

		</div>
		<div class="col-sm-4">
			<img src="img/html5.png" id="icon">
			<h4>HTML5</h4>

		</div>
		<div class="col-sm-4">
			<img src="img/html5.png" id="icon">
			<h4>HTML5</h4>

		</div>
		<div class="col-sm-4">
			<img src="img/html5.png" id="icon">
			<h4>HTML5</h4>

		</div>

	</div>
</div>


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
        xmlhttp.open("POST", "index.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<script type="text/javascript">/*
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





         					function send(){

         						$().load("send.php");
         					}
         					
</script>