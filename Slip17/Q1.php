<!-- // Q1. Design a HTML form to accept a string. Write a php function to reverse a string. -->
<!DOCTYPE html>

<html>

<head>
      <title>Reverse String </title>
</head>

<body>
      <h1>Reverse String</h1>
      <form method="post">
            <label for="string">Enter a string:</label>
            <input type="text" id="string" name="string">
            <br><br>
            <input type="submit">
            <br><br>
            <input type="submit" value="Reverse">
            
      </form>
<?php
      function reverse_string($str){
            return strrev($str);
      }

      if($_SERVER['REQUEST_METHOD']=='POST'){
            $string = $_POST['string'];
           
            $reversed_string = reverse_string($string);
            echo "Original string: " . $string;
            echo "Reversed string: " . $reversed_string;
      }
?>
</body>
</html>