<!DOCTYPE html>
<html>
	<head>
		<link rel="StyleSheet" type="text/css" href="css/index.css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style>
			a{text-decoration: none;}
		</style>
		
		<!-------------------------form_style------------------------------->
		<meta charset="utf-8">
	<title>faculty</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	<style>
		#customers {
			border-collapse: collapse;
			width: 90%;
		}	
		#customers td, #customers th {
			border: 0px solid #ddd;
			padding: 8px;
		}

		#customers tr:nth-child(even){
			border-top: 1px solid #FFDF00;
			border-bottom: 1px solid #FFDF00;
		}

		#customers tr:hover {background-color: #ddd;}

		#customers th 
		{
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			color: black;
		}
		#sp:hover{
			color:red;
		}
		.myimg
		{
			width:300px;
			height:280px;
			border: 1px solid yellow;
			border-radius: 50%;
		}
		.main
		{
			border-radius:10px;
			box-shadow: 0px 0px 10px #1eb089;
			border:1px solid;
			margin-top:180px;
			margin-left:250px;
			width:800px;
			height:800px;
		}
				

		.my
		{
			color: BLACK;
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
		.pwd
		{
			outline: none;
			width:250px;
			margin-left: 35px;
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
		.txt
		{
			outline: none;
			margin-left: 35px;
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
			color:gray;
		    font-family:calibri;
		}
		span
		{
			padding-top:10px;

			position:relative;
		}
		i
		{
			position:absolute;
			transition:.3s;
			aria-hidden:true;
			
		}
		.btn1
		{			
			border:1.5px solid #1eb089;
			background-color:#1eb089;
			border-radius:7px;
			font-weight:bold;
			font-size:20px;
			color:#fff;
		    box-shadow: 1px 1px 10px gray;
			padding: 15px 25px;

		}
		.btn1:hover
		{
			background-color:white;
			color:#1eb089;
			transition: all ease 0.3s;
			border:1.5px solid #1eb089;
		}
		
		.tbl
		{	
			padding:20px;
			cell-padding:5px;
			cell-spacing:3px;
			width:100%;
			height:100%;
			margin-left:10px;			
		}

		.td1
		{
			width:350px;
			height:100px;
		}
		input[type=text]:focus, .pwd:focus
		{
		  box-shadow: 0 0 5px rgba(81, 203, 238, 1);

		  border: 1px solid rgba(81, 203, 238, 1);
		}
		input[type=text]:hover, .pwd:hover
		{
			width:250px;
			box-shadow: 0 0 5px rgba(81, 203, 238, 1);
			border: 1px solid rgba(81, 203, 238, 1);
		}
		mob-icon
		{
			width:100px;
			
		}
		.error 
		{
			position: absolute;
			top: -3.5em;
			left: 0;
			padding: .5em 1em .4em;
			background-color: #f66;
			border: 1px solid #f00;
			border-radius: 5px;
			color: #fff;
		}


	</style>
	<script language="javascript">
		
		function chkno(frm1)
		{
			alert("mjbukhk");
		}
		function onlyalpha(frm1) 
        {
	 		 var len= parseInt(frm1.txtname.value);
			 if(len==0)
			 {
				alert("Enter Valid Name");
			 }
			  else
			  {
				var data = frm1.txtname.value;
				var result = data.match(/[a-z|A-Z ]+/);
				if (result != data) 
				{
				    alert("Enter Valid Name");
				else 
				{
					return true;
				}
			  }
         }
		 
	
	</script>
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
<!-- ---------------------------------main content------------------------------------ -->		
	<div class="main" > 
	
	
		<form name="frm1" method="get" action="#">
			<table class="tbl">
				<tr>
					<td class="td1"><h1 class="my" >ROLL NO.:</h1></td>
					<td>
							<span><i class="fa fa-pencil faa fa-4x " style="font-size:32px;"></i></span>
							<input type="text" class="txt" name="txtno" placeholder="ROLL NO" 
							pattern="^[0-9]{7}" title="exact 7 numbers">
				</tr>
				<tr>
					<td class="td1"><h1 class="my"> NAME:</h1></td>
					<td>
						<span><i class="fa fa-pencil faa fa-4x " style="font-size:32px;"></i></span>
						<input type="text" class="pwd" placeholder="NAME" name="txtname" onchange="onlyalpha(this.form)">
				</tr>
				<tr>
					<td class="td1"><h1 class="my"> CLASS:</h1></td>
					<td>
						<span><i class="fa fa-pencil faa fa-4x" style="font-size:32px;"></i></span>
							<input type="text" class="pwd" placeholder="CLASS">
				</tr>
				<tr>
					<td class="td1"><h1 class="my">PHONE NO.:</h1></td>
					<td>
						<span><i class="fa fa-mobile faa fa-4x"  ></i></span>
							<input type="text"  class="txt" placeholder="PHONE NO">
				</tr>
				<tr>
					<td class="td1"><h1 class="my">EMAIL ID:</h1></td>
					<td><span>
						<i class="fa fa-envelope faa fa-3x"  style="font-size:30px;"></i></span>
						<input type="text" class="txt" placeholder="EMAIL ID">
					</td>
				</tr>
				<tr>
					<td class="td1"><h1 class="my">PASSWORD:</h1></td>
					<td>
						<span><i class="fa fa-mobile faa fa-4x "></i></span>
					
						<input type="Password" class="txt" placeholder="CONFIRM PASSWORD">
				</tr>
				<tr>
					<td class="td1" colspan="2">
						<center><input type="submit" class="btn1" value="CHANGE"></center>
					</td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>