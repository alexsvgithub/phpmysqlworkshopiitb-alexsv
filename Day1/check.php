<!-- Write a PHP Script to declare 2 variables with specific numeric value of your choice and find out
the greater number between the two. If the numbers are equal, the respective message must
appear on the screen. -->
<?php
  $a=30;
  $b=30;
  if ($a>$b) {
    echo $a. "is greater than ".$b;
  }
  else if($b>$a){
    echo $b." is greater than ".$a;
  }
  else{
    echo "Both are equal";
  }
 ?>
