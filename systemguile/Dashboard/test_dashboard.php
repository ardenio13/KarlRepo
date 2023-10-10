<?php
session_start();
require_once('../connection/db_connection.php');

// Check if the user is logged in (session is active)
if (!isset($_SESSION['user'])) {
    header("Location: ../../index.php"); // Redirect to the login page
    exit();
}

$user = $_SESSION['user'];

// Define your SQL query to count registered students
$sql = "SELECT COUNT(*) AS fullname FROM data_tbl"; 

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();
    
    // Get the count of registered users
    $totalusers = $row["fullname"];
    
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel ="stylesheet" href ="dashboard_style.css">
</head>
<body>
    <header>
        <h1>WELCOME <?php echo "$user"?></h1> <a href="../Login/logout.php">Logout</a>
    </header>
    <nav>
        <ul>
            <li><a class="student-reg" href="student_table.php">Registered Students</a></li>
        </ul>
    </nav>
    <div class="container">
        <div id="widget1" class="widget">
            <h2><?php echo "$totalusers"?></h2>
            <p>Registered Students</p>
        </div>
    </div>
</body>
</html>