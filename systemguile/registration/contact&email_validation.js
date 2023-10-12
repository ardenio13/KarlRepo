

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
