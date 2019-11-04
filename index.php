<!DOCTYPE html>
<html class="bg">
<title>Registration</title>
<head>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
<style>
mark1 {

background-color: #A9CFE7 ;
color: black;
}

body{

  font-family: 'Montserrat';font-size: 15px;
}
</style>

 <script type="text/javascript">
           function validate(name){



               var password=document.getElementById("pass1").value;
               var cpassword=document.getElementById("rpass").value;
               
               var n = /^[a-zA-Z]+$/;
               if(n.test(form.name.value) == false){
                   alert("Enter a valid name!");
                   return false;  
               }

               var m = /^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
               if(m.test(form.email.value) == false) {
                   alert("enter valid email id");
                    return false;
               }

               var c = /^[7-9][0-9]{9}$/;
               if(c.test(form.mobileno.value) == false) {
                   alert("enter valid contact no");
                   return false;

               }

            var res; 
            var str =  document.getElementById("pass1").value; 
            if (str.match(/[a-z]/g) && str.match( 
                    /[A-Z]/g) && str.match( 
                    /[0-9]/g) && str.match( 
                    /[^a-zA-Z\d]/g) && str.length >= 8) 
                res = 1; 
            else 
                res = 2; 
            if(res==2)
            {
            	alert("Enter password according to rules. ");
                return false;}

            
            
        if(password!=cpassword)
        {
        	 alert("Passwords do not match!");
        	 return false;
            }

           }
        </script>
      



          </head>
<link rel="stylesheet" href="index.css">


<body  class="bg" class="font-family-base">


 <h1 style="color:black" align="center" ><mark1>EAT WELL RESTAURANT</mark1></h1>
 <br><br>

 <form style="border:0px solid #ccc;" name="form"  method="get"  action="insert.php" onsubmit="return validate(this)" >
  <div class="container" style="background-color: white; border-radius: 10px;">
    <h2  style="color:darkslategray" align="center" class="h2-responsive">REGESTRATION PAGE</h2>
      
     <label for="name"><b>Full Name <span style="color:red;">*</span></b></label>
      <input id="name" type="text" placeholder="Enter your full name please" name="name" class="form-control" required>
	 
	 
	<label><b>Mobile Number<span style="color:red;">*</span></b></label>
      <input id="mobileno" type="text" placeholder="Enter your mobile number to get promotional offers" name="mobileno" required class="form-control">
      
      <div class="md-form">
	 <i class="fas fa-user prefix"></i>
    <label><b>Email<span style="color:red;">*</span></b></label>
    <input id="email" type="text" placeholder="We will contact you through your email" name="email" required class="form-control">
    
    
    <label for="username"><b>Username<span style="color:red;">*</span></b></label>
      <input id="username" type="text" placeholder="Enter your unique username to login" name="username" class="form-control" required>
    

    <label for="pass1"><b>Password<span style="color:red;">*</span></b></label>
 <input type="password" id="pass1" class="form-control" placeholder="Enter a strong password to secure your account" aria-describedby="passwordHelpBlock" name="pass1">
 <b> <small id="passwordHelpBlock" class="form-text" style="font-color:black">Your password must be 8-20 characters long, At least 1 uppercase character,At least 1 lowercase character,At least 1 digit,At least 1 special character,Minimum 8 characters.</small></b>
    <label><b>Confirm Password<span style="color:red;">*</span></b></label>
    <input id="rpass" type="password" placeholder="Enter it again!" name="psw-repeat" required class="form-control">
    
    
	<label><b>Date of birth<span style="color:red;">*</span></b></label>
	<input id="dob" type="date" name="dob"  class="form-control"><br>
    <label><b>Gender<span style="color:red;">*</span></b></label><br>
   <div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="male" name="gender" value="male" checked>
  <label class="custom-control-label" for="male">Male</label>
</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="female" name="gender" value="female">
  <label class="custom-control-label" for="female">Female</label>
</div>

<!-- Group of default radios - option 3 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="other" name="gender" value="other">
  <label class="custom-control-label" for="other">Other</label>
</div>
    
     <br><b><p>Already Registered?
        <a href="loginpage.php" style="color:green">Login Here</a>
    </p></b>
    
    <div class="clearfix">
      <!--<button id="cancel" type="button" class="btn btn-danger btn-lg btn-block">Cancel</button> -->
      <button id="submit1" type="submit" class="btn btn-primary btn-lg btn-block" >Sign Up</button><br>
    </div>
  </div>
  </div>
</form><br>
<center><p><font face="Kristen ITC" size="4" color="white"><mark> © Eat Well Restaurant</mark></p></center>
</body>
</html>
