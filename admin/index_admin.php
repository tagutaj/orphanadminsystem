<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Orphans Admin System</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
<h1>Administration Desk</h1>
</head>
<body>
<?php
if(isset($_GET['insert_orphan']))
{
	include("insert_orphan");
}
?>
<div class="topnav" id="mytopnav">
<section>
<a href="insert_orphan.php?insert_orphan"><b>New Orphan</b></a> |
<a href="inset_former_orphan.php"><b>New Former Orphan</b></a> |
<a href="insert_user_chaplaincy"><b>New User Chaplain</b></a> |
<a href="insert_user_former.php"><b>New User Former Orphan</b></a> |
<a href="current_orphans"><b>Current Orphans</b></a> |
<a href="former_orphans.php"><b>Former Orphans</b></a> |
<a href="user_chaplaincy.php"><b>User Chaplaincy</b></a> |
<a href="user_former_orphan.php"><b>User Former Orphans</b></a> |
</section>
<section>
<a href="update_orphan.php"><b>Update Orphans Details</b></a> |
<a href="update_fom.php"><b>Update Former Orphans Details</b></a> |
<a href="update_user_chap.php"><b>Update User Chaplaincy</b></a> |
<a href="update_user_former_orphan.php"><b>Update User Former Orphans</b></a> |
<a href="wf_beneficiary.php"><b>Welfare Fund Beneficiary</b></a> |
</section>
<section>
<a href="non_wf_beneficiary.php"><b>Non Welfare Fund Beneficiary</b></a> |
<a href="delete_orphan.php"><b>Delete Orphans</b></a> |
<a href="delete_former.php"><b>Delete Former Orphans</b></a> |
<a href="delete_user_chaplain.php"><b>Delete User Chaplain</b></a> |
<a href="delete_user_former_orphan.php"><b>Delete User Former Orphan</b></a>|
<a href="logout.php"><b>Logout</b></a>
</section>
</div>
<p class="error">
<b />Login Successful,Welcome Admin!
</p>
</body>
</html>