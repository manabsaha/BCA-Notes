<!DOCTYPE html>
<html>
<head>
	<title>BCA</title>
	<link rel="stylesheet" href="static/style.css">
</head>
<body>
	<!-- Navbar -->
	<nav>
		<img src="static/img/jb.jpg" alt="JBC">
		<label for="college_department">
			<span id="college">JAGANNATH BAROOAH COLLEGE</span><br>
			<span id="department">DEPARTMENT OF COMPUTER SCIENCE</span>
		</label>
		<ul>
			<li class="active" onclick="window.location.href='/bca/'">HOME</li>
			<li>FACULTY</li>
			<li>RESULTS</li>
			<li onclick="login_modal();">LOGIN</li>
		</ul>
	</nav>
	<!-- Login Div -->
		<!-- The Modal -->
		<div id="myModal" class="modal">
		  <!-- Modal content -->
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    <form action="" method="post">
		    	<div class="form-group">
		    		<p id="login_header">STUDENT LOGIN</p>
		    		<input type="text" name="email" id="email" placeholder="Email">
		    		<input type="password" name="password" id="password" placeholder="Password">
		    		<p id="reset_pass">Forgot Password? <span>RESET</span></p>
		    		<button>LOGIN</button>
		    	</div>
		    </form>
		  </div>
		</div>
	<!-- Background Div -->
	<div id="background-div">
		<div id="downloads">
			<div>
				<p>Looking for&nbsp&nbsp<span>NOTES</span>&nbsp&nbspor<br>
				<span>QUESTION PAPERS?</span></p><br>
				<button onclick="window.location.href='archive/downloads.php'">OPEN DOWNLOADS</button>
			</div>
		</div>
		<div id="bottom-nav">
			<ul>
				<li>PHOTO GALLERY</li>
				<li>FEEDBACK</li>
				<li>ADMISSIONS</li>
				<li>FACILITIES</li>
				<li>CONTACT US</li>
			</ul>
		</div>
	</div>
	<!-- About Div -->
	<div id="about-div">
		<div id="image">
			<img src="static/img/about.png" alt="About">
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
<script>
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];
function login_modal(){
	modal.style.display = "flex";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>