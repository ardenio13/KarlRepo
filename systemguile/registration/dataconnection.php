<?php
session_start();

require_once('../connection/db_connection.php');

$fullname = $_SESSION['fullname'];
$bday = $_SESSION['bday'];
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];
$contact = $_SESSION['contact'];
$email = $_SESSION['email'];
$student_user = $_SESSION['student_user'];
$pass = $_SESSION['pass'];
$elem = $_SESSION['elem'];
$junior = $_SESSION['junior'];
$senior = $_SESSION['senior'];
$colleges = $_SESSION['college'];
$courses = $_SESSION['course'];
$baranggay = $_SESSION['baranggay'];
$zip = $_SESSION['zip'];
$street = $_SESSION['street'];
$city = $_SESSION['city'];
$province = $_SESSION['province'];

$student_id = time();

// Create the 'uploads' directory if it doesn't exist
$uploadDir = 'uploads';
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Handle image upload and insert image path into the database
$imge = $_SESSION['imge'];
$uploadPath = $uploadDir . '/' . basename($imge);

if (move_uploaded_file($_FILES['imge']['tmp_name'], $uploadPath)) {
    // File successfully moved to the server

    for ($i = 0; $i < count($colleges); $i++) {
        $college = mysqli_real_escape_string($conn, $colleges[$i]);
        $course = mysqli_real_escape_string($conn, $courses[$i]);


        $sql = "INSERT INTO educbg_tbl (fullname, college, course, student_id)
                VALUES ('$fullname', '$college', '$course', '$student_id')";
        mysqli_query($conn, $sql);
    }

    $sql = "INSERT INTO data_tbl (fullname, bday, gender, age, contact, email, elem, junior, senior, baranggay, street, zip, city, province, student_id, imge)
            VALUES ('$fullname', '$bday', '$gender', '$age', '$contact', '$email', '$elem', '$junior', '$senior', '$baranggay', '$street', '$zip', '$city', '$province', '$student_id', '$imge')";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO account_tbl (student_user, pass, student_id)
            VALUES ('$student_user', '$pass', '$student_id')";
    mysqli_query($conn, $sql);

    if ($conn->query($sql) === TRUE) {
        echo "Registration Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "File upload failed.";
}

// To destroy the session of the registration and clear the session data
session_unset();
session_destroy();
$conn->close();
?>