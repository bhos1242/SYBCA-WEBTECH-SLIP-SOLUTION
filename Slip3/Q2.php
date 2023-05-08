<?php
if(isset($_POST['submit'])) {
  // Get the values from the form
  $details = $_POST['details'];

  // Split the values into an array
  $items = explode("\n", $details);

  // Display the bill in a table
  echo "<table border='1'>";
  echo "<tr><th>Item Code</th><th>Item Name</th><th>Units Sold</th><th>Rate</th><th>Total Amount</th></tr>";

  foreach ($items as $item) {
    // Split the item details into an array
    $details = explode(",", $item);

    // Calculate the total amount for the item
    $total = $details[2] * $details[3];

    // Display the item details in a table row
    echo "<tr>";
    echo "<td>" . $details[0] . "</td>";
    echo "<td>" . $details[1] . "</td>";
    echo "<td>" . $details[2] . "</td>";
    echo "<td>" . $details[3] . "</td>";
    echo "<td>" . $total . "</td>";
    echo "</tr>";
  }

  echo "</table>";
}
else {
  // Display the form
  echo "<form method='post'>";
  echo "<textarea name='details' rows='10' cols='50' placeholder='Enter details of 5 items, separated by comma'></textarea><br>";
  echo "<input type='submit' name='submit' value='Generate Bill'>";
  echo "</form>";
}
?>
