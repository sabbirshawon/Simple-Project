<?php
session_start();
session_destroy();
	include("db_con.php");

	header('Location:index.php');

?>