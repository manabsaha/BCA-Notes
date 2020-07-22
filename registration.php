<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$batch = $_POST['batch'];
		//MYSQL connection
		$servername = "localhost";
		$username = "root";
		$dbpassword = "root";
		$dbname = "BCA";
		$conn = mysqli_connect($servername, $username, $dbpassword,$dbname);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		else{
			$sql = "INSERT INTO bca_users(name,email,batch,password) VALUES 
			('".$name."', '".$email."', '".$batch."', '".$password."')";
			mysqli_query($conn, $sql);
			//echo mysqli_error($conn);
			mysqli_close($conn);
			header("Location: index.php");

		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>BCA</title>
</head>
<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: sans-serif;
	}
	body{
		display: flex;
		justify-content: center;
		height: 100vh;
		align-items: center;
	}
	#reg-bg{
		background-image: linear-gradient(240deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
		position: fixed;
		height: 100vh;
		width: 100%;
	}
	#reg-overlay{
		box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.3);
		height: 60%;
		width: 60%;
		position: fixed;
		top:50%;
		left:50%;
		transform: translate(-50%,-50%);
		justify-content: center;
	}
	#register-form{
		position: relative;
		display: flex;
		flex-direction: column;
		width: 30%;
		float:left;
		background-color: #fff;
	}
	#register-form form{
		width: 80%;
		margin: 10% 10%;
	}
	#register-form h3{
		text-align: center;
		font-size: 1.5em;
		margin-bottom: 2%;
	}
	#register-form input,#register-form select{
		width: 100%;
		padding: 10px;
		margin: 6px 0;
		font-size: 1em;
	}
	#register-form button{
		width: 100%;
		padding: 10px;
		margin: 6px 0;
		border: none;
		border-radius: 4px;
		background-color: #1C5E91;
		color: #fff;
		font-size: 1.4em
	}
	#reg-logo{
		position: relative;
		width: 15%;
		margin: 0 0 0 2%
	}
	#reg-logo img{
		width: 100%;
		height: 100%;
	}
	#reg-home-btn{
		position: fixed;
		bottom: 2%;
		left: 48%;
		font-size: 1.2em;
		border: none;
		border-radius: 4px;
		background-color: #EE3737;
		color: #fff;
		padding: 1%;
	}
</style>
<body>
	<div id="reg-bg"></div>
	<div id="reg-overlay"></div>
	<div id="register-form">
		<form action="registration.php" method="POST">
			<h3>REGISTER</h3>
			<input type="text" placeholder="Name" name="name" required="true">
			<input type="text" placeholder="Email" name="email" required="true">
			<select name="batch" required="true">
				<option value="" disabled="true" selected="true">BATCH</option>
				<option value="2017-20">2017-20</option>
				<option value="2018-21">2018-21</option>
				<option value="2019-22">2019-22</option>
			</select>
			<input type="password" placeholder="New password" required="true">
			<input type="password" placeholder="Confirm password" name="password" required="true">
			<button onclick="return confirm('Details can\'t be changed once submitted. Sure to submit?')">SUBMIT</button>
		</form>
	</div>
	<div id="reg-logo">
		<img src="static/img/jblogo.png" alt="">
	</div>
	<button id="reg-home-btn" onclick="window.location.href='/bca'">Back to home</button>
</body>
</html>