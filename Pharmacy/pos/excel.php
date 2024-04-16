<!DOCTYPE html>
<html>
<head>
    <title>Sales Summary</title>
    <style>
         table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        thead {
            background-color: #bbdefb;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        /* Define a custom button style */
        #exportButton {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        #exportButton i {
            margin-right: 5px;
        }

        /* Add a container to align button and table */
        .container {
            text-align: right;
            margin-bottom: 10px;
        }
        #printButton {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        #printButton i {
            margin-right: 5px;
        }
    </style>
    <!-- Include Font Awesome (adjust the path to your Font Awesome CSS file) -->
    <link rel="stylesheet" href="path-to-your-font-awesome.css">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="shortcut icon" href="../img/spa.ico" type="image/x-icon">

</head>
<body>



<center><img src="../img/header.png" alt="Header Image"></center>




<p id="currentDateTime"></p>



<script>
    // JavaScript to get and display the current date and time
    var currentDateTimeElement = document.getElementById("currentDateTime");

    // Create a new Date object
    var currentDateTime = new Date();

    // Format the date as desired
    var formattedDate = currentDateTime.toDateString();

    // Get hours and minutes in 12-hour format with AM/PM
    var hours = currentDateTime.getHours();
    var minutes = currentDateTime.getMinutes();
    var amPm = hours >= 12 ? 'PM' : 'AM';

    // Convert hours to 12-hour format
    hours = hours % 12 || 12;

    // Format the time as desired
    var formattedTime = hours + ':' + (minutes < 10 ? '0' : '') + minutes + ' ' + amPm;

    // Update the HTML element with the current date and time
    currentDateTimeElement.innerHTML = "Issued: " + formattedDate + " " + formattedTime;
</script>


<?php
// Check if the 'Getdate' parameter is set in the URL
if (isset($_GET['outduty'])) {
    // Retrieve the date value from the URL and sanitize it
    $stocker = htmlspecialchars($_GET['outduty']);

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $database = "parconhospital";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the database connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare a SQL query with a parameter placeholder
    $sql = "SELECT * FROM pharmacy_sales WHERE outduty = ?";

    // Prepare and execute the query
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $stocker);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<table id='excel' border='1'>";
        echo "<thead style='background-color: #bbdefb;'>";
        echo "<tr>";
        echo "<th>Date and Time </th>";
        echo "<th>Article</th>";
        echo "<th>Unit</th>";
        echo "<th>Quantity</th>";
        echo "<th>Price</th>";
        echo "<th>Total Cost</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
    
        $totalCost = 0; // Initialize total cost
    
        while ($row = $result->fetch_assoc()) {
            // Calculate the total cost for each row
            $rowTotalCost = $row['quantity'] * $row['price'];
    
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['dateandtime']) . "</td>";
            echo "<td>" . htmlspecialchars($row['article']) . "</td>";
            echo "<td>" . htmlspecialchars($row['info']) . "</td>";
            echo "<td>" . htmlspecialchars($row['quantity']) . "</td>";
            echo "<td>" . htmlspecialchars($row['price']) . "</td>";
            echo "<td>" . $rowTotalCost . "</td>";
            echo "</tr>";
    
            // Add the row's total cost to the overall total
            $totalCost += $rowTotalCost;
        }
    
        echo "</tbody>";
    
        // Display the total cost row here
        echo "<tfoot>";
        echo "<tr>";
        echo "<td colspan='5'><strong>Total</strong></td>";
        echo "<td>" . $totalCost . "</td>";
        echo "</tr>";
        echo "</tfoot>";
    
        echo "</table>";
    } else {
        echo "No data found for the specified date.";
    }
    
    // Close the database connection
    $stmt->close();
    $conn->close();
} else {
    // Handle the case when the 'Getdate' parameter is not set
    echo "No date parameter provided.";
}
?>

<script src="table2excel.js"></script>


</body>
</html>
