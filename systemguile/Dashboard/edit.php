<?php
require_once('../fetch_tables/fetch_data_tbl.php');

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record from the database using the 'id'
    $query = "SELECT * FROM data_tbl WHERE id = $id";
    $result = $conn->query($query); // Remove the extra '=' here

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Edit Record</title>
        </head>
        <body>
            <h2>Edit Record</h2>
            
            <!-- Hidden div containing the edit form (displayed by default) -->
            <div id="editForm">
                <form method="POST" action="update.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    Full Name: <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>"><br>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    Birthdate: <input type="text" name="bday" value="<?php echo $row['bday']; ?>"><br>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    Age: <input type="text" name="age" value="<?php echo $row['age']; ?>"><br>
                    <input type="submit" value="Update">
                </form>
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