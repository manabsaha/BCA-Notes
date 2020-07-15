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
					<img src="../static/img/dir_up.png" alt="up">
					<h3 id="path">>> HOME / 1ST SEMESTER / NOTES</h3>
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
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(1);">
										<p onclick="loadSubs(1);">SEMESTER 1</p>
									</div>
								<?php
								break;

							case 2:
								?> 
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(2);">
										<p onclick="loadSubs(2);">SEMESTER 2</p>
									</div>
								<?php
								break;

							case 3:
								?> 
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(1);">
										<p onclick="loadSubs(1);">SEMESTER 1</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(3);">
										<p onclick="loadSubs(3);">SEMESTER 3</p>
									</div>
								<?php
								break;

							case 4:
								?> 
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(2);">
										<p onclick="loadSubs(2);">SEMESTER 2</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(4);">
										<p onclick="loadSubs(4);">SEMESTER 4</p>
									</div>
								<?php
								break;

							case 5:
								?> 
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(1);">
										<p onclick="loadSubs(1);">SEMESTER 1</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(3);">
										<p onclick="loadSubs(3);">SEMESTER 3</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(5);">
										<p onclick="loadSubs(5);">SEMESTER 5</p>
									</div>
								<?php
								break;

							case 6:
								?> 
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(2);">
										<p onclick="loadSubs(2);">SEMESTER 2</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(4);">
										<p onclick="loadSubs(4);">SEMESTER 4</p>
									</div>
									<div class="item">
										<img src="../static/img/dir.png" alt="dir" onclick="loadSubs(6);">
										<p onclick="loadSubs(6);">SEMESTER 6</p>
									</div>
								<?php
								break;

							default:
								break;
						}
					?>
					<!-- End content -->
				</div>
				<div id="explorer-subjects">
				</div>
				<div id="explorer-materials">
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
	function loadSubs(sem){
			$.ajax({
				type: 'GET',
				url: 'subjects.php',
				data: {"sem" : sem},
				success : function(data){
					$('#explorer-body').hide();
					$('#explorer-subjects').html(data);
					$('#explorer-subjects').show();
				}
		});
	}
</script>
</html>