
<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Establish a database connection (update with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "parconhospital";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
// Add this code at the top of your PHP script
var_dump($_POST);

    // Retrieve data from the form
    $article = $_POST['article'];
    $infoname = $_POST['info'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $supplier = $_POST['supplier'];
    $invoice_no = $_POST['invoice_no'];
    $invoice_date = $_POST['invoice_date'];
    $rop = $_POST['rop'];
    $stocker = $_POST['stocker'];
    $dateandtime = date('Y-m-d H:i:s');
    $day = date('d-m-Y');     
    $month = date('m-Y');    
    $year = date('Y');  

    $cost = $quantity * $price;    
    

// Now you can use $day, $month, and $year in your SQL query or elsewhere in your code.







    // Retrieve data for other fields similarly

    // Insert data into the database (adjust SQL statement according to your database structure)
    $sql = "INSERT INTO productpharmacy (article, info, quantity, price, cost, supplier, invoice_no, invoice_date, rop, stocker, dateandtime, day, month, year)
    VALUES ('$article', '$infoname', '$quantity', '$price', '$cost', '$supplier', '$invoice_no', '$invoice_date', '$rop', '$stocker', '$dateandtime', '$day', '$month', '$year')";

    if ($conn->query($sql) === true) {
        echo "<script>alert('Successfully inserted');window.location.href='index_in.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>





<?php
// Establish a database connection (update with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parconhospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM productpharmacy ORDER BY id DESC"; // Replace with your actual table name
$pharmacy_product = $conn->query($sql);

?>



<?php
// Establish a database connection (update with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parconhospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM pharmacy_sales where status = 'UNPAID' and type = 'IN' ORDER BY id DESC"; // Replace with your actual table name
$pharmacy_sales = $conn->query($sql); // Corrected variable name

?>









<?php
// Establish a database connection (update with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
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
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the date from the form
    $date = $_POST['date'];
    require '..c:\xampp\htdocs\Parconhospital\lib\composer.json';

    // Create a new PhpSpreadsheet object
    $spreadsheet = new Spreadsheet();
    

    // Create a new worksheet and set its title
    $worksheet = $spreadsheet->getActiveSheet();
    $worksheet->setTitle('Data');

    // Fetch data for the given date and populate the worksheet
    // Replace this with your data retrieval and worksheet population logic
    $data = array(
        // Your data here...
    );

    // Set the data in the worksheet
    $worksheet->fromArray($data, null, 'A1');

    // Set appropriate headers for file download
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="your_excel_file.xlsx"');

    // Create a Writer object and save the Excel file to output
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');

    exit();
}
?>





<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date = $_POST["date"];

        // Database connection parameters
        $servername = "localhost";  // Your MySQL server address
        $username = "root";  // Your MySQL username
        $password = "";  // Your MySQL password
        $database = "parconhospital";  // Your MySQL database name

        // Create a connection to the MySQL database
        $conn = new mysqli($servername, $username, $password, $database);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to select data from the table based on the search input
        $sql = "SELECT FROM your_table WHERE name LIKE '%$date%'"; // Replace "your_table" with your table name

        // Execute the query
        $result = $conn->query($sql);

        // Check if there are any rows in the result set
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["article"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["cost"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }

        // Close the database connection
        $conn->close();
    }
    ?>




