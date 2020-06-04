//validating lenglth
	
	$elen=strlen($email);
	$plen=strlen($password);
	$dlen=strlen($district);
	$slen=strlen($station);
	
	if($elen>= 15 && $elen<=30){
		echo"";
	}
	else
	{
		echo"Error! Email Must be between 15 and 30 characters"."<BR>";
	}
	if($plen>= 8 && $elen<=16){
		echo"";
	}
	else
	{
		echo"Error! Email Must be between 8 and 16 characters"."<BR>";
	}
	if($dlen>= 5 && $dlen<=25){
		echo"";
	}
	else
	{
		echo"Error! Email Must be between 5 and 25 characters"."<BR>";
	}
	if($slen<=25){
		echo"";
	}
	else
	{
		echo"Error! Email Must be between 15 and 30 characters"."<BR>";
	}
	
	$sqli="SELECT * FROM  users WHERE Email=$email";
	$result=mysqli_query($con,$sqli);
	$num_rows=mysqli_num_rows($result);
	if($num_rows>0){
		echo"Username already taken";
	}
	else
	{
		
	}
	?>
	<?php