<?php
$db=mysqli_connect("localhost","root","","selenium");
if($db==false)
{die("could not connect".mysqli_connect_error());}

include 'session.php';

?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   <style>
   .bg { 
  /* The image used */
  /*background-image: url("https://image.freepik.com/free-photo/blurred-park-with-bokeh-light-nature-background_7190-1284.jpg");*/
  background-image: url("https://images.pexels.com/photos/2529787/pexels-photo-2529787.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940.jpeg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
   font-family:Tahoma,Geneva,sans-sarif;
}



</style>
   <body>
   
   
   <div class="bg">
   
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "Cart.php" id="startshopping" >Start Shopping!!</a></h2>
      <h2><a  href = "logoutpage.php">Sign Out</a></h2>
      
      
      </div>
   </body>
   
</html>