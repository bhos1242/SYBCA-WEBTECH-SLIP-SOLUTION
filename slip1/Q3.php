<?php
$arr1 = array('a' => 1, 'b' => 2, 'c' => 3);
$arr2 = array('d' => 4, 'e' => 5, 'f' => 6);

while (true) {
    echo "1. Merge the given arrays\n";
    echo "2. Find the intersection of two arrays\n";
    echo "3. Find the union of two arrays\n";
    echo "4. Find set difference of two arrays\n";
    echo "5. Exit\n";
    echo "Enter your choice: ";

    $choice = intval(fgets(STDIN));

    switch ($choice) {
        case 1:
            $merged = array_merge($arr1, $arr2);
            print_r($merged);
            break;
        case 2:
            $intersection = array_intersect($arr1, $arr2);
            print_r($intersection);
            break;
        case 3:
            $union = array_merge($arr1, $arr2);
            print_r($union);
            break;
        case 4:
            $diff1 = array_diff($arr1, $arr2);
            $diff2 = array_diff($arr2, $arr1);
            $diff = array_merge($diff1, $diff2);
            print_r($diff);
            break;
        case 5:
            exit();
        default:
            echo "Invalid choice\n";
    }
}
?>
