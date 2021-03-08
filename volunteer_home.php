<?php
session_start();
include('config.php');
if(!isset($_SESSION['user']))
{	
	header("location:index.php");
}
$user=$_SESSION['user'];
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="StyleSheet" type="text/css" href="css/index.css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style>
			a{text-decoration: none;}
			
			.class1{
					width: 70%;
					border: 1.5px ;
					height:800px;
					margin-top: 200px;
					margin-bottom:150px;
					margin-left:200px;
					margin-right:200px;
					background: rgba(0,0,0,0.87);
					border-radius: 10px;
					box-shadow: 5px 15px 20px rgba(0,0,0,0.9);
					padding: 30px;
					}
					
			.welcome{
					
					border: 0px;
					height:5px;
					<!--margin-top: 5px;
					margin-bottom:0px;
					margin-left:900px;
					margin-right:10px;
					padding-top:3px;-->
					
					padding-top: 0px;
					padding-bottom: 0px;
					}
					
				body{
					background-image: url('image/banner1.jpg');
					
					}
				
				
				.title1{ 
						text-shadow: 2px 1px white;
						font-size:60px;
						color: #fff;	
						}
						
				.title2{
						 text-align:justify;
						 margin-left:1em;
						
						}
				.title3{
						font-size:30px;
						color: #fff;
						font-family:courier;
						}
						
				.title4{
						
						
						font-size:20px;
						color:#fff;
						}
					
				.title5{
						text-align:justify;
						font-size:20px;
						color:#fff;
					
						
						
						
				}
				
				.logo1{
					position:absolute;
					left:70%;
					top: 15%;
					margin-left: -100px;
					height:28em;
					width:28em;
					border-radius:50%;
					box-shadow:5px 15px 20px rgba(0,0,0,0.5);
					}
					
				.logo2{
					position:absolute;
					left:105%;
					top: 50%;
					margin-left: -100px;
					height:5em;
					width:5em;
					border-radius:50%;
					box-shadow:5px 10px 5px rgba(0,0,0,0.5);
					}
				
				.img1{
					opacity: 1.0;
					}
				
				
				.class2{
						margin-top:5px;
						margin-left:3px;
						}
						
				ul{
					color: #fff;
					font-size:25px;
					}
					
				marquee{
						cursor:pointer;
						font-family:verdana;
						behavior:scroll;
						direction:left;
						font-size:20px;
						}
					a{ color:red;
					}
					
				
					
		</style>
	</head>
	<body>
	
		<!---------------------------- Header ---------------------------------->
		<?php include('volunteer-header.php'); ?>
		
			<!-------------------------------------------------home------------------------------------------------------------>
				
<?php
	
	$res=mysqli_query($db,"select e_id from volunteer where v_id=$user");
	$eid=mysqli_fetch_array($res);
	$eeid=$eid['e_id'];
	$res1=mysqli_query($db,"select * from event where e_id=$eeid");
	$row=mysqli_fetch_array($res1);
?>
			<section id="volunteer_home">
			<img src="image/event-img/<?php echo $row['img'];?>" class="logo1 img1">
			<div class="class1">
				<center>
				<h1 class="title1 title2"><u><?php echo $row['name'];?></u></h1>
				</center>
			
			
			<div class="class2">
			<h2 class="title3">
			<br><br><br>
			DATE : <?php echo $row['date'];?><br><br>
			EVENT TIME : <?php echo $row['date'];?><br><br>
			EVENT LOCATION : <?php echo $row['location'];?><br><br>
			RULES:
			</h2>
			
			<ul style="list-style-type:square">
				<?php echo $row['rules'];?>
			</ul>
			<br><br><br>
			<marquee><u><a href="volunteer_announce.html">NOTICE FOR TREASURE HUNT VOLUNTEER !!</a><u></marquee>
			</div>
			</div>
			</section>
			<!--------------------------------------------------------------------------------------------------------------------------->
			
			
			
	</body>
</html>