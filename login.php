<?php
session_start();
if(isset($_POST['submit']))
{
	$Username=$_POST['username'];
    $Password=$_POST['password'];
    $connection=mysqli_connect("localhost","root","","nino");
    $sql="SELECT * FROM `ninoproject` WHERE Username='$Username' AND Password='$Password'";
    $query=mysqli_query($connection,$sql);
    $_SESSION=mysqli_fetch_array($query,MYSQLI_ASSOC);
    header("Location:index.php"); 
}

?>

<html>
       
    <head>
        <title>
              Login Form Design   </title>
              <link rel="stylesheet" type="text/css" href="style.css">
              <body class="body" style="color:white;">
                  <div class="loginbox">
                         <h1>
                             Login Here
                         </h1>
                         <form method="POST">
                            <p>User name</p>
                            <input type="text" name="username" placeholder="Enter Username">
                            <p>Password</p>
                            <input type="Password" name="password">
                            <input type="submit" name="submit" value="Login">
                            <a href="forr.html">Lost your Password?</a><br>
                            <a href="reg.php">Don't have an account?</a>
                         </form>
                         
                  </div>
                  
              </body>
     </head>
    </html>