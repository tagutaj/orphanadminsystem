<?php
include("includes/db.php");
session_start();



if(isset($_POST['login'])){
	
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	
	
	
	$sel_user="select * from users where email='$email' and password ='$pass'";
	
	$run_user= mysqli_query($con,$sel_user);
	$check_user=mysqli_num_rows($run_user);
	if($check_user ==1){
		$_SESSION['$email']=$email;
		echo "<script>alert('login succesful')</script>";
	}
	else{
		echo "wrong password";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" Type="text/css" href="style.css">
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
