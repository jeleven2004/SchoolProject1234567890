<?php
// Connect to MySQL database
$db = new PDO("mysql:host=localhost;dbname=SchoolProject1234567890", "username", "password");

// Retrieve data from database
$query = "SELECT * FROM students";
$result = $db->query($query);

// Display data in HTML table
echo "<table border='1' cellpadding='10'>";
echo "<tr> <th>ID</th> <th>Name</th> <th>Grade</th> </tr>";
while ($row = $result->fetch()) {
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['grade'] . "</td></tr>";
}
echo "</table>";
?>