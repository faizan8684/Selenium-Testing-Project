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
    background: url("Pics/Rest5.jpg")
	no-repeat center center fixed; 
	background-size: cover;
	}

mark {
	background-color: #86A1D8;
	color: black;
}
mark1 {
	background-color: #CFD92D;
	color: black;

}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
	

</style>
<title>Menu</title>
</head>

<body>





<center>
<table>
<td style="height: 50px;" width="150"><tc><p><font face="Calibri" size="6"><a href="Index.php" style="text-decoration : none; color : #85786C;"/><mark1>Home</mark1></font></p></tc></td>
<td style="height: 50px;" width="150"><tc><p><font face="Calibri" size="6"><a href="offers.php" style="text-decoration : none; color : #85786C;"/><mark1>Offers</mark1></font></p></tc></td>
<td style="height: 50px;" width="150"><tc><p><font face="Calibri" size="6"><a href="stores.php" style="text-decoration : none; color : #85786C;"/><mark1>Our Stores</mark1></font></p></tc></td>
<td style="height: 50px;" width="200"><tc><p><font face="Calibri" size="6"><a href="contactus.php" style="text-decoration : none; color : #85786C;"/>&nbsp;&nbsp;&nbsp;&nbsp;<mark1>Contact us</mark1></font></p></tc></td>
<td style="height: 50px;" width="200"><tc><p><font face="calibri" size="6"><a href="about.php" style="text-decoration : none; color : #85786C;"/>&nbsp;&nbsp;&nbsp;&nbsp;<mark1>About Us</mark1></font></p></tc></td>
</table>
</center>

<br />
<p> <font  face="Calibri" size="9" color="#1B42A4" ><center>Menu</center></font> </p>

<br /> <br />

<!--Veg Menu -->


<p> <font  face="Calibri" size="6" color="#0C7553" ><center>Veg </center></font> </p>


<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'selenium');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "SELECT * FROM veg_menu";

 if($result = mysqli_query($link, $sql))

 {	 
 
  if(mysqli_num_rows($result) > 0){


	
echo "<table  align='center' border='0'>";

echo "<tbody>";
while($row = mysqli_fetch_array($result)){

echo "<tr> ";
echo "<td style='height: 50 ;' width='390'><p><font face='Calibri' size='5'><mark>{$row['Name']}</mark> </font></p> </td>" ;
echo "<td style='height: 50 ;' width='100'><p><font face='Calibri' size='5'>{$row['Price']}</font></p></td>";
echo "<td style='height: 50 ;' width='200'><p><font size='5'>{$row['Blank']}  </font></p></td>";
echo "<td style='height: 50 ;' width='390'><p><font face='Calibri' size='5'><mark>{$row['Namee']} </mark></font></p></td>";
echo "<td style='height: 50 ;' width='100'><p><font face='Calibri' size='5'>{$row['Pricee']}</font></p></td>";
echo "</tr>";



}

echo "</tbody>";
echo "</table>";
  }
  
  else{ echo "<p class='lead'><em>No records were found.</em></p>"; }
  
}

else{ echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); }
 
 mysqli_close($link);

?>

<!--Non Veg Menu -->
<p> <font  face="Calibri" size="6" color="red" ><center>Non Veg </center></font> </p>


<?php
define('DB_SERVER1', 'localhost');
define('DB_USERNAME1', 'root');
define('DB_PASSWORD1', '');
define('DB_NAME1', 'selenium');
 

$link1 = mysqli_connect(DB_SERVER1, DB_USERNAME1, DB_PASSWORD1, DB_NAME1);
 

if($link1 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql1 = "SELECT * FROM non_veg_menu";

 if($result1 = mysqli_query($link1, $sql1))

 {	 
 
  if(mysqli_num_rows($result1) > 0){
echo "<table  align='center' border='0'>";

echo "<tbody>";
while($row1 = mysqli_fetch_array($result1)){

echo "<tr> ";
echo "<td style='height: 50 ;' width='390'><p><font face='Calibri' size='5'><mark>{$row1['Name']}</mark> </font></p> </td>" ;
echo "<td style='height: 50 ;' width='100'><p><font face='Calibri' size='5'>{$row1['Price']}</font></p></td>";
echo "<td style='height: 50 ;' width='200'><p><font size='5'>{$row1['Blank']}  </font></p></td>";
echo "<td style='height: 50 ;' width='390'><p><font face='Calibri' size='5'><mark>{$row1['Namee']} </mark></font></p></td>";
echo "<td style='height: 50 ;' width='100'><p><font face='Calibri' size='5'>{$row1['Pricee']}</font></p></td>";
echo "</tr>";

}

echo "</tbody>";
echo "</table>";
  }
  
  else{ echo "<p class='lead'><em>No records were found.</em></p>"; }
  
}

else{ echo "ERROR: Could not able to execute $sql. " . mysqli_error($link1); }
 
 mysqli_close($link1);

?>



<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>

window.onscroll = function() {scrollFunction()};
var timeOut;
function scrollFunction() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        document.getElementById("myBtn").style.display = "block";
			timeOut=setTimeout('scrollToTop()',100);

    } else {
        document.getElementById("myBtn").style.display = "none";
	clearTimeout(timeOut);
    }
}


function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


</body>
</html>
