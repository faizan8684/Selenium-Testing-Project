<?php
include 'session.php';
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'selenium');

// receive all input values from the form
  $query = mysqli_real_escape_string($db, $_POST['query']);
  

   	$query = "INSERT INTO contact_us VALUES ('$login_session','$query')";
	
	echo "<script>alert('Thank you... We will get back shortly. '); document.location='http://localhost/Restaurant/contactus.php'</script>";
	
  	mysqli_query($db, $query);
	 	
?>