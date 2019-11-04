<!DOCTYPE HTML>
<html>
<title>Login</title>
<head>
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"></link>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>




<style>

/* Change styles for cancel button and signup button on extra small screens */


body, html {
  height: 100%;
  font-family:Tahoma,Geneva,sans-sarif;
}

.bg { 
  /* The image used */
  /*background-image: url("https://image.freepik.com/free-photo/blurred-park-with-bokeh-light-nature-background_7190-1284.jpg");*/
  background-image: url("2.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;


}

mark1 {

    background-color: #A9CFE7 ;
    color: black;
}

</style>




<body>

<div class="bg">

<?php 
$db=mysqli_connect("localhost","root","","selenium");
if($db==false)
{die("could not connect".mysqli_connect_error());}

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    
    $sql = "SELECT id FROM register WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    
    if($count == 1) {
        //session_register("myusername");
        $_SESSION['login_user'] = $myusername;
        
        header("location: Index.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}

?>


<br> <br> <br> <br> <br> 

<h1 style="color:#C1C6CD;" align="center" ><mark1>EAT WELL RESTAURANT<mark1></h1><br><br>
<div id="outer" style="margin-left: 40%;margin-right: 35px;">
<div class="form-row">
 <form class="text-center border border-light p-5" action="" method="post" style="border-radius:8px;background-color:#E0E0DB;">

    <p class="h4 mb-4" style="color: black;" >Sign in here!</p>

    <!-- Email -->
    <i class="material-icons">
account_box
</i><input  type="text" id="username" name="username" class="form-control mb-4" placeholder="Your Unique Username">

    <!-- Password -->
   <span> <i class="material-icons">
vpn_key</i> <input type="password" id="password" name="password" class="form-control mb-3" placeholder="Your Strong Password"></span>

    <br>    <!-- Sign in button -->
    <button class="btn btn-success btn-block my-3" type="submit" id="submit2" style="color:black;">Sign in</button>

    <!-- Register -->
    <p><span style="color:#727C70 ;">Not a member?</span> &nbsp;
        <span style="font-size:30px"><a href="index.php" class="btn btn-dark">Register Here</a>
    </span></p>

   

</form>
</div> 
 </div>              <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php $error=''?><?php echo $error; ?></div>

 <br>
 <center><p><font face="Kristen ITC" size="4" color="white"><mark> © Eat Well Restaurant</mark></p></center>
</div>

</body>
</html>
