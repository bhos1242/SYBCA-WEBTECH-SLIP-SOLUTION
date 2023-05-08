<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <h2>String Comparison and Manipulation</h2>
    <form method="post">
        <label for="string1">Enter first string:</label>
        <input type="text" name="string1" id="string1" required><br><br>
        <label for="string2">Enter second string:</label>
        <input type="text" name="string2" id="string2" required><br><br>
        <label>Comparison Method:</label>
        <input type="radio" name="compare" value="equals" checked> Using == operator
        <input type="radio" name="compare" value="strcmp"> Using strcmp() function
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <hr>
    <?php
    if(isset($_POST['submit'])) {
        $string1 = $_POST['string1'];
        $string2 = $_POST['string2'];
        $compare_method = $_POST['compare'];
        
        // Compare the two strings using selected method
        if($compare_method == 'equals') {
            if($string1 == $string2) {
                echo "<p>The two strings are equal.</p>";
            } else {
                echo "<p>The two strings are not equal.</p>";
            }
        } else {
            $cmp_result = strcmp($string1, $string2);
            if($cmp_result == 0) {
                echo "<p>The two strings are equal.</p>";
            } else if($cmp_result < 0) {
                echo "<p>The first string is less than the second string.</p>";
            } else {
                echo "<p>The first string is greater than the second string.</p>";
            }
        }
        
        // Append second string to first string
        $concatenated_string = $string1 . $string2;
        echo "<p>Concatenated string: $concatenated_string</p>";
        
        // Reverse characters in first string from selected position
        if(isset($_POST['position'])) {
            $position = $_POST['position'];
            $string1_length = strlen($string1);
            if($position >= 0 && $position < $string1_length) {
                $reversed_substring = strrev(substr($string1, $position));
                $new_string1 = substr_replace($string1, $reversed_substring, $position);
                echo "<p>New first string with reversed characters from position $position: $new_string1</p>";
            } else {
                echo "<p>Invalid position.</p>";
            }
        }
    }
    ?>
    <form method="post">
        <p>Reverse characters in first string from position:</p>
        <label for="position">Position:</label>
        <input type="number" name="position" id="position" required><br><br>
        <input type="submit" name="reverse" value="Reverse">
    </form>
</body>
</html>
