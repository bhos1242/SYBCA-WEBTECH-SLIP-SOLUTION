<!-- Q1. Write a PHP script to print following floyd’s triangle.
A
B C
D E F
G H I J  -->
<?php

$n = 4;
$char = 65;

for($i=1;$i<=$n;$i++){
      for($j=1;$j<=$i;$j++){
            echo chr($char)." ";
            $char++;
      }
      echo "<br>";
}

?>