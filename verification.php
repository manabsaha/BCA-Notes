<?php
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
		/*
		$sql="INSERT INTO bca_users(name,email,batch,password) VALUES ('akhil', 'akhil@gmail.com', '2017-20', '".password_hash('password007', PASSWORD_DEFAULT)."')";
		mysqli_query($conn, $sql);
		*/

		$sql = "SELECT * FROM bca_users WHERE user_type='user'";
		$unverified=mysqli_query($conn, $sql);
		echo mysqli_error($conn);
	}
	foreach ($unverified as $key => $record) {
		if(isset($_POST['button'.$record['user_id']])) { 
			$sql = "UPDATE bca_users SET user_type='student' WHERE user_id=".$record['user_id']."";
			$success=mysqli_query($conn, $sql);
			if ($success){
				echo "User with email ".$record['email'] ." has been verified"; 
			}
			else{
				echo mysqli_error($conn);
			}
       
        } 
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	<table width="50%">
		<tr>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>BATCH</th>
			<th>ACTION</th>
		</tr>
		
		<?php  foreach ($unverified as $key => $record) {
			# code...  
		echo "<tr>";
		echo "<td>".$record['name']."</td>";
		echo "<td>".$record['email']."</td>";
		echo "<td>".$record['batch']."</td>";
		echo "<td><input type='submit' name='button". $record['user_id'] ."' value='verify'></td>";
		echo "</tr>";
	}
		?>
	</table>
</form>
</body>
</html>