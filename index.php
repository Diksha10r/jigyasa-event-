<?php
	include('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="StyleSheet" type="text/css" href="css/index.css">
		<link rel="StyleSheet" type="text/css" href="css/admin-header.css">
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
						<a href="#home"class="title3">HOME</a>
					</td>
					<td>	
						<a href="#events"class="title3">EVENTS</a>
					</td>
					<td>	
						<a href="#register"class="title3">REGISTER</a>
					</td>
					<td>	
						<a href="#gallery"class="title3">GALLERY</a>
					</td>
					<td>	
						<a href="#contactus"class="title3">CONTACT US</a>
					</td>
					<td>	
						<a href="#sopnsors"class="title3">SPONSORS</a>
					</td>
					<td>	
						<div class="dropdown">
						<a href="" class="title3 dropbtn" style="font-size:20px;">login</a>
						<div class="dropdown-content">
							<a href="login.php?user=u1">ADMIN</a>
							<a href="login.php?user=u2">FACULTY</a>
							<a href="login.php?user=u3">VOLUNTEER</a>
						</div>
						</div>
					</td>
					
				</tr>
				</table>
			</div>
		</header>
		
		<!---------------------------- slider ---------------------------------->
		
		<a name="home"></a>
		<div class="bgimg" id="bgimg">
			<div class="bgover"><center>
				<br><br>
				<div id="ribbon-header" class="ribbon">
				<h1><a>
				<?php
					$sql_date="select * from event";
					$res_date=mysqli_query($db,$sql_date);
					$min_date='2999-12-31';
					while($row=mysqli_fetch_array($res_date))
					{
						$date=$row['date'];
						if($min_date>$date)
						{
							$min_date=$date;
						}
					}
					$main_date=date_create($min_date);
					echo date_format($main_date,"dS F y");
					
				?>
				</a></h1>
				</div>
				<br><br>
				<h2 class="slider-title1">DONT MISS THE EVENT</h2>
				<br>
				<div class="slider-title2">J O I N &nbsp; N O W</div>
			</center></div>
		</div>
		<script>
			/*function test()
			{
				document.getElementById("bgimg").style.background="url('image/b.png')";
			}*/
			var i=0;
			var images=[];
			var time=2000;
			images[0]='image/slider1.jpg';
			images[1]='image/slider2.jpg';
			images[2]='image/slider3.jpg';
			
			//change image
			function changeImg(){
				document.getElementById("bgimg").style.background="url('"+ images[i] +"')";
				document.getElementById("bgimg").style.backgroundSize="100% 560px";
				if(i<images.length-1)
				{
					i++;
				}
				else{
					i=0;
				}
				setTimeout("changeImg()",time);
			}
			window.onload=changeImg();
		</script>
		
		<a name="events"></a>
		<!---------------------------- Information Bar -------------------------->
		<div class="information-bar"><center>
			<div class="inner-info-bar">
				<table style="width: 100%;">
					<tr>
						<td class="border"> 
						<table>
							<tr>
								<td style="padding-right:10px;">
									<span class="fa fa-map-marker fa-3x faa"></span>
								</td>
								<td>
									<span class="info-title1"><b>IMCC</b></span><br>
									<span class="info-title2">131, Mayur Colony,<br> Kothrud</span>
								</td>
							</tr>
						</table>
						</td>
						<td width="10px"></td>
						<td class="border"> 
						<table>
							<tr>
								<td style="padding-right:10px;">
									<span class="fa fa-map-marker fa-3x faa"></span>
								</td>
								<td>
									<span class="info-title1"><b>IMCC</b></span><br>
									<span class="info-title2">131, Mayur Colony,<br> Kothrud</span>
								</td>
							</tr>
						</table>
						</td>
						<td width="10px"></td>
						<td class="border"> 
						<table>
							<tr>
								<td style="padding-right:10px;">
									<span class="fa fa-user fa-3x faa"></span>
								</td>
								<td>
									<span class="info-title1"><b>IMCC</b></span><br>
									<span class="info-title2">131, Mayur Colony,<br> Kothrud</span>
								</td>
							</tr>
						</table>
						</td>
						<td width="10px"></td>
						<td class=""> 
						<table>
							<tr>
								<td style="padding-right:10px;">
									<span class="fa fa-map-marker fa-3x faa"></span>
								</td>
								<td>
									<span class="info-title1"><b>IMCC</b></span><br>
									<span class="info-title2">131, Mayur Colony,<br> Kothrud</span>
								</td>
							</tr>
						</table>
						</td>
						
					</tr>
				</table>
		</div></center></div>
		
		
<!-- ---------------------------------main content------------------------------------ -->		
	<div class="main-content">
<!-- ---------------------------------UpComing EVENTS--------------------------------- -->
		<!--### event ###-->
		<div class="events"> 
			<span class="event-title1">UPCOMING EVENTS</span>
			<br><hr class="event-hr1"><br>
			<span class="event-title2">There are total 5 events this year.</span>
			<br><br>
			
	<?php
			$res2=mysqli_query($db,"select * from event");
			while($res1=mysqli_fetch_array($res2))
			{
		?>
		<!--### event blocks ###-->
			<div class="event-blocks" style="">
				<div class="event-blocks-img">
					<div class="event-block-img1" style="background-image: url('image/event-img/<?php echo $res1['img']; ?>');">
						<div class="event-block-img1-color"></div>
					</div>
				<!--<img src="image/event-img/1-3.jpg" class="event-block-img1">-->
				
				</div>
				<div class="event-block-block">
					<?php
						$abc=$res1['e_id'];
						$event_res=mysqli_query($db,"select * from faculty where head=1 and e_id=$abc");
						$event_row=mysqli_fetch_array($event_res);
						$xyz=$event_row['img'];
					?>
					<img src="image/faculty-img/<?php echo $xyz; ?>" class="event-block-img2">
					<br>
					<div class="event-block-indentation">
						<span class="fa fa-clock-o faaa" style="font-size: 1.5em;"></span>
						<span class="event-title3"><?php echo $res1['date']; ?></span>
						&nbsp;&nbsp;
						<span class="fa fa-map-marker faaa" style="font-size: 1.5em;"></span>
						<span class="event-title3"><?php echo $res1['location']; ?></span>
						<br>
						<div class="event-title4"><?php echo $res1['name']; ?></div>
						<br>
						<span class="event-title3">For more information of the event rules etc click on READ MORE</span>
						<div class="event-title5-indentation"><?php $r01=$res1['name'];?>
						<a href="#<?php echo $res1['name']; ?>" class="event-title5">Read More</a> 
						<span class="fa fa-angle-right faaaa" style="font-size: 1.2em;">
						</span>
						</div>
					</div>
				</div>
				
			</div>
			<!--### Pop Up ###-->
		
		<div class="popup" id="<?php echo $res1['name']; ?>">
			<div class="popup-content" style="padding: 10px 10px;">
				<u><center><h2><?php
						echo $res1['name'];
					?></h2></center></u>
				<table width="100%">
					<tr>
						<td>DATE: <?php echo $res1['date']; ?></td>
						<td>TIME: <?php echo $res1['time']; ?></td>
						<td>LOCATION: <?php echo $res1['location']; ?></td>
					</tr>
					<tr height="10px"></tr>
					<tr>
						<td>REGISTRATION FEE: <?php echo $res1['fee']; ?></td>
						<td></td>
						<td>MEMBERS PER TEAM: <?php echo $res1['members']; ?></td>
					</tr>
					<tr height="10px"></tr>
					<tr>
						<td colspan="3">
							<div style="height: 350px;width: 550px;overflow:auto;">
								RULES:<br><?php echo $res1['rules']; ?>
							</div>
						</td>
					</tr>
				</table>
				<a href="#events" class="close">X</a>
			</div>
		</div>
		
		<?php
			}
		?>
		</div>
		<br>
<!-- ---------------------------------main content End------------------------------------------------------------------ -->	
	</div>
	<br>
<!-- ---------------------------------Register------------------------------------------------------------------ -->		
	<div class="reg">
	<div class="reg-color">
		<div class="reg-content" id="reg1">
			<span class="reg-title1">REGISTER NOW AND JOIN WITH US!!</span>
			<br><hr class="reg-hr1"><br><br>
			<div class="reg-main">
<?php
if(isset($_POST['regsubmit']))
{
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	header('location:p_reg.php');
}

?>
			
				<form method="post" action="p_reg.php">
				<table style="border-collapse:collapse;width: 100%;">
					<tr>
						<td>
							<span class="fa fa-user reg-fa" style="font-size: 20px;"></span>
							<span class="reg-title2"> NAME</span>
						</td>
						<td>
							<span class="fa fa-university reg-fa" style="font-size: 20px;"></span>
							<span class="reg-title2"> COLLEGE</span>
						</td>
						<td>
							<span class="fa fa-envelope reg-fa" style="font-size: 20px;"></span>
							<span class="reg-title2"> EMAIL</span>
						</td>
						<td>
							<span class="fa fa-phone reg-fa" style="font-size: 20px;"></span>
							<span class="reg-title2"> PHONE</span>
						</td>
					</tr>
					<tr height="20px"></tr>
					<tr>
						<td><input type="text" name="a" class="reg-input" size="10" placeholder="Your Name" required pattern="^[a-zA-Z/s]{3,15}" title="only alphabet min 3 max 15 char"></td>
						<td><input type="text" name="b" class="reg-input" size="10" placeholder="College Name"required pattern="^[a-zA-Z/s]{3,20}" title="only alphabet  min 3 max20 char"></td>
						<td><input type="email" name="c" class="reg-input" size="10" placeholder="Your ID"required></td>
						<td><input type="text" name="d" class="reg-input" size="10" placeholder="Phone Number"required pattern="^[0-9]{10}" title="10 digits"></td>
						
					<tr>
				</table>
				<center>
					<br><input type="submit" name="regsubmit" value="REGISTER" class="reg-btn1"><br><br>
					<hr style="width: 200px;display: inline-block;">
					<span>OR</span>
					<hr style="width: 200px;display: inline-block;"><br><br>
					<!--##############Gallery#####################-->			
						<a name="gallery"></a>
					<!--##############Gallery#####################-->			
					<a href="" style="text-decoration: none; color: #ff8625;cursor:pointer;">
					Have some Questions?? Ask us <span class="fa fa-angle-right"></span>
					</a>
					
				</center>
				</form>				
			</div>
		</div>
		
	</div>
	</div>
	<br>
<!-- ---------------------------------main content------------------------------------ -->		
	<div class="main-content">
<!-- ---------------------------------Gallery------------------------------------------------------------------ -->
		
		<!--### POPUP ###-->
			<div class="gallery-popup" id="gallery-popup?a=1">
					<a href="#gallery" class="gallery-close">X</a>
				<div class="gallery-popup-content">
					<center><img src="image/gallery/slider1.jpg" class="gallery-popup-content-img"></center>
				</div>
			</div>
		
		<!--### gallery ###-->
		<div class="gallery"> 
			<center><span class="gallery-title1">Our Gallery</span>
			<br><hr class="gallery-hr1"><br>
			<span class="gallery-title2">Proud Movements of Imcc.</span></center>
			<br><br>
		<!--### galley blocks ###-->
		<?php
			
			$res02=mysqli_query($db,"select * from gallery");
			while($row02=mysqli_fetch_array($res02))
			{
		?>
			<div class="gallery-block">
				<a href="">
				<div  class="gallery-img" style="background-image: url('image/gallery/<?php echo $row02['img']; ?>');">
					<div class="gallery-color"></div>
				</div>
				</a>
			</div>
		<?php
			}
		?>
		</div>
		
		<!--##############contactus#####################-->			
			<a name="contactus"></a>
		<!--##############contactus#####################-->
		
<!-- ---------------------------------main content End------------------------------------------------------------------ -->	
	</div>
<!-- ---------------------------------Contact us------------------------------------------------------------------ -->	
	
	<div class="contact">
	<div class="contact-color">
		<div class="contact-content">
			<span class="contact-title1">CONTACT US</span>
			<br><hr class="contact-hr1">
			<span class="contact-title2">Have some Questions?? get answer to your questions.. Contact Us!!</span>
			<br><br>
<?php
	if(isset($_POST['message-sub']))
	{
		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		$d=$_POST['d'];
		mysqli_query($db,"insert into message(email,name,sub,msg) values('$a','$b','$c','$d')");
	}
?>
			<form method="post" action="index.php#contactus">
				<input type="text" pattern="^[a-zA-Z/s]{3,25}" required title="only alpha with min 3 and max 25" name="b" class="contact-input" size="43" placeholder="Your Name">
					&nbsp; &nbsp; &nbsp; &nbsp;
				<input type="email" name="a" class="contact-input" required size="43" placeholder="Your Email">
					<br><br>
				<input type="text" name="c" class="contact-input" required size="100" placeholder="Your Subject">
					<br><br>
				<textarea rows="9" name="d" cols="102" required class="contact-textarea">Your Message</textarea>
					<br><br>
				<input type="submit" name="message-sub" value="Contact Us" class="contact-btn1">
			</form>
			
		</div>
	</div>
	</div>
	<br><br>
	<!--##############sopnsors#####################-->			
		<a name="sopnsors"></a>
	<!--##############sopnsors#####################-->
<!-- ---------------------------------EVENT SPONSOR------------------------------------------------------------------ -->			
<div class="Event-spo">
	<span class="sop-title1">EVENT SPONSORS</span>
	<hr class="event-sop-hr1"> 
	<span class="sop-title2">We thank our sponsors for giving us the support we needed</span>
	<br><br>
	<div class="sop-block">
		<table style="width: 100%;">
			<tr>
				<td>
					<div class="sop-arrow-left">
						<br><br><span class="fa fa-angle-left fa-2x" style="margin: 0px 5px;"></span>
					</div>
				</td>
				<td>
					<img src="image/sponsor/brand.gif" class="sop-img"/>
					<img src="image/sponsor/deloitte.png" class="sop-img"/>
					<img src="image/sponsor/download.png" class="sop-img"/>
					<img src="image/sponsor/TCS-Logo.jpg" class="sop-img"/>
				</td>
				<td>
					<div class="sop-arrow-right">
						<br><br><span class="fa fa-angle-right fa-2x" style="margin: 0px 7px;"></span>	
					</div>
				</td>
			</tr>
		</table>
		
		
	</div>
</div>
<br>
<?php
	include('footer.php');
?>