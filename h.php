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
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
	<title>Monir</title>
</head>
<body>
	<form method="POST">
		<p>FUll name</p>
		<input type="text" name="full_name">
		<p>Username</p>
		<input type="text" name="userid">
		<p>Series</p>
		<input type="text" name="series">
		<p>Email</p>
		<input type="text" name="Email">
		<p>Password</p>
		<input type="password" name="password">
		<p>Repeat</p>
		<input type="password" name="repeat">
		<p>Blood</p>
		<input type="text" name="blood">
		<input type="submit" name="submit">
	</form>
</body>
</html>