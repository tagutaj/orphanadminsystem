<?php
//get values from login.php
$username=$_POST['user'];
$password=$_POST['pass'];
//prevent mysql injectio
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
//connect to server
mysql_connect("localhost","tagutaj","1993");
$test=mysql_select_db("login");
if($test){
	print"Database Found";
}
else{
	print"Database Not Found";
}
//Query database for the user
$result=mysql_query("select * from users where username='$username' and password='$password'")
or die("Failed to connect">mysql_error());
$row=mysql_fetch_array($result);
if($row['username']=$username && $row['password']=$password){
	print("Login Success!!! Welcome".$row['username']);
}

else{
	print("failed to login");
}

?>