<?php
// Establish a database connection (Replace with your credentials)
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "pos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products based on search input
if (isset($_GET['searchText'])) {
    $searchText = $_GET['searchText'];
    $sql = "SELECT * FROM products WHERE info LIKE '%$searchText%'";
    $result = $conn->query($sql);

    $products = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }

    echo json_encode($products); // Return products as JSON
}

$conn->close();
?>




