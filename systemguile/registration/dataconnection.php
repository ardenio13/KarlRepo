<?php
session_start();

require_once('../connection/db_conn.php');

$fullname = $_SESSION['fullname'];
$bday= $_SESSION['bday'];
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];
$conpass = $_SESSION['conpass'];
$contact = $_SESSION['contact'];
$email = $_SESSION['email'];
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
$conpass = $_SESSION['conpass'];
$elem = $_SESSION['elem'];
$second = $_SESSION['junior'];
$second = $_SESSION['senior'];
$college = $_SESSION['college'];
$barangay = $_SESSION['barangay'];
$zip = $_SESSION['zip'];
$street = $_SESSION['street'];
$country = $_SESSION['country'];
$city = $_SESSION['city'];
$province = $_SESSION['province'];


$sql = "INSERT INTO data_tbl (fullname, bday, gender, age, contact, email,  user,  pass, conpass, elem, junior, senior, college, street, country, senior, baranggay, street, country,  city,  province)
        VALUES ('$fullname', '$bday', '$gender', '$age', '$contact', '$email', $user', '$pass', '$conpass', '$elem', '$junior',$senior', '$college', '$baranggay', '$city', '$street', '$country', '$zip', '$province', '$user', '$pass', '$conpass')";

if ($conn->query($sql) === TRUE){
   echo "Registration Successfully"
}  
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//To destroy the session of the registration and clear the session data 
session_unset();
session_destroy();
$conn->close();
?>                  