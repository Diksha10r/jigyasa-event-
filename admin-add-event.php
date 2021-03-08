<?php
	include('admin-header.php');
?>
<div id="admin-heading-block-img">
	<div id="admin-heading-block-color">
		<center><h1 id="admin-heading">
		<?php 
			if(isset($_REQUEST['eid'])) 
			{
				echo "UPDATE EVENTS";
			}
			else
			{
				echo "ADD EVENTS";
			}
		?>
		</h1>
		<hr class="admin-heading-hr admin-heading-hr1"> 
		<span class="fa fa-2x fa-pagelines admin-heading-faa"></span>
		<hr class="admin-heading-hr admin-heading-hr2">
		</center>
	</div>
</div>
<?php
if(isset($_REQUEST['eid']))
{
	$eid=$_REQUEST['eid'];
	$r1=mysqli_query($db,"select * from event where e_id=$eid");
	$rec=mysqli_fetch_array($r1);
	if(isset($_POST['update']))
	{
		$a=$_POST["a"];
		$name=mysqli_query($db,"select * from event where name='$a'");
		$count=mysqli_num_rows($name);
		if($count==0 )
		{
			$a=$_POST["a"];
			$b=$_POST["b"];
			$c=$_POST["c"];
			$d=$_POST["d"];
			$e=$_POST["e"];
			$f=$_POST["f"];
			$g=$_POST["g"];
			$file=$_FILES["h"];
			if($file['type']=="image/jpg" || $file['type']=="image/jpeg" || $file['type']=="image/png")
			{
				$h=$_FILES["h"]["name"];
				$newname=time().rand().$h;
				$result=mysqli_query($db,"update event set name='$a', date='$b', time='$c', location='$d', fee=$e, members=$f, rules='$g',img='$newname' where e_id=$eid") or die("insert Invalid: ");
				move_uploaded_file($_FILES["h"]["tmp_name"],"image/event-img/".$newname);
				header('location:admin-edit-event.php');
			}
			else /*-------------------uploaded file not an IMAGE-----------------------------------------*/
			{
			?>
				<div id="error-block2">
					<span class="fa fa-image fa-2x error-fa"></span>
					<span class="error-heading">Uploaded file must be of either ".jpg" ".jpeg" ".png"</span>
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
		else   /*-------------------Event already exist-----------------------------------------*/
		{
?>
	<div id="error-block1">
		<span class="fa fa-exclamation-triangle fa-2x error-fa"></span>
		<span class="error-heading">Event Name already exist</span>
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
}
	if(isset($_POST['sub1']))
	{
		$a=$_POST["a"];
		$name=mysqli_query($db,"select * from event where name='$a'");
		$count=mysqli_num_rows($name);
		if($count==0 )
		{
			$a=$_POST["a"];
			$b=$_POST["b"];
			$c=$_POST["c"];
			$d=$_POST["d"];
			$e=$_POST["e"];
			$f=$_POST["f"];
			$g=$_POST["g"];
			$file=$_FILES["h"];
			if($file['type']=="image/jpg" || $file['type']=="image/jpeg" || $file['type']=="image/png")
			{
				$h=$_FILES["h"]["name"];
				$newname=time().rand().$h;
				$result=mysqli_query($db,"insert into event(name,date,time,location,fee,members,rules,img) values('$a','$b','$c','$d',$e,$f,'$g','$newname')") or die("insert Invalid: ");
				move_uploaded_file($_FILES["h"]["tmp_name"],"image/event-img/".$newname);
			}
			else{/*-------------------uploaded file not an IMAGE-----------------------------------------*/
?>
	<div id="error-block2">
		<span class="fa fa-image fa-2x error-fa"></span>
		<span class="error-heading">Uploaded file must be of either ".jpg" ".jpeg" ".png"</span>
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
		else   /*-------------------Event already exist-----------------------------------------*/
		{
?>
	<div id="error-block1">
		<span class="fa fa-exclamation-triangle fa-2x error-fa"></span>
		<span class="error-heading">Event Name already exist</span>
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
?>
<center>
<div class="add-event-block">
	<div class="add-event-block1"><h2 class="add-event-tittle1">Enter Event Information</h2></div>
	<br>	
	<form name="f1" method="POST" action="" enctype="multipart/form-data">
	<table class="add-event-table" border="0">
		<tr>
			<td>
				<center><span class="add-event-tittle2">Name:</span><br>
				<span><input type="text" value="<?php if(isset($_REQUEST['eid'])) echo $rec['name']; ?>" name="a" id="a" class="add-event-input" placeholder="Name Of Event" required><span>
				</center>
			</td>
			<td>
				<center><span class="add-event-tittle2">Date:</span><br>
				<span><input type="date" value="<?php if(isset($_REQUEST['eid'])) echo $rec['date']; ?>" name="b" class="add-event-input" required><span></center>
			</td>
			<td>
				<center><span class="add-event-tittle2">Time:</span><br>
				<span><input type="time" value="<?php if(isset($_REQUEST['eid'])) echo $rec['time']; ?>" name="c" class="add-event-input" required><span></center>
			</td>
		</tr>
		<tr height="15px"></tr>
		<tr>
			<td>
				<center><span class="add-event-tittle2">Location:</span><br>
				<span><input type="text" value="<?php if(isset($_REQUEST['eid'])) echo $rec['location']; ?>" name="d" class="add-event-input" placeholder="Place Of Event" required><span></center>
			</td>
			<td>
				<center><span class="add-event-tittle2">Registration Fee's:</span><br>
				<span><input type="number" value="<?php if(isset($_REQUEST['eid'])) echo $rec['fee']; ?>" pattern="^[0-9]" title='Only Number' min="10" step="1" name="e" class="add-event-input" placeholder="Indian Rs" required><span></center>
			</td>
			<td>
				<center><span class="add-event-tittle2">Number of Members:</span><br>
				<span><input type="number" value="<?php if(isset($_REQUEST['eid'])) echo $rec['members']; ?>" pattern="^[0-9]" title='Only Number' min="1" step="1" name="f" class="add-event-input" placeholder="Number" required><span></center>
			</td>
		</tr>
		<tr height="15px"></tr>
		<tr>
			<td colspan="3">
				<center><span class="add-event-tittle2">Rules:</span><br><span>
				<textarea  name="g" class="add-event-textarea" rows="4" cols="80" required><?php if(isset($_REQUEST['eid'])){ echo $rec['rules']; } else { ?>Rules Of Event<?php }?>
				</textarea><span></center>
			</td>
		</tr>
		<tr height="15px"></tr>
		<tr>
			<td colspan="2">
				<center><span class="add-event-tittle2">Image/Logo:</span><br>
				<span><input type="file" value="<?php if(isset($_REQUEST['eid'])) echo $rec['img']; ?>" name="h" class="add-event-input" required><span></center>
			</td>
			<td>
				<?php
				if(!isset($_REQUEST['eid']))
				{
			?>
					<center><input type="submit" name="sub1" class="add-event-submit" value="ADD EVENT"></center>	
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