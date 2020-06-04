<?php
	include("includes/db.php");
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){

	$entry_time=mysqli_real_escape_string($con,$_POST['Entry_Time']);
	$fname=mysqli_real_escape_string($con,$_POST['First_Name']);
	$lname=mysqli_real_escape_string($con,$_POST['Last_Name']);
	$sex=mysqli_real_escape_string($con,$_POST['Sex']);
	$dob=mysqli_real_escape_string($con,$_POST['DOB']);
	$national_id=mysqli_real_escape_string($con,$_POST['National_ID']);
	$status=mysqli_real_escape_string($con,$_POST['Status']);
	$email=mysqli_real_escape_string($con,$_POST['Email']);
	$address=mysqli_real_escape_string($con,$_POST['Physical_Address']);
	$tel_num=mysqli_real_escape_string($con,$_POST['Telephone_Number']);
	$occupation=mysqli_real_escape_string($con,$_POST['Occupation']);
	$deceased_rank=mysqli_real_escape_string($con,$_POST['Deceased_Rank']);
	$deceased_force_num=mysqli_real_escape_string($con,$_POST['Deceased_Force_Number']);
	$deceased_fname=mysqli_real_escape_string($con,$_POST['Deceased_First_Name']);
	$deceased_lname=mysqli_real_escape_string($con,$_POST['Deceased_Last_Name']);
	$dod=mysqli_real_escape_string($con,$_POST['Deceased_DOD']);
	$place_of_burial=mysqli_real_escape_string($con,$_POST['Place_Of_Burial']);
	$sponsor=mysqli_real_escape_string($con,$_POST['Sponsor']);
	
	$sql = "INSERT INTO former_orphans (Entry_Time, First_Name, Last_Name, Sex, DOB, National_ID, Status, Email, Physical_Address, Telephone_Number, Occupation, 
		Deceased_Rank, Deceased_Force_Number, Deceased_First_Name, Deceased_Last_Name, Deceased_DOD, Place_Of_Burial, Sponsor) VALUES('$entry_time','$fname',
		'$lname','$sex','$dob','$national_id','$status','$email','$address', '$tel_num', '$occupation','$deceased_rank','$deceased_force_num','$deceased_fname',
		'$deceased_lname','$dod','$place_of_burial','$sponsor')";
	
	if($con->query($sql)==TRUE)
	{
	echo"success";
	}
	else
	{
	echo"failed";
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
	<h3>Register Former Orphan</h3>
	</head>
	<body>
	<head>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
	</head>
	<form action="inset_former_orphan.php" method="POST">
	<table class="insert">
	
	<tr>
	<td>Entry Time</td>
	<td><input type="datetime-local" name="Entry_Time" placeholder="Current Date and Time"required/></td><br />
	</tr>
	
	<tr>
	<td>First Name</td>
	<td><input type="text" name="First_Name" placeholder=" First Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Last Name</td>
	<td><input type="text" name="Last_Name" placeholder=" Last Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Sex</td>
	<td><input type="text" name="Sex" placeholder="Sex"required/></td><br />
	</tr>
	
	<tr>
	<td>DOB</td>
	<td><input type="date" name="DOB" placeholder="Orphan Date Of Birth"required/></td><br />
	</tr>
	
	<tr>
	<td>National ID</td>
	<td><input type="text" name="National_ID" placeholder="Your National ID"required/></td><br />
	</tr>
	
	<tr>
	<td>Status</td>
	<td><textarea rows="6" cols="15" name="Status" placeholder="Status "required/></textarea></td><br />
	</tr>
	
	<tr>
	<td>Email</td>
	<td><input type="email" name="Email" placeholder="Email"/></td><br />
	</tr>
	
	<tr>
	<td>Physical Address</td>
	<td><textarea rows="6" cols="15"  name="Physical_Address" placeholder="Physical Address"required/></textarea></td><br />
	</tr>
	
	<tr>
	<td>Telephone Number</td>
	<td><input type="tel" name="Telephone_Number" placeholder="Telephone Number"required/></td><br />
	</tr>
	
	<tr>
	<td>Occupation</td>
	<td><textarea rows="6" cols="15"  name="Occupation" placeholder="Way of Living"required/></textarea></td><br />
	</tr>
	
	<tr>
	<td>Deceased Rank</td>
	<td><input type="text" name="Deceased_Rank" placeholder="Deceased's Rank"required/></td><br />
	</tr>
	
	<tr>
	<td>Deceased Force Number</td>
	<td><input type="text" name="Deceased_Force_Number" placeholder="Deceased's Force Number"required/></td><br />
	</tr>
	
	<tr>
	<td>Deceased First Name</td>
	<td><input type="text" name="Deceased_First_Name" placeholder="Deceased's First Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Deceased Last Name</td>
	<td><input type="text" name="Deceased_Last_Name" placeholder="Deceased's Last Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Deceased DOD</td>
	<td><input type="date" name="Deceased_DOD" placeholder="Deceased Date Of Death"required/></td><br />
	</tr>
	
	<tr>
	<td>Place Of Burial</td>
	<td><input type="text" name="Place_Of_Burial" placeholder="Place Of Burial"required/></td><br />
	</tr>
	
	<tr>
	<td>Sponsor</td>
	<td><input type="text" name="Sponsor" placeholder="Ammount"/></td><br />
	</tr>
	
	<tr>
	<td></td>
	<td><input name="Save" type="submit" id="Save" value="Save" /></td>
	</tr>
	
	</table>
	</form>
	</body>
	</html>