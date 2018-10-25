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
					   <li  class="active"><a href=''>Advanced Option</a>
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
			<div class="col-md-1"></div>
			<div class="col-md-10 show">
				<?php 	
					include("db_con.php");

					if($_REQUEST['id'])
					{
						$id = $_REQUEST['id'];
						$sql="DELETE FROM information WHERE id='".$id."'";
						$result = mysql_query($sql);
					}
					
					$run = '';
					$sql="SELECT * FROM information order by id asc";
					$row = mysql_query($sql);
					
					
					?>
					<table class="table table-hover" border="1">
						<thead> 
							<tr>
								<th>ID</th>
								<th>FIRST NAME</th>
								<th>LAST NAME</th>
								<th>REG ID</th>
								<th>MOBILE NO</th>
								<th>EMAIL ID</th>
								<th>DEPT NAME</th>
								<th>DELETE</th>
							</tr>
						</thead>
						<tbody>
							<?php while($result= mysql_fetch_array($row)){?>
							<tr>
								<th><?php echo $result['id'];?></th>
								<td><?php echo $result['first_name'];?></td>
								<td><?php echo $result['last_name'];?></td>
								<td><?php echo $result['reg_id'];?></td>
								<td><?php echo $result['mobile_no'];?></td>
								<td><?php echo $result['email_id'];?></td>
								<td><?php echo $result['dept_name'];?></td>
								<td> <a href="delete.php?id=<?php echo $result['id'];?>" onclick="myFunction()">delete</a> </td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				<?php
				?>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<script>
		function myFunction() {
			alert("Do you want to delete?");
		}
	</script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>