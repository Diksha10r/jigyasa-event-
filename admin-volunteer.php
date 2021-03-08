<?php
	include('admin-header.php');
?>
<script>
/*	function show()
	{
		document.getElementById('TableOfVolunteer').style.display="block";
		document.getElementById('br').style.display="none";
	}*/
</script>
<div id="admin-heading-block-img">
	<div id="admin-heading-block-color">
		<center>
		<h1 id="admin-heading">VOLUNTEER</h1>
		<hr class="admin-heading-hr admin-heading-hr1"> 
		<span class="fa fa-2x fa-pagelines admin-heading-faa"></span>
		<hr class="admin-heading-hr admin-heading-hr2">
		<br>
		</center>
	</div>
</div>
<!--
<form>
	<center>
		<div class="admin-volunteer-dropdown">
			<a href="" class="admin-volunteer-dropbtn">EVENTS</a>
			<div class="admin-volunteer-dropdown-content">
				<a onclick="show()">crazy 'c'</a>
				<a onclick="show()">I click</a>
				<a onclick="show()">fashion show</a>
			</div>
		</div>
	</center>
</form>
-->

<br><br>
<div id="TableOfVolunteer" style="display:;">
<center><div class="edit-event-block">
<table class="event-edit-table" border="0">
	<tr class="event-edit-th">
		<th>ROLL NO</th>
		<th>NAME</th>
		<th>Class</th>
		<th>EMAIL</th>
		<th>PHONE NO</th>
		<th>EVENT</th>
		<th>DELETE</th>
	<tr>
<?php
	$query="select * from volunteer";
	$result=mysqli_query($db,$query);
	while($r=mysqli_fetch_array($result))
	{
?>
	<tr class="event-edit-tr">
		<td style="padding: 10px 0px;"><?php echo $r['rollno'];?></td>
		<td><?php echo $r['name'];?></td>
		<td><?php echo $r['class'];?></td>
		<td><?php echo $r['email'];?></td>
		<td><?php echo $r['phone'];?></td>
		<td>
			<?php 
				$eventid=$r['e_id'];
				$query1="select * from event where e_id=$eventid";
				$result1=mysqli_query($db,$query1);
				$r1=mysqli_fetch_array($result1);
				echo $r1['name'];
			?>
		</td>
		<td class="edit-event-fa faa-trash">
		<a href="delVol.php?id=<?php echo $r['v_id'];?>" class="fa fa-2x fa-trash"style="font-size:1.5em;"></a>
		</td>
	</tr>
<?php
	}
?>
</table>
</div></center>
</div>
<br>
<!--<div id="br"><br><br><br><br><br><br><br><br><br><br><br><br></div>-->
<?php
	include('footer.php');
?>