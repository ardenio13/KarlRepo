<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "register_db"

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn -> connection_error){
    die("Connetion failed" . $conn -> connection_error);

}


?>