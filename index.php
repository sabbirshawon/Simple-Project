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
			<div class="col-md-3"></div>
			<div class="col-md-6 login_bg">
				<h1>LOG IN</h1>
				<form class="form-horizontal" action="index.php" method="post">
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
							<label for="exampleInputEmail3">Email Address</label>
							<input type="text" class="form-control" name="email_id" id="exampleInputEmail3" placeholder="Enter email">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword3">Password</label>
							<input type="password" class="form-control" name="password" id="exampleInputPassword3" placeholder="Enter Password">
						</div>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox"> Remember me
						</label>
					</div>
					<button type="submit" name="signing" class="btn btn-success reg_submit">Sign in</button>
					<a href="reg.php" type="submit" class="btn btn-primary reg_submit">or, Sign Up Here</a>
				</form>
				
			</div>
			<div class="col-md-3">

			</div>
		</div>
	</div>
</body>
</html>

<?php
session_start();
	include("db_con.php");
	if(isset($_POST['signing'])){
		
		$user_type =$_REQUEST['user_type'];
		$email_id =$_REQUEST['email_id'];
		$password = $_REQUEST['password']; 
		$query= "SELECT * FROM registration WHERE user_type='$user_type' AND email_id='$email_id' AND password='$password'";
		$run= mysql_query($query);
		$result=mysql_fetch_array($run);
		
		
		if($result){
			$_SESSION["id"] = $id;
			$_SESSION["user_type"] = $user_type;
			$_SESSION["email_id"] = $email_id;
			$_SESSION["password"] = $password;
			header('Location:home.php');
		}
		else{
			
			echo '<span style="margin-left:475px;color:red;">Email or Password is wrong. Try Again!</span>';
		}
			
	}


?>



