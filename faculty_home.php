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
			font-size:18px;
			padding: 8px;
			color:white;
		}
		#customers tr:nth-child(even)
		{
			background-color:#eee;	
		}
		
		#customers tr:hover 
		{
			background-color: #ddd;
		}

		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			color:rgba(0,0,0,0.8);
			font-family:calibri;
			font-weight:800;
			font-size:25px;
			color:white;
		}
		#sp:hover{
			color:red;
		}
		
		.main
		{
			margin-top:100px:
			  opacity:0.9;
			  background: #1eb089;
			  background: -moz-linear-gradient(left, #1eb089 0%, #7c49ab 100%, #7db9e8 100%);
			  background: -webkit-gradient(linear, left top, right top, color-stop(0%, #1eb089), color-stop(100%, #7c49ab), color-stop(100%, #7db9e8));
			  background: -webkit-linear-gradient(left, #1eb089 0%, #7c49ab 100%, #7db9e8 100%);
			  background: -o-linear-gradient(left, #1eb089 0%, #7c49ab 100%, #7db9e8 100%);
			  background: -ms-linear-gradient(left, #1eb089 0%, #7c49ab 100%, #7db9e8 100%);
			  background: linear-gradient(to right, #1eb089 0%, #7c49ab 100%, #7db9e8 100%);
			  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1eb089', endColorstr='#7db9e8', GradientType=1);

			border-radius:5px;
			box-shadow:5px 5px rgba(100,100,100,0.2);

			margin-top:105px;
				
			background-size:100% 100%;
			background-attachment: fixed;
		
		}
		img:hover
		{
			border:5px solid rgba(100,100,100,0.2);

		}
			
		.image 
		{
		  opacity: 1;
		  display: block;
		  width: 80%;
		  height:300px;
		  transition: .5s ease;
		  backface-visibility: hidden;
		  border-radius:50%;
		}

		.middle {
		  transition: .5s ease;
		  opacity: 0;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  text-align: center;
		}

		.container:hover .image {
		  opacity: 0.3;
		}

		.container:hover .middle {
		  opacity: 1;
		}

		body
		{
			background-image:url('image/banner1.jpg');
			background-repeat:no-repeat;
			background-size: 100% 100%;
			background-attachment: fixed;
			
		}
		
		ol.li1
		{
			    color: white;

			    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;

		}
		.tbl
		{	
			padding:50px;
			margin-left:200px;
			cell-padding:10px;
			cell-spacing:3px;
			width:100%;
			height:70%;;	
		}
		.td1
		{
			margin-left:0px;
			width:100px;
			height:200px;
			color:white;
			font-size:18px;
			font-weight:800;
		}
		div.two
		{
			background-color:rgb(34,198,154);
;
		}
		div.one
		{
			background-color:rgba(50,100,100,0.5);
			border:2px ;
			box-shadow:5px 5px rgba(100,100,100,0.5);
			width:800px;
			height:380px;
			color:white;
			font-family:calibri;
			font-weight:800;
			font-size:20px;
			padding-top:20px;

		}
	</style>
	</head>
	<body >
	
		<!---------------------------- Header ---------------------------------->
			<?php	include('faculty_header.php');  ?>
<!-- ---------------------------------main content------------------------------------ -->		

		<div class="main">
		<form name="frm1" method="post" action="#">
			<table class="tbl">
				<tr>
					<td class="td1"><img src="image/Treasure-Hunt-Logo.jpg" class="image"></td>
					<td class="td1" style="padding-left:20px;">
						<span style="font-size:45px;font-weight:800;text-shadow: 2px 2px 4px white;color:black;">Rules:-</span>
								<ol>
									<li>Each treasure hunt team should have 4 members.</li>
									<li>Registration fee per team is Rs.100 only </li>
									<li>Requirements for the events will be provided by the information desk.</li>
									<li>Each team should announce a leader at the time of registration.</li>
									<li>Each registered team will get a unique identification 	number on program 
						triggering. Each team leader should pin identity card provided, while the 
					  team is on action. </li>
								</ol>
					</td>
				</tr>
				<tr>
				<td colspan="2" style="padding-top:20px;" >
				<div class="two">
					<center><table id="customers">
							  <tr>
								<th>Roll no</th>
								<th>Name</th>
								<th>Email Id</th>
								<th>Phone Number</th>
								<th>Class</th>
								<th>Div</th>
								<th>Edit</th>
								<th>Delete</th>
							  </tr>
							  <tr>
								<td class="tdno">1712004</td>
								<td>Saloni Arya</td>
								<td>saloni@gmail.com</td>
								<td>9856784512</td>
								<td>MCA1</td>
								<td>B</td>
								<td class="tdimg"><span class="fa fa-pencil" id="sp"></span></td>
								<td><span class="fa fa-trash-o" id="sp"></span></td>
							  </tr>
							   <tr>
								<td class="tdno">1712004</td>
								<td>Saloni Arya</td>
								<td>saloni@gmail.com</td>
								<td>9856784512</td>
								<td>MCA1</td>
								<td>B</td>
								<td><span class="fa fa-pencil" id="sp"></span></td>
								<td><span class="fa fa-trash-o" id="sp"></span></td>
							  </tr>
							  			
							</table>
						</center>			
					</div>
				</tr>
			</table>
		</form>
		</div>
	</form>
	</body>
</html>