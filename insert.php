<?php
session_start();
	include("db_con.php");
if($_SESSION["email_id"]==''){
	header('Location:index.php');
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<script src="js/jquery.plugin.js"></script>
	
	
	<!-- add styles -->
	<link href="css/ui-lightness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" /> 
	<!-- add scripts -->
	<script src="js/jquery.191.js"></script>
	<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
	<!-- end scripts -->
	<link rel="stylesheet" href="css/menu.css" />
	<link rel="stylesheet" href="css/style.css" />
	
	

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 header">
				<h1>Student Management System</h1>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id='cssmenu'>
					<ul>
					   <li><a href='home.php'><i class="fa fa-home"></i></a></li>
					   <li  class="active"><a href='insert.php'>Insert</a></li>
					   <li><a href=''>Advanced Option</a>
							<ul>
							 <li><a href='update.php'>Update</a></li>
							 <li><a href='delete.php?id='>Delete</a></li>
						  </ul>
					   </li>
					   <li><a href='show.php'>Show</a></li>
					   <li><a href='search.php'>Search</a></li>
					   <li class='has-sub'><a href='#'>Account</a>
						  <ul>
							 <li class='has-sub'><a href='#'>Change</a>
								<ul>
								   <li><a href='#'>Name</a></li>
								   <li><a href='#'>Password</a></li>
								</ul>
							 </li>
							 <li><a href='logout.php'>Log Out</a></li>
						  </ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			
			<div class="col-md-6">
				<form action="insert.php" method="post" class="form-horizontal myform">
					<div class="form-group">
						<h3><em>Personal Details</em></h3>
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputName2">First Name</label>
								<input type="text" class="form-control" name="first_name" id="exampleInputName2" placeholder="First Name">
							</div>
							<div class="col-md-6">
								<label for="exampleInputName2">Last Name</label>
								<input type="text" class="form-control" name="last_name" id="exampleInputName2" placeholder="Last Name">
							</div>
						</div>	
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputName2">Date of Birth</label>
								<input type="date" class="form-control" name="dob" placeholder="Date of Birth">
							</div>
							<div class="col-md-6">
								<label for="exampleInputName2">Blood Group</label>
								<select class="form-control" name="blood_grp">
									<option>Select your blood group</option>
									<option name="blood_grp">A(+ve)</option>
									<option name="blood_grp">A(-ve)</option>
									<option name="blood_grp">B(+ve)</option>
									<option name="blood_grp">B(-ve)</option>
									<option name="blood_grp">O(+ve)</option>
									<option name="blood_grp">O(-ve)</option>
									<option name="blood_grp">AB(+ve)</option>
									<option name="blood_grp">AB(-ve)</option>
									<option name="blood_grp">NONE</option>
								</select>
							</div>
						</div>	
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6"></div>
							<div class="col-md-6">
								
								<label for="exampleInputFile">File input</label>
								<input type="file" name="file" id="exampleInputFile">
								<p class="help-block">Upload your photo</p>
							
							</div>
						</div>	
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputName2">Mobile NO</label>
								<input type="text" class="form-control" name="mobile_no" id="exampleInputName2" placeholder="Mobile NO">
							</div>
							<div class="col-md-6">
								<label for="exampleInputEmail3">Email Address</label>
								<input type="text" class="form-control" name="email_id" id="exampleInputEmail3" placeholder="Enter email">
							</div>
						</div>	
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputName2">Department</label>
								<select class="form-control" name="dept_name">
									<option>Select your department name</option>
									<option name="dept_name">CSE</option>
									<option name="dept_name">EEE</option>
									<option name="dept_name">BBA</option>
									<option name="dept_name">LLB</option>
									<option name="dept_name">ENG</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="exampleInputName2">Session</label>
								<select class="form-control" name="year">
									<option>Year</option>
									<option>2010</option>
									<option>2011</option>
									<option>2012</option>
									<option>2013</option>
									<option>2014</option>
									<option>2015</option>
								</select>
								
								
							</div>
						</div>
						
					</div>
					
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputName2">Batch</label>
								<input type="text" class="form-control" name="batch" id="exampleInputName2" placeholder="Batch">
							</div>
							<div class="col-md-6">
								<label for="exampleInputName2">Reg ID</label>
								<input type="text" class="form-control" name="reg_id" id="exampleInputName2" placeholder="reg id">
							</div>
						</div>	
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputName2">Father Name</label>
								<input type="text" class="form-control" name="f_name" id="exampleInputName2" placeholder="Father Name">
							</div>
							<div class="col-md-6">
								<label for="exampleInputName2">Mother Name</label>
								<input type="text" class="form-control" name="m_name" id="exampleInputName2" placeholder="Mother Name">
							</div>
						</div>	
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label for="exampleInputName2">Address</label>
								<textarea class="form-control" name="address" rows="3"></textarea>
							</div>
						</div>	
					</div>
					<input type="submit" class="btn btn-success" name="submit" value="Submit"/>
				</form>
			</div>
			<div class="col-md-3">
	
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>

	
</body>
</html>

<?php
include("db_con.php");
if(isset($_POST['submit'])){
	

	$run = '';
	$first_name = $_REQUEST['first_name']; 
	$last_name = $_REQUEST['last_name']; 
	$dob = $_REQUEST['dob']; 
	$blood_grp = $_REQUEST['blood_grp']; 
	$mobile_no = $_REQUEST['mobile_no']; 
	$email_id = $_REQUEST['email_id']; 
	$dept_name = $_REQUEST['dept_name']; 
	$year = $_REQUEST['year']; 
	$batch = $_REQUEST['batch']; 
	$reg_id = $_REQUEST['reg_id']; 
	$f_name = $_REQUEST['f_name']; 
	$m_name = $_REQUEST['m_name']; 
	$address = $_REQUEST['address']; 
	
	if($first_name!='' && $last_name!='' && $dob!='' && $blood_grp!='' && $mobile_no!='' && $email_id!='' && $dept_name!='' && $year!='' && $batch!='' && $reg_id!='' && $f_name!='' && $m_name!='' && $address!='')
	{
		$query = "INSERT INTO information(first_name,last_name,dob,blood_grp,mobile_no,email_id,dept_name,year,batch,reg_id,f_name,m_name,address) VALUES ('".$first_name."', '".$last_name."', '".$dob."','".$blood_grp."', '".$mobile_no."', '".$email_id."', '".$dept_name."', '".$year."', '".$batch."', '".$reg_id."', '".$f_name."', '".$m_name."', '".$address."')";
		$run = mysql_query($query);
		
		if($run)
		{
			$sql="SELECT * FROM information";
			$row = mysql_query($sql);
				echo ' <span style="margin-left:175px;color:green;">Your Entry is Successful !</span> ';
				
		}
		else
		echo 'Try Again !';
	}
	else
		echo "Please Fill Up All the Information !";

	
	
}

?>