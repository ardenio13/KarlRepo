<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['fullname'] = $_POST['fullname'];
    $_SESSION['bday'] = $_POST['bday'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['contact'] = $_POST['contact'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['student_user'] = $_POST['student_user'];
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

        <form action="pg1_Personal_details_page.php" method="POST">
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
                        <input type="tel" id="contact" name="contact" maxlength="11" placeholder="Enter your contact number"  value="+63" pattern="[0-9]{11}"reqiured>
                    </div>

                    <div class="input-group">
                        <label>Email</label> 
                        <input type="email" placeholder ="Enter your Email" name="email" id="email">
                    </div>

                    <div class="input-group">
                        <label>User name</label> 
                        <input type="text" placeholder ="Enter your username" name="student_user">
                    </div>

                    <div class="input-group" style ="margin-right:310px;">
                        <label>Password</label> 
                        <input type="password" placeholder ="Enter your password" name="pass" >
                    </div>
                    
                </div> 
            </div>
          </div>
                <button class="button-primary" type ="submit">Next</button> 
        </form>

    
        <script>
            //script for validation contact and email
        function validateForm() {
            const email = document.getElementById('email').value;
            const contact = document.getElementById('contact').value;

            if (!isValidEmail(email) || !isValidPhoneNumber(contact)) {
            alert('Please fill in all fields with valid data.');
            return false;
            }
            return true;
        }

        function isValidEmail(email) {
            // Use a regular expression to validate the email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidPhoneNumber(contact) {
            // Use a regular expression to validate a 10-digit contact number
            const phoneRegex = /^[0-9]{11}$/;
            return phoneRegex.test(contact);
        }
</script>

        <script>
        // Get reference to the input element
        const contact = document.getElementById('contact');

        // Listen for input changes and automatically format
        contact.addEventListener('input', function () {
            // Get the current input value
            let inputValue = contact.value;

            // Check if the input contains "+63" followed by '9'
            if (inputValue.includes("+639") && inputValue.includes('9')) {
                // Replace "+63" with "09"
                inputValue = inputValue.replace("+639", "09");
            }

            if (inputValue.includes("+6309") && inputValue.includes('09')) {
                inputValue = inputValue.replace("+6309", "09");
            }


            // Update the input value with the formatted value
            contact.value = inputValue;
        });
 </script>

    </div>
</body>
</html>