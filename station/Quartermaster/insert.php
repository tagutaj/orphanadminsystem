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
	$deceased_rank=mysqli_real_escape_string($con,$_POST['Deceased_Rank']);
	$deceased_force_num=mysqli_real_escape_string($con,$_POST['Deceased_Force_Number']);
	$deceased_fname=mysqli_real_escape_string($con,$_POST['Deceased_First_Name']);
	$deceased_lname=mysqli_real_escape_string($con,$_POST['Deceased_Last_Name']);
	$dod=mysqli_real_escape_string($con,$_POST['Deceased_DOD']);
	$place_of_burial=mysqli_real_escape_string($con,$_POST['Place_Of_Burial']);
	$district=mysqli_real_escape_string($con,$_POST['District']);
	$station=mysqli_real_escape_string($con,$_POST['Station']);
	$welfare_fund_beneficiary=mysqli_real_escape_string($con,$_POST['Welfare_Fund_Beneficiary']);
	$academic_level=mysqli_real_escape_string($con,$_POST['Academic_Level']);
	$name_of_school=mysqli_real_escape_string($con,$_POST['Name_Of_School']);
	$school_accounts=mysqli_real_escape_string($con,$_POST['School_Accounts_Details']);
	$guardian_fname=mysqli_real_escape_string($con,$_POST['Guardian_First_Name']);
	$guardian_lname=mysqli_real_escape_string($con,$_POST['Guardian_Last_Name']);
	$guardian_tel_num=mysqli_real_escape_string($con,$_POST['Guardian_Telephone_Number']);
	$guardian_address=mysqli_real_escape_string($con,$_POST['Guardian_Address']);
	$relationship_to_orphan=mysqli_real_escape_string($con,$_POST['Relationship_To_Orphan']);
 
	$sql="INSERT INTO orphans(Entry_Time, First_Name, Last_Name, Sex, DOB, National_ID,Status, Deceased_Rank, Deceased_Force_Number, Deceased_First_Name,
		Deceased_Last_Name, Deceased_DOD, Place_Of_Burial, District,Station,Welfare_Fund_Beneficiary,Academic_Level,Name_Of_School,School_Accounts_Details,
		Guardian_First_Name,Guardian_Last_Name,Guardian_Telephone_Number,Guardian_Address,Relationship_To_Orphan)VALUES('$entry_time','$fname','$lname','$sex',
		'$dob',	'$national_id','$status','$deceased_rank','$deceased_force_num','$deceased_fname','$deceased_lname','$dod','$place_of_burial','$district','$station',
		'$welfare_fund_beneficiary','$academic_level','$name_of_school','$school_accounts','$guardian_fname','$guardian_lname','$guardian_tel_num',
		'$guardian_address','$relationship_to_orphan')";
	
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
	<body>
	<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<title>Orphans Admin System</title>
	<h3>Register Orphan</h3>
	</head>
	<body>
	<form action=" " method="POST">
	<table class="insert">
	
	<tr>
	<td>Entry Time</td>
	<td><input type="datetime-local" name="Entry_Time" placeholder="Current Date and Time"required/></td><br />
	</tr>
	
	<tr>
	<td>First Name</td>
	<td><input type="text" name="First_Name" placeholder="Enter Orphan First Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Last Name</td>
	<td><input type="text" name="Last_Name" placeholder="Enter Orphan Last Name"required/></td><br />
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
	<td><input type="text" name="National_ID" placeholder="Orphan's National ID"required/></td><br />
	</tr>
	
	<tr>
	<td>Status</td>
	<td><textarea rows="5" cols="50" name="Status" placeholder="Highlight Condition Of Needy"required/></textarea></td><br />
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
	<td>Deceased First  Name</td>
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
	<td>District</td>
	<td><input type="text" name="District" placeholder="Morris"required/></td><br />
	</tr>
	
	<tr>
	<td>Station</td>
	<td><input type="text" name="Station" placeholder="Quartermaster"required/></td><br />
	</tr>
	
	<tr>
	<td>Welfare Fund Beneficiary</td>
	<td><input type="text" name="Welfare_Fund_Beneficiary" placeholder="Yes/No"required/></td><br />
	</tr>
	
	<tr>
	<td>Academic Level</td>
	<td><input type="text" name="Academic_Level" placeholder="Academic Level"required/></td><br />
	</tr>
	
	<tr>
	<td>Name Of School</td>
	<td><input type="text" name="Name_Of_School" placeholder="Orphan's Name Of School"/></td><br />
	</tr>
	
	<tr>
	<td>School Accounts Details</td>
	<td><input type="text" name="School_Accounts_Details" placeholder="School Account Details"/></td><br />
	</tr>
	
	<tr>
	<td>Guardian First Name</td>
	<td><input type="text" name="Guardian_First_Name" placeholder="Guardian First Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Guardian Last Name</td>
	<td><input type="text" name="Guardian_Last_Name" placeholder="Guardian Last Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Guardian Telephone Number</td>
	<td><input type="tel" name="Guardian_Telephone_Number" placeholder="Guardian Telephone Number"required/></td><br />
	</tr>
	
	<tr>
	<td>Guardian Address</td>
	<td><textarea rows="5" cols="50"name="Guardian_Address" placeholder="Guardian Address"required/></textarea></td><br />
	</tr>
	
	<tr>
	<td>Relationship To Orphan</td>
	<td><input type="text" name="Relationship_To_Orphan" placeholder="Relationship To Orphan"required/></td><br />
	</tr>
	
	<tr>
	<td></td>
	<td><input name="Save" type="submit" id="Save" value="Save" /></td>
	<tr>
	</table>
	</form>
	</body>
	</html>