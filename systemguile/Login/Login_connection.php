<?php
session_start();

require_once('../connection/db_connection.php');

if ( isset($_POST['user']) && isset($_POST['pass']) ) {
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  if(empty($user)){
      header("Location:Login_form.php?error=username is required");
      exit();
  }else if(empty($pass)){
      header("Location:Login_form.php?error=password is required");
      exit();
  }else{
      $sql = "SELECT * FROM users_tbl WHERE user = '$user' AND pass = '$pass'";
      $result = mysqli_query($conn, $sql);

      if(mysqli_num_rows($result)){
          $row = mysqli_fetch_assoc($result);

          $_SESSION['user'] = $row['user'];
          $_SESSION['userid'] = $row['id'];
          header("Location: dashboard.php");
          exit();
      }else{
          header("Location:Login_form.php?error=incorrect email or password!");
          exit();
      }
  }

}else{
  header("Location : Login_form.php?error");
  exit();
}
?>