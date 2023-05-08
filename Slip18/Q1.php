<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <h1>Palindrome Checker</h1>
    <?php
        function isPalindrome($str) {
            $len = strlen($str);
            for ($i = 0; $i < $len/2; $i++) {
                if ($str[$i] != $str[$len-1-$i]) {
                    return false;
                }
            }
            return true;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["input"];
            if (isPalindrome($input)) {
                echo "<p>" . $input . " is a palindrome.</p>";
            } else {
                echo "<p>" . $input . " is not a palindrome.</p>";
            }
        }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="input">Enter a string:</label>
        <input type="text" id="input" name="input">
        <input type="submit" value="Check">
    </form>
</body>
</html>
