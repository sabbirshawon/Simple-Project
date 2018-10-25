<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-8 form_bg">
				<h1>OR, SIGN UP HERE</h1>
				<form action="" method="post" class="form-horizontal">
					<div class="row">
						<div class="col-md-6">
							<label for="exampleInputName2">User Type</label>
							<select class="form-control" name="user_type">
									<option>Select your type</option>
									<option name="user_type">STUDENT</option>
									<option name="user_type">ADMIN</option>
							</select>
						</div>
						<div class="col-md-6">
							<label for="exampleInputName2">Name</label>
							<input type="text" class="form-control" name="name" id="exampleInputName2" placeholder="Name">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="exampleInputName2">User Name</label>
							<input type="text" class="form-control" name="username" id="exampleInputName2" placeholder="User Name">
						</div>
						<div class="col-md-6">
							<label for="exampleInputEmail3">Email Address</label>
							<input type="text" class="form-control" name="email_id" id="exampleInputEmail3" placeholder="Enter email">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="exampleInputPassword3">Password</label>
							<input type="password" class="form-control" name="password" id="exampleInputPassword3" placeholder="Enter Password">
						</div>
						<div class="col-md-6">
							<label for="exampleInputPassword3">Confirm Password</label>
							<input type="password" class="form-control" name="password" id="exampleInputPassword3" placeholder="Confirm Password">
						</div>
					</div>
					<div class="row reg_submit">
						<div class="col-md-4">
							<a type="submit" href="index.php" class="btn btn-warning">Back</a>
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<input type="submit" class="btn btn-success" name="submit" value="Submit"/>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-2">
	
			</div>
		</div>
	</div>
</body>
</html>

<?php
include("db_con.php");
if(isset($_POST['submit'])){
	

	$run = '';
	$user_type = $_REQUEST['user_type']; 
	$name = $_REQUEST['name']; 
	$username = $_REQUEST['username']; 
	$email_id = $_REQUEST['email_id']; 
	$password = $_REQUEST['password']; 
	
	if($user_type!='' && $name!='' && $username!='' && $email_id!='' && $password!='')
	{
		$query = "INSERT INTO registration(user_type,name,username,email_id,password) VALUES ('".$user_type."', '".$name."', '".$username."', '".$email_id."', '".$password."')";
		$run = mysql_query($query);
		
		if($run)
		{
			$sql="SELECT * FROM registration order by name asc";
			$row = mysql_query($sql);
				echo ' <span style="margin-left:475px;color:green;">Your Entry is Successful !</span> ';
				
		}
		else
		echo 'Try Again !';
	}
	else
		echo ' <span style="margin-left:475px;color:red;">Please Fill Up All the Information ! </span>';

	
	
}

?>