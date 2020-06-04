<!DOCTYPE html>
<html>
<head><link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<title>Orphans Admin System</title>
	<h3>List of All Welfare Fund Beneficiaries</h3>
</head>
<body>
	<table class="one">
	<tr>
	<th>Entry Number</th>
	<th>Entry Time</th> 
	<th>Name</th>
	<th>Surname</th> 
	<th>Sex</th>
	<th>DOB</th> 
	<th>National ID</th>
	<th>Status</th> 
	<th>Deceased Rank</th>
	<th>Deceased F/Number</th>
	<th>Deceased Name</th>
	<th>Deceased Surname</th> 
	<th>Deceased DOD</th>
	<th>Place Of Burial</th> 
	<th>District</th>
	<th>Academic Level</th>
	<th>School Name</th>
	<th>School Accounts Details</th>
	<th>Guardian Name</th>
	<th>Guardian Surname</th>
	<th>Guardian Tel No.</th>
	<th>Guardian Address</th>
	<th>Relationship To Orphan<th>
	</tr>
	
<?php
	include("includes/db.php");
	$get_orphan="SELECT * FROM orphans
	WHERE Station='Amenities'&& Welfare_Fund_Beneficiary='Yes'";
	$run_orphan=mysqli_query($con,$get_orphan);
	$i=0;
	while($row_orphan=mysqli_fetch_array($run_orphan)){
		$entry_time=$row_orphan['Entry_Time'];
		$fname=$row_orphan['First_Name'];
		$lname=$row_orphan['Last_Name'];
		$sex=$row_orphan['Sex'];
		$dob=$row_orphan['DOB'];
		$national_id=$row_orphan['National_ID'];
		$status=$row_orphan['Status'];
		$deceased_rank=$row_orphan['Deceased_Rank'];
		$deceased_force_num=$row_orphan['Deceased_Force_Number'];
		$deceased_fname=$row_orphan['Deceased_First_Name'];
		$deceased_lname=$row_orphan['Deceased_Last_Name'];
		$dod=$row_orphan['Deceased_DOD'];
		$place_of_burial=$row_orphan['Place_Of_Burial'];
		$district=$row_orphan['District'];
		$academic_level=$row_orphan['Academic_Level'];
		$name_of_school=$row_orphan['Name_Of_School'];
		$school_accounts=$row_orphan['School_Accounts_Details'];
		$guardian_fname=$row_orphan['Guardian_First_Name'];
		$guardian_lname=$row_orphan['Guardian_Last_Name'];
		$guardian_tel_num=$row_orphan['Guardian_Telephone_Number'];
		$guardian_address=$row_orphan['Guardian_Address'];
		$relationship_to_orphan=$row_orphan['Relationship_To_Orphan'];
		$i++
?>
	<tr>
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $entry_time; ?> </td>
	<td> <?php echo $fname; ?> </td>
	<td> <?php echo $lname; ?> </td>
	<td> <?php echo $sex; ?> </td>
	<td> <?php echo $dob; ?> </td>
	<td> <?php echo $national_id; ?> </td>
	<td> <?php echo $status; ?> </td>
	<td> <?php echo $deceased_rank; ?> </td>
	<td> <?php echo $deceased_force_num; ?> </td>
	<td> <?php echo $deceased_fname; ?> </td>
	<td> <?php echo $deceased_lname; ?> </td>
	<td> <?php echo $dod; ?> </td>
	<td> <?php echo $place_of_burial; ?> </td>
	<td> <?php echo $district; ?> </td>
	<td> <?php echo $academic_level; ?> </td>
	<td> <?php echo $name_of_school; ?> </td>
	<td> <?php echo $school_accounts; ?> </td>
	<td> <?php echo $guardian_fname; ?> </td>
	<td> <?php echo $guardian_lname; ?> </td>
	<td> <?php echo $guardian_tel_num; ?> </td>
	<td> <?php echo $guardian_address; ?> </td>
	<td> <?php echo $relationship_to_orphan; ?> </td>
	<?php }; ?>
</table>
</body>
</html>
