<?php
	include('admin-header.php');
?>
<!---------------------------- Dash Board ---------------------------------->		
		<div id="dashboard-bgimg">
			<div class="dashboard-bgover">
			
				<center><h1 class="dashboard-title1">Dashboard</h1>
				<hr class="dashboard-hr"> 
				<span class="fa fa-2x fa-pagelines dashboard-faa"></span>
				<hr class="dashboard-hr"></center>
				
				<div class="dashboard">
					<br><br>
<?php
	$sql1="select * from event";
	$r1=mysqli_query($db,$sql1);
	$count1=mysqli_num_rows($r1);
	
	$sql2="select * from faculty";
	$r2=mysqli_query($db,$sql2);
	$count2=mysqli_num_rows($r2);
	
	$sql3="select * from faculty where head=1";
	$r3=mysqli_query($db,$sql3);
	$count3=mysqli_num_rows($r3);
	
	$sql4="select * from volunteer";
	$r4=mysqli_query($db,$sql4);
	$count4=mysqli_num_rows($r4);
	
	$sql5="select * from message";
	$r5=mysqli_query($db,$sql5);
	$count5=mysqli_num_rows($r5);
	
	
?>
					<div class="db-outer">
						<center> 
						<hr class="db-hr1">
						<div class="db-circle">
							<span class="fa fa-calendar fa-3x" style="color: white;"></span>
						</div>
						<hr class="db-hr2">
						<br>
						<span class="db-no"><b><?php echo $count1; ?></b></span><br>
						<span class="db-text"><b>Total Events</b></span>
						</center>
					</div>
					<div class="db-outer">
						<center> 
						<hr class="db1-hr1">
						<div class="db-circle">
							<span class="fa fa-user fa-3x" style="color: white;"></span>
						</div>
						<hr class="db1-hr2">
						<br>
						<span class="db-no"><b><?php echo $count3; ?></b></span><br>
						<span class="db-text"><b>Total Event Heads</b></span>
						</center>
					</div>
					<div class="db-outer">
						<center> 
						<hr class="db2-hr1">
						<div class="db-circle">
							<span class="fa fa-users fa-3x" style="color: white;"></span>
						</div>
						<hr class="db2-hr2">
						<br>
						<span class="db-no"><b><?php echo $count2; ?></b></span><br>
						<span class="db-text"><b>Total Faculties</b></span>
						</center>
					</div>
					<div class="db-outer">
						<center> 
						<hr class="db3-hr1">
						<div class="db-circle">
							<span class="fa fa-users fa-3x" style="color: white;"></span>
						</div>
						<hr class="db3-hr2">
						<br>
						<span class="db-no"><b><?php echo $count4; ?></b></span><br>
						<span class="db-text"><b>Total Volunteers</b></span>
						</center>
					</div>
					<div class="db-outer">
						<center> 
						<hr class="db4-hr1">
						<div class="db-circle">
							<span class="fa fa-comments fa-3x" style="color: white;"></span>
						</div>
						<hr class="db4-hr2">
						<br>
						<span class="db-no"><b><?php echo $count5; ?></b></span><br>
						<span class="db-text"><b>Total Message's</b></span>
						</center>
					</div>
					
					<br><br>
<!--
					<div class="dashboard-box">
						<div class="dashboard-content">
							<span class="fa fa-4x fa-calendar faa1"></span>
							<span class="dashboard-no">
								5	
							</span>
						</div>
						<div class="dashboard-name"><br>
							<span class="dashboard-title2">Events</span>
						</div>
					</div>
-->
				</div>
			</div>
		</div>
<?php
	include('footer.php');
?>