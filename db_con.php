<?php
	$host="localhost"; //yout host name  
	$username="root";  //yout user name  
	$password="";      // your password  
	$db_name="student_management_system";  // your database name  
	
	$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection  
	mysql_select_db("$db_name")or die("can not select DB"); //select your database  
	
?>