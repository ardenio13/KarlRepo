
<!DOCTYPE html>
<html>
    <head>
        <title>Add Student</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
     <div class ="container"> 
    <form action="add.php" method="POST">
        <div class="form-group">
           
                <label for="fullname">Full name</label>
                <input type="text" class="form-control" placeholder="Enter fullname" name= "fullname">

                <label for="bday">Birthday</label>
                <input type="date" class ="form-control" placeholder="Enter Birthday" name="bday">

                <label for="age">Age</label>
                <input type="text" class ="form-control" placeholder="Enter Age" name = "age">

                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option>Select Gender</option>
                    <option>M</option>
                    <option>F</option>
                  
                </select><br>

                <label for="contact">Contact</label>
                <input type="tel" class ="form-control" id="contact" placeholder="Enter contact" name = "contact" maxlength="11"  value="+63" pattern="[0-9]{11}"reqiured >

                <label for="email">E-mail</label>
                <input type="email" class="form-control"  id="email" placeholder="Enter E-mail" name="email">

                
                <label for="elem">Elementary school</label>
                <input type="elem" class="form-control"  id="elem" placeholder="Enter School name" name="elem">

                <label for="junior">Junior Highschool</label>
                <input type="junior" class="form-control"  id="junior" placeholder="Enter School name" name="junior">

                <label for="senior">Senior Highschool</label>
                <input type="senior" class="form-control"  id="senior" placeholder="Enter School name" name="senior">

                <label for="baranggay">baranggay</label>
                <input type="baranggay" class="form-control"  id="baranggay" placeholder="Enter baranggay" name="baranggay">

                <label for="zip">zip</label>
                <input type="zip" class="form-control"  id="baranggay" placeholder="Enter zip" name="zip">

                <label for="street">street</label>
                <input type="street" class="form-control"  id="street" placeholder="Enter street" name="street">

                <label for="city">city</label>
                <input type="city" class="form-control"  id="city" placeholder="Enter city" name="city">
                
                <label for="province">Province</label>
                <select name="province" id="province">Select Province
                    <option value="">Select Province</option>
                    <option >NCR</option>
                    <option >CAVITE</option>
                          
                 </select>

                 <label for="city">City</label>
                  <select name="city" id="city">
                     <option value="">Select City</option>
                     <option>Marikina City</option>
                     <option>Cavite City</option>
    
                 </select>


            </div>
            <input type ="submit" >
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