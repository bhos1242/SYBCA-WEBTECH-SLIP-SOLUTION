<?php
//connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//get owner name from user
$owner_name = $_POST["owner_name"];

//query to select properties owned by the given owner
$sql = "SELECT p.pno, p.description, p.area
        FROM property p
        INNER JOIN owner o ON p.owner_id = o.id
        WHERE o.oname = '$owner_name'";

$result = mysqli_query($conn, $sql);

//display results in a table
echo "<table>
        <tr>
            <th>Property Number</th>
            <th>Description</th>
            <th>Area</th>
        </tr>";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row["pno"]."</td>
                <td>".$row["description"]."</td>
                <td>".$row["area"]."</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='3'>No properties owned by ".$owner_name."</td></tr>";
}

echo "</table>";

mysqli_close($conn);
?>
