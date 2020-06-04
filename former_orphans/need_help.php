<!DOCTYPE html>
<html>
<head>
<title>Orphans Admin System</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<h3>List of Orphans in need of Help</h3>
</head>
<body>
	<table class="two">
	<tr>
	<th>Entry Number</th>
	<th>Name</th>
	<th>Surname</th> 
	<th>Sex</th>
	<th>DOB</th> 
	<th>Status</th> 
	<th>Academic Level</th>
	</tr>
	
<?php
	include("includes/db.php");
	$get_orphan="SELECT * FROM orphans
	WHERE Welfare_Fund_Beneficiary='No'";
	$run_orphan=mysqli_query($con,$get_orphan);
	$i=0;
	while($row_orphan=mysqli_fetch_array($run_orphan)){
		
		$fname=$row_orphan['First_Name'];
		$lname=$row_orphan['Last_Name'];
		$sex=$row_orphan['Sex'];
		$dob=$row_orphan['DOB'];
		$status=$row_orphan['Status'];
		$academic_level=$row_orphan['Academic_Level'];
		$i++
?>
	<tr>
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $fname; ?> </td>
	<td> <?php echo $lname; ?> </td>
	<td> <?php echo $sex; ?> </td>
	<td> <?php echo $dob; ?> </td>
	<td> <?php echo $status; ?> </td>
	<td> <?php echo $academic_level; ?> </td>
	<?php }; ?>
</table>
</body>
</html>
