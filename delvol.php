<?php
	include('config.php');
	$a=$_REQUEST['id'];
	$sql="delete from volunteer where v_id=$a";
	mysqli_query($db,$sql);
	header('location:admin-volunteer.php');
?>