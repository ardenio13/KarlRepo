<?php
require_once('../fetch_tables/fetch_data_tbl.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];    
    $bday = $_POST['bday'];
    $age = $_POST['age'];   
    // Retrieve other form fields here

    // Update the record in the database
    $query = "UPDATE data_tbl SET fullname = '$fullname', bday = '$bday', age = '$age' WHERE id = $id";
 

    if ($conn->query($query)) {
        header("location: student_table.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>