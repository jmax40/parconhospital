<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the 'action' parameter is set
    if (isset($_POST["action"])) {
        $action = $_POST["action"];

        // Perform the update based on the action
        if ($action === "updateCashReceived") {
            // Your database connection logic here
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

            $value = "IN";
            // Your SQL UPDATE query
            $sql = "UPDATE pharmacy_sales SET type = '$value' WHERE type = 'OUT' ";

            if ($conn->query($sql) === TRUE) {
                echo "Update successful for cash received";
            } else {
                echo "Error updating record: " . $conn->error;
            }

            $conn->close();
        } else {
            echo "Invalid action specified";
        }
    } else {
        echo "Action parameter is missing";
    }
} else {
    echo "Invalid request method";
}
?>
