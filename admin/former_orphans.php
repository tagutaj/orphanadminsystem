<!DOCTYPE html>
<html>
<head>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">

	<title>Orphans Admin System</title>
	<h3>List of All Former Orphans</h3>
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
	<th>Email</th>
	<th>Physical Address</th>
	<th>Telephone Number</th>
	<th>Occupation</th>
	<th>Deceased Rank</th>
	<th>Deceased F/Number</th>
	<th>Deceased Name</th>
	<th>Deceased Surname</th> 
	<th>Deceased DOD</th>
	<th>Place Of Burial</th> 
	<th>Assist Orphans</th>
	</tr>
	
<?php
	include("includes/db.php");
	$get_orphan="SELECT * FROM former_orphans";
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
		$email=$row_orphan['Email'];
		$address=$row_orphan['Physical_Address'];
		$tel_num=$row_orphan['Telephone_Number'];
		$occupation=$row_orphan['Occupation'];
		$deceased_rank=$row_orphan['Deceased_Rank'];
		$deceased_force_num=$row_orphan['Deceased_Force_Number'];
		$deceased_fname=$row_orphan['Deceased_First_Name'];
		$deceased_lname=$row_orphan['Deceased_Last_Name'];
		$dod=$row_orphan['Deceased_DOD'];
		$place_of_burial=$row_orphan['Place_Of_Burial'];
		$sponsor=$row_orphan['Sponsor'];
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
	<td> <?php echo $email; ?> </td>
	<td> <?php echo $address; ?> </td>
	<td> <?php echo $tel_num; ?> </td>
	<td> <?php echo $occupation; ?> </td>
	<td> <?php echo $deceased_rank; ?> </td>
	<td> <?php echo $deceased_force_num; ?> </td>
	<td> <?php echo $deceased_fname; ?> </td>
	<td> <?php echo $deceased_lname; ?> </td>
	<td> <?php echo $dod; ?> </td>
	<td> <?php echo $place_of_burial; ?> </td>
	<td> <?php echo $sponsor; ?> </td>
	<?php }; ?>
</table>
</body>
</html>
