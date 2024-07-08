<?php
// Create a database connection
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$currentMonth = date("m-Y");
// Fetch the data from the database
$sql = "SELECT stocker, SUM(cost) AS cost FROM pharmacy_sales WHERE month = '$currentMonth' GROUP BY stocker";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $databaseData = array(); // Initialize an array to store the results

    while ($row = $result->fetch_assoc()) {
        $databaseData[] = $row;
    }

    // Encode the customer data as JSON and send it to the client
    echo json_encode($databaseData);
} else {
    echo "No data found";
}

// Close the database connection
$conn->close();
?>
