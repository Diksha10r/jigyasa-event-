<?php
	include('admin-header.php');
?>
<div id="admin-heading-block-img">
	<div id="admin-heading-block-color">
		<center><h1 id="admin-heading">EDIT FACULTY</h1>
		<hr class="admin-heading-hr admin-heading-hr1"> 
		<span class="fa fa-2x fa-pagelines admin-heading-faa"></span>
		<hr class="admin-heading-hr admin-heading-hr2"></center>
	</div>
</div>

<br>
<center>
<div class="edit-event-block">
<table class="event-edit-table" border="0">
	<tr class="event-edit-th">
		<th>IMAGE</th>
		<th>NAME</th>
		<th>EVENT</th>
		<th>EMAIL</th>
		<th>PHONE NO</th>
		<th>EVENT HEAD</th>
		<th>EDIT</th>
		<th>DELETE</th>
	<tr>
	
	<?php
		$query="select * from faculty";
		$result=mysqli_query($db,$query);
		while($r=mysqli_fetch_array($result))
		{
	?>
	<tr class="event-edit-tr">
		<td><img src="image/faculty-img/<?php echo $r['img'];?>" class="event-edit-img"></td>
		<td><?php echo $r['name'];?></td>
		<td>
			<?php 
				$eventid=$r['e_id'];
				$query1="select * from event where e_id=$eventid";
				$result1=mysqli_query($db,$query1);
				$r1=mysqli_fetch_array($result1);
				echo $r1['name'];
			?>
		</td>
		<td><?php echo $r['email'];?></td>
		<td><?php echo $r['phone'];?></td>
		<td>
			<?php 
				$eventhead=$r['head'];
				if($eventhead==1)
				{?>
					<span class="fa fa-2x fa-check" style="font-size:1.5em;"></span><?php
				}
				else
				{?>
					<span class="fa fa-2x fa-close" style="font-size:1.5em;"></span><?php
				}
			?>
		</td>
		<td class="edit-event-fa faa-pencil"><a href="admin-add-faculty.php?fid=<?php echo $r['f_id'];?>" class="fa fa-2x fa-pencil"style="font-size:1.5em;"></a></td>
		<td class="edit-event-fa faa-trash"><a href="delfaculty.php?id=<?php echo $r['f_id'];?>" class="fa fa-2x fa-trash"style="font-size:1.5em;"></a></td>
	</tr>
	<?php
		}
	?>

	
</table>
</div>
</center>
<br>
<?php
	include('footer.php');
?>