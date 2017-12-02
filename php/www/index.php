<?php
$servername = "db";
$username = "root";
$password = "root";
$dbname = "shipping_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


$sql = "SELECT * FROM bier_soort";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Soortnaam: " . $row["naam"]."<br>";
    }
}
$conn->close();
?>
