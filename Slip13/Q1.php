<!-- Q1. Write a PHP script to script to display time table of your class( use HTML table tags in
echo).  -->

<?php

// Define an array of days and periods
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
$periods = array("Period 1", "Period 2", "Period 3", "Period 4", "Period 5");

// Define a 2D array of class timings
$classTimings = array(
    array("Maths", "Science", "English", "Social Studies", "Physical Education"),
    array("Science", "English", "Maths", "Physical Education", "Social Studies"),
    array("English", "Maths", "Science", "Physical Education", "Social Studies"),
    array("Social Studies", "Physical Education", "English", "Maths", "Science"),
    array("Physical Education", "Social Studies", "Maths", "Science", "English")
);

// Start the HTML table
echo "<table border='1'>";

// Display the table header row with days of the week
echo "<tr><th>Day/Period</th>";
foreach ($periods as $period) {
    echo "<th>$period</th>";
}
echo "</tr>";

// Display the table rows with class timings
for ($i = 0; $i < count($days); $i++) {
    echo "<tr><td>$days[$i]</td>";
    for ($j = 0; $j < count($periods); $j++) {
        echo "<td>" . $classTimings[$i][$j] . "</td>";
    }
    echo "</tr>";
}

// End the HTML table
echo "</table>";
?>
