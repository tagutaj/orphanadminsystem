<?php
	include("includes/db.php");
	if(isset($_POST['Save'])){

	$email=mysqli_real_escape_string($con,$_POST['Email']);
	$password=mysqli_real_escape_string($con,$_POST['Password']);
	$district=mysqli_real_escape_string($con,$_POST['District']);
	$station=mysqli_real_escape_string($con,$_POST['Station']);
	
 
	$sql="INSERT INTO users(Email, Password, District,Station)VALUES('$email','$password','$district','$station')";
	
	if($con->query($sql)==TRUE)
	{
		echo "<script>alert('Insertion succesful To Continue, Click OK')</script>";
		header("Location: index_admin.html");
	}
	else
	{
	echo"failed";
	}
	
	}
	?>
	
	<html>
	<body>
	<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<title>Orphans Admin System</title>
	<h3>Register User Chaplain </h3>
	</head>
	<form action=" " method="POST">
	<table class="insert">
	
	<tr>
	<td>Email</td>
	<td><input type="email" name="Email" placeholder="Email"required/></td><br />
	</tr>
	
	<tr>
	<td>Password</td>
	<td><input type="password" name="Password" placeholder="Password"required/></td><br />
	</tr>
	
	<tr>
	<td>District</td>
	<td><input type="text" name="District" placeholder="District"required/></td><br />
	</tr>
	
	<tr>
	<td>Station</td>
	<td><input type="text" name="Station" placeholder="Station"/></td><br />
	</tr>
	
	<tr>
	<td></td>
	<td><input name="Save" type="submit" id="Save" value="Save" /></td>
	<tr>
	</table>
	</form>
	</body>
	</html>