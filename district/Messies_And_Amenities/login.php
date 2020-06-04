<?php
include("includes/db.php");
session_start();



if(isset($_POST['login'])){
	//get values from login.php
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	//prevent mysql injection
	$email=stripcslashes($email);
	$pass=stripcslashes($pass);
	$email=mysqli_real_escape_string($con,$email);
	$pass=mysqli_real_escape_string($con,$pass);
	
	
	$sel_user="select * from users where email='$email' and password ='$pass'";
	
	$run_user= mysqli_query($con,$sel_user);
	$check_user=mysqli_num_rows($run_user);
	if($check_user ==1){
		$_SESSION['$email']=$email;
		header("location: index_messamen.html");
		
	}
	else{
		echo "<script> alert('Invalid Details')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
	
	<title>Login Page</title>
	
</head>
<body>
<div id="frm">
		<form action="" method="post">
					<p>
					<label>Username:</label>
					<Input type="email" id="email" name="email"/>
					</p>
					<p>
					<label>Password:</label>
					<Input type="password" id="pass" name="pass"/>
					</p>
					<p>
					<Input type="Submit" id="btn" name="login" value="Login"/>
					</p>
		</form>
</div>
</body>
</html>
