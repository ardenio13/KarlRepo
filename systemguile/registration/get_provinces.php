<?php
require_once('../connection/db_connection.php');

// Fetch provinces from the database
$query = "SELECT DISTINCT province FROM cities_tbl"; // Adjust the query based on your database structure
$result = $conn->query($query);

// Generate HTML options for the Province dropdown
$options = '';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . $row['province'] . '">' . $row['province'] . '</option>';
    }
} else {
    $options = '<option value="">No Provinces Found</option>';
}

$conn->close();

// Send the HTML options back to the frontend
echo $options;
?>
