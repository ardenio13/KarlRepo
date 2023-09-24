<?php
session_start();

require_once('../connection/db_connection.php');

$fullname = $_SESSION['fullname'];
$bday= $_SESSION['bday'];
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];
$contact = $_SESSION['contact'];
$email = $_SESSION['email'];
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
$elem = $_SESSION['elem'];
$junior = $_SESSION['junior'];
$senior= $_SESSION['senior'];
$colleges = $_SESSION['college'];
$courses = $_SESSION['course'];
$baranggay = $_SESSION['baranggay'];
$zip = $_SESSION['zip'];
$street = $_SESSION['street'];
$country = $_SESSION['country'];
$city = $_SESSION['city'];
$province = $_SESSION['province'];

$student_id = time();



for ($i = 0; $i < count($colleges); $i++ ) {
    $college = mysqli_real_escape_string($conn, $colleges[$i]);
    $course = mysqli_real_escape_string($conn, $courses[$i]);

    // Insert the values into the database along with the student ID.
    $sql = "INSERT INTO educbg_tbl (college, course, student_id)
    VALUES ('$college', '$course', '$student_id')";
    mysqli_query($conn, $sql);
}

$sql = "INSERT INTO data_tbl (fullname, bday, gender, age, contact, email, user, pass, elem, junior, senior, baranggay, street, country, zip, city, province, student_id)
        VALUES ('$fullname', '$bday', '$gender', '$age', '$contact', '$email', '$user', '$pass','$elem,', '$junior', '$senior', '$baranggay', '$street', '$country', '$zip', '$city', '$province', '$student_id')";

if ($conn->query($sql) === TRUE){
   echo "Registration Successfully";
}  
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//To destroy the session of the registration and clear the session data 
session_unset();
session_destroy();
$conn->close();
?>                  