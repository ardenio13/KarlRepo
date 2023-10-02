<?php
session_start();

if (isset($_SESSION['userid'])) {
      header("location: test_dashboard.php");
      
    }
header('Location: systemguile/Login/Login_form.php');
exit();

?>