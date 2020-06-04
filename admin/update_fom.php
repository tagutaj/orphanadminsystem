<?php
include("includes/db.php");
$sql= "SELECT * from former_orphans";
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
	<h3>Update Former Orphans' Details </h3>
</head>
<body>
<table class="one">
<tr>
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
while ($row = mysqli_fetch_array($records)) {
	
echo "<tr><form action=update_fom.php method='post'></tr>";
echo"<td><input type=text name=First_Name value='".$row['First_Name']."'></td>";
echo"<td><input type=text name=Last_Name value='".$row['Last_Name']."'></td>";
echo"<td><input type=text  name=Sex value='".$row['Sex']."'></td>";
echo"<td><input type=date  name=DOB value='".$row['DOB']."'></td>";
echo"<td><input type=text  name=National_ID value='".$row['National_ID']."'></td>";
echo"<td><input type=text  name=Status value='".$row['Status']."'></td>";
echo"<td><input type=text  name=Email value='".$row['Email']."'></td>";
echo"<td><input type=text  name=Physical_Address value='".$row['Physical_Address']."'></td>";
echo"<td><input type=text  name=Telephone_Number value='".$row['Telephone_Number']."'></td>";
echo"<td><input type=text  name=Occupation value='".$row['Occupation']."'></td>";
echo"<td><input type=text  name=Deceased_Rank value='".$row['Deceased_Rank']."'></td>";
echo"<td><input type=text  name=Deceased_Force_Number value='".$row['Deceased_Force_Number']."'></td>";
echo"<td><input type=text  name=Deceased_First_Name value='".$row['Deceased_First_Name']."'></td>";
echo"<td><input type=text  name=Deceased_Last_Name value='".$row['Deceased_Last_Name']."'></td>";
echo"<td><input type=date  name=Deceased_DOD value='".$row['Deceased_DOD']."'></td>";
echo"<td><input type=text  name=Place_Of_Burial value='".$row['Place_Of_Burial']."'></td>";
echo"<td><input type=text  name=Sponsor value='".$row['Sponsor']."'></td>";
echo"<td><input type=hidden  name=Entry_Number value='".$row['Entry_Number']."'></td>";
echo"<td><input type=submit name=update ></td>";
echo"</form></tr>";
}
if(isset($_POST['update'])){
$sql="UPDATE former_orphans SET  First_Name='$_POST[First_Name]',Last_Name='$_POST[Last_Name]', Sex='$_POST[Sex]', DOB='$_POST[DOB]', 
	National_ID='$_POST[National_ID]',Status='$_POST[Status]',Email='$_POST[Email]', Physical_Address='$_POST[Physical_Address]',
	Telephone_Number= '$_POST[Telephone_Number]',Occupation='$_POST[Occupation]',Deceased_Rank='$_POST[Deceased_Rank]', 
	Deceased_Force_Number='$_POST[Deceased_Force_Number]', Deceased_First_Name='$_POST[Deceased_First_Name]',Deceased_Last_Name='$_POST[Deceased_Last_Name]',
	Deceased_DOD='$_POST[Deceased_DOD]',Place_Of_Burial='$_POST[Place_Of_Burial]',Sponsor='$_POST[Sponsor]' WHERE Entry_Number='$_POST[Entry_Number]'";

if(mysqli_query($con,$sql))
header("refresh:1; url=update_fom.php");
else
echo"not updated";
}
?>