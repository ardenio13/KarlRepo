<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title> <!-- Set the title of the web page -->
    <link rel="stylesheet" href="css/admin_styles.css"> <!-- Link to an external CSS file for styling -->
</head>
<body>
<section class="wrapper"> <!-- Create a section with the class "wrapper" -->

  <form action="authenticate.php" method="post"> <!-- Create a form that submits data to "admin_conn.php" using the POST method -->
  
    <div class="container"> <!-- Create a container div for layout -->
    
      <div class="col-left"> <!-- Create a left column -->
        <div class="login-text"> <!-- Add a text section with the class "login-text" -->
          <h2>Administrator</h2> <!-- Display "Administrator" as a heading -->
        </div>
      </div>
      
      <div class="col-right"> <!-- Create a right column -->
        <div class="login-form"> <!-- Add a form section with the class "login-form" -->
          <h2>Login</h2> <!-- Display "Login" as a heading -->
          
          <p>
            <label for="ladmin">Username<span>*</span></label> <!-- Create a label for the username input field -->
            <br>
            <input type="text" name="ladmin" id="ladmin" placeholder="Username" required> <!-- Create a username input field -->
          </p>
          
          <p>
            <label for="ladmin_pass">Password<span>*</span></label> <!-- Create a label for the password input field -->
            <br>
            <input type="password" name="ladmin_pass" id="ladmin_pass" placeholder="Password" required> <!-- Create a password input field -->
          </p>
          
          <p>
            <input type="submit" value="Sign In"/> <!-- Create a submit button to submit the form -->
          </p>
        </div>
      </div>
      
    </div>
    
  </form> <!-- Close the form section -->

</section>
</body>
</html>