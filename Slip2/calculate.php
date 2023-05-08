<!DOCTYPE html>
<html>
<head>
	<title>Arithmetic Result</title>
</head>
<body>
	<h1>Arithmetic Result</h1>
	<?php
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$op = $_POST["op"];

		function calculate($num1, $num2, $op = "add") {
			switch($op) {
				case "add":
					return $num1 + $num2;
				case "sub":
					return $num1 - $num2;
				case "mul":
					return $num1 * $num2;
				case "div":
					return $num1 / $num2;
				default:
					return "Invalid operation";
			}
		}

		$result = calculate($num1, $num2, $op);
		echo "<p>The result is: $result</p>";
	?>
</body>
</html>
