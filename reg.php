<?php
if(isset($_POST['submit']))
{
	$Fullname=$_POST['full_name'];
	$Username=$_POST['userid'];
	$series=$_POST['series'];
	$Email=$_POST['Email'];
	$Password=$_POST['password'];
	$repeat=$_POST['repeat'];
	if($Password!==$repeat)
		echo "Password and Repeat Password must be same";
	$blood=$_POST['blood'];
	$connection=mysqli_connect("localhost","root","","nino");
	$sql="INSERT INTO `NinoProject`(`Full_name`, `Username`, `Series`, `Email`, `Password`, `Blood`) VALUES ('$Fullname','$Username','$series','$Email','$Password','$blood')";
	$query=mysqli_query($connection,$sql);
	if($query)
		echo "Account has been created";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: rgb(255, 255, 255);
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #aaa8a867;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color:#035d6d;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
    background: #ffc1079a;
    color :rgb(0, 0, 0);
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="full_name" required>
    
    <label for="roll"><b>Roll Number</b></label>
    <input type="number" placeholder="Enter Roll Number" name="userid" required>
    
    <label for="series"><b>Series</b></label>
    <input type="number" placeholder="Enter series" name="series" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="Email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repeat" required>
    <label for="blood-group"><b>Blood Group</b></label>
    <input type="text" placeholder="Enter Blood Group" name="blood" required>
    <hr>
    <input type="submit" class="registerbtn" name="submit" value="Register">
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>