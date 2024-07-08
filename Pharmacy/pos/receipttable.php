<?php
// Replace these with your actual database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'parconhospital';

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = 'SELECT article, cost, price, quantity FROM pharmacy_sales WHERE type = "OUT"';
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the database connection
$conn->close();

// Output the data in JSON format
echo json_encode($data);
?>
