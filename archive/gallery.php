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
			<li onclick="window.location.href='../logout.php'">LOGOUT</li>
		</ul>
	</nav>
	<!-- Background Div -->
	<div id="background-div">
		<div id="explorer">
				<div id="explorer-head">
					<img id="up" src="../static/img/dir_up.png" alt="up" onclick="loadUp()">
					<h3 id="path">GALLERY</h3>
					<h3 id="back" onclick="window.location.href='/bca/'">BACK</h3>
					<img src="../static/img/back.png" alt="back" onclick="window.location.href='/bca/'">
				</div>
				<!-- LOADING DIV -->
				<div id="explorer-body">
					<!-- Export contents here. -->
					<h3 id="path">FOLDER</h3>
						<div class="item">
							<img src="../static/img/thumb.jpg" alt="dir">
						</div>
						<div class="item">
							<img src="../static/img/thumb.jpg" alt="dir">
						</div>
						<div class="item">
							<img src="../static/img/thumb.jpg" alt="dir">
						</div>
						<div class="item">
							<img src="../static/img/thumb.jpg" alt="dir">
						</div>
					<!-- End content -->
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
</html>