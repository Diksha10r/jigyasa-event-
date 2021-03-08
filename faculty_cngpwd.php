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
			font-size:20px;
				  
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
			width:300px;
			height:100px;
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

		input[type=text]:focus, .pwd:focus
		{
		  box-shadow: 0 0 5px rgba(81, 203, 238, 1);
		  margin: 2px 1px 1px 0px;
		  border: 1px solid rgba(81, 203, 238, 1);
		}
		input[type=text]:hover, .pwd:hover
		{
			outline:none;
			box-shadow: 2px 2px 10px #1eb089;
		  margin: 2px 1px 1px 0px;
		  
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

		hr
		{
			width:100%;
			height:3px;
			background: linear-gradient(to right, #1eb089 0%, #7c49ab 100%, #7db9e8 100%);
			
		}
		.myimg
		{
			width:300px;
			height:150px;
			border: 2px solid gray;
			box-shadow:5px 5px gray;
			border-radius: 50%;
			margin-left:50px;
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
			
		.image {
		  opacity: 1;
		  display: block;
		  width: 100%;
		  height: auto;
		  transition: .5s ease;
		  backface-visibility: hidden;
		}

		.container:hover .image {
		  opacity: 0.3;
		}

		.container:hover .middle {
		  opacity: 1;
		}

		p
		{
		    color: yellow;
			text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
			font-size:30px;
			font-weight:500;
			font-family:calibri;
			line-spacing:10px;
			word-spacing:1px;
			margin-left:0;
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
		.txt1
		{
			box-shadow:5px 5px rgba(150,100,100,0.5);
			border-radius:5px;
			height:40px;
			width:200px;
			border-color:2px solid blue;
		}
		</style>
	</head>
	<body>
	
		<!---------------------------- Header ---------------------------------->
		<?php include('faculty-header.php'); ?>
	<!-----------------------------------main content------------------------------------ -->

<?php
		$res007=mysqli_query($db,"select * from faculty where f_id=$user");
		$row1=mysqli_fetch_array($res007);
			if(isset($_POST['b1']))
			{
				$cp=$row1['password'];
				if($_POST['p1']==$cp)
				{
					$c=$_POST["t1"];
					$e=$_POST["t2"];
					$a=$_POST["p2"];
					$res=mysqli_query($db,"update faculty set name='$c',phone='$e',password='$a' where f_id=$user");
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
	<div class="main">
	
		<form name="frm1" method="post" action="#">
			<table class="tbl">
				<tr>
					<td colspan="2"><center><img src="image/cngpwd.jpg" class="myimg"></center>
					
				<tr>
						<td colspan="2"><hr>
				</tr>				
				<tr>
					<td class="td1"><h1 class="my" >NAME:</h1></td>
					<td>
						<span><i class="fa fa-pencil faa fa-4x " style="font-size:32px;"></i></span>
					<input type="text" class="txt" name="t1" value="<?php echo $row1['name']; ?>" pattern="^[a-zA-Z/s]{3,25}" title="alphabets only" required>
				</tr>
				<tr>
					<td class="td1"><h1 class="my" >CONTACT NO:</h1></td>
					<td>
						<span><i class="fa fa-pencil faa fa-4x " style="font-size:32px;"></i></span>
					<input type="text" class="txt" name="t2" value="<?php echo $row1['phone']; ?>" pattern="^[0-9]{10}" title="invalid phone no" required> 
				</tr>
				<tr>
					<td class="td1"><h1 class="my"> CURRENT PASSWORD:</h1></td>
					<td>
						<span><i class="fa fa-pencil faa fa-4x " style="font-size:32px;"></i></span>
					<input type="Password" class="pwd" name="p1" >
				</tr>
				<tr>
					<td class="td1"><h1 class="my"> NEW PASSWORD:</h1></td>
					<td>
						<span><i class="fa fa-pencil faa fa-4x " style="font-size:32px;"></i></span>
					<input type="Password" class="pwd" name="p2" pattern="^[0-9a-zA-Z]{3,8}" title="minimum of 3 characters" required>
				</tr>
				<tr>
					<td class="td1"><h1 class="my">CONFIRM PASSWORD:</h1></td>
					<td>
						<span><i class="fa fa-pencil faa fa-4x " style="font-size:32px;"></i></span>
					<input type="Password" class="pwd" name="p3" title="re-enter the new password" required >
				</tr>

				<tr>
					<td class="td1" colspan="2">
						<center><input type="button" class="b1" value="CHANGE" onclick=" return validate1()"></center>
					</td>
				</tr>
				
			</table>
		
		</form>
	</div>
	
	
	<script>
		


			function validate1()
			{
				
			 if(document.frm1.p2.value==document.frm1.p3.value)
			{
				return true;
			}
			else
			{
				document.frm1.l4.value="* password invalid";
				
				return false;
			}
			}


			


</script>
	</body>
</html>