<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        /* Basic table styling */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #ff8c00;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ffcc80;
        }

        tr:nth-child(even) {
            background-color: #ffe0b2;
        }
    </style>
</head>
<body>

<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    // Perform a database query based on the search term
    $sql = "SELECT * FROM nurse_medical_record WHERE name LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data in a table
        echo "<table>";
        echo "<tr><th>Name</th><th>Record No</th></tr>"; // Table header
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["record_no"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

$conn->close();
?>

</body>
</html>
