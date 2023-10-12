<?php
require_once('../fetch_tables/fetch_data_tbl.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $bday = $_POST['bday'];
    $age = $_POST['age'];
    $gender = $_POST['gender']; 
    $contact = $_POST['contact']; 
    $email = $_POST['email'];
    $elem = $_POST['elem'];
    $junior = $_POST['junior'];
    $senior = $_POST['senior'];
    $baranggay = $_POST['baranggay'];
    $zip = $_POST['zip'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $province = $_POST['province'];

    // Update the record in the database
    $query = "UPDATE data_tbl SET fullname = '$fullname', bday = '$bday', age = '$age', gender = '$gender', contact = '$contact', email = '$email', elem = '$elem', junior = '$junior', senior = '$senior', baranggay = '$baranggay', zip = '$zip', street = '$street', city = '$city', province = '$province' WHERE id = $id";

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