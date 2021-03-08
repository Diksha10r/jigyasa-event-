<!DOCTYPE html>
<html>
	<head>
		<link rel="StyleSheet" type="text/css" href="css/index.css">
		<link rel="StyleSheet" type="text/css" href="css/p_reg.css">
		<link rel="StyleSheet" type="text/css" href="css/login.css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style>
			a{text-decoration: none;}
			#event-fee{
				display: none;
				
			}
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
		
<div id="reg-heading-block-img">
	<div id="reg-heading-block-color">
		
		<center><h1 id="reg-heading">REGISTER FOR EVENT</h1>
		<hr class="reg-heading-hr reg-heading-hr1"> 
		<span class="fa fa-2x fa-pagelines reg-heading-faa"></span>
		<hr class="reg-heading-hr reg-heading-hr2">
		</center>
	</div>
</div>
<?php
?>
<center>
		<div class="login-outer">
			<form method="post" action="payment.php" name="form1">
			<table class="login-table">
				<tr>
					<td class="login-td"><span class="login-title2">EMAIL ID:</span></td>
					<td width="25px"></td>
					<td>
						<span class="fa fa-envelope login-fa-lock" style="font-size:1.5em;"></span>
						<input type="email" value="" name="email" class="login-input" style="outline:none;">
					</td>
				</tr>
				<tr height="25px"></tr>
				<tr>
					<td class="login-td"><span class="login-title2">NAME:</span></td>
					<td width="25px"></td>
					<td>
						<span class="fa fa-user login-fa-key" style="font-size:1.5em;"></span>
						<input type="password" name="pass" class="login-input" 
						style="outline:none;" placeholder="............">
					</td>
				</tr>
				<tr height="25px"></tr>
				<tr>
					<td class="login-td"><span class="login-title2">COLLEGE NAME:</span></td>
					<td width="25px"></td>
					<td>
						<span class="fa fa-university login-fa-key" style="font-size:1.5em;"></span>
						<input type="password" name="pass" class="login-input" 
						style="outline:none;" placeholder="............">
					</td>
				</tr>
				<tr height="25px"></tr>
				<tr>
					<td class="login-td"><span class="login-title2">MOBILE NO:</span></td>
					<td width="25px"></td>
					<td>
						<span class="fa fa-phone login-fa-key" style="font-size:1.5em;"></span>
						<input type="password" name="pass" class="login-input" 
						style="outline:none;" placeholder="............">
					</td>
				</tr>
				<tr height="25px"></tr>
				<tr>
					<td class="login-td"><span class="login-title2">EVENT:</span></td>
					<td width="25px"></td>
					<td>
						<span class="fa fa-calendar login-fa-key" style="font-size:1.5em;"></span>
						<select class="login-input" onchange="rs()">
							<option></option>
							<option>Crazy 'c'</option>
							<option>crazy popita</option>
							<option>paglet gayu</option>
							<option>bhukhad diku</option>
						</select>
						&nbsp;
						<span class="fa fa-inr" id="event-fee"> 50</span>
					</td>
				</tr>
				<tr height="25px"></tr>
				<tr>
					<td class="login-td" colspan="3">
						<center>
							<hr class="admin-heading-hr admin-heading-hr1"> 
							<span class="fa fa-2x fa-pagelines admin-heading-faa"></span>
							<hr class="admin-heading-hr admin-heading-hr2">
							<br><br>
							<input type="submit" name="sub1"value="PROCEED TO PAY" class="login-submit">
						</center>
					</td>
				</tr>
				
			</table>
			</form>
			<br>
		</div>
	</center>
<br><br>
<script>
function rs()
{
	document.getElementById('event-fee').style.display="inline-block";
}
</script>
<?php
	include('footer.php');
?>