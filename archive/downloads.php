<!DOCTYPE html>
<html>
<head>
	<title>BCA</title>
	<link rel="stylesheet" href="../static/style.css">
</head>
<body>
	<!-- Navbar -->
	<nav>
		<img src="../static/img/jblogo.png" alt="JBC" onclick="window.location.href='/bca/'">
		<label for="college_department" onclick="window.location.href='/bca/'">
			<span id="college">JAGANNATH BAROOAH COLLEGE</span><br>
			<span id="department">DEPARTMENT OF COMPUTER SCIENCE</span>
		</label>
		<ul>
			<li class="active" onclick="window.location.href='/bca/'">HOME</li>
			<li onclick="window.location.href='/bca/faculty.php'">FACULTY</li>
			<li>RESULTS</li>
			<li>LOGOUT</li>
		</ul>
	</nav>
	<!-- Background Div -->
	<div id="background-div">
		<div id="explorer">
				<div id="explorer-head">
					<img id="up" src="../static/img/dir_up.png" alt="up" onclick="loadUp()">
					<h3 id="path">>> HOME</h3>
					<h3 id="back" onclick="window.location.href='/bca/'">BACK</h3>
					<img src="../static/img/back.png" alt="back" onclick="window.location.href='/bca/'">
				</div>
				<!-- LOADING DIV -->
				<div id="explorer-body">
					<!-- Export contents here. -->
					<?php
						$sem = 5;
						switch ($sem) {
							case 1:
								?> 
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(1);">
										<p onclick="loadMat(1);">SEMESTER 1</p>
									</div>
								<?php
								break;

							case 2:
								?> 
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(2);">
										<p onclick="loadMat(2);">SEMESTER 2</p>
									</div>
								<?php
								break;

							case 3:
								?> 
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(1);">
										<p onclick="loadMat(1);">SEMESTER 1</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(3);">
										<p onclick="loadMat(3);">SEMESTER 3</p>
									</div>
								<?php
								break;

							case 4:
								?> 
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(2);">
										<p onclick="loadMat(2);">SEMESTER 2</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(4);">
										<p onclick="loadMat(4);">SEMESTER 4</p>
									</div>
								<?php
								break;

							case 5:
								?> 
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(1);">
										<p onclick="loadMat(1);">SEMESTER 1</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(3);">
										<p onclick="loadMat(3);">SEMESTER 3</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(5);">
										<p onclick="loadMat(5);">SEMESTER 5</p>
									</div>
								<?php
								break;

							case 6:
								?> 
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(2);">
										<p onclick="loadMat(2);">SEMESTER 2</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(4);">
										<p onclick="loadMat(4);">SEMESTER 4</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(6);">
										<p onclick="loadMat(6);">SEMESTER 6</p>
									</div>
								<?php
								break;

							case 7:
								for ($i=0; $i < 6; $i++) { 
									?>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadMat(1);">
										<p onclick="loadMat('<?php echo $i+1 ?>');">SEMESTER <?php echo $i+1 ?></p>
									</div>
									<?php
								}
								break;

							default:
								break;
						}
					?>
					<!-- End content -->
				</div>
				<div id="explorer-materials">
				</div>
				<div id="explorer-subjects">
				</div>
				<div id="explorer-files">
				</div>
		</div>
	</div>
	<!-- Footer -->
	<footer>
		<span>&copy All Rights Reserved 2020</span>
	</footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script>
	function loadMat(sem){
			$.ajax({
				type: 'GET',
				url: 'materials.php',
				data: {"sem" : sem},
				success : function(data){
					$('#explorer-body').hide();
					$('#explorer-materials').html(data);
					$('#explorer-materials').show();
					$('#path').text(" >>HOME/ SEMESTER "+sem);
				}
		});
	}
</script>
</html>