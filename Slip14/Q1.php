<!-- Q1. Write a PHP script to declare three variables and print maximum among them -->

<?php
$num1 = 25;
$num2 = 10;
$num3 = 40;

$max = $num1;

if ($num2 > $max) {
    $max = $num2;
}

if ($num3 > $max) {
    $max = $num3;
}

echo "The maximum among $num1, $num2, and $num3 is: $max";
?>
