<?php
$db=mysqli_connect("localhost","root","","selenium");
if($db==false)
{die("could not connect".mysqli_connect_error());}

include 'session.php';

?>
<html>
<head>
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
<style> 
body {
    background: url("Pics/table-covered-glass-cutlery-128875.jpeg")
	no-repeat center center fixed; 
	background-size: cover;
	}

img {
    opacity: 1;
    filter: alpha(opacity=50); 
}

img:hover {
    opacity: 0.5;
    filter: alpha(opacity=100);
}

mark1 {
	background-color: #CFD92D;
	color: black;
}

.query{
    background-color: white;
}


</style>






<title>Contact Us</title>

</head>
<body>

<center>
<table>
<td style="height: 50px;" width="150"><tc><p><font face="Calibri" size="6"><a href="Index.php" style="text-decoration : none; color : #85786C;"/><mark1>Home</mark1></font></p></tc></td>
<td style="height: 50px;" width="150"><tc><p><font face="Calibri" size="6"><a href="menu.php" style="text-decoration : none; color : #85786C;"/><mark1>Menu</mark1></font></p></tc></td>
<td style="height: 50px;" width="150"><tc><p><font face="Calibri" size="6"><a href="offers.php" style="text-decoration : none; color : #85786C;"/><mark1>Offers</mark1></font></p></tc></td>
<td style="height: 50px;" width="200"><tc><p><font face="Calibri" size="6"><a href="stores.php" style="text-decoration : none; color : #85786C;"/>&nbsp;&nbsp;&nbsp;&nbsp;<mark1>Our Stores</mark1></font></p></tc></td>
<td style="height: 50px;" width="200"><tc><p><font face="calibri" size="6"><a href="about.php" style="text-decoration : none; color : #85786C;"/>&nbsp;&nbsp;&nbsp;&nbsp;<mark1>About Us</mark1></font></p></tc></td>
</table>
</center>

<br />
<p> <font  face="Calibri" size="8" color="#1A6F99;" ><center>Contact Us</center></font> </p>

<table align="center" border="0">
<td style="text-align: left">
<tbody>
<tr>
<td style="height: 50 ;" width="300"><p><font face="Andalus" size="6" color="#EADED9;"><center>Pune</center> </font></p></td>

<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>

<td style="height: 50 ;" width="300"><p><font face="Andalus" size="6" color="#EADED9;"><center>Ahmedabad</center></font></p></td>

</tr>
<tr>
<td style="height: 50 ;" width="300"><p><font face="Kristen ITC" size="6" color="#CCD8D9">Eat Well Restaurant </font></p></td>

<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>

<td style="height: 50 ;" width="300"><p><font face="Kristen ITC" size="6" color="#CCD8D9">Eat Well Restaurant</font></p></td>


</tr>
<tr>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="6" color="#B6EF98">ShopNo.: 23, Ground Floor, Phoniex Market City, Viman Nagar, Nagar Road&nbsp;&nbsp;&nbsp;&nbsp; Pune&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Maharashtra &nbsp;  411014  </font></p></td>


<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>

<td style="height: 50 ;" width="300"><p><font face="Calibri" size="6" color="#B6EF98">ShopNo.: 12, Ground Floor, AlphaOne Mall, Sarkari Vasahat Road, Vastrapur Ahmedabad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gujarat 380006</font></p></td>
</tr>



<tr>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="5" color="#B0EA9C;">Phone: 020-2237648</font></p></td>
<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="5" color="#B0EA9C;">Phone: 079-2237649</font></p></td>
</tr>
<tr>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="5" color="#B0EA9C;">Email: eatwellpu@eatwell.com</font></p></td>
<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="5" color="#B0EA9C;">Email: eatwellah@eatwell.com</font></p></td>
</tr>
<tr>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="6"> </font></p></td>
<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="6"></font></p></td>
</tr>





<!-- second row stores-->
<tr>
<td style="height: 50 ;" width="300"><p><font face="Andalus" size="6" color="#EADED9;"><center>Kolkata</center> </font></p></td>

<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>

<td style="height: 50 ;" width="400"><p><font face="Andalus" size="6" color="#EADED9;"><center>Chennai</center></font></p></td>

</tr>
<tr>
<td style="height: 50 ;" width="300"><p><font face="Kristen ITC" size="6" color="#CCD8D9">Eat Well Restaurant </font></p></td>

<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>

<td style="height: 50 ;" width="400"><p><font face="Kristen ITC" size="6" color="#CCD8D9"><b>Eat Well Restaurant</b></font></p></td>

</tr>
<tr>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="6" color="#B6EF98">ShopNo.: 20, Ground Floor, Quest Mall, Syed Amir Ali Ave, Beck Bagan, Ballygunge Kolkata&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; West Bengal 700017  </font></p></td>


<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>

<td style="height: 50 ;" width="400"><p><font face="Calibri" size="6" color="#B6EF98">ShopNo.: 15, Ground Floor, Express Evenue,  Club House Road, Royapettah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chennai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tamil Nadu 600002</font></p></td>
</tr>

<tr>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="5" color="#B0EA9C;">Phone: 033-2237649</font></p></td>
<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>
<td style="height: 50 ;" width="400"><p><font face="Calibri" size="5" color="#B0EA9C;">Phone: 044-2237650</font></p></td>
</tr>

<tr>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="5" color="#B0EA9C;">Email: eatwellwb@eatwell.com </font></p></td>
<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>
<td style="height: 50 ;" width="400"><p><font face="Calibri" size="5" color="#B0EA9C;">Email: eatwellch@eatwell.com</font></p></td>
</tr>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="6"> </font></p></td>
<td style="height: 50 ;" width="100"><p><font face="Calibri" size="6"> </font></p></td>
<td style="height: 50 ;" width="400"><p><font face="Calibri" size="6"></font></p></td>
</tr>


</table>
<br>

<!-- Query Field-->

<form method="POST" action="data.php" >
<table align="center" border="0">
<tr>
<td style="height: 50 ;" width="300"><p><font face="Calibri" size="6" color="black;"><mark> Have a Query or Want to suggest something?</mark></font></p></td>
</tr>
<tr>

<td style="height: 100 ;" width="300"><p><font face="Calibri" size="6">
<textarea rows="5" cols="50" placeholder=" Type your content here..." name="query" required></textarea>
</font></p></td>

</tr>

</p>
</td>

<td style="height: 50 ;" width="300">
<p>
<input class="btn btn-success" type="submit" name="submit" value="Submit" >
</font></p></td>
</form>

</tr>
</table>

<br>

<table align="center" border="0">

<div id="social">
<tr>
<td><font face="Calibri" size="5" color="#7FCB9F"> <p> Follow us on :</p></font></td>
<td width="100" ><a href="https://www.plus.google.com/EatWell" target="_blank style="text-decoration : none;/><center><img src="Pics/google-plus-icon.png" width="50" height="48" alt="Google+" title="Google+"></center></img></td>
<td width="100"><a href="https://www.facebook.com/EatWell"  target="_blank style="text-decoration : none;/><center><img src="Pics/facebook.png" width="40" height="40" alt="facebook" title="Facebook"></center></img></td>
<td width="100"><a href="https://www.twitter.com/EatWell"  target="_blank style="text-decoration : none;/><center><img src="Pics/twitter.jpg" width="40" height="40" alt="twitter" title="Twitter"></center></img></td>
<td width="100"><a href="https://www.instagram.com/EatWell"  target="_blank style="text-decoration : none;/><center><img src="Pics/insta.jpg" width="40" height="40" alt="instagram" title="Instagram"></center></img></td>
</tr>
</div>
</table>
</footer>
 
</body>
</html>
