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
	<form action=" " method="POST">
	<table>
	
	<tr>
	<td>Entry_Time</td>
	<td><input type="datetime-local" name="Entry_Time" placeholder="Current Date and Time"required/></td><br />
	</tr>
	
	<tr>
	<td>First_Name</td>
	<td><input type="text" name="First_Name" placeholder="Enter Orphan First Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Last_Name</td>
	<td><input type="text" name="Last_Name" placeholder="Enter Orphan Last Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Sex</td>
	<td><input type="text" name="Sex" placeholder="Sex"required/></td><br />
	</tr>
	
	<tr>
	<td>DOB</td>
	<td><input type="date" name="DOB" placeholder="Enter Orphan Date Of Birth"required/></td><br />
	</tr>
	
	<tr>
	<td>National_ID</td>
	<td><input type="text" name="National_ID" placeholder="National_ID"required/></td><br />
	</tr>
	
	<tr>
	<td>Status</td>
	<td><textarea rows="5" cols="50" name="Status" placeholder="Highlight Condition Of Needy"required/></textarea></td><br />
	</tr>
	
	<tr>
	<td>Deceased_Rank</td>
	<td><input type="text" name="Deceased_Rank" placeholder="Deceased's Rank"required/></td><br />
	</tr>
	
	<tr>
	<td>Deceased_Force_Number</td>
	<td><input type="text" name="Deceased_Force_Number" placeholder="Deceased's Force Number"required/></td><br />
	</tr>
	
	<tr>
	<td>Deceased_First_Name</td>
	<td><input type="text" name="Deceased_First_Name" placeholder="Deceased's First Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Deceased_Last_Name</td>
	<td><input type="text" name="Deceased_Last_Name" placeholder="Deceased's Last Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Deceased_DOD</td>
	<td><input type="date" name="Deceased_DOD" placeholder="Deceased Date Of Death"required/></td><br />
	</tr>
	
	<tr>
	<td>Place_Of_Burial</td>
	<td><input type="text" name="Place_Of_Burial" placeholder="Place Of Burial"required/></td><br />
	</tr>
	
	<tr>
	<td>District</td>
	<td><input type="text" name="District" placeholder="District"required/></td><br />
	</tr>
	
	<tr>
	<td>Station</td>
	<td><input type="text" name="Station" placeholder="Station"required/></td><br />
	</tr>
	
	<tr>
	<td>Welfare_Fund_Beneficiary</td>
	<td><input type="text" name="Welfare_Fund_Beneficiary" placeholder="Yes/No"required/></td><br />
	</tr>
	
	<tr>
	<td>Academic_Level</td>
	<td><input type="text" name="Academic_Level" placeholder="Academic_Level"required/></td><br />
	</tr>
	
	<tr>
	<td>Name_Of_School</td>
	<td><input type="text" name="Name_Of_School" placeholder="Orphan's Name Of School"/></td><br />
	</tr>
	
	<tr>
	<td>School_Accounts_Details</td>
	<td><input type="text" name="School_Accounts_Details" placeholder="School Account Details"/></td><br />
	</tr>
	
	<tr>
	<td>Guardian_First_Name</td>
	<td><input type="text" name="Guardian_First_Name" placeholder="Guardian_First_Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Guardian_Last_Name</td>
	<td><input type="text" name="Guardian_Last_Name" placeholder="Guardian_Last_Name"required/></td><br />
	</tr>
	
	<tr>
	<td>Guardian_Telephone_Number</td>
	<td><input type="tel" name="Guardian_Telephone_Number" placeholder="Guardian Telephone Number"required/></td><br />
	</tr>
	
	<tr>
	<td>Guardian_Address</td>
	<td><textarea rows="5" cols="50"name="Guardian_Address" placeholder="Guardian_Address"required/></textarea></td><br />
	</tr>
	
	<tr>
	<td>Relationship_To_Orphan</td>
	<td><input type="text" name="Relationship_To_Orphan" placeholder="Relationship_To_Orphan"required/></td><br />
	</tr>
	
	<tr>
	<td>.</td>
	<td><input name="Save" type="submit" id="Save" value="Save" /></td>
	<tr>
	</table>
	</form>
	</body>
	</html>