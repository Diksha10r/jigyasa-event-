<?php
	include('config.php');
	$a=$_REQUEST['id'];
	$sql="delete from sponsor where s_id=$a";
	mysqli_query($db,$sql);
	header('location:admin-sopnsor.php');
?>