<!DOCTYPE html>
<html>
<head>
	<title>Arithmetic Operations</title>
</head>
<body>
	<h1>Arithmetic Operations</h1>
	<form action="calculate.php" method="post">
		<p>Enter first number: <input type="text" name="num1"></p>
		<p>Enter second number: <input type="text" name="num2"></p>
		<p>Select operation:</p>
		<p><input type="radio" name="op" value="add" checked> Add</p>
		<p><input type="radio" name="op" value="sub"> Subtract</p>
		<p><input type="radio" name="op" value="mul"> Multiply</p>
		<p><input type="radio" name="op" value="div"> Divide</p>
		<p><input type="submit" value="Calculate"></p>
	</form>
</body>
</html>
