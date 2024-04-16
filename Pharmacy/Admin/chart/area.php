<?php
// Your database connection settings
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data and calculate the total cost for the most recent 12 months
$sql = "SELECT month, SUM(cost) AS cost FROM pharmacy_sales GROUP BY month ORDER BY month DESC LIMIT 12";

$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the database connection
$conn->close();

// Output the data as JSON
echo json_encode($data);
?>