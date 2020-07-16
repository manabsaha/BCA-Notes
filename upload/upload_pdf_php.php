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
	//check if table exists
	$exists = mysqli_query($conn, "select * from uploads");
	if($exists==FALSE){
		$create_upload= "create table uploads(name varchar(50),
		disp_name varchar(50),
		folder varchar(50),
		semester int)";
		mysqli_query($conn, $create_upload);
	}
}



$target_dir='uploads/';
$temp=explode(".", $_FILES["pdf_file"]["name"]);
$target_file=$target_dir . basename(round(microtime(true)) . "." . end($temp));
$upload_ok=1;
$file_type=strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if(is_dir($target_dir)){
	echo("Directory exists\n\n");
}
else{
	echo("Directory doesn't exist. Creating new Directory\n\n");
	mkdir($target_dir);
}

if($file_type != "pdf" && $file_type != "jpg" && $file_type != "jpeg"){
	echo "invalid document type!";
	$upload_ok=0;
}


if($upload_ok == 0){
	echo "File upload failed.";
}
else{
	if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["pdf_file"]["name"]). " has been uploaded.";
		if ($_POST['filename'] === ''){
			$disp_name=$_FILES["pdf_file"]["name"];
		}
		else{
			$disp_name=$_POST['filename'] . "." . $file_type;
		}
		$folder=$_POST['folder'];
		$semester=intval($_POST['semester']);
		$sql="INSERT INTO uploads VALUES ('" .$target_file."','" .$disp_name."','" .$folder."','" .$semester."')";

		if(mysqli_query($conn, $sql)){
			echo "table updated OK";
		}
		else{
			echo "table update error " . mysqli_error($conn);
		}

	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}
?>