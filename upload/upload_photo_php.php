<?php
$target_dir = $_POST['folder'];
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . '/' . basename(round(microtime(true)) . '.' . end($temp));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//MYSQL connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "BCA";
$conn = mysqli_connect($servername, $username, $password,$dbname);


if(is_dir($target_dir)){
	echo("Directory exists\n\n");
}
else{
	echo("Directory doesn't exist. Creating new Directory\n\n");
	$tmp=explode("/", $target_dir);
	$foldername=reset($tmp);
	mkdir($foldername);
}

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
  echo "Sorry, your file is too large (max:10MB).";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

//check if filename has been altered
if ($_POST['filename'] === ''){
      $disp_name=$_FILES["fileToUpload"]["name"];
    }
    else{
      $disp_name=$_POST["filename"]. "." . $imageFileType;
    }


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    //header("Location: /bca/upload/gallery.php");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
  $tmp=explode("/", $target_dir);
  $foldername=reset($tmp);
  $upload_date=date('Y-m-d H:i:s');
  $user_id=1001;
  $sql="INSERT INTO photo_gallery VALUES ('" .$user_id."','" .$target_file."','" .$disp_name."','" .$foldername."','".$upload_date."')";
  mysqli_query($conn, $sql);
  echo mysqli_error($conn);
  
}
?>