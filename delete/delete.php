<?php /// delete.php

	include('connect_database.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM bhup WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	header("location: all_search.php");
?>