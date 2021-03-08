<?php
	include('config.php');
	$a=$_REQUEST['id'];
	$sql="delete from message where m_id=$a";
	mysqli_query($db,$sql);
	header('location:admin-message.php');
?>