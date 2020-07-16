<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="upload_pdf_php.php" method="post" enctype="multipart/form-data">
	<input type="file" name="pdf_file">

	<br>
	Filename:
	<input type="text" name="filename" id="filename" placeholder="optional">
	Folder Name/ subject:
	<input type="text" name="folder" required>
	Semester:
	<input type="number" name="semester" required>
	<input type="submit" name="">

	
</form>
</body>
</html>