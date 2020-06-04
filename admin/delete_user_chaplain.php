<?php 
include("includes/db.php");
if(isset($_POST['submit'])){
$entry_number=$_POST['Entry_Number'];
$query="DELETE FROM users WHERE Entry_Number='".$entry_number."'";
if(mysqli_query($con,$query)){
	echo "Deleted Successfully";
}
else 
{
	echo "Failed to Delete";	
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
	<h3>Deleting User Chaplain's  From System</h3>
</head>
<body>
<form action="" method="POST">
<table class="two">
<tr>
<td>Entry Number:</td>
<td><input name="Entry_Number" type="text"/></td><br />
</tr>
<tr>
<td></td>
<td><input name="submit" type="submit" value="Delete Record"/></td>
</tr>
</table>
</form>
</body>
</html>