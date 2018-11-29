<!-- Button to open the modal -->
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="geo.css">
  <script type="text/javascript">
    

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


  </script>



  <?php //include("write.php");?>
</head>
<body>

<form action="" method="POST">
  <div class="container" id="s1">
    <div class="svd">
    <h1>Register</h1>
  <hr>
     <label for="Nik"><b>rank</b></label>
 <input type="text" placeholder="Enter RankName" name="RankName" required>


 <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" required>

<label for="Last Name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="LastName" required>


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="Email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="Psw-repeat" required>
    <hr>
 <button type="submit" class="registerbtn">Register</button>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
   
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
  </div>
</form>


</body>
</html>