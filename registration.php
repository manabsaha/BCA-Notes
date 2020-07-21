<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$batch = $_POST['batch'];
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
		$sql = "INSERT INTO bca_users('name','email','batch','password') VALUES ('".$name."', '".$email."', '".$batch."', '".$password."', )";
		mysqli_query($conn, $sql);
		echo mysqli_error($conn);

	}

?>