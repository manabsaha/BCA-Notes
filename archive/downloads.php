<!DOCTYPE html>
<html>
<head>
	<title>BCA</title>
	<link rel="stylesheet" href="../static/style.css">
</head>
<body>
	<!-- Navbar -->
	<nav>
		<img src="../static/img/jblogo.png" alt="JBC">
		<label for="college_department">
			<span id="college">JAGANNATH BAROOAH COLLEGE</span><br>
			<span id="department">DEPARTMENT OF COMPUTER SCIENCE</span>
		</label>
		<ul>
			<li class="active" onclick="window.location.href='/bca/'">HOME</li>
			<li>FACULTY</li>
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
						for ($i=0; $i <6 ; $i++) {
						?> 
							<div class="item">
								<img src="../static/img/dir.png" alt="dir">
								<p>SUBJECT NAME</p>
							</div>
						<?php
						}
					?>
					<!-- End content -->
				</div>
		</div>
	</div>
	<!-- About Div -->
	<div id="about-div">
		<div id="image">
			<img src="../static/img/about.png" alt="About">
		</div>
		<div id="about">
			<div>
				<p id="p1">ABOUT THE DEPARTMENT</p>
				<p id="p2">The Department of Computer Science of J.B. College was formally inaugurated by the Hon'ble Director of Higher Education, Dr H.K. Sahoo, on 19th January 2004.</p>
				<p id="p3">The department consists of the following courses:</p>
				<ul id="courses">
					<li id="p4">Three year (six semesters) Bachelors in Computer Applications (BCA).</li>
					<li id="p5">One year (two semesters) Post Graduate Diploma in Computer Application (PGDCA).</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer>
		<span>&copy All Rights Reserved 2020</span>
	</footer>
</body>
</html>