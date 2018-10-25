<?php
session_start();
	include("db_con.php");
if($_SESSION["email_id"]==''){
	header('Location:index.php');
}

	
	$sql="SELECT * FROM information WHERE id='".$_REQUEST['id']."'";
			$row = mysql_query($sql);
			$result= mysql_fetch_array($row);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
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
					   <li><a href='insert.php'>Insert</a></li>
					   <li class="active"><a href='update.php'>Update</a></li>
					   <li><a href='delete.php'>Delete</a></li>
					   <li><a href='show.php'>Show</a></li>
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
					</ul>
				</div>
			</div>
		</div>
	</div>
<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			
			<div class="col-md-6">
				<form action="update1.php?id=<?php echo $_REQUEST['id'];?>&task=up" method="post" class="form-horizontal myform">
					<div class="form-group">
						<h3><em>Update your Personal Details</em></h3>
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputName2">First Name</label>
								<input type="text" class="form-control" name="first_name" id="exampleInputName2" placeholder="First Name" value="<?php echo $result['first_name'];?>">
							</div>
							<div class="col-md-6">
								<label for="exampleInputName2">Last Name</label>
								<input type="text" class="form-control" name="last_name" id="exampleInputName2" placeholder="Last Name" value="<?php echo $result['last_name'];?>">
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
								<select class="form-control" name="blood_grp" value="<?php echo $result['blood_grp'];?>">
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
								<input type="text" class="form-control" name="mobile_no" id="exampleInputName2" placeholder="Mobile NO" value="<?php echo $result['mobile_no'];?>">
							</div>
							<div class="col-md-6">
								<label for="exampleInputEmail3">Email Address</label>
								<input type="text" class="form-control" name="email_id" id="exampleInputEmail3" placeholder="Enter email" value="<?php echo $result['email_id'];?>">
							</div>
						</div>	
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputName2">Department</label>
								<select class="form-control" name="dept_name" value="<?php echo $result['dept_name'];?>">
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
								<select class="form-control" name="year" value="<?php echo $result['year'];?>">
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
								<input type="text" class="form-control" name="batch" id="exampleInputName2" placeholder="Batch" value="<?php echo $result['batch'];?>">
							</div>
							<div class="col-md-6">
								<label for="exampleInputName2">Reg ID</label>
								<input type="text" class="form-control" name="reg_id" id="exampleInputName2" placeholder="reg id" value="<?php echo $result['reg_id'];?>">
							</div>
						</div>	
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputName2">Father Name</label>
								<input type="text" class="form-control" name="f_name" id="exampleInputName2" placeholder="Father Name" value="<?php echo $result['f_name'];?>">
							</div>
							<div class="col-md-6">
								<label for="exampleInputName2">Mother Name</label>
								<input type="text" class="form-control" name="m_name" id="exampleInputName2" placeholder="Mother Name" value="<?php echo $result['m_name'];?>">
							</div>
						</div>	
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label for="exampleInputName2">Address</label>
								<textarea class="form-control" name="address" value="<?php echo $result['address'];?>" rows="3"></textarea>
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

//echo "test : ".$_REQUEST['task'];


	if($_REQUEST['task']=="up")
	{

		$run = '';
		$id = $_REQUEST['id']; 
		$first_name = $_REQUEST['first_name']; 
		$last_name = $_REQUEST['last_name']; 
		$dob = $_REQUEST['dob']; 
		$blood_grp = $_REQUEST['blood_grp']; 
		$reg_id = $_REQUEST['reg_id']; 
		$mobile_no = $_REQUEST['mobile_no']; 
		$email_id = $_REQUEST['email_id']; 
		$dept_name = $_REQUEST['dept_name']; 
		$year = $_REQUEST['year']; 
		$batch = $_REQUEST['batch']; 
		$reg_id = $_REQUEST['reg_id']; 
		$f_name = $_REQUEST['f_name']; 
		$m_name = $_REQUEST['m_name']; 
		$address = $_REQUEST['address']; 

		$query2 = "UPDATE information SET first_name='".$first_name."',last_name='".$last_name."',dob='".$dob."',blood_grp='".$blood_grp."',mobile_no='".$mobile_no."',email_id='".$email_id."',dept_name='".$dept_name."',year='".$year."',batch='".$batch."',reg_id='".$reg_id."',f_name='".$f_name."',m_name='".$m_name."',address='".$address."' WHERE id='".$id."'";
		$res=mysql_query($query2);
		
		
		
		if($res)
			echo '<span style="margin-left:175px;color:green;">Update Successful !</span> ';
	}




?>