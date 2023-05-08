<!-- Q2. Write a menu driven program the following operation on an associative array
c) Reverse the order of each element’s key-value pair. [Hint: array_flip()]
d) Traverse the element in an array in random order. [Hint: shuffle()] -->

<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Operations</title>
</head>
<body>
    <h1>Associative Array Operations</h1>
    <form method="post">
        <label for="operation">Select an Operation:</label>
        <select id="operation" name="operation">
            <option value="a">Count the number of elements in the array</option>
            <option value="b">Sort the array in ascending order by key</option>
            <option value="c">Reverse the order of each element's key-value pair</option>
            <option value="d">Traverse the elements in the array in random order</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <br>

    <?php
    //initialize the associative array
    $array = array(
        "apple" => "red",
        "banana" => "yellow",
        "orange" => "orange",
        "grape" => "purple"
    );

    //check if the form has been submitted
    if(isset($_POST['submit']))
    {
        $operation = $_POST['operation'];

        //perform the selected operation on the array
        switch($operation)
        {
            case 'a':
                $count = count($array);
                echo "The number of elements in the array is: $count";
                break;

            case 'b':
                ksort($array);
                echo "The sorted array in ascending order by key is: <br>";
                print_r($array);
                break;

            case 'c':
                $array = array_flip($array);
                echo "The reversed array is: <br>";
                print_r($array);
                break;

            case 'd':
                shuffle($array);
                echo "The elements in the array in random order are: <br>";
                foreach($array as $key => $value)
                    echo "$key - $value <br>";
                break;

            default:
                echo "Invalid operation selected.";
                break;
        }
    }
    ?>
</body>
</html>
