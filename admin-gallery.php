<?php
	include('admin-header.php');
?>
<div id="admin-heading-block-img">
	<div id="admin-heading-block-color">
		<center>
		<h1 id="admin-heading">GALLARY</h1>
		<hr class="admin-heading-hr admin-heading-hr1"> 
		<span class="fa fa-2x fa-pagelines admin-heading-faa"></span>
		<hr class="admin-heading-hr admin-heading-hr2">
		</center>
	</div>
</div>
<?php
if(isset($_POST['sub']))		
{
	$file=$_FILES["h"];
	if($file['type']=="image/jpg" || $file['type']=="image/jpeg" || $file['type']=="image/png")
	{
		$h=$_FILES["h"]["name"];
		$newname=time().rand().$h;
		$result=mysqli_query($db,"insert into gallery(img) values('$newname')") or die("insert Invalid: ");
		move_uploaded_file($_FILES["h"]["tmp_name"],"image/gallery/".$newname);
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
?>
<br>
<center>
	<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="h" class="admin-gallery-input" placeholder="Image" required>
		<input type="submit" name="sub" class="admin-gallery-submit" value="ADD TO GALLARY">		
	</form>
</center>
<?php
	$res1=mysqli_query($db,"select * from gallery;");
	while($row=mysqli_fetch_array($res1))
	{
?>
<div class="admin-gallery-img">
	<img src="image/gallery/<?php echo $row['img'] ?>" height="200px" width="250px"> 
	<center><a href="delgallery.php?id=<?php echo $row['g_id']; ?>"class="fa fa-trash fa-2x" style="color: red;"></a></center>
</div>

<?php
	}
?>
<br><br><br><br><br><br><br><br><br><br>
<?php
	include('footer.php');
?>