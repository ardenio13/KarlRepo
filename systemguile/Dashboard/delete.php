<?php
// Include the database connection file
require_once('../fetch_tables/fetch_data_tbl.php'); 

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    // Prepare a DELETE statement
    $sql = "DELETE FROM data_tbl WHERE id = ?";

    // Use prepared statements to prevent SQL injection
    if ($stmt = $conn->prepare($sql)) {
        // Bind the 'id' parameter as an integer
        $stmt->bind_param("i", $id);

        // Execute the DELETE statement
        if ($stmt->execute()) {
        
            header("Location: test.php"); // Redirect back to your table 
            exit();
        } else {
            // Handle the error if the deletion fails
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Handle the error if the prepared statement fails
        echo "Error: " . $mysqli->error;
    }

    // Close the database connection
    $mysqli->close();
} else {
    // Handle the case where 'id' is not set in the URL
    echo "Invalid request.";
}
?>