<?php
	include('config.php');
	SESSION_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="StyleSheet" type="text/css" href="css/index.css">
		<link rel="StyleSheet" type="text/css" href="css/login.css">
		<link rel="StyleSheet" type="text/css" href="css/error.css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style>
			a{text-decoration: none;}
		</style>
		
	</head>
	<body>
	<!---------------------------- Header ---------------------------------->
		<header id="header" class="header-fixed gradient-overlay">
			<div class="container">
				<table>
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
						<a href="index.php#home"class="title3">HOME</a>
					</td>
					<td>	
						<a href="index.php#events"class="title3">EVENTS</a>
					</td>
					<td>	
						<a href="index.php#register"class="title3">REGISTER</a>
					</td>
					<td>	
						<a href="index.php#gallery"class="title3">GALLERY</a>
					</td>
					<td>	
						<a href="index.php#contactus"class="title3">CONTACT US</a>
					</td>
					<td>	
						<a href="index.php#sopnsors"class="title3">SOPNSORS</a>
					</td>
				</tr>
				</table>
			</div>
		</header>
		
		<!---------------------------- slider ---------------------------------->

<div id="admin-heading-block-img">
	<div id="admin-heading-block-color">
		<center>
		<h1 id="admin-heading">L O G I N</h1>
		<hr class="admin-heading-hr admin-heading-hr1"> 
		<span class="fa fa-2x fa-pagelines admin-heading-faa"></span>
		<hr class="admin-heading-hr admin-heading-hr2">
		</center>
	</div>
</div>
<?php

if(isset($_POST["sub1"]))
{	
		$a=$_POST["email"];
		$b=$_POST["pass"];
		if($_REQUEST['user']=='u1')
		{
			$table="admin";
		}
		if($_REQUEST['user']=='u2')
		{
			$table="faculty";
		}
		if($_REQUEST['user']=='u3')
		{
			$table="volunteer";
		}
		$result=mysqli_query($db,"select * from $table where email='$a' and password='$b'")or die("invalid : ".mysql_error());
		$r=mysqli_fetch_array($result);
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			if($_REQUEST['user']=='u1')
			{
				$_SESSION['user']=$r['a_id'];
				header('location:admin-index.php');
			}
			if($_REQUEST['user']=='u2')
			{
				$_SESSION['user']=$r['f_id'];
				header('location:faculty-index.php');
			}
			if($_REQUEST['user']=='u3')
			{
				$_SESSION['user']=$r['v_id'];
				header('location:volunteer_home.php');
			}
			
			
		}
		
?>
				<div id="error-block2">
					<span class="fa fa-exclamation-triangle fa-2x error-fa"></span>
					<span class="error-heading">User not registered yet!!!!</span>
					<span class="fa fa-close fa-2x error-close" onclick="closeERROR()"></span>
				</div>
				<script>
					function closeERROR()
					{
						document.getElementById('error-block2').style.display="none";
					}
				</script>
<?php
}

?>

	<center>
		<div class="login-outer">
			<form method="post" action="" name="form1">
			<table class="login-table">
				<tr>
					<td class="login-td"><span class="login-title2">EMAIL ID:</span></td>
					<td width="25px"></td>
					<td>
						<span class="fa fa-lock login-fa-lock" style="font-size:1.5em;"></span>
						<input type="email" name="email" class="login-input" 
						style="outline:none;" placeholder="abc@gmail.com">
					</td>
				</tr>
				<tr height="25px"></tr>
				<tr>
					<td class="login-td"><span class="login-title2">PASSWORD:</span></td>
					<td width="25px"></td>
					<td>
						<span class="fa fa-key login-fa-key" style="font-size:1.5em;"></span>
						<input type="password" name="pass" class="login-input" 
						style="outline:none;" placeholder="............">
					</td>
				</tr>
				<tr height="25px"></tr>
				<tr>
					<td class="login-td" colspan="3">
						<center>
							<input type="submit" name="sub1"value="LOGIN" class="login-submit">
						</center>
					</td>
				</tr>
				
			</table>
			</form>
			<br>
			<hr class="admin-heading-hr admin-heading-hr1"> 
			<span class="fa fa-2x fa-pagelines admin-heading-faa"></span>
			<hr class="admin-heading-hr admin-heading-hr2">
			<br>
			<p class="login-forgot">Forgot Password??</p>
		</div>
	</center>
<br><br>
<?php
	include('footer.php');
?>