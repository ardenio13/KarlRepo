<?php
// Include the external file with database connection
require_once('Dbconn.php');

// Initialize the DbMgmtClass
$test123 = new DbMgmtConnClass();

// Check if the HTTP request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Retrieve the ladmin and ladmin_pass from the POST data
    $ladmin = $_POST['ladmin'];
    $ladmin_pass = $_POST['ladmin_pass'];

    // Call the loginadmin method from DbMgmtClass
    if ($test123->login($ladmin, $ladmin_pass)) {

        // Successful login: Start a session and store the ladmin
        session_start();

        $_SESSION['ladmin'] = $ladmin;
        header("Location: dashboard.php");

        exit(); // Terminate the script

    } else {

        // Display an alert if the login credentials are invalid and redirect to login page.
        echo "<script>alert('Invalid email or password'); window.location.href = 'login.php';</script>";

    }
}
?>