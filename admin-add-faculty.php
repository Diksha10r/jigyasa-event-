<?php
	include('admin-header.php');
?>
<div id="admin-heading-block-img">
	<div id="admin-heading-block-color">
		<center><h1 id="admin-heading">
		<?php 
			if(isset($_REQUEST['fid'])) 
			{
				echo "UPDATE FACULTY";
			}
			else
			{
				echo "ADD FACULTY";
			}
		?>
		</h1>
		<hr class="admin-heading-hr admin-heading-hr1"> 
		<span class="fa fa-2x fa-pagelines admin-heading-faa"></span>
		<hr class="admin-heading-hr admin-heading-hr2"></center>
	</div>
</div>
<?php
if(isset($_REQUEST['fid']))
{
	$fid=$_REQUEST['fid'];
	$r1=mysqli_query($db,"select * from faculty where f_id=$fid");
	$rec=mysqli_fetch_array($r1);
	if(isset($_REQUEST['update']))
	{

		$a=$_POST["a"];
		$c=$_POST["c"];
		$e=$_POST["e"];
		$g=$_POST["g"];
		$a=$_POST['a'];
		if($g==1)
		{
			$a=$_POST['a'];
			$r2=mysqli_query($db,"select * from faculty where e_id=$a and head=1");
			$c2=mysqli_num_rows($r2);
			if($c2==0)
			{
				mysqli_query($db,"update faculty set name='$c', phone='$e', head=$g, e_id=$a where f_id=$fid");
				header('location:admin-edit-faculty.php');
			}
			else
			{
				?>
				<div id="error-block3">
					<span class="fa fa-exclamation-triangle fa-2x error-fa"></span>
					<span class="error-heading">Event head for this event already exist</span>
					<span class="fa fa-close fa-2x error-close" onclick="closeERROR3()"></span>
				</div>
				<script>
					function closeERROR3()
					{
						document.getElementById('error-block3').style.display="none";
					}
				</script>
				<?php
			}
		}
		else
		{
			mysqli_query($db,"update faculty set name='$c', phone='$e', head=$g, e_id=$a where f_id=$fid");
			header('location:admin-edit-faculty.php');
		}
	}
}
if(isset($_POST['sub1']))
{
	$d=$_POST["d"];
	$dd=$_POST["dd"];
	if($d==$dd)
	{
		$b=$_POST["b"];
		$r1=mysqli_query($db,"select * from faculty where email='$b'");
		$c1=mysqli_num_rows($r1);
		if($c1==0)
		{
			$a=$_POST["a"];
			$b=$_POST["b"];
			$c=$_POST["c"];
			$d=$_POST["d"];
			$e=$_POST["e"];
			$g=$_POST["g"];
			$file=$_FILES["f"];				
			if($file['type']=="image/jpg" || $file['type']=="image/jpeg" || $file['type']=="image/png")
			{
				if($g==1)
				{
					$a=$_POST['a'];
					$r2=mysqli_query($db,"select * from faculty where e_id=$a and head=1");
					$c2=mysqli_num_rows($r2);
					if($c2==0)
					{
						$h=$_FILES["f"]["name"];
						$newname=time().rand().$h;
						$result=mysqli_query($db,"insert into faculty(e_id,email,name,password,phone,img,head) values('$a','$b','$c','$d','$e','$newname',$g)") or die("insert Invalid A:");
						move_uploaded_file($_FILES["f"]["tmp_name"],"image/faculty-img/".$newname);
					}
					else
					{
						?>
						<div id="error-block3">
							<span class="fa fa-exclamation-triangle fa-2x error-fa"></span>
							<span class="error-heading">Event head for this event already exist</span>
							<span class="fa fa-close fa-2x error-close" onclick="closeERROR3()"></span>
						</div>
						<script>
							function closeERROR3()
							{
								document.getElementById('error-block3').style.display="none";
							}
						</script>
						<?php
					}
				}
				else
				{
					$h=$_FILES["f"]["name"];
					$newname=time().rand().$h;
					$result=mysqli_query($db,"insert into faculty(e_id,email,name,password,phone,img,head) values($a,'$b','$c','$d','$e','$newname',$g)") or die("insert Invalid B:");
					move_uploaded_file($_FILES["f"]["tmp_name"],"image/faculty-img/".$newname);
				}
			}
			else
			{
				?>
				<div id="error-block1">
					<span class="fa fa-image fa-2x error-fa"></span>
					<span class="error-heading">Uploaded file must be of either ".jpg" ".jpeg" ".png"</span>
					<span class="fa fa-close fa-2x error-close" onclick="closeERROR1()"></span>
				</div>
				<script>
					function closeERROR1()
					{
						document.getElementById('error-block1').style.display="none";
					}
				</script>
				<?php				
							
			}
		}
		else
		{
			?>
			<div id="error-block4">
				<span class="fa fa-exclamation-triangle fa-2x error-fa"></span>
				<span class="error-heading">Already registered</span>
				<span class="fa fa-close fa-2x error-close" onclick="closeERROR4()"></span>
			</div>
			<script>
				function closeERROR4()
				{
					document.getElementById('error-block4').style.display="none";
				}
			</script>
			<?php				
		}
	}
	else
	{
		?>
		<div id="error-block2">
			<span class="fa fa-key fa-2x error-fa"></span>
			<span class="error-heading">Password and Confirm Password not matched</span>
			<span class="fa fa-close fa-2x error-close" onclick="closeERROR2()"></span>
		</div>
		<script>
			function closeERROR2()
			{
				document.getElementById('error-block2').style.display="none";
			}
		</script>
		<?php
	}
}
?>
<center><div class="add-event-block">
	<div class="add-event-block1"><h2 class="add-event-tittle1">Register Faculty</h2></div>
	<br>	
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<table class="add-event-table" border="0">
		<tr>
			<td>
				<center><span class="add-event-tittle2">Email ID:</span><br>
				<span><input type="email" <?php if(isset($_REQUEST['fid'])) { ?> readonly <?php } ?> name="b" class="add-event-input" placeholder="Email / Login ID" value="<?php if(isset($_REQUEST['fid'])) echo $rec['email']; ?>" required><span>
				</center>
			</td>
			<td>
				<center><span class="add-event-tittle2">Name:</span><br>
				<span><input value="<?php if(isset($_REQUEST['fid'])) echo $rec['name']; ?>" type="text" name="c" pattern="^[a-zA-Z\s]{3,30}" required title="only alphabet. min 3 and max 30 char" class="add-event-input" placeholder="Name Of the Faculty"><span>
				</center>
			</td>
			<td>
				<center><span class="add-event-tittle2">Phone No:</span><br>
				<span><input value="<?php if(isset($_REQUEST['fid'])) echo $rec['phone']; ?>" type="text" name="e" pattern="^[0-9]{10}" title="Exact 10 number required" required class="add-event-input" placeholder="Phone Number"><span>
				</center>
			</td>
		</tr>
		<tr height="20px"></tr>
		<tr>
			<td>
				<center><span class="add-event-tittle2">Password:</span><br>
				<span><input <?php if(isset($_REQUEST['fid'])) { ?> readonly <?php } ?> type="password" name="d" required pattern="^[0-9a-zA-Z]{3,8}" title="only alpha numeric...min 3 max 8 allowed" name="d"class="add-event-input" placeholder="......"><span></center>
			</td>
			<td>
				<center><span class="add-event-tittle2">Confirm Password:</span><br>
				<span><input <?php if(isset($_REQUEST['fid'])) { ?> readonly <?php } ?> type="password" name="dd" required class="add-event-input" placeholder="......"><span></center>
			</td>
		
			<td>
				<center><span class="add-event-tittle2">Event Head:</span>
				<span class="add-event-input" style="">
					<input type="radio" name="g" value="1">yes <input type="radio" name="g" value="0" checked>no 
				</span>
				</center>
			</td>
		</tr>
		<tr height="20px"></tr>
		<tr>
			<td colspan="2">
			<?php if(!isset($_REQUEST['fid'])) { 
			?>
				<center><span class="add-event-tittle2">Image/DP:</span><br>
				<span><input type="file"  name="f" class="add-event-input" required><span></center>
			<?php } ?>
			</td>
			<td>
				<center><span class="add-event-tittle2">Event:</span>
				<select class="add-event-input" name="a" placeholder="Name Of Event" required>
					<?php
						$query="select * from event";
						$result=mysqli_query($db,$query);
						while($r=mysqli_fetch_array($result))
						{
						
					?>
						<option value="<?php echo $r['e_id'];?>" ><?php echo $r['name'];?></option>
					<?php
						}
					?>
				</select></center>
			</td>
		</tr>
		<tr height="20px"></tr>
		<tr>
			<td colspan="3">
			<?php
				if(!isset($_REQUEST['fid']))
				{
			?>
					<center><input type="submit" name="sub1" class="add-event-submit" value="ADD FACULTY"></center>	
			<?php
				}
				else
				{
			?>
					<center><input type="submit" name="update" class="add-event-submit" value="U P D A T E"></center>	
			<?php
			
				}
			?>
			
			</td>
		</tr>
	</table>
	</form>
	<br>
</div></center>
<br>
<?php
	include('footer.php');
?>