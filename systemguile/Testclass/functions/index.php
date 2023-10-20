<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/admin_styles.css">
</head>
<body>
<section class="wrapper">
  <form action="process.php" method="post">
    <div class="container">
      <div class="col-left">
        <div class="login-text">
          <h2>Administrator</h2>
        </div>
      </div>
      <div class="col-right">
        <div class="login-form">
          <h2>Login</h2>
          <p>
            <label for="ladmin">Username<span>*</span></label>
            <br>
            <input type="text" name="ladmin" id="ladmin" placeholder="Username" required>
          </p>
          <p>
            <label for="ladmin_pass">Password<span>*</span></label>
            <br>
            <input type="password" name="ladmin_pass" id="ladmin_pass" placeholder="Password" required>
          </p>
          <p>
            <input type="submit" value="Sign In"/>
          </p>
        </div>
      </div>
    </div>
  </form>
</section>
</body>
</html>
