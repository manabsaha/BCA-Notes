<?php
	$password = "root";
	$servername = "localhost";
	$username = "root";
	$dbname = "BCA";
	$conn = mysqli_connect($servername, $username, $password,$dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else{
			$exists = mysqli_query($conn, "select * from bca_users");
			if($exists===FALSE){
				$create_user="CREATE TABLE bca_users(
				user_id int auto_increment primary key,
				user_type varchar(50) default 'user',
				name varchar(100) NOT NULL,
				email varchar(255) unique,
				batch varchar(50),
				password varchar(255) NOT NULL,
				reset_pass varchar(255) default '')auto_increment=1001";
				mysqli_query($conn, $create_user);
				echo mysqli_error($conn);
			}
			$exists=FALSE;
			$exists = mysqli_query($conn, "select * from uploads");
			if($exists===FALSE){
				$create_upload= "create table uploads(
				user_id int,
				name varchar(50),
				disp_name varchar(50),
				folder varchar(50),
				semester int,
				type varchar(50),
				upload_date date,
				FOREIGN KEY(user_id) REFERENCES bca_users(user_id))";
				mysqli_query($conn, $create_upload);
				echo mysqli_error($conn);
			}
			$exists=FALSE;
			$exists = mysqli_query($conn, "select * from photo_gallery");
			if($exists===FALSE){
				$create_photo= "create table photo_gallery(
				user_id int,
				name varchar(50),
				disp_name varchar(50),
				folder varchar(50),
				upload_date date,
				FOREIGN KEY(user_id) REFERENCES bca_users(user_id))";
				mysqli_query($conn, $create_photo);
				echo mysqli_error($conn);
			}
			$exists=FALSE;
			$exists = mysqli_query($conn, "select * from feedback");
			if($exists===FALSE){
				$create_feedback= "create table feedback(
				name varchar(50) default 'anonymous',
				description varchar(255),
				feedback_date date)";
				mysqli_query($conn, $create_feedback);
				echo mysqli_error($conn);
			}
	}
	echo "DONE";

?>