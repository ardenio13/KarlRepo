<?php
require_once('class.php');

$admindb = new AdminClass();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ladmin'], $_POST['ladmin_pass'])) {
    
    $ladmin = $_POST['ladmin'];
    $ladmin_pass = $_POST['ladmin_pass'];

    if ($admindb->LoginAdmin($ladmin, $ladmin_pass)) {
        session_start();
        $_SESSION['ladmin'] = $ladmin;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<script>alert('Invalid email or password'); window.location.href = 'index.php';</script>";
    }
}
?>
