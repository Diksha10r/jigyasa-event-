<?php
	include('config.php');
	$a=$_REQUEST['id'];
	$sql="delete from event where e_id=$a";
	mysqli_query($db,$sql);
	header('location:admin-edit-event.php');
?>