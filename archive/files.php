<?php
	$x = $_GET['type'];
	$y = $_GET['subject'];
	$z = $_GET['sem'];
	// $level = "admin";
	$level = "student";
	// Check for admin login
	if ($level === "admin") {
		?>
		<div class="file-upload">
			<form action="../upload/upload_pdf_php.php" method="post" enctype="multipart/form-data">
				<input id="upload-name" input type="text" name="filename" id="filename" placeholder="Filename (*)" required="true">
				<input id="upload-file" input type="file" name="pdf_file" required="true">
				<input type="text" name="folder" value="<?php echo $y ?>" style="display: none;">
				<input type="text" name="semester" value="<?php echo $z ?>" style="display: none;">
				<input type="text" name="type" value="<?php echo $x ?>" style="display: none;">
				<input type="submit" value="Upload">
			</form>
		</div>
		<?php
	}
	//MYSQL connection
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "BCA";
	$conn = mysqli_connect($servername, $username, $password,$dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else{
		//check if table exists
		$exists = mysqli_query($conn, "select * from uploads");
		if($exists===FALSE){
			$create_upload= "create table uploads(name varchar(50),
			disp_name varchar(50),
			folder varchar(50),
			semester int,
			type varchar(50),
			upload_date date)";
			mysqli_query($conn, $create_upload);
			echo mysqli_error($conn);
		}
		//Fetch files
		$sql = "SELECT * FROM uploads WHERE semester = '".$z."' AND type = '".$x."' AND folder = '".$y."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		  while($row = mysqli_fetch_assoc($result)) {
		    ?>
		    <div class="file">
		    	<span id="filename"><?php echo $row['disp_name'] ?></span>
		    	<span id="filedate"><?php echo $row['upload_date'] ?></span>
		    	<span id="filedownload" onclick="download()">DOWNLOAD</span>
		    	<hr>
		    </div>
		    <?php
		  }
		} else {
		  echo "<br>No files";
		}
	}
?>
<script>
	function download(){
		alert("download clicked!");
	}
</script>