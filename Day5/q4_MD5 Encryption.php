 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Encrypted Password</title>
</head>

<body>

<table>
<form action="" method="post">
<tr>
<td> Enter UserName : </td><td><input type="text" name="username"></td>
</tr>
<tr>
<td> Enter Password : </td><td><input type="password" name="password"></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td></tr>

</form>
</table>

<?php
if(isset($_POST["submit"]))
{
include 'connection.php';
 
$username = $_POST["username"];
$password = $_POST["password"];

$EncryptPassword = md5($password);

$sql="INSERT INTO encrypted (UserName,Password) VALUES ('$username','$EncryptPassword')"; 
if ($conn->query($sql)){
echo "Encrypted Password Added Successfull";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
}
?>
</body>
</html>