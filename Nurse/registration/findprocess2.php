




<?php
// Establish a database connection (update with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "konsulta";
$month = 3;

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM  tsekap_tbl_enlist ";

// Execute the query and store the result
$ekonsulta_record = $conn->query($sql);

// Close the database connection (not always necessary, depends on the application)
// $conn->close();
?>













