<?php
  $m1 = array(
              array(1,2),
              array(4,5)

            );
  $m2 = array(
              array(9,8),
              array(6,4)


            );


 echo "Matrix Addition is <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $a[$i][$j]+$b[$i][$j]." ";
        }
        echo "<br>";
    }

 ?>
