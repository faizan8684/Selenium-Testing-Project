<?php
$db=mysqli_connect("localhost","root","","selenium");
if($db==false)
{die("could not connect".mysqli_connect_error());}

include 'session.php';
$namee= " SELECT name FROM register WHERE username = '$login_session'";
?>

<html>
<head>
<style> 
body {
    background: url("Pics/Restaurants - Copy - Copy.jpg");    
    background-repeat: no-repeat;    
	background-size:cover;
}
</style>
<title>Eat Well</title>
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"> 
</head>
<body>

<table align="center" border="0">

<br />
<tbody>
<tr>

<td style="height: 50px;" width="150"><p><font face="Calibri" size="6"><a href="Index.php" style="text-decoration : none; color : #85786C;"/>Home</font></p></td>
<td style="height: 50px;" width="175"><p><font face="Calibri" size="6"><a href="menu.php"  style="text-decoration : none; color : #85786C;"/>Menu</font></p></td>
<td style="height: 50px;" width="185"><p><font face="Calibri" size="6"><a href="offers.php" style="text-decoration : none; color : #85786C;"/>Offers</font></p></td>
<td style="height: 50px;" width="185"><p><font face="Calibri" size="6"><a href="stores.php" style="text-decoration : none; color : #85786C;"/>Our Stores</font></p></td>
<td style="height: 50px;" width="210"><p><font face="Calibri" size="6"><a href="contactus.php" style="text-decoration : none; color : #85786C;"/>&nbsp;&nbsp;&nbsp;Contact us</font></p></td>
<td style="height: 50px;" width="195"><p><font face="calibri" size="6">&nbsp;&nbsp;&nbsp;<a href="about.php" style="text-decoration : none; color : #85786C;"/>About Us</font></p></td>

</tr>
</tbody>
</table>
<div style="margin-top:650px;">
<bold><center><h1>Welcome <mark><?php echo  $login_session; ?></mark></h1> 
<br>
<h2><a class="btn btn-danger" href = "logoutpage.php">Sign Out</a></h2></center></bold>
</div>

</body>
</html>
