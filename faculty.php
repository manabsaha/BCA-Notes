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
			<li onclick="window.location.href='/bca/'">HOME</li>
			<li class="active" onclick="window.location.href='/bca/faculty.php'">FACULTY</li>
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