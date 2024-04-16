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

// Get the current month in "m-Y" format
$currentMonth = date("m-Y");

// Query to retrieve data and calculate the total cost for the current month
$sql = "SELECT article, SUM(cost) AS cost FROM pharmacy_sales WHERE month = '$currentMonth' GROUP BY article ORDER BY cost DESC LIMIT 10";

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
