


<?php
// Establish a database connection (update with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parconhospital";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM nurse_medical_record ORDER BY id DESC";

// Execute the query and store the result
$medical_record = $conn->query($sql);

// Close the database connection (not always necessary, depends on the application)
// $conn->close();
?>










<?php
// Establish a database connection (update with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parconhospital";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM nurse_medical_record WHERE ekonsulta = 'yes' ORDER BY date DESC";

// Execute the query and store the result
$ekonsulta_record = $conn->query($sql);

// Close the database connection (not always necessary, depends on the application)
// $conn->close();
?>


















<?php
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "parconhospital";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $record_no = $_POST['record_no'];

    // Check if the record_no already exists
    $check_query = "SELECT * FROM nurse_medical_record WHERE record_no = '$record_no'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        // Display an error message with an icon
  // Display a success message and redirect
       // Display a pop-up overlay
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
             <img src="../img/error.gif" alt="SVG Image">
             <p>Record Number is Already</p>
             <p> Exist !  </p>
           </div>
         </div>
       </body>
       </html>';
           echo '<script>
               setTimeout(function() {
                   window.location.href = "find.php";
               }, 3000); // Redirect to registration.php after 3 seconds
           </script>';
           exit;
    } else {
        // Continue with the insertion
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $sex = $_POST['sex'];
        $status = $_POST['status'];
        $birthplace = $_POST['birthplace'];
        $occupation = $_POST['occupation'];
        $birthday = $_POST['birthday'];
        $religion = $_POST['religion'];
        $contact_no = $_POST['contact_no'];
        $date = date("m-d-Y");

        $sql = "INSERT INTO nurse_medical_record (record_no, name, age, address, sex, status, birthplace, occupation, birthday, religion, contact_no, date)
                VALUES ('$record_no', '$name', '$age', '$address', '$sex', '$status', '$birthplace', '$occupation', '$birthday', '$religion', '$contact_no', '$date')";

        if ($conn->query($sql) === true) {
           // Display a pop-up overlay
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
                window.location.href = "find.php";
            }, 1500); // Redirect to registration.php after 3 seconds
        </script>';
        exit;// Terminate the script execution after displaying the message
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>











<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parconhospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['nurseDel'])) {
    $No = $_GET['nurseDel'];

    // Sanitize the input to prevent SQL injection
    $No = $conn->real_escape_string($No);

    // Delete the record from the member table
    $delete_sql = "DELETE FROM nurse_medical_record WHERE id = $No";
    $result = $conn->query($delete_sql);

    if ($result) {
        header("location: find.php");
        exit;
    } else {
        echo "Please check your Query";
    }
}
?>







<?php
// Include your database connection code here
// For example, include a file that connects to your database like "db_connection.php"

if (isset($_POST['update'])) {
    // Get the form data
    $id = $_POST['id'];
    $record_no = $_POST['record_no'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $birthplace = $_POST['birthplace'];
    $occupation = $_POST['occupation'];
    $birthday = $_POST['birthday'];
    $religion = $_POST['religion'];
    $contact_no = $_POST['contact_no'];
    $datenow =  $_POST['ekondate'];

    // Perform database update
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "parconhospital";

    $db = new mysqli($servername, $username, $password, $dbname);
    
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Prepare the SQL update statement
    $sql = "UPDATE nurse_medical_record SET 
        record_no = 
        '$record_no',
        name = '$name',
        age = '$age',
        address = '$address',
        sex = '$gender',
        status = '$status',
        birthplace = '$birthplace',
        occupation = '$occupation',
        birthday = '$birthday',
        religion = '$religion',
        contact_no = '$contact_no',
        ekondate = '$datenow'
        WHERE id = '$id'";

    if ($db->query($sql) === TRUE) {
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
              <p>Successfully Updated</p>
            </div>
          </div>
        </body>
        </html>';
        echo '<script>
            setTimeout(function() {
                window.location.href = "find.php";
            }, 3000); // Redirect to registration.php after 3 seconds
        </script>';
    } else {
        echo "Error updating record: " . $db->error;
    }

    $db->close();
}
?>
