<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['fullname'] = $_POST['fullname'];
    $_SESSION['bday'] = $_POST['bday'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['contact'] = $_POST['contact'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['pass'] = $_POST['pass'];
    $_SESSION['conpass'] = $_POST['conpass'];

    header('Location: pg2_Address_page.php'); 
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

        <form action="pg1_Personal_page.php" method="POST">
          <div class="form1">
            <div class="personal-details">
                <span class ="title">Personal details</span>
                <div class="group">
                    <div class="input-group">
                        <label>Fullname</label> 
                        <input type="text" placeholder ="Enter your fullname" name="fullname"required>
                    </div>

                    <div class="input-group">
                        <label>Gender</label> 
                        <select name="gender" id="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label>Birthday</label> 
                        <input type="date" placeholder ="Enter your Birthday" name="bday">
                    </div>

                    <div class="input-group">
                        <label>Age</label> 
                        <input type="text" placeholder ="Enter your Age" name="age">
                    </div>

                    <div class="input-group">
                        <label>Contact</label> 
                        <input type="text" placeholder ="Enter your contact" name="contact"reqiured>
                    </div>

                    <div class="input-group">
                        <label>Email</label> 
                        <input type="text" placeholder ="Enter your Email" name="email">
                    </div>

                    <div class="input-group">
                        <label>User name</label> 
                        <input type="text" placeholder ="Enter your username" name="user">
                    </div>

                    <div class="input-group">
                        <label>Password</label> 
                        <input type="text" placeholder ="Enter your password" name="pass">
                    </div>

                    <div class="input-group">
                        <label>Confirm Password</label> 
                        <input type="text" placeholder ="Enter your Password" name="conpass">
                    </div>
                    
                </div> 
            </div>
          </div>
                <button class="button-primary" type ="submit">Next</button> 
        </form>
    </div>
</body>
</html>