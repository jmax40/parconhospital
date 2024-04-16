<?php
// Connect to your database (replace these details with your database connection)
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the Ajax request
$id = $_POST['id'];
$quantity = $_POST['quantity'];
$article = $_POST['article'];
$info = $_POST['info'];
$price = $_POST['price'];

// Check if the quantity in the database is greater than zero
$checkQuantitySql = "SELECT quantity FROM productpharmacy WHERE id = $id";
$result = $conn->query($checkQuantitySql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $currentQuantity = $row['quantity'];

    // Only proceed with the update if the current quantity is greater than or equal to the requested quantity
    if ($currentQuantity >= $quantity) {
        // Perform the update query
        $updateSql = "UPDATE productpharmacy SET quantity = quantity - $quantity WHERE id = $id";

        if ($conn->query($updateSql) === TRUE) {
            // Insert a new record with the current timestamp and other details
            $timestamp = date('Y-m-d H:i:s'); // Current timestamp
            $cost = $quantity * $price;
            $stocker = "JEFF";
            $status = "UNPAID";
            $type = "OUT";
            $day = date('m-d-Y');
            $month = date('m-Y');
            $year = date('Y');

            $insertSql = "INSERT INTO pharmacy_sales (article, info, quantity, price, cost, dateandtime, stocker, status,type, day, month, year)
                          VALUES ('$article', '$info', '$quantity', '$price', '$cost', '$timestamp', '$stocker', '$status','$type', '$day', '$month', '$year')";

            if ($conn->query($insertSql) === TRUE) {
                echo "Update and insert successful";
            } else {
                echo "Error inserting record: " . $conn->error;
            }
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Insufficient quantity in stock.";
    }
} else {
    echo "Error fetching quantity information: " . $conn->error;
}

$conn->close();
?>
