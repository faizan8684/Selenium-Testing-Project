<?php
$db=mysqli_connect("localhost","root","","selenium");
if($db==false)
{die("could not connect".mysqli_connect_error());}

include 'session.php';

?>
<html>

<head>
<style> 
body {
    background: url("Pics/Rest6.jpg")
	no-repeat center center fixed; 
	background-size: cover;
	}
mark {
	background-color: #4CD543;
	color: black;
}

mark1 {
	background-color: #CFD92D;
	color: black;
}
</style>

<center>
<table>
<td style="height: 50px;" width="150"><tc><p><font face="Calibri" size="6"><a href="Index.php" style="text-decoration : none; color : #85786C;"/><mark1>Home</mark1></font></p></tc></td>
<td style="height: 50px;" width="150"><tc><p><font face="Calibri" size="6"><a href="menu.php" style="text-decoration : none; color : #85786C;"/><mark1>Menu</mark1></font></p></tc></td>
<td style="height: 50px;" width="150"><tc><p><font face="Calibri" size="6"><a href="stores.php" style="text-decoration : none; color : #85786C;"/><mark1>Our Stores</mark1></font></p></tc></td>
<td style="height: 50px;" width="200"><tc><p><font face="Calibri" size="6"><a href="contactus.php" style="text-decoration : none; color : #85786C;"/>&nbsp;&nbsp;&nbsp;&nbsp;<mark1>Contact us</mark1></font></p></tc></td>
<td style="height: 50px;" width="200"><tc><p><font face="calibri" size="6"><a href="about.php" style="text-decoration : none; color : #85786C;"/>&nbsp;&nbsp;&nbsp;&nbsp;<mark1>About Us</mark1></font></p></tc></td>
</table>
</center>

<br />
<title>Offers</title>
</head>
<body>

<p> <font  face="Calibri" size="9" color="#1A6F99;" ><center>Offers</center></font> </p>
 <br />  <br /> 
<!--Monday-->
 <p><font  face="Calibri" size="6" color="black" ><center><b>Monday</b></center></font></p>
 <h2>Veg</h2>

 <ul type="square" >
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 10% off on Marathi,Punjabi and South Indian Thalis</mark>     </font> </li>
 </ul>
 <h2>Non-Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 20% off on Chicken 65 and Chicken Masala </mark> </font> </li>
 </ul>
 
 <!--Tuesday-->
 <p><font  face="Calibri" size="6" color="black" ><center><b>Tuesday</b></center></font></p>
 <h2>Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 10% off on Dal Fry </mark></font> </li>
 </ul>
 <h2>Non-Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 15% off on Murg Noorjehani and Chicken Chettinad</mark> </font> </li>
 </ul>
 

<!--Wednesday-->
 <p><font  face="Calibri" size="6" color="black" ><center><b>Wednesday</b></center></font></p>
 <h2>Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 15% off on Aloo Mutter and Aloo Gobi</mark>  </font> </li>
 </ul>
 <h2>Non-Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 15% off on Chicken Nuggets</mark> </font> </li>
 </ul>
 
 
 <!--Thursday-->
 <p><font  face="Calibri" size="6" color="black" ><center><b>Thursday</b></center></font></p>
 <h2>Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 15% off on Pulav</mark> </font> </li>
 </ul>
 <h2>Non-Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 20% off on Butter Chicken </mark> </font> </li>
 </ul>

<!--Friday-->
 <p><font  face="Calibri" size="6" color="black" ><center><b>Friday</b></center></font></p>
 <h2>Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 5% off on Fried Rice</mark> </font> </li>
 </ul>
 <h2>Non-Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 15% off on Kadhai Chicken </mark> </font> </li>
 </ul>

 
 <!--Saturday-->
 <p><font  face="Calibri" size="6" color="black" ><center><b>Saturday</b></center></font></p>
 <h2>Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 10% off on Veg Kolhapuri</mark>  </font> </li>
 </ul>
 <h2>Non-Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 15% off on all Sea Food Items</mark> </font> </li>

 </ul>
  <h2>Desert</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 10% off on all Custards</mark>  </font> </li>
  </ul>

 
 <!--Sunday-->
 <p><font  face="Calibri" size="6" color="black" ><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Sunday</b></center></font></p>
 <h2>Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 15% off on all Paneer Items</mark>  </font> </li>
 </ul>
 <h2>Non-Veg</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 15% off on all Biryanis</mark>  </font> </li>
 </ul>
 <h2>Desert</h2>
 <ul type="square">
 <li> <font  face="Andalus" size="5" color="blue" ><mark>Get 10% off on all Kulfis </mark> </font> </li>
 </ul>


</body>
</html>