
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css"></link>
</head>
<body>

<?php 

$db=mysqli_connect("localhost","root","","selenium");
if($db==false)
{die("could not connect".mysqli_connect_error());}
$name=mysqli_real_escape_string($db,$_GET["name"]);
$mobile=mysqli_real_escape_string($db,$_GET["mobileno"]);
$email=mysqli_real_escape_string($db,$_GET["email"]);
$uname=mysqli_real_escape_string($db,$_GET["username"]);
$password=mysqli_real_escape_string($db,$_GET["pass1"]);
$gender=mysqli_real_escape_string($db,$_GET["gender"]);
$dob=mysqli_real_escape_string($db,$_GET["dob"]);

$query="Insert into register values(null,'$name','$mobile','$email','$uname','$password','$gender','$dob')";
mysqli_query($db,$query);

// echo"<div>";
//  echo"<a class='btn btn-info btn-sml' href='show.php'>SHOW</a>";
//     echo"</div>";

 



?>


 echo "<script>alert('Registered Successfully '); document.location='http://localhost/Restaurant/loginpage.php'</script>"; 

<!-- 
<!-- <form class="text-center border border-light p-5" action="#!"> -->

<!--     <p class="h4 mb-4">Sign in</p> -->

    <!-- Email -->
<!--     <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail"> -->

    <!-- Password -->
<!--     <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password"> -->

<!--     <div class="d-flex justify-content-around"> -->
    
    

        
        
        
<!--         <div> -->
            <!-- Forgot password -->
<!--             <a href="">Forgot password?</a> -->
<!--         </div> -->
<!--     </div> -->

    <!-- Sign in button -->
<!--     <button class="btn btn-info btn-block my-4" type="submit">Sign in</button> -->

    <!-- Register -->
<!--     <p>Not a member? -->
<!--         <a href="index.php">Register</a> -->
<!--     </p> -->

    

</form> 



</body>
</html>




