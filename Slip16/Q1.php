<?php
//get the number from the user
$num = $_POST['num'];

//function to check if a number is prime or not
function isPrime($n)
{
    if($n <= 1)
        return false;

    //check for divisibility by numbers less than or equal to square root of n
    for($i=2; $i<=sqrt($n); $i++)
        if($n % $i == 0)
            return false;

    return true;
}

//check if the entered number is prime or not
if(isPrime($num))
    echo "$num is a prime number";
else
    echo "$num is not a prime number";
?>
