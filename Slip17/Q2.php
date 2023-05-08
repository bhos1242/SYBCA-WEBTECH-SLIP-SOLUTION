<!-- Q2. Declare array. Reverse the order of elements, making the first element last and last
element first and similarly rearranging other array elements.[Hint : array_reverse()] -->

<?php
// Declare an array
$my_array = array('apple', 'banana', 'cherry', 'date', 'elderberry');

// Reverse the order of elements
$reversed_array = array_reverse($my_array);

// Rearrange the other array elements
foreach ($reversed_array as $value) {
    echo $value . "<br>";
}


?>
