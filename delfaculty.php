<?php
	include('config.php');
	$a=$_REQUEST['id'];
	$sql="delete from faculty where f_id=$a";
	mysqli_query($db,$sql);
	header('location:admin-edit-faculty.php');
?>