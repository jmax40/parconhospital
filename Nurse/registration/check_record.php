<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parconhospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$record_no = $_POST['record_no'];

// Check if the record number exists in the database
$sql = "SELECT * FROM nurse_medical_record WHERE record_no = '$record_no'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // If record exists, return 'exists' as a response
    echo 'exists';
} else {
    // If record doesn't exist, return another response (e.g., 'not_exists')
    echo 'not_exists';
}

$conn->close();
?>
