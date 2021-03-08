<?php
	include('config.php');
	$a=$_REQUEST['id'];
	$sql="delete from gallery where g_id=$a";
	mysqli_query($db,$sql);
	header('location:admin-gallery.php');
?>