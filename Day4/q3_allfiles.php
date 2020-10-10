<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ALL FILES</title>
</head>
<div id="body">
<table> 
<tr>
<th> ALL files </th> <th> <a href="q3_file_upload.php" > UPLOAD NEW FILE </a>
</th>
</tr>
<tr>
<td>
Filename 
</td>
<td>
Filetype
</td>
<td>
Filesize 
</td>
<td>
View
</td>
</tr>
<?php
$query = "SELECT * FROM upload ORDER BY id DESC ";
$result =  mysqli_query($conn, $query) or die (mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_array($result)){ 
		$filename = $row['file'];
		$filetype = $row['type'];
		$filesize = $row['size'];
		echo "<tr>
		<td>$filename</td>
		<td>$filetype</td>
		<td>$filesize KB</td>
		<td><a href='uploads/$filename' target='_blank'> view file </td>
		</tr>";

	}
}
else {
	echo "NO FILES UPLOADED YET";
}
?>

</table>
</div>
</html>