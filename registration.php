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
<body>
<form action="registration.php" method="POST">
	<input type="text" placeholder="name" name="name">
	<input type="text" placeholder="email" name="email">
	<select name="batch">
		<option value="2017-20">2017-20</option>
		<option value="2018-21">2018-21</option>
		<option value="2019-22">2019-22</option>
	</select>
	<input type="password" placeholder="new password">
	<input type="password" placeholder="confirm password" name="password">
	<button>SUBMIT</button>
</form>
</body>
</html>