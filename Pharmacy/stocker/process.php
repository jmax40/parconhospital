
<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
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
// Add this code at the top of your PHP script


    // Retrieve data from the form
    $article = $_POST['article'];
    $infoname = $_POST['info'];
    $quantity = $_POST['quantity'];
    $p_price = $_POST['p_price'];
    $price = $_POST['price'];
    $supplier = $_POST['supplier'];
    $invoice_no = $_POST['invoice_no'];
    $invoice_date = $_POST['invoice_date'];
    $rop = $_POST['rop'];
    $stocker = $_POST['stocker'];
    $dateandtime = date('Y-m-d H:i:s');
    
    //$day = date('d-m-y');    
    $day = $_POST['day'];
    
    $month = date('m-y');    
    $year = date('Y');  

    $cost = $quantity * $price;    
    

// Now you can use $day, $month, and $year in your SQL query or elsewhere in your code.







    // Retrieve data for other fields similarly

    // Insert data into the database (adjust SQL statement according to your database structure)
    $sql = "INSERT INTO productpharmacy (article, info, quantity,p_price,price, cost, supplier, invoice_no, invoice_date, rop, stocker, dateandtime, day, month, year)
    VALUES ('$article', '$infoname', '$quantity','$p_price', '$price', '$cost', '$supplier', '$invoice_no', '$invoice_date', '$rop', '$stocker', '$dateandtime', '$day', '$month', '$year')";

    if ($conn->query($sql) === true) {
        echo '<!DOCTYPE html>
        <html>
        <head>
          <style>
            .overlay {
              display: flex;
              align-items: center;
              justify-content: center;
              position: fixed;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background-color: rgba(0, 0, 0, 0.7);
              z-index: 999;
            }
        
            .popup {
              background: white;
              padding: 20px;
              border-radius: 5px;
              box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
              text-align: center; /* Center-align the content inside the popup */
            }
          </style>
        </head>
        <body>
          <div class="overlay">
            <div class="popup">
              <img src="../img/success.gif" alt="SVG Image">
              <p>Successfully Added</p>
            </div>
          </div>
        </body>
        </html>';
            echo '<script>
                setTimeout(function() {
                    window.location.href = "index_in.php";
                }, 3000); // Redirect to index.php after 3 seconds
            </script>';
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
// Include your database connection code here
// For example, include a file that connects to your database like "db_connection.php"

if (isset($_POST['restock'])) {
    // Get the form data and sanitize input
    $id = intval($_POST['id']); // Ensure it's an integer
    $restock = intval($_POST['quantity']); // Ensure it's an integer
    $price = floatval($_POST['price']); // Ensure it's a float
   
    $presentprice = $price * $restock;

    $article = $_POST['article'];
    $day = date('Y-m-d H:i:s');    
    $month = $_POST['day'];
    $year = date('Y'); 

    // Database connection configuration
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "parconhospital";

    // Create a database connection using PDO for prepared statements
    try {
        $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Update the product quantity and cost
        $sql = "UPDATE productpharmacy SET quantity = quantity + :restock, cost = cost + :presentprice WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':restock', $restock, PDO::PARAM_INT);
        $stmt->bindParam(':presentprice', $presentprice, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Insert into productpharmacy table
        $sql2 = "INSERT INTO pharmacy_stock_history (pid, article, quantity, day, month, year) VALUES (:id, :article, :restock, :day, :month, :year)";
        $stmt2 = $db->prepare($sql2);
        $stmt2->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt2->bindParam(':article', $article, PDO::PARAM_STR);
        $stmt2->bindParam(':restock', $restock, PDO::PARAM_INT);
        $stmt2->bindParam(':day', $day, PDO::PARAM_STR);
        $stmt2->bindParam(':month', $month, PDO::PARAM_STR);
        $stmt2->bindParam(':year', $year, PDO::PARAM_STR);
        $stmt2->execute();

        echo "<script>alert('Successfully updated');window.location.href='low_stock.php';</script>";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $db = null;
}
?>

