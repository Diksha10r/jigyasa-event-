<!DOCTYPE html>
<html>
	<head>
		<link rel="StyleSheet" type="text/css" href="css/index.css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style>
		
			a{text-decoration: none;}


		.imgbtn
		{
			border-radius:5px;
			font-size:40px;
			height:40px;
			font-weight:600;
			color:#fff;
			background:#FF8625;
			margin-left:150px;
		}
		.main
		{
			background-color:rgba(0,0,0,0.8);
			border-radius:5px;
			box-shadow:5px 5px rgba(100,100,100,0.2);
			height:700px;
			width:900px;
			margin-left:300px;
			margin-top:150px;
		
		}
		.my
		{
				  color: white;
				  margin: 0;
				  margin-bottom: 15px;
				  font-size: 20px;
				  line-height: 30px;
				  padding-bottom: 20px;
				  text-transform: uppercase;
				  position: relative;
				  text-shadow:1px 1px gray;
				  font-size:25px;
				  
		}
		.tbl
		{	
			padding:50px;
			cell-padding:5px;
			cell-spacing:3px;
			width:100%;
			height:100%;	
		}
		.td1
		{
			width:350px;
			height:100px;
		}
		body
		{
			background-image:url('image/banner1.jpg');
			background-repeat:no-repeat;
			background-size:cover;
			
		}
		.btn1
		{
			width:180px;
			height:50px;
			background-color:orange;
			border-radius:10px;
			font-weight:1000;
			font-size:20px;
			color:maroon;
		    box-shadow: 0 1px 0 maroon;


		}
		.btn1:hover
		{
			width:220px;
			height:60px;
			background-color:white;
			color:orange;
			transition: all ease 0.3s;
			border:2px solid maroon;
		}
		input[type=text]:focus, textarea:focus
		{
		  box-shadow: 0 0 5px rgba(81, 203, 238, 1);
		  margin: 2px 1px 1px 0px;
		  border: 1px solid rgba(81, 203, 238, 1);
		}
		input[type=text]:hover, textarea:hover
		{
			width:250px;
			box-shadow: 0 0 5px rgba(81, 203, 238, 1);
			margin: 2px 1px 1px 0px;
			border: 1px solid rgba(81, 203, 238, 1);
		}
		.txt,textarea
		{
			outline: none;
			width:250px;
			display: block;
			box-shadow: 1px 1px 10px #1eb089;
			border-left: 5px solid #1eb089;
			border-bottom: 1px solid #1eb089;
			border-radius: 5px;
			padding: 10px 0 10px 10px; 
			border-bottom-right-radius: 3px;
			border-bottom-right-radius: 3px;
			
			background-color:#c2c2c2;
			font-size:20px;
			font-weight:800;
			color:black;
		    font-family:calibri;
		}
		.txt1
		{
			box-shadow:5px 5px rgba(150,100,100,0.5);
			border-radius:5px;
			height:35px;
			width:200px;
			border-color:2px;
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
						<a href="faculty_home.html"class="title3">HOME</a>
					</td>
					<td>	
						<a href="faculty_volunteer.html"class="title3">VOLUNTEER</a>
					</td>
					<td>	
						<a href="faculty_main_announcement.html"class="title3">ANNOUNCEMENT</a>
					</td>
					<td>	
						<a href="faculty_cngpwd.html" class="title3">CHANGE PASSWORD</a>
					</td>

					
				</tr>
				</table>
			</div>
		</header>
	<!-----------------------------------main content------------------------------------ -->	
	<div class="main">
	
		<form name="frm1" method="post" action="#">
			<table class="tbl">
				<tr>
					<td class="td1"><h1 class="my" >COLLEGE NAME:</h1></td>
					<td><input type="text" class="txt" placeholder="COLLEGE NAME">
				</tr>
				<tr>
					<td class="td1"><h1 class="my">REFERENCE NAME:</h1></td>
					<td><input type="text" class="txt" placeholder="REFERENCE NAME">
				</tr>
				<tr>
					<td class="td1"><h1 class="my">DATE:</h1></td>
					<td><span class="fa fa-user"></span><input type="date" class="txt" placeholder="mm/dd/yyyy">
				</tr>
				<tr>
					<td class="td1"><h1 class="my">MESSAGE:</h1></td>
					<td><textarea rows=8 cols=50></textarea>
				</tr>
				<tr>
					<td class="td1" colspan="2">
						<center><input type="button" class="btn1" value="SEND"></center>
					</td>
				</tr>
				
			</table>
		
		</form>
	</div>
	</body>
</html>