<?php
	include('admin-header.php');
?>
<div id="admin-heading-block-img">
	<div id="admin-heading-block-color">
		<center><h1 id="admin-heading">EDIT EVENTS</h1>
		<hr class="admin-heading-hr admin-heading-hr1"> 
		<span class="fa fa-2x fa-pagelines admin-heading-faa"></span>
		<hr class="admin-heading-hr admin-heading-hr2"></center>
	</div>
</div>
<center><div class="edit-event-block">
<table class="event-edit-table" border="0">
	<tr class="event-edit-th">
		<th>IMAGE</th>
		<th>NAME</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>LOCATION</th>
		<th>FEE'S</th>
		<th>MEMBERS</th>
		<th>RULES</th>
		<th>EDIT</th>
		<th>DELETE</th>
	<tr>
	<?php
		$query="select * from event";
		$result=mysqli_query($db,$query);
		while($r=mysqli_fetch_array($result))
		{
	?>
	<tr class="event-edit-tr">
		<td><img src="image/event-img/<?php echo $r['img'];?>" class="event-edit-img"></td>
		<td><?php echo $r['name'];?></td>
		<td><?php echo $r['date'];?></td>
		<td><?php echo $r['time'];?></td>
		<td><?php echo $r['location'];?></td>
		<td><?php echo $r['fee'];?></td>
		<td><?php echo $r['members'];?></td>
		<td style="height: 100px; width:500px;"><div style="height: 100px; width:500px;overflow: auto;padding: 5px 5px;"><?php echo $r['rules'];?></div></td>
		<td class="edit-event-fa faa-pencil"><a href="admin-add-event.php?eid=<?php echo $r['e_id'];?>" class="fa fa-2x fa-pencil"style="font-size:1.5em;"></a></td>
		<?php
			$eid=$r['e_id'];
			$query1="select * from faculty where e_id=$eid";
			$result1=mysqli_query($db,$query1);
			$count=mysqli_num_rows($result1);
			if($count==0)
			{
		?>
			<td class="edit-event-fa faa-trash"><a href="delevent.php?id=<?php echo $r['e_id'];?>" class="fa fa-2x fa-trash"style="font-size:1.5em;"></a></td>
		<?php
			}
			else
			{
		?>
			<td class="edit-event-fa faa-trash"><a href="" class="fa fa-2x fa-close" style="font-size:1.5em;"></a></td>
		<?php
			}
		?>
	</tr>
	<?php
		}
	?>

</table>
</div></center>
<br>
<?php
	include('footer.php');
?>