<?php 
	include("db_con.php");
	
	$run = '';
	$name = $_REQUEST['name']; 
	$reg_id = $_REQUEST['reg_id']; 
	$mobile_no = $_REQUEST['mobile_no']; 
	$email_id = $_REQUEST['email_id']; 
	$password = $_REQUEST['password']; 
	
	if($name!='' && $reg_id!='' && $mobile_no!='' && $email_id!='' && $password!='')
	{
		$query = "INSERT INTO registration(name,reg_id,mobile_no,email_id,password) VALUES ('".$name."', '".$reg_id."', '".$mobile_no."', '".$email_id."', '".$password."')";
		$run = mysql_query($query);
		
		if($run)
		{
			$sql="SELECT * FROM registration order by name asc";
			$row = mysql_query($sql);
				echo 'Your Entry is Successful !';
				
		}
		else
		echo 'Try Again !';
	}
	else
		echo "Please Fill Up All the Information !";

	
?>