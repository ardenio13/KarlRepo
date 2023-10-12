<?php

require_once('../connection/db_connection.php');

$fullname = $_POST['fullname'];
$bday= $_POST['bday'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$elem = $_POST['elem'];
$junior = $_POST['junior'];
$senior= $_POST['senior'];
$baranggay = $_POST['baranggay'];
$zip = $_POST['zip'];
$street = $_POST['street'];
$city = $_POST['city'];
$province = $_POST['province'];

$student_id = time();


$sql = "INSERT INTO data_tbl (fullname, bday, gender, age, contact, email, elem, junior, senior, baranggay, street, zip, city, province, student_id)
        VALUES ('$fullname', '$bday', '$gender', '$age', '$contact', '$email', '$elem', '$junior', '$senior', '$baranggay', '$street', '$zip', '$city', '$province', '$student_id')";
  


if ($conn->query($sql) === TRUE){
 header("location: student_table.php");
 

}  
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>                  