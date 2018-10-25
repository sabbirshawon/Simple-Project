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
					   <li><a href=''>Advanced Option</a>
							<ul>
							 <li><a href='update.php'>Update</a></li>
							 <li><a href='delete.php?id='>Delete</a></li>
						  </ul>
					   </li>
					   <li><a href='show.php'>Show</a></li>
					   <li><a href='search.php'>Search</a></li>
					   <li class="active"><a href='search.php'>Profile</a></li>
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
			<div class="col-md-4 show">

					<div class="thumbnail">
					  <img src="images/p.jpg" alt="...">
					  <div class="caption">
						<h3>USER PROFILES</h3>
						<p><a href="show.php" class="btn btn-primary" role="button">Back</a> </p>
					  </div>
					</div>
	
			</div>
			<div class="col-md-8 show">
				<?php 	
					include("db_con.php");
					
					$run = '';
					$sql="SELECT * FROM information WHERE id='".$_REQUEST['id']."'";
					$row = mysql_query($sql);
					
					
					?>
					<table class="table table-bordered">
								<tbody>
								<?php while($result= mysql_fetch_array($row)){?>
									<tr>
										<th  class="active">ID</th>
										<td><?php echo $result['id'];?></td>
									</tr>
									<tr>
										<th class="active">FIRST NAME</th>
										<td><?php echo $result['first_name'];?></td>
									</tr>
									<tr>
										<th class="active">LAST NAME</th>
										<td><?php echo $result['last_name'];?></td>
									</tr>
									<tr>
										<th class="active">DOB</th>
										<td><?php echo $result['dob'];?></td>
									</tr>
									<tr>
										<th class="active">BLOOD GROUP</th>
										<td><?php echo $result['blood_grp'];?></td>
									</tr>
									<tr>
										<th class="active">MOBILE NO</th>
										<td><?php echo $result['mobile_no'];?></td>
									</tr>
									<tr>
										<th class="active">EMAIL ID</th>
										<td><?php echo $result['email_id'];?></td>
									</tr>
									<tr>
										<th class="active">DEPT NAME</th>
										<td><?php echo $result['dept_name'];?></td>
									</tr>
									<tr>
										<th class="active">YEAR</th>
										<td><?php echo $result['year'];?></td>
									</tr>
									<tr>
										<th class="active">BLOOD GROUP</th>
										<td><?php echo $result['blood_grp'];?></td>
									</tr>
									<tr>
										<th class="active">BATCH</th>
										<td><?php echo $result['batch'];?></td>
									</tr>
									<tr>
										<th class="active">REG ID</th>
										<td><?php echo $result['reg_id'];?></td>
									</tr>
									<tr>
										<th class="active">YEAR</th>
										<td><?php echo $result['year'];?></td>
									</tr>
									<tr>
										<th class="active">FATHER NAME</th>
										<td><?php echo $result['f_name'];?></td>
									</tr>
									<tr>
										<th class="active">MOTHER NAME</th>
										<td><?php echo $result['m_name'];?></td>
									</tr>
									<tr>
										<th class="active">ADDRESS</th>
										<td><?php echo $result['address'];?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
				<?php
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>