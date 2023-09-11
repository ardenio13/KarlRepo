<?php
$host = "localhost";
$username = 'root';
$password = "";
$database = "locations_db";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$province = $_GET['province'];

// Fetch cities from the database based on the selected province
$query = "SELECT city FROM cities WHERE province = '$province'";
$result = $conn->query($query); 

// Generate HTML options for filtered cities
$options = '';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . $row['city'] . '">' . $row['city'] . '</option>';
    }
} else {
    $options = '<option value="">Select Province First</option>';
}


$conn->close();

// Send the HTML options back to the frontend
echo $options;
?>

