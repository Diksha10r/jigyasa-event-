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
		<link rel="StyleSheet" type="text/css" href="css/error.css">
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
					padding: 10px;
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
						 margin-left:3em;
						
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
					padding: 15px;
					color:#fff;
					font-size:20px;
					border-color:#fff;
					text-align: center;
					margin-left:5em;
					
				}
				
				.label_design1{
						border:0px;
					background: rgba(0,0,0,0.0);
				
					padding: 15px;
					color:red;
					font-size:15px;
					margin-left:5em;
					text-align: center;
				}
				
				h5{
					font-size:20px;
						color:#fff;
						text-align:justify;
						
						}
					
					.button {
							background-color: #4CAF50; /* Green */
							border: none;
							color: white;
							padding: 16px 32px;
							text-align: center;
							text-decoration: none;
							display: inline-block;
							font-size: 16px;
							margin: 4px 2px;
							transition-duration: 0.4s;
							cursor: pointer;
						}

						.button1 {
							background-color: white; 
							color: black; 
							border: 2px solid #4CAF50;
						}

						.button1:hover {
							background-color: #4CAF50;
							color: white;
						}
				
				.button2 {
							background-color: white; 
							color: black; 
							border: 2px solid #f44336;
						}

						.button2:hover {
							background-color: #f44336;
							color: white;
						}
						
				.inputbox:focus, textarea:focus{
							background-color: lightyellow;
							}
							
				
		</style>
	</head>
	<body onload='document.form1.e1.focus()'>
	
					<!---------------------------- Header ---------------------------------->
		<?php include('volunteer-header.php'); ?>
		<!------------------------------------------------------change password-------------------------------------------------------------->		
		<?php
		$res007=mysqli_query($db,"select * from volunteer where v_id=$user");
		$row1=mysqli_fetch_array($res007);
			if(isset($_POST['b1']))
			{
				$cp=$row1['password'];
				if($_POST['p1']==$cp)
				{
					$c=$_POST["e2"];
					$e=$_POST["e3"];
					$g=$_POST["e4"];
					$a=$_POST["p2"];
					$res=mysqli_query($db,"update volunteer set name='$c',class='$e',phone='$g',password='$a' where v_id=$user");
					if($res)
					{
						echo "<script type='text/javascript'>confirm('submitted successfully!')</script>";
					
					}
					else{
						
						
						echo "<script type='text/javascript'>confirm('failed!')</script>";
					}
				}
				else
				{
					?>
					<br><br><br><br><br>
					<div id="error-block2">
						<span class="fa fa-exclamation-triangle fa-2x error-fa"></span>
						<span class="error-heading">INVALID CURRENT PASSWORD!!!!</span>
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
			}
			
			
			
				
				
		?>
		
		<section id="volunteer_pswrd">
			<div  class="class1">
				<form name="form1"  id="myForm" method="POST">
				<br><br>
				<br>
				<table class="title2" cellspacing=10 cellpadding=3>
			
				
				<td><h5>NAME:  </h5></td>
				<td><input type="text" name="e2" value="<?php echo $row1['name']; ?>" class="label_design"  id="field_username" pattern="^[a-zA-Z/s]{3,25}"  required title="alphabets only" ></td> 
				<!--<td><input type="text" name="l1" class="label_design1" readonly disabled></td>-->
				</tr>
				<td><h5>CLASS:  </h5></td>
				<td><input type="text" value="<?php echo $row1['class']; ?>" name="e3" class="label_design"  id="field_username" required></td> 
				<!--<td><input type="text" name="l1" class="label_design1" readonly disabled></td>-->
				</tr>
				
				<td><h5>PHONE NO:  </h5></td>
				<td><input type="TEXT" value="<?php echo $row1['phone']; ?>" pattern="^[0-9]{10}" title="invalid phone no" required name="e4" class="label_design" ></td> 
				<!--<td><input type="text" name="l1" class="label_design1" readonly disabled></td>-->
				</tr>
				
				<tr>
				<td><h5>CURRENT PASSWORD :  </h5></td>
				<td><input type="password"  name="p1" class="label_design" required></td>
				<!--<td><input type="text" name="l2" class="label_design1" readonly disabled></td>-->
				</tr>
				
				<tr>
				<td><h5>NEW PASSWORD :  </h5></td>
				<td><input type="password" name="p2" class="label_design"   id="field_pwd1" required pattern="^[0-9a-zA-Z]{3,8}" title="minimum of 3 characters" ></td>
				<td><input type="text" name="l3" class="label_design1" readonly disabled id="pwd2"></td>
				</tr>
				
				<tr>
				<td><h5>CONFIRM PASSWORD :  </h5></td>
				<td><input type="password" class="label_design"  id="field_pwd2" name="p3"  title="re-enter the new password" required></td>
				<td><input type="text" name="l4" class="label_design1" readonly disabled id="pwd3"></td>
				</tr>
				</table>
				<p>
				<br><br><br><br>
				<center><input type="submit" name="b1" value="submit" class="button button1" onclick=" return validate1()"  >&nbsp; &nbsp; &nbsp; &nbsp;
				<input type="reset" name="b2" value="CANCEL" class="button button2" > </center>  
				</p>
				
				</form>	
			
			</div>
			
		
		</section>
		<script>
		


			function validate1()
			{
				
			 if(document.form1.p2.value==document.form1.p3.value)
			{
				return true;
			}
			else
			{
				document.form1.l4.value="* password invalid";
				
				return false;
			}
			}


			


</script>


		
			
		
		</body>
		</html>