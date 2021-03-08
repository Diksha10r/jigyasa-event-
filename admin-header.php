<?php
	SESSION_start();
	include('config.php');
	if(!isset($_SESSION['user']))
	{
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="StyleSheet" type="text/css" href="css/error.css">
		<link rel="StyleSheet" type="text/css" href="css/admin-index.css">
		<link rel="StyleSheet" type="text/css" href="css/index.css">
		<link rel="StyleSheet" type="text/css" href="css/admin-header.css">
		<link rel="StyleSheet" type="text/css" href="css/admin-add-event-faculty.css">
		<link rel="StyleSheet" type="text/css" href="css/admin-edit-event.css">
		<link rel="StyleSheet" type="text/css" href="css/admin-volunteer.css">
		<link rel="StyleSheet" type="text/css" href="css/admin-gallery.css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style>
			a{text-decoration: none;}
		</style>
		
	</head>
	<body>
		<!---------------------------- Header ---------------------------------->
		<header id="header" class="header-fixed gradient-overlay">
			<div class="container">
				<table border="0">
				<tr>
					<td>
						<!-- .logo -->
						<a href="index.html">
							<img class="logo" src="image/mes-logo.png" alt="logo-imcc">
						</a>
						<!-- /.logo -->
					</td>
					<td>
						<span class="title1">MES's IMCC</span> 
						<br><span class="title2">Jigyasa</span>
					</td>
					<td width="100px"></td>
					<td>	
						<a href="admin-index.php"class="title3">HOME</a>
					</td>
					<td>	
						<div class="dropdown">
						<a href="" class="title3 dropbtn">EVENTS</a>
						<div class="dropdown-content">
							<a href="admin-add-event.php">ADD &nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
							<a href="admin-edit-event.php">EDIT &nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
						</div>
						</div>
					</td>
					<td>	
						<div class="dropdown">
						<a href="" class="title3 dropbtn">FACULTY</a>
						<div class="dropdown-content">
							<a href="admin-add-faculty.php">ADD &nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
							<a href="admin-edit-faculty.php">EDIT &nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
						</div>
						</div>
					</td>
					<td>	
						<a href="admin-volunteer.php" class="title3">VOLUNTEER</a>
					</td>
					<td>	
						<a href="admin-message.php"class="title3">MESSAGE</a>
					</td>
					<td>	
						<a href="admin-gallery.php"class="title3">GALLERY</a>
					</td>
					<td>	
						<a href="admin-sopnsor.php"class="title3">SPONSORS</a>
					</td>
					<td>	
						<a href="logout.php"class="title3">LOGOUT</a>
					</td>
					
				</tr>
				</table>
			</div>
		</header>
