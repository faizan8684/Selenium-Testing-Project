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
    background: url("Pics/Rest3.jpg")
	no-repeat center center fixed; 
	background-size: cover;
	}
sh1 {
    text-shadow: 2px 2px #FF0000;
}
mark {
	background-color: #86A1D8;
	color: black;
}

mark1 {
	background-color: #CFD92D;
	color: black;
}
mark2 {
	background-color: #13D2C9;
	color: #D2133E;
}


</style>
<title>About Us</title>
</head>
<body>	
<center>
<table>
<td style="height: 30px;" width="150"><tc><p><font face="Calibri" size="6"><a href="Index.php" style="text-decoration : none; color : #85786C;"/><mark1>Home</mark1></font></p></tc></td>
<td style="height: 30px;" width="150"><tc><p><font face="Calibri" size="6"><a href="menu.php" style="text-decoration : none; color : #85786C;"/><mark1>Menu</mark1></font></p></tc></td>
<td style="height: 30px;" width="150"><tc><p><font face="Calibri" size="6"><a href="offers.php" style="text-decoration : none; color : #85786C;"/><mark1>Offers</mark1></font></p></tc></td>
<td style="height: 30px;" width="200"><tc><p><font face="Calibri" size="6"><a href="stores.php" style="text-decoration : none; color : #85786C;"/>&nbsp;&nbsp;&nbsp;&nbsp;<mark1>Our Stores</mark1></font></p></tc></td>
<td style="height: 30px;" width="200"><tc><p><font face="calibri" size="6"><a href="contactus.php" style="text-decoration : none; color : #85786C;"/>&nbsp;&nbsp;&nbsp;&nbsp;<mark1>Contact Us</mark1></font></p></tc></td>
</table>
</center>
<br />
<!-- <p> <font face="Calibri" size="7" color="#1A6F99;" /><center>  About us </center></p> --><br><br>
<p><font face="Felix Titling" size="6" color="#169EB7" /> <center> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Our Master Chefs</b></center> </p>

<table align="center" border="0">
<tbody>

<tr>
<td width="175" height="200"> </td>
<td width="175" height="200"> </td>
<td width="175" height="200"> </td>
<td width="175" height="200"> </td>
<td width="70" height="200"> </td>
<td width="175" height="200"> <img src="Pics/Amey1.jpg"  width="175" height="200" alt="Amey Mahakhode" title="Amey Mahakhode" > </img></td>
<td width="70" height="200"> </td>
<td width="175" height="200"><img src="Pics/Faizann.jpg" width="175" height="200" alt="Faizan Akhtar" title="Faizan Akhtar"> </img> </td>
<td  width="70" height="200">  </td>
<td width="175" height="200"><img src="Pics/Prathamesh.png" width="175" height="200" alt="Prathamesh Metkar" title="Prathamesh Metkar"> </img>  </td>
</tr>

<tr>
<td width="175" height="25"> </td>
<td width="175" height="25"> </td>
<td width="175" height="25"> </td>
<td width="175" height="25"> </td>
<td width="70" height="25"> </td>
<td width="175" height="50"><center><p><font face="Calibri"><mark>Amey Mahakhode</mark></font> </p></center> </td>
<td width="70" height="25"> <p>  </p> </td>
<td width="175" height="50"><center><p><font face="Calibri"><mark>Faizan Akhtar</mark></font></p></center>  </td>
<td width="70" height="25"> <p></p> </td>
<td width="175" height="50"><center> <p><font face="Calibri"><mark> Prathamesh Metkar</mark></font></p></center> </td>
</tr>

</tbody>
</table>


<p> <font  face="Bradley Hand ITC" size="7" color="#D2133E"  >  <i> <b>And a group of <mark2>100000</mark2> other people make your</b></i> </font> </p>
<p><sh1><font face="Bradley Hand ITC" size="7" color="#1A6F99;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;every bite taste different...</sh1> </p>
<center><p><font face="Kristen ITC" size="4" color="white"><mark> © Eat Well Restaurant</mark></p></center>
</body>
</html>