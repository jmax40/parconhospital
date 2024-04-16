<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";




// Check if user is already logged in
if (isset($_SESSION['fullname']) && !empty(trim($_SESSION['fullname']))) {
    $session_id = htmlspecialchars($_SESSION['fullname'], ENT_QUOTES);

    // Set user status to "Online" and update status in the database
    $status = "Online";
    updateStatus($session_id, $status);
} else {
    // User is not logged in, redirect to login page
    echo "<script>alert('Access Denied: Need Credentials to Login! ');window.location.href='../login.php';</script>";
    exit();
}

// Update user status to "Offline" when session is destroyed
function closeSession() {
    // Set user status to "Offline" and update status in the database
    $status = "Offline";
    updateStatus(htmlspecialchars($_SESSION['fullname'], ENT_QUOTES), $status);
}

// Register shutdown function to update status on session close
register_shutdown_function("closeSession");

// Function to update user status in the database
function updateStatus($fullname, $status) {
    global $servername, $username, $password, $dbname;
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update user status in the database
    $sql = "UPDATE user_account SET status='$status' WHERE fullname='$fullname'";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
}
?>

<!-- Your HTML/PHP content here -->

<?php
if (isset($_POST['end_session'])) {
    // Set user status to "Offline" and update status in the database
    $status = "Offline";
    updateStatus(htmlspecialchars($_SESSION['fullname'], ENT_QUOTES), $status);

    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("location: ../login.php");
    exit();
}
?>
