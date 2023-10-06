<?php
require_once('../fetch_tables/fetch_data_tbl.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Create a query to retrieve the record with the specified ID
    $query = "SELECT * FROM data_tbl WHERE id = $id";

    // Execute the query
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Fetch the record as an associative array
        $row = $result->fetch_assoc();
        
        // Display the record details
        echo "<h2>Viewing Record ID: " . $row['id'] . "</h2>";
        echo "<p>Full Name: " . $row['fullname'] . "</p>";
        echo "<p>Birthdate: " . $row['bday'] . "</p>";
        echo "<p>Age: " . $row['age'] . "</p>";
        echo "<p>gender: " . $row['gender'] . "</p>";
        echo "<p>contact: " . $row['contact'] . "</p>";
        echo "<p>email: " . $row['email'] . "</p>";
        echo "<p>elem: " . $row['elem'] . "</p>";
        echo "<p>junior: " . $row['junior'] . "</p>";
        echo "<p>senior: " . $row['senior'] . "</p>";
        echo "<p>baranggay: " . $row['baranggay'] . "</p>";
        echo "<p>zip: " . $row['zip'] . "</p>";
        echo "<p>street: " . $row['street'] . "</p>";
        echo "<p>city: " . $row['city'] . "</p>";
        echo "<p>street: " . $row['street'] . "</p>";
        echo "<p>province: " . $row['province'] . "</p>";
        echo "<p>student_id: " . $row['student_id'] . "</p>";

        echo "<p><a href='student_table.php'>Back to Table</a></p>";
    } else {
        echo "Record not found.";
    }
} else {
    echo "Invalid request.";
}


$conn->close();
?>