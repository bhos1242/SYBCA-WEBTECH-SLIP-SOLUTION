<!-- Q1. Write a PHP script to print following floyd’s triangle.
1
2 3
4 5 6
7 8 9 10 -->

<?php
$n = 1;

// loop to print each row
for ($i = 1; $i <= 4; $i++) {
  // loop to print each column in the row
  for ($j = 1; $j <= $i; $j++) {
    echo $n . " ";
    $n++;
  }
  echo "<br/>";
}
