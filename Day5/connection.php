<?php

 //This script is designed by Android-Examples.com
//Define your host here.
$hostname = "localhost";

//Define your database username here.
$username = "root";

//Define your database password here.
$password = "";

//Define your database name here.
$dbname = "Data1";

 $conn = mysqli_connect($hostname, $username, $password,$dbname);
 
 if (!$conn)
 
 {
 
 die('Could not connect: ' . mysql_error());
 
 }
 

 //This script is designed by Android-Examples.com

?>