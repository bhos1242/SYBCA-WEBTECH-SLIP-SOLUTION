<!DOCTYPE html>
<html>
<head>
	<title>Arithmetic Calculator</title>
</head>
<body>
	<h1>Arithmetic Calculator</h1>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="num1">Number 1:</label>
		<input type="number" name="num1" id="num1"><br><br>

		<label for="num2">Number 2:</label>
		<input type="number" name="num2" id="num2"><br><br>

		<label>Choose an operation:</label><br>
		<input type="radio" name="operation" value="addition" checked>Addition<br>
		<input type="radio" name="operation" value="subtraction">Subtraction<br>
		<input type="radio" name="operation" value="multiplication">Multiplication<br>
		<input type="radio" name="operation" value="division">Division<br><br>

		<input type="submit" name="submit" value="Calculate">
	</form>

	<?php
		// Function to perform arithmetic operation on two numbers
		function performOperation($num1, $num2, $operation = "addition") {
			switch ($operation) {
				case 'addition':
					return $num1 + $num2;
					break;

				case 'subtraction':
					return $num1 - $num2;
					break;

				case 'multiplication':
					return $num1 * $num2;
					break;

				case 'division':
					if ($num2 != 0) {
						return $num1 / $num2;
					} else {
						return "Undefined";
					}
					break;

				default:
					return "Invalid operation";
					break;
			}
		}

		// Check if form is submitted
		if (isset($_POST['submit'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operation = $_POST['operation'];

			// Call the function to perform the selected arithmetic operation
			$result = performOperation($num1, $num2, $operation);

			// Display the result
			echo "<h2>Result:</h2>";
			echo "<p>" . $num1 . " " . ucfirst($operation) . " " . $num2 . " = " . $result . "</p>";
		}
	?>
</body>
</html>
