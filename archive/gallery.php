<?php
	$folder_arr=array();
	//MYSQL connection
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "BCA";
	$conn = mysqli_connect($servername, $username, $password,$dbname);
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	else{
		$sql = "SELECT DISTINCT folder from photo_gallery";
		$tmp = mysqli_query($conn, $sql);
		foreach ($tmp as $key => $value) {
			$t=explode("/", $value["folder"]);
			array_push($folder_arr,(end($t)));
		}
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>BCA</title>
	<link rel="stylesheet" href="../static/style.css">
</head>
<body>
	<div  style="background-image: url('../static/img/gallerybg.jpg');position: fixed;height: 100vh;width: 100%;background-repeat: no-repeat;background-size: cover;box-shadow:inset 0 0 0 2000px rgba(255, 255, 255, 0.6);">	
	</div>
	<!-- Navbar -->
	<nav style="position: relative;">
		<img src="../static/img/jblogo.png" alt="JBC" onclick="window.location.href='/bca/'">
		<label for="college_department" onclick="window.location.href='/bca/'">
			<span id="college">JAGANNATH BAROOAH COLLEGE</span><br>
			<span id="department">DEPARTMENT OF COMPUTER SCIENCE</span>
		</label>
		<ul>
			<li class="active" onclick="window.location.href='/bca/'">HOME</li>
			<li onclick="window.location.href='/bca/faculty.php'">FACULTY</li>
			<li>RESULTS</li>
			<li onclick="window.location.href='../logout.php'">LOGOUT</li>
		</ul>
	</nav>
	<!-- Background Div -->
	<div id="gallery-div" style="position: relative;">
		<?php foreach ($folder_arr as $key => $folder): ?> 
			<div class="folder">
				<h3 style=""><?php echo $folder;?></h3>
				<div class="thumb">
					<?php 
					$sql = "select name, disp_name from photo_gallery where folder = 'photos/".$folder."'";
					$url_arr = mysqli_query($conn, $sql);
					echo mysqli_error($conn);


					//seperates image name from URL
					$img_arr=array();
					foreach ($url_arr as $key => $url) {
						$t = explode("/", $url["name"]);
						array_push($img_arr, end($t));
					}

					//loops through the image names
					foreach ($img_arr as $key => $img): ?>
						<img src="<?php echo "../upload/thumbnails/".$img;?>">
					<?php endforeach;?>
				</div>
			</div>
		<?php endforeach;?>
	</div>
	<!--div id="gallery-div" style="position: relative;">
		<div class="folder">
			<h3 style="">Folder Name</h3>
			<div class="thumb">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
			</div>
		</div>
		<div class="folder">
			<h3>Folder Name</h3>
			<div class="thumb">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
			</div>
		</div>
		<div class="folder">
			<h3>Folder Name</h3>
			<div class="thumb">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
			</div>
		</div>
		<div class="folder">
			<h3>Folder Name</h3>
			<div class="thumb">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
			</div>
		</div>
		<div class="folder">
			<h3>Folder Name</h3>
			<div class="thumb">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
			</div>
		</div>
		<div class="folder">
			<h3>Folder Name</h3>
			<div class="thumb">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
				<img src="../static/img/thumb.jpg">
			</div>
		</div>
	</div-->
	<!-- Footer -->
	<footer>
		<span>&copy All Rights Reserved 2020</span>
	</footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
</html>