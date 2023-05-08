<!DOCTYPE html>
<html>
<head>
	<title>Bill</title>
</head>
<body>
	<h1>Bill</h1>
	<form method="post">
		<table border="1">
			<tr>
				<th>Item Code</th>
				<th>Item Name</th>
				<th>Units Sold</th>
				<th>Rate</th>
			</tr>
			<?php
				// Initialize an empty array to store the items
				$items = array();

				// Display 5 rows for entering item details
				for ($i = 1; $i <= 5; $i++) {
					echo "<tr>";
					echo "<td><input type='text' name='item[]'></td>";
					echo "<td><input type='text' name='item[]'></td>";
					echo "<td><input type='text' name='item[]'></td>";
					echo "<td><input type='text' name='item[]'></td>";
					echo "</tr>";
				}

				// If form is submitted, calculate the bill
				if (isset($_POST['submit'])) {
					// Get the item details from the form and store them in the $items array
					$items = array_chunk($_POST['item'], 4);

					// Display the bill in a table
					echo "<table>";
					echo "<tr>";
					echo "<th>Item Code</th>";
					echo "<th>Item Name</th>";
					echo "<th>Units Sold</th>";
					echo "<th>Rate</th>";
					echo "<th>Total</th>";
					echo "</tr>";
					foreach ($items as $item) {
						echo "<tr>";
						echo "<td>" . $item[0] . "</td>";
						echo "<td>" . $item[1] . "</td>";
						echo "<td>" . $item[2] . "</td>";
						echo "<td>" . $item[3] . "</td>";
						echo "<td>" . $item[2] * $item[3] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
			?>
		</table>
		<input type="submit" name="submit" value="Calculate Bill">
	</form>
</body>
</html>
