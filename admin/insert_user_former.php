<?php
	include("includes/db.php");
	if(isset($_POST['Save'])){

	$entry_time=mysqli_real_escape_string($con,$_POST['Entry_Time']);
	$email=mysqli_real_escape_string($con,$_POST['Email']);
	$password=mysqli_real_escape_string($con,$_POST['Password']);
	 
	$sql="INSERT INTO user_former_orphan(Entry_Time,Email, Password)VALUES('$entry_time','$email','$password')";
	
	if($con->query($sql)==TRUE)
	{
		echo "<script>alert('Insertion succesful To Continue, Click OK')</script>";
		header("Location: index_admin.html");
	}
	else
	{
	echo "<script>alert('Insertion NOT Succesful)</script>";
	}
	
	}
	?>
	
	<html>
	<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<title>Orphans Admin System</title>
	<h3> Register User Former Orphan</h3>
	</head>
	<body>
	<form action=" " method="POST">
	<table class="insert">
	
	<tr>
	<td>Entry_Time</td>
	<td><input type="datetime-local" name="Entry_Time" required/></td><br />
	</tr>
	
	<tr>
	<td>Email</td>
	<td><input type="email" name="Email" placeholder="Email"required/></td><br />
	</tr>
	
	<tr>
	<td>Password</td>
	<td><input type="password" name="Password" placeholder="Password"required/></td><br />
	</tr>
	
	<tr>
	<td></td>
	<td><input name="Save" type="submit" id="Save" value="Save" /></td>
	<tr>
	</table>
	</form>
	</body>
	</html>