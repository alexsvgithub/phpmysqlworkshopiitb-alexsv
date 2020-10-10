<?php
include("connection.php");
if (isset($_POST['upload']))
{
	$file = rand(1000,100000). "-" . $_FILES['file']['name'];
	$file_loc=  $_FILES['file']['tmp_name'];
	$file_size  = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder = "uploads/";
	$new_file_name  = strtolower($file);
	$final_file = str_replace(' ', '-', $new_file_name);
	if ($file_size > 10000000)  {
		echo "<script>alert('file size too big');
		window.location.href='index.php';</script>";
	}
	else if ($file_size == 0 ) {
	echo "<script>alert('select a file to upload');</script>";
}
	else if ($file_size <= 10000000) {
		move_uploaded_file($file_loc, $folder.$final_file);
		$new_size = $file_size / 1024;
		$query = "INSERT into upload(file,type,size) VALUES ('$final_file' , '$file_type', '$new_size') " ;
		$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
		if ($result) {
			echo "<script>alert('file uploaded successfully');
			window.location.href= 'allfiles.php';</script>";
		}
	}
	else {
		echo "<script>alert('error');</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FILE UPLOAD</title>
</head>
<body>
<center>
<br><br><br><br><br><br><br><br>
<h2 > **********A fileuploader ********** </h2>
<form action=" " method="POST" enctype="multipart/form-data">
<input type = "file" name="file" >
<input type="submit" name="upload" value="UPLOAD">
</form>
<br><br>
All types of files (PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...) are supported !
<br>
<font color= "red" >MAX. UPLOAD LIMIT : 10000 kb </font>
<br>
<br>
<a href="q3_allfiles.php"> VIEW ALL FILES </a>
</center>
</body>
</html>