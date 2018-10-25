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
					   <li  class="active"><a href='search.php'>Search</a></li>
					   <li class='has-sub'><a href='#'>Account</a>
						  <ul>
							 <li class='has-sub'><a href='#'>Users</a>
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
			<div class="col-md-4"></div>
			<div class="col-md-4 search">
				<form class="form-inline" action="search.php" method="post">
					<div class="form-group">
						<div class="row">
							<div class="col-md-8">
								<input type="text" name="reg1" class="form-control" id="exampleInputName2" placeholder="search by reg id...">
								<input type="text" name="reg2" class="form-control" id="exampleInputName2" placeholder="search by blood group...">
								<input type="text" name="reg3" class="form-control" id="exampleInputName2" placeholder="search by department...">
								<input type="text" name="reg4" class="form-control" id="exampleInputName2" placeholder="search by batch...">
							</div>
							<div class="col-md-4">
							
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-default" name="submit">Submit <i class="fa fa-search"></i></button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	
	
	<?php 
		if(isset($_POST['submit'])){
		$reg_id=$_REQUEST['reg1'];
		$blood_grp=$_REQUEST['reg2'];
		$dept_name=$_REQUEST['reg3'];
		$batch=$_REQUEST['reg4'];
		$sql="SELECT * FROM information WHERE ";
		$i=0;
		if($reg_id!=''){
			$sql.= 'reg_id="'.$reg_id.'"'  ;
			$i++;
		}
		if($blood_grp!=''){
			if($i != 0){
				$sql.=' AND ';
			}
			$sql.='blood_grp="'.$blood_grp.'"' ;
			$i++;
		}
		if($dept_name!=''){
			if($i != 0){
				$sql.=' AND ';
			}
			$sql.='dept_name="'.$dept_name.'"';
			$i++;
		}
		if($batch!=''){
			if($i != 0){
				$sql.=' AND ';
			}
			$sql.='batch="'.$batch.'"';
			$i++;
		}
		//echo $sql;
		$row=mysql_query($sql);
	?>
	
	
	<div class="container"> 
		<div class="row tbl">
			<div class="col-md-2"></div>
			<div class="col-md-8 ">
				<table class="table table-hover" border="1">
					<thead> 
						<tr class="success">
							<th>ID</th>
							<th>FIRST NAME</th>
							<th>LAST NAME</th>
							<th>REG ID</th>
							<th>MOBILE NO</th>
							<th>EMAIL ID</th>
							<th>DEPT NAME</th>
							<th>UPDATE</th>
						</tr>
					</thead>
					<tbody>
						<?php while($result= mysql_fetch_array($row)){?>
						<tr>
							<th><?php echo $result['id'];?></th>
							<td><a href="profile.php?id=<?php echo $result['id'];?>&task="><?php echo $result['first_name'];?></a></td>
							<td><?php echo $result['last_name'];?></td>
							<td><?php echo $result['reg_id'];?></td>
							<td><?php echo $result['mobile_no'];?></td>
							<td><?php echo $result['email_id'];?></td>
							<td><?php echo $result['dept_name'];?></td>
							<td> <a href="update1.php?id=<?php echo $result['id'];?>&task=">update</a> </td>
						</tr>
						<?php } ?>
					</tbody>
					</table>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<?php
}
	?>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>