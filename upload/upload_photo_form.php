<?php
	$folder="uploads/";
	$dir='/';
	$dir_list=scandir($dir);

?>


<!DOCTYPE html>
<html>
<body>

<form action="upload_photo_php.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
<br>
  Choose Directory:
  <select type="text" name="folder" value="<?php echo $folder; ?>" required>
  	<option style="display: none" disabled selected value>---</option>
  	<?php
  		foreach ($dir_list as $key ) {
  			if(is_dir($key))
  			{
  				?>
  				echo "<option value="<?php echo $key ?>"><?php echo $key ?></option>";
  			
  				<?php
  			}
  		}
  	?>
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>