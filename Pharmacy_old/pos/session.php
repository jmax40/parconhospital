

<?php
// Start session



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parconhospital";





session_start();



// Check if user is already logged in
if (isset($_SESSION['fullname']) && !empty(trim($_SESSION['fullname']))) {
    $session_id = htmlspecialchars($_SESSION['fullname'], ENT_QUOTES);

    // Set user status to "Online"
    $status = "Offline";
    
    // Update user status in database or wherever it is stored
    updateStatus($session_id, $status);
    
} else {
    // Set user status to "Offline"
    $status = "Offline";
    updateStatus(htmlspecialchars($_SESSION['fullname'], ENT_QUOTES), $status);

    // Redirect to login page
    
}

$session_id = htmlspecialchars($_SESSION['fullname'], ENT_QUOTES);

// Update user status to "Offline" when session is destroyed
function closeSession() {
    // Set user status to "Offline"
    $status = "Online";
    
    // Update user status in database or wherever it is stored
    updateStatus(htmlspecialchars($_SESSION['fullname'], ENT_QUOTES), $status);
}

register_shutdown_function("closeSession");


// Add an event listener to update user status to "Offline" when the user closes or exits the current tab






function updateStatus($fullname, $status) {
    // Create connection
    global $servername, $username, $password, $dbname;
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update user status in database
    $sql = "UPDATE user_account SET status='$status' WHERE fullname='$fullname'";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
}
?>





<?php

if (isset($_POST['end_session'])) {
    

    
    // Set user status to "Offline"
    $status = "Offline";
    updateStatus(htmlspecialchars($_SESSION['fullname'], ENT_QUOTES), $status);

    session_unset();
    session_destroy();
    header("location: ../login.php");
    exit();

}
?>





<?php
if (isset($_POST['end_session'])) {

    
    session_unset();
    session_destroy();
    header("location: ../login.php");
    exit();
    
}
?>

