+<!DOCTYPE html>
<html>
<head>
   <title>Marksheet</title>
</head>
<body>
   <form action="q1_1_mysql_html.php" method="POST">
      <p style="font-variant: small-caps;font-size: 40px; font-variant-position: center" ><caption>Student Marksheet </caption></p>
      <table style="width:60%;border-radius: 20px;padding: 20px;font-size:20px;border:5px solid black;">
         
         <tr style="font-variant: small-caps;">
            <td>Name Of Student<span style="color: red">*</span></td>
            <td><input type="text" name="S" placeholder="Enter name as per registered" style="width:300%;margin-left: -150%;" required=""></td>
         </tr>
         <tr style="font-variant: small-caps;">
            <td><b><br><h1>Marks in Each Subject:</h1></b></td>
         </tr>
         <tr style="font-variant: small-caps;">
            <td>Subject 1<span style="color: red">*</span></td>
            <td><td><input type="text" name="S1" placeholder="Enter Subject 1 marks" style="width: 300%;margin-left: -200%;" required=""></td></td>
         </tr>
         <tr style="font-variant: small-caps;">
            <td>Subject 2<span style="color: red">*</span></td>
            <td><td><input type="text" name="S2" placeholder="Enter Subject 2 marks" style="width: 300%;margin-left: -200%;" required=""></td></td>
         </tr>
         <tr style="font-variant: small-caps;">
            <td>Subject 3<span style="color: red">*</span></td>
            <td><td><input type="text" name="S3" placeholder="Enter Subject 3 marks" style="width: 300%;margin-left: -200%;" required=""></td></td>
         </tr>
         <tr style="font-variant: small-caps;">
            <td>Subject 4<span style="color: red">*</span></td>
            <td><td><input type="text" name="S4" placeholder="Enter Subject 4 marks" style="width: 300%;margin-left: -200%;" required=""></td></td>
         </tr>
         <tr style="font-variant: small-caps;">
            <td>Subject 5<span style="color: red">*</span></td>
            <td><td><input type="text" name="S5" placeholder="Enter Subject 5 marks" style="width: 300%;margin-left: -200%;" required=""></td></td>
         </tr>
         <tr>
            <td><input type="Submit" style="border-radius: 20px;width:80%;height:30px;font-size:20px;"></td>
         </tr>
         <tr>
            <td>
               <?php
         
                  $name1=$_POST["S"];
                  $marks1=$_POST["S1"];
                  $marks2=$_POST["S2"];
                  $marks3=$_POST["S3"];
                  $marks4=$_POST["S4"];
                  $marks5=$_POST["S5"];
                  $total = $marks1 + $marks2 + $marks3 + $marks4 +$marks5;
                  $total_mark =500;
                  echo "<br>Name Of Student : $name1";
                  echo "<br>Marks in Each Subject:";
                  echo "<br>Subject 1:$marks1";
                  echo "<br>Subject 2:$marks2";
                  echo "<br>Subject 3:$marks3";
                  echo "<br>Subject 4:$marks4";
                  echo "<br>Subject 5:$marks5";
                  echo "<br>Total Marks obtained : $total<br>";
                  echo "Total Marks : $total_mark<br>";
                  $percentage = ($total/500)*100;
                  echo "Percentage : $percentage <br>";
               
                  $host = "localhost";
                  $dbusername = "root";
                  $dbpassword = "";
                  $dbname = "student_result";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO result (name,sub1,sub2,sub3,sub4,sub5,total_obtained,total_mark,percent) values ('$name1','$marks1','$marks2','$marks3','$marks4','$marks5','$total','$total_mark','$percentage')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
}

               ?>

            </td>
         </tr>
      </table>
   </form>


</body>
</html>
