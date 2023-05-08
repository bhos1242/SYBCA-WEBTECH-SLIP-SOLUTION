<!-- Q2. Write a menu driven program to perform the following stack related operations.
a) Insert an element in stack.
b) Delete an element from stack.[Hint: array_push(), array_pop()] -->

<!DOCTYPE html>
<html>
<head>
	<title>Stack Operations</title>
</head>
<body>
	<h2>Stack Operations</h2>
	<form method="post">
		<label for="item">Enter an item:</label>
		<input type="text" id="item" name="item" required><br><br>
		<input type="submit" name="push" value="Push">
		<input type="submit" name="pop" value="Pop">
	</form>
	<?php
		// initialize an empty stack
		$stack = array();

		// function to insert an element in the stack
		function push(&$stack, $item) {
		    array_push($stack, $item);
		    echo "$item has been pushed to the stack.<br>";
		}

		// function to delete an element from the stack
		function pop(&$stack) {
		    if (empty($stack)) {
		        echo "Stack is empty.<br>";
		    } else {
		        $item = array_pop($stack);
		        echo "$item has been popped from the stack.<br>";
		    }
		}

		// perform stack operation based on user input
		if (isset($_POST['push'])) {
			$item = $_POST['item'];
			push($stack, $item);
		} elseif (isset($_POST['pop'])) {
			pop($stack);
		}
	?>
</body>
</html>
