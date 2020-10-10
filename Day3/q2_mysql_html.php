<?php 

                  $host = "localhost";
                  $dbusername = "root";
                  $dbpassword = "";
                  $dbname = "student_result";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

   $update = "SELECT * FROM result where name = 'Rohan'";

   $execute_query = mysqli_query($conn,$update);

   $upadted_dtails = $execute_query-> fetch_array(MYSQLI_ASSOC);




   $total   =  $upadted_dtails['sub1'] + $upadted_dtails['sub2'] + $upadted_dtails['sub3'] + $upadted_dtails['sub4'] + 99;
   $percentage = ($total/500)*100;
   
   $update_query = "UPDATE result SET sub5='99',total_obtained=$total,percent=$percentage WHERE name='ROHAN'";

   mysqli_query($conn,$update_query);







   if (mysqli_num_rows($execute_query)>0){
   echo "Updated upadted_dtailss <br>";
   echo "Name of student : ".$upadted_dtails['name']." <br>";
   echo "Subject 1 ".$upadted_dtails['sub1']." <br>";
   echo "Subject 2 ".$upadted_dtails['sub2']." <br>";
   echo "Subject 3 ".$upadted_dtails['sub3']." <br>";
   echo "Subject 4 ".$upadted_dtails['sub4']." <br>";
   echo "Subject 5 ".$upadted_dtails['sub5']." <br>";
   echo "Total Marks Obtained ".$upadted_dtails['total_obtained']." <br>";
   echo "Total Marks ".$upadted_dtails['total_mark']." <br>";
   echo "Percentage ".$upadted_dtails['percent']." <br>";
   }
   else{
      echo "No such content in database";
   }




   ?>