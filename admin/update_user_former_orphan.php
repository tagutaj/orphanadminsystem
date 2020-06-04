<?php
include("includes/db.php");
$sql= "SELECT * from user_Former_orphan";
$records=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
	
	<title>Orphans Admin System</title>
	<h3>Update User Former Orphans' Details </h3>
</head>
<body>
<table class="two">
<tr>
	<th>Email</th> 
	<th>Password</th>
	</tr>
	
<?php
while ($row = mysqli_fetch_array($records)) {
	
echo "<tr><form action=update_user_former_orphan.php method='post'></tr>";
echo"<td><input type=email name=Email value='".$row['Email']."'></td>";
echo"<td><input type=text name=Password value='".$row['Password']."'></td>";
echo "<td><input type=hidden  name=Entry_Number value='".$row['Entry_Number']."'></td>";
echo "<td><input type=submit name=update ></td>";
echo "</form></tr>";
}
if(isset($_POST['update'])){
$sql=" UPDATE user_Former_orphan SET Email='$_POST[Email]',Password='$_POST[Password]' WHERE Entry_Number='$_POST[Entry_Number]'";
	
if(mysqli_query($con,$sql))
header("refresh:1; url=update_user_former_orphan.php");
else
echo"not updated";
}
?>