<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
	
	<title>Orphans Admin System</title>
	<h3>List of All User Chaplains </h3>
</head>
<body>
	<table class="two">
	<tr>
	<th>Entry Number</th>
	<th>Email</th> 
	<th>Password</th>
	<th>District</th>
	<th>Station</th>
	</tr>
	
<?php
	include("includes/db.php");
	$get_orphan="SELECT * FROM users";
	$run_orphan=mysqli_query($con,$get_orphan);
	$i=0;
	while($row_orphan=mysqli_fetch_array($run_orphan)){
		$email=$row_orphan['Email'];
		$password=$row_orphan['Password'];
		$district=$row_orphan['District'];
		$station=$row_orphan['Station'];
		$i++
?>
	<tr>
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $email; ?> </td>
	<td> <?php echo $password; ?> </td>
	<td> <?php echo $district; ?> </td>
	<td> <?php echo $station; ?> </td>
	<?php }; ?>
</table>
</body>
</html>
