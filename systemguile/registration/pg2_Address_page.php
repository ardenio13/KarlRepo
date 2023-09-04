
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['baranggay'] = $_POST['baranggay'];
    $_SESSION['zip'] = $_POST['zip'];
    $_SESSION['street'] = $_POST['street'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['province'] = $_POST['province'];
    $_SESSION['city'] = $_POST['city'];
  
    header('Location: pg3_Educationalbg_page.php'); 
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
                <span class ="title">Address details</span>

                <div class="group">
                    <div class="input-group">
                        <label>Baranggay</label> 
                        <input type="text" placeholder ="Enter your baranggay" name="baranggay"required>
                    </div>

                    <div class="input-group">
                        <label>Street Address</label> 
                        <input type="text" placeholder ="Enter your street name" name="street">
                    </div>

                    <div class="input-group">
                        <label>Zipcode</label> 
                        <input type="text" placeholder ="Enter your Zipcode" name="zip">
                    </div>

                    <div class="input-group">
                        <label>Country</label> 
                        <input type="text" placeholder ="Enter your Country" name="country">
                    </div>

                    <div class="input-group">
                        <label>Province</label> 
                        <select name="province" id="province">Select province
                            <option value="NCR">NCR</option>
                            <option value="Cavite">Cavite</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label>City</label> 
                        <select name="province" id="province">Select City
                        </select>
                    </div>

                </div> 
            </div>
          </div>

                <button class="button-primary" type ="submit" style ="margin-top:50px;">Next</button> 
        </form>
    </div>
</body>
</html>