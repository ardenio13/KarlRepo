<?php
session_start();

if (isset($_SESSION['user'])){

    session_destroy();

     header("location:Login_form.php");
}
else {

   header("location:Login_form.php");
}
?>
