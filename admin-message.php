<?php
	include('admin-header.php');
?>
<div id="admin-heading-block-img">
	<div id="admin-heading-block-color">
		<center><h1 id="admin-heading">VIEW MESSAGE</h1>
		<hr class="admin-heading-hr admin-heading-hr1"> 
		<span class="fa fa-2x fa-pagelines admin-heading-faa"></span>
		<hr class="admin-heading-hr admin-heading-hr2"></center>
	</div>
</div>
<center><div class="edit-event-block">
<table class="event-edit-table" border="0">
	<tr class="event-edit-th">
		<th>NAME</th>
		<th>EMAIL</th>
		<th>SUBJECT</th>
		<th>MESSAGE</th>
		<th>DELETE</th>
	<tr>
	<?php
		$query="select * from message";
		$result=mysqli_query($db,$query);
		while($r=mysqli_fetch_array($result))
		{
	?>
	<tr class="event-edit-tr">
		<td><?php echo $r['name'];?></td>
		<td><?php echo $r['email'];?></td>
		<td><?php echo $r['sub'];?></td>
		<td style="height: 100px; width:500px;"><div style="height: 100px; width:500px;overflow: auto;padding: 5px 5px;"><?php echo $r['msg'];?></div></td>
		<td class="edit-event-fa faa-trash"><a href="delmessage.php?id=<?php echo $r['m_id'];?>" class="fa fa-2x fa-trash"style="font-size:1.5em;"></a></td>
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