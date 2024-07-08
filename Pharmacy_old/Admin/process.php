<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch the data from the database
$currentMonth = date('m-y');
$query = "SELECT cost FROM pharmacy_sales WHERE status = 'PAID'";
$query2 = "SELECT COUNT(*) AS quantity FROM productpharmacy";
$query3 = "SELECT COUNT(*) AS quantity FROM productpharmacy WHERE quantity < rop";
$query4 = "SELECT COUNT(*) AS quantity FROM productpharmacy WHERE MONTH = '$currentMonth'";

$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);
$result3 = mysqli_query($conn, $query3);
$result4 = mysqli_query($conn, $query4);

if (!$result || !$result2 || !$result3 ) {
    die("Query execution failed: " . mysqli_error($conn));
}

// Convert the data into arrays
$value = array();
while ($row = mysqli_fetch_assoc($result)) {
    $value[] = $row;
}

$totalstock = array();
while ($row2 = mysqli_fetch_assoc($result2)) {
    $totalstock[] = $row2;
}

$reorder = array();
while ($row3 = mysqli_fetch_assoc($result3)) {
    $reorder[] = $row3;
}


$stockofthemonth = array();
while ($row4 = mysqli_fetch_assoc($result4)) {
    $stockofthemonth[] = $row4;
}




// Close the database connection
mysqli_close($conn);
?>






<?php
// Establish a database connection (update with your database credentials)
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

$conn = new mysqli($servername, $username, $password, $dbname);

$paid = "PAID";

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM pharmacy_sales where status = '$paid' ORDER BY outduty DESC"; // Replace with your actual table name
$Sales_report = $conn->query($sql); // Corrected variable name

?>





<?php
// Establish a database connection (update with your database credentials)
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM productpharmacy"; // Replace with your actual table name
$pharmacy_product = $conn->query($sql);

?>




<?php
// Establish a database connection (update with your database credentials)
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM user_account where position = 'pos' ";
$sql2 = "SELECT * FROM user_account where position = 'stocker' ";
$sql3 = "SELECT * FROM user_account where position = 'admin' "; // Replace with your actual table name
$casher = $conn->query($sql);
$stocker = $conn->query($sql2);
$admin = $conn->query($sql3);
?>