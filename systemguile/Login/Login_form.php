<?php
session_start();

if (isset($_SESSION['userid'])) {
      header("location: test_dashboard.php");
      
    }
?>
<!DOCTYPE html>

<html>
    
<head> 
    <title>Login</title>
    <link rel ="stylesheet" href ="login_style.css">
    <link rel= "stylesheet" type="text/css" href = "css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if(isset($_GET['error'])){ ?>
            <div class="error">
                <p><?php echo $_GET['error'] ?></p>
            </div>
        <?php } ?>
        <form>
        <div>
            <label>Username</label>
            <input type="text" name="userr" id ="userr" placeholder ="Username">
        </div>

        <div>
             <label>Password</label>
            <input type="passs" id ="passs" id ="passs" placeholder ="Password">
        </div>

        <button class ="btn-login" type ="submit">Login</button> 
        <p style="margin-top:10px;">Don't have an account?<a href="../registration/pg1_Personal_details_page.php">Register</a></p>
        
        </form>
    </div> 
</body>
</html>