
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['elem'] = $_POST['elem'];
    $_SESSION['junior'] = $_POST['junior'];
    $_SESSION['senior'] = $_POST['senior'];
    $_SESSION['college'] = $_POST['college'];
  
    header('Location: dataconnection.php'); 
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
<title>Registration form</title>
<link rel ="stylesheet" href ="registration_style.css">

</head>
<body>
    <div class="container">
        <header>Registration form</header>

        <form action="pg3_Educationalbg_page.php" method="POST">
          <div class="form1">
            <div class="personal-details">
                <span class ="title">Educational Background details</span>

                <div class="group">
                    <div class="input-group">
                        <label>Elementary</label> 
                        <input type="text" placeholder ="Enter School Name" name="elem"required>
                    </div>

                    <div class="input-group">
                        <label>Junior High School</label> 
                        <input type="text" placeholder ="Enter School Name" name="junior">
                    </div>

                    <div class="input-group">
                        <label>Senior High School</label> 
                        <input type="text" placeholder ="Enter School Name" name="senior">
                    </div>

                    <div class="input-group">
                        <label>College</label> 
                        <input type="text" placeholder ="Enter School Name" name="college">
                        <input type="text" placeholder ="Enter Course" name="course">
                    </div>
-
                </div> 
            </div>
          </div>

                <button class="button-primary" type ="submit" style ="margin-top:50px;">Next</button> 
        </form>
    </div>
</body>
</html>