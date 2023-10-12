<?php
require_once('../fetch_tables/fetch_data_tbl.php');

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record from the database using the 'id'
    $query = "SELECT * FROM data_tbl WHERE id = $id";
    $result = $conn->query($query); 

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
            <title>Edit Record</title>
        </head>
        <body>
            <h2>Edit Record</h2>
            
            <!-- Hidden div containing the edit form (displayed by default) -->
            <div id="container">
                <form method="POST" action="update.php">
                    <div class = "form-group">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    Full Name: <input type="text" class ="form-control" name="fullname" value="<?php echo $row['fullname']; ?>"><br>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    Birthdate: <input type="text"  class ="form-control" name="bday" value="<?php echo $row['bday']; ?>"><br>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    Age: <input type="text" name="age" class ="form-control" value="<?php echo $row['age']; ?>"><br>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                   Gender: <input type="text" name="gender"  class ="form-control" value="<?php echo $row['gender']; ?>"><br>
                    
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    Contact: <input type="text" name="contact" class ="form-control" value="<?php echo $row['contact']; ?>"><br>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    E-mail: <input type="text" name="email" class ="form-control" value="<?php echo $row['email']; ?>"><br>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    Elementary: <input type="text" name="elem" class ="form-control" value="<?php echo $row['elem']; ?>"><br>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    Junior Highschool: <input type="text" name="junior" class ="form-control" value="<?php echo $row['junior']; ?>"><br>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    Senior Highschool: <input type="text" name="senior" class ="form-control" value="<?php echo $row['senior']; ?>"><br>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                   Baranggay: <input type="text" name="baranggay" class ="form-control" value="<?php echo $row['baranggay']; ?>"><br>

                   <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                   Zip: <input type="text" name="zip" class ="form-control" value="<?php echo $row['zip']; ?>"><br>

                   <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                   Street: <input type="street" name="street" class ="form-control" value="<?php echo $row['street']; ?>"><br>

                   <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                   City: <input type="city" name="city" class ="form-control" value="<?php echo $row['city']; ?>"><br>

                   <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                   Province: <input type="province" name="province" class ="form-control" value="<?php echo $row['province']; ?>"><br>
                    <input type="submit" value="Update">
                </form>
            </div>
        </div>

        </body>
        </html>
        <?php
    } else {
        echo "Record not found.";
    }
} else {
    echo "Invalid request.";
}
?>