
<!DOCTYPE html>
<html>

<head>
<title>Registration form</title>
<link rel ="stylesheet" href ="registration_style.css">

</head>
<body>
    <div class="container">
        <header>Registration form</header>

        <form action="pg2_Address.php" method="POST">
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