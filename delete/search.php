<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Student Information</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen"> 

<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.autocomplete.js"></script>

<script>
$(document).ready(function(){
 $("#tag").autocomplete("fname.php", {
		selectFirst: true
	});
});

$(document).ready(function(){
 $("#tag").autocomplete("rn.php", {
		selectFirst: true
	});
});

$(document).ready(function(){
 $("#tag").autocomplete("dept1.php", {
		selectThird: true
	});
});

$(document).ready(function(){
 $("#tag").autocomplete("semester1.php", {
		selectFourth: true
	});
});

$(document).ready(function(){
 $("#tag").autocomplete("address1.php", {
		selectFifth: true
	});
});
</script>




</head>

<body>
	<div class="background">
	
<br><br><br><br>


<?php

echo"<center>";

	echo"<form method='POST' action='' name='reg' onSubmit='return validate()'>";
	
echo"<table border='5' bgcolor='pink'> <h1 ><font color='white'><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href='index.php'>HOME</a>&nbsp&nbsp&nbsp&nbsp<a href='all_search.php'>UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href='delete.php'>DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href='search.php'>SEARCH</a><br><br></center>";

echo"<tr><td>
<center><table bgcolor='pink'>
<tr><td width='250'><b>Select Any One: <select name='sel'> <option>Select Categary</option>";

  echo"<option value='fname'>FIRST NAME</option>";
  echo"<option value='rn'>ROLL NO</option>";
  echo"<option value='dept'>DEPARTMENT</option>";
  echo"<option value='semester'>SEMESTER</option>";
  echo"<option value='address'>ADDRESS</option>
  
<td><input name='tag' type='text' id='tag' size='20'/>
<input type='submit' name='se' value='Search'>
&nbsp";
  
echo" <a href='all_search.php'> <input type='button' value='AllSearch'></a>";

 
 
echo"</tr></td></table>";

echo"</td></tr></table></center></form>

</body> </html>";

echo"<br>";


if(isset($_POST['se']))
 {
 require'db_conn.php';

 $sel=$_POST['sel'];
   $tag=$_POST['tag'];



  if($sel=="fname")
  {
$q1=mysql_query("select* from bhup where fname='$tag'");

echo"<center><table border='1'>";

echo"<tr bgcolor='yellow'>
  <td>
		<center>SESSION</center>
		<td><center>ROLL NO</center>
		<td><center>FIRST NAME</center>
		<td><center>LAST NAME</center>
		<td><center>YEAR</center>
		<td><center>SEMESTER</center>
		<td><center>DEPARTMENT</center>
		<td><center>BIRTH</center>
		<td><center>ADDRESS</center>
  </td>
</tr>";

  while($rows=mysql_fetch_array($q1,MYSQL_ASSOC))
{
   $ses=$rows['session'];
 $lname=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fname=$rows['fname'];
 $lname=$rows['lname'];
 $dept=$rows['dept'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $birth=$rows['birth'];

 echo"<tr bgcolor='pink'>
		<td><center>$ses</center>
		<td><center>$rn</center>
		<td><center>$fname</center>
		<td><center>$lname</center>
		<td><center>$year</center>
		<td><center>$sem</center>
		<td><center>$dept</center>
		<td><center>$birth</center>
		<td><center>$add</center>
	</td>
</tr>";

}
	echo"</center>";
	}

			
			



 if($sel=="rn")
  {
  
	$q2=mysql_query("select* from bhup where rn='$tag'");
	
echo"<center><table border='1'>";

  echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>DEPARTMENT</center><td><center>BIRTH</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysql_fetch_array($q2,MYSQL_ASSOC))
{
    $ses=$rows['session'];
 $lname=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fname=$rows['fname'];
 $lname=$rows['lname'];
 $dept=$rows['dept'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $birth=$rows['birth'];

 echo"<tr bgcolor='pink'>
		<td><center>$ses</center>
		<td><center>$rn</center>
		<td><center>$fname</center>
		<td><center>$lname</center>
		<td><center>$year</center>
		<td><center>$sem</center>
		<td><center>$dept</center>
		<td><center>$birth</center>
		<td><center>$add</center>
	</td>
</tr>";

}

 echo"</center>";
}



if($sel=="dept")

  {
  
$q3=mysql_query("select* from bhup where dept='$tag'");

echo"<center><table border='1'>";

 echo"<tr bgcolor='yellow'>
	<td><center>SESSION</center>
	<td><center>ROLL NO</center>
	<td><center>FIRST NAME</center>
	<td><center>LAST NAME</center>
	<td><center>YEAR</center>
	<td><center>SEMESTER</center>
	<td><center>DEPARTMENT</center>
	<td><center>BIRTH</center>
	<td><center>ADDRESS</center>
 </td>
</tr>";

  while($rows=mysql_fetch_array($q3,MYSQL_ASSOC))
{
    $ses=$rows['session'];
 $lname=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fname=$rows['fname'];
 $lname=$rows['lname'];
 $dept=$rows['dept'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $birth=$rows['birth'];

echo"<tr bgcolor='pink'>
	<td><center>$ses</center>
	<td><center>$rn</center>
	<td><center>$fname</center>
	<td><center>$lname</center>
	<td><center>$year</center>
	<td><center>$sem</center>
	<td><center>$dept</center>
	<td><center>$birth</center>
	<td><center>$add</center>
  </td>
</tr>";

}

 echo"</center>";
}


	if($sel=="semester")
  {
  
$q4=mysql_query("select* from bhup where semester='$tag'");
echo"<center><table border='1'>";
 echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>DEPARTMENT</center><td><center>BIRTH</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysql_fetch_array($q4,MYSQL_ASSOC))
{
    $ses=$rows['session'];
 $lname=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fname=$rows['fname'];
 $lname=$rows['lname'];
 $dept=$rows['dept'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $birth=$rows['birth'];

echo"<tr bgcolor='pink'>
	<td><center>$ses</center>
	<td><center>$rn</center>
	<td><center>$fname</center>
	<td><center>$lname</center>
	<td><center>$year</center>
	<td><center>$sem</center>
	<td><center>$dept</center>
	<td><center>$birth</center>
	<td><center>$add</center>
 </td>
</tr>";

}
 echo"</center>";
}


if($sel=="address")
  {
$q5=mysql_query("select* from bhup where address='$tag'");
echo"<center><table border='1'>";
  echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>DEPARTMENT</center><td><center>BIRTH</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysql_fetch_array($q5,MYSQL_ASSOC))
{
    $ses=$rows['session'];
 $lname=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fname=$rows['fname'];
 $lname=$rows['lname'];
 $dept=$rows['dept'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $birth=$rows['birth'];

echo"<tr bgcolor='pink'><td><center>$ses</center><td><center>$rn</center><td><center>$fname</center><td><center>$lname</center><td><center>$year</center><td><center>$sem</center><td><center>$dept</center><td><center>$birth</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}

}
?>



</div>
