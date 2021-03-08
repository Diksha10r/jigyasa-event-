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
						 margin-left:8em;
						
					}
				
				.title3{
						 text-align:justify;
						 margin-left:1em;
						
						}
			.title4{
						font-size:20px;
						color:#fff;
					}	
			
			.label_design{
						border:1.0px;
					background: rgba(100,100,100,0.8);
					border-radius: 10px;
					box-shadow: 5px 10px 10px rgba(100,100,100,0.9);
					padding: 20px;
					color:#fff;
					font-size:20px;
					border-color:#fff;
					text-align: center;
				}
				h5{
					font-size:20px;
						color:#fff;
						word-wrap:5%;
						}
						
				
		</style>
	</head>
	<body>
	
		<!---------------------------- Header ---------------------------------->
		<?php include('volunteer-header.php'); ?>
		<!-------------------------------------------------------announcement--------------------------------------------------------------------------->
		<?php
		$res=mysqli_query($db,"select e_id from volunteer where v_id=$user");
		$eid=mysqli_fetch_array($res);
		$eeid=$eid['e_id'];
		$res1=mysqli_query($db,"select * from announcement where e_id=$eeid");
		$row=mysqli_fetch_array($res1);
		?>
		
		<section id="volunteer_announce">
		<div class="class1">
				
				<form>
				<br><br>
				<table class="title2" cellspacing=10 cellpadding=5>
				<tr>
				<td><h5>COLLEGE NAME : </h5></td>
				<td><input type="label" name="l1" value="<?php echo $row['college_nm'];?>" readonly class="label_design"></td>
				</tr>
				
				<tr>
				<td><h5>REFERENCE NAME : </h5></td>
				<td><input type="label" name="l2" value="<?php echo $row['reference_nm'];?>" readonly class="label_design"></td>
				</tr>
				
				<tr>
				<td><h5>VISITING DATE : </h5></td>
				<td><input type="label" name="l3" value="<?php echo $row['date'];?>" readonly class="label_design"></td>
				</tr>
				
				<tr>
				<td><h5>MESSAGE: </h5></td>
				<td><input type="label" name="l4" value="<?php echo $row['msg'];?>" readonly class="label_design"></td>
				</tr>
				
				</table>
				</form>
		</div>
		
		</section>
</body>
</html>
		