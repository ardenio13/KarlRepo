
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
    <link rel="stylesheet" href="registration_style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <header>Registration form</header>

        <form action="pg2_Address_page.php" method="POST">
            <div class="form1">
                <div class="personal-details">
                    <span class="title">Address details</span>

                    <div class="group">
                        <div class="input-group">
                            <label>Baranggay</label>
                            <input type="text" placeholder="Enter your baranggay" name="baranggay" required>
                        </div>

                        <div class="input-group">
                            <label>Street Address</label>
                            <input type="text" placeholder="Enter your street name" name="street">
                        </div>

                        <div class="input-group">
                            <label>Zipcode</label>
                            <input type="text" placeholder="Enter your Zipcode" name="zip">
                        </div>

                        <div class="input-group">
                            <label for="province">Province</label>
                            <select name="province" id="province">
                                <option value="">Select Province</option>
                                <!-- Province options will be populated dynamically -->
                            </select>
                        </div>

                        <div class="input-group" style="margin-right:310px;">
                            <label for="city">City</label>
                            <select name="city" id="city">
                                <option value="">Select City</option>
                                <!-- City options will be populated dynamically -->
                            </select>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Function to fetch and populate the Province dropdown
        function populateProvinceDropdown() {
            $.ajax({
                url: 'get_provinces.php', // URL to fetch province data
                type: 'GET',
                success: function (response) {
                    $('#province').html(response);
                }
            });
        }

        // Function to fetch and populate the City dropdown based on the selected Province
        function filterCitiesByProvince(province) {
            $.ajax({
                url: 'filter_process.php',
                type: 'GET',
                data: { province: province },
                success: function (response) {
                    $('#city').html(response);
                }
            });
        }

        // Call the populate function when the page loads
        $(document).ready(function () {
            populateProvinceDropdown();

            // Event listener for Province dropdown change
            $('#province').change(function () {
                var selectedProvince = $(this).val();
                filterCitiesByProvince(selectedProvince);
            });
        });
    </script>
</body>

</html>