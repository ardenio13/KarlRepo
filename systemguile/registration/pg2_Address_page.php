
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <header>Registration form</header>

        <form action="pg2_Address_page.php" method="POST">
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
                        <label for ="province">Province</label> 
                        <select name="province" id="province">
                            <option value="">Select Province</option> 
                            <option value="NCR">NCR</option>
                            <option value="Cavite">Cavite</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="city">City</label> 
                        <select name="city" id="city">
                        </select>
                    </div>

                </div> 
            </div>
            <script>
        // AJAX request function
        function filterCitiesByProvince(province) {
            $.ajax({
                url: 'filter_process.php', 
                type: 'GET',
                data: { province: province },
                success: function(response) {
                    $('#city').html(response);
                }
            });
        }

        // Call the filter function when province selection changes
        $('#province').change(function() {
            var selectedProvince = $(this).val();
            filterCitiesByProvince(selectedProvince);
        });

       
        filterCitiesByProvince($('#province').val());
                </script>
          </div>


                <button class="button-primary" type ="submit" style ="margin-top:50px;">Next</button> 
        </form>
    </div>
</body>
</html>