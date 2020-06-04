<?php
include("includes/db.php");
$sql= "SELECT * from orphans";
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
	<h3>Update Orphans' Details </h3>
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
	<th>Deceased Rank</th>
	<th>Deceased F/Number</th>
	<th>Deceased Name</th>
	<th>Deceased Surname</th> 
	<th>Deceased DOD</th>
	<th>Place Of Burial</th> 
	<th>District</th>
	<th>Station</th>
	<th>Welfare Fund Beneficiary</th>
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
while ($row = mysqli_fetch_array($records)) {
	
echo "<tr><form action=update_orphan.php method='post'></tr>";
echo"<td><input type=text name=First_Name value='".$row['First_Name']."'></td>";
echo"<td><input type=text name=Last_Name value='".$row['Last_Name']."'></td>";
echo"<td><input type=text  name=Sex value='".$row['Sex']."'></td>";
echo"<td><input type=date  name=DOB value='".$row['DOB']."'></td>";
echo"<td><input type=text  name=National_ID value='".$row['National_ID']."'></td>";
echo"<td><input type=text  name=Status value='".$row['Status']."'></td>";
echo"<td><input type=text  name=Deceased_Rank value='".$row['Deceased_Rank']."'></td>";
echo"<td><input type=text  name=Deceased_Force_Number value='".$row['Deceased_Force_Number']."'></td>";
echo"<td><input type=text  name=Deceased_First_Name value='".$row['Deceased_First_Name']."'></td>";
echo"<td><input type=text  name=Deceased_Last_Name value='".$row['Deceased_Last_Name']."'></td>";
echo"<td><input type=date  name=Deceased_DOD value='".$row['Deceased_DOD']."'></td>";
echo"<td><input type=text  name=Place_Of_Burial value='".$row['Place_Of_Burial']."'></td>";
echo"<td><input type=text  name=District value='".$row['District']."'></td>";
echo"<td><input type=text  name=Station value='".$row['Station']."'></td>";
echo"<td><input type=text  name=Welfare_Fund_Beneficiary value='".$row['Welfare_Fund_Beneficiary']."'></td>";
echo"<td><input type=text  name=Academic_Level value='".$row['Academic_Level']."'></td>";
echo"<td><input type=text  name=Name_Of_School value='".$row['Name_Of_School']."'></td>";
echo"<td><input type=text  name=School_Accounts_Details value='".$row['School_Accounts_Details']."'></td>";
echo"<td><input type=text  name=Guardian_First_Name value='".$row['Guardian_First_Name']."'></td>";
echo"<td><input type=text  name=Guardian_Last_Name value='".$row['Guardian_Last_Name']."'></td>";
echo"<td><input type=tel   name=Guardian_Telephone_Number value='".$row['Guardian_Telephone_Number']."'></td>";
echo"<td><input type=text  name=Guardian_Address value='".$row['Guardian_Address']."'></td>";
echo"<td><input type=text  name=Relationship_To_Orphan value='".$row['Relationship_To_Orphan']."'></td>";
echo"<td><input type=hidden  name=Entry_Number value='".$row['Entry_Number']."'></td>";
echo"<td><input type=submit name=update ></td>";
echo"</form></tr>";
}
if(isset($_POST['update'])){
$sql="UPDATE orphans SET  First_Name='$_POST[First_Name]', Last_Name='$_POST[Last_Name]', Sex='$_POST[Sex]', DOB='$_POST[DOB]', 
	National_ID='$_POST[National_ID]',Status='$_POST[Status]', Deceased_Rank='$_POST[Deceased_Rank]', Deceased_Force_Number='$_POST[Deceased_Force_Number]', 
	Deceased_First_Name='$_POST[Deceased_First_Name]',	Deceased_Last_Name='$_POST[Deceased_Last_Name]', Deceased_DOD='$_POST[Deceased_DOD]',
	Place_Of_Burial='$_POST[Place_Of_Burial]', District='$_POST[District]',Station='$_POST[Station]',Welfare_Fund_Beneficiary='$_POST[Welfare_Fund_Beneficiary]',
	Academic_Level='$_POST[Academic_Level]',Name_Of_School='$_POST[Name_Of_School]',School_Accounts_Details='$_POST[School_Accounts_Details]',
	Guardian_First_Name='$_POST[Guardian_First_Name]',Guardian_Last_Name='$_POST[Guardian_Last_Name]',Guardian_Telephone_Number='$_POST[Guardian_Telephone_Number]',
	Guardian_Address='$_POST[Guardian_Address]',Relationship_To_Orphan='$_POST[Relationship_To_Orphan]' WHERE Entry_Number='$_POST[Entry_Number]'";

if(mysqli_query($con,$sql))
header("refresh:1; url=update_orphan.php");
else
echo"not updated";
}
?>