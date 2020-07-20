<?php
	session_start();
	$user_email = $_POST['email'];
	$user_password = $_POST['password'];

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
		//Fetch user
		$sql = "SELECT * FROM bca_users WHERE email = '".$user_email."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		  while($user = mysqli_fetch_assoc($result)) {
		  	if($user_password == $user['password']){
		  		$_SESSION['userid'] = $user['user_id'];
				header("Location: index.php");
		  	}
		  	else{
		  		echo "Incorrect password";
		  	}
		  }
		} 
		else {
		  echo "Email not found";
		}
		mysqli_close($conn);
	}
?>

<!-- create table bca_users(user_id int auto_increment,name varchar(255) not null,email varchar(255) not null unique,batch varchar(31),user_level varchar(15) default 'user',password varchar(255) not null,reset_pass varchar(255) default '', primary key(user_id))auto_increment=1001; -->

<!-- insert into bca_users(name,email,batch,user_level,password)  values("loremipsum","li@gmail.com","2017-20","student","password"); -->