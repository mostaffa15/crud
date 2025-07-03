<?php
include 'index.php';
echo"<br>";
$result = $conn->query("SELECT * FROM users");

while($row = $result->fetch_assoc())// row dicleared as array
{
echo $row['id'] . "  " . $row["fname"].'<br>';
}
?>