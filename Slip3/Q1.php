<?php
echo "<table border='1'>";
echo "<tr><th>Time</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th></tr>";

for ($i=1; $i<=8; $i++) {
  echo "<tr>";
  echo "<td>Period $i</td>";
  echo "<td>Class A</td>";
  echo "<td>Class B</td>";
  echo "<td>Class C</td>";
  echo "<td>Class D</td>";
  echo "<td>Class E</td>";
  echo "</tr>";
}

echo "</table>";
?>
