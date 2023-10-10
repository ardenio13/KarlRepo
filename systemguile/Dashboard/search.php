<?php
require_once('../fetch_tables/fetch_data_tbl.php');

if (isset($_GET['search'])) {
    $searchQuery = $_GET['search'];
    
    // You should perform a database query here to search for students based on $searchQuery
    $searchQuery = mysqli_real_escape_string($conn, $searchQuery);
    $searchQuery = '%' . $searchQuery . '%'; // Add wildcards to perform a partial search
    
    $query = "SELECT * FROM data_tbl WHERE fullname LIKE '$searchQuery'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        // Display the search results in a table format
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['bday'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['contact'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['elem'] . "</td>";
            echo "<td>" . $row['junior'] . "</td>";
            echo "<td>" . $row['senior'] . "</td>";
            echo "<td>" . $row['baranggay'] . "</td>";
            echo "<td>" . $row['zip'] . "</td>";
            echo "<td>" . $row['street'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['province'] . "</td>";
            echo "<td>" . $row['student_id'] . "</td>";
            
            //View button
            echo "<td><a class='btn btn-success' href='view.php?id=" . $row['id'] . "'><i class='glyphicon glyphicon-eye'></i>View</a></td>";

            // Edit button
            echo "<td><a class='btn btn-primary' href='edit.php?id=" . $row['id'] . "'><i class='glyphicon glyphicon-pencil'></i>Edit</a></td>";

            // Delete button
            echo "<td><a  class='btn btn-danger' href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this record?\");'><i class='glyphicon glyphicon-trash'></i>Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No results found.</td></tr>";
    }
} else {
    echo "Invalid request.";
}
?>