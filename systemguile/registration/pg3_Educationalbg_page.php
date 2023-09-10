
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

                    <div class="input-group" id ="college_course">
                        <label>College</label> 
                        <input type="text" placeholder ="Enter School Name" name="college">
                        <input type="text" placeholder ="Enter Course" name="course">
                        <button id="addinfo" style >Add +</button>
                    </div>
            </div>
          </div>
                

                <button class="button-primary" type ="submit" style ="margin-top:50px;">Next</button> 
        </form>
        <script>

        // Function to add new input elements
        function addInputs() {
            var container = document.getElementById("college_course");

            // Create new inputs
            var input1 = document.createElement("input");
            input1.type = "text";
            input1.name = "addcollege";
            input1.id = "addcollege"; 
            input1.placeholder = "Enter your School name"
            container.appendChild(input1);

          
            var input2 = document.createElement("input");
            input2.type = "text";
            input2.name = "addcourse";
            input2.id = "addcourse"
            input2.placeholder = "Enter your Course"
            container.appendChild(input2);
        }

        // This function will trigger if you click the add button
        var addButton = document.getElementById("addinfo");
        addButton.addEventListener("click", addInputs);
    </script>
    </div>
</body>
</html>