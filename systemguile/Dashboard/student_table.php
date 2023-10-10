<?php
require_once('../fetch_tables/fetch_data_tbl.php');

// Check if $result is set
if (isset($result)) {
    if ($result->num_rows > 0) {
        // Start the HTML document
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Student Details</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        </head>
        <body>
            <div class="container" style="margin-right: 520px;">
                <h2>Student Details</h2>
                <form>
                    <div class="input-group" style="padding:10px;">
                        <input type="text" class="form-control" id="searchInput" placeholder="Search for a student">
                        <span class="input-group-btn">
                        </span>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>fullname</th>
                            <th>bday</th>
                            <th>age</th>
                            <th>gender</th>
                            <th>contact</th>
                            <th>email</th>
                            <th>elem</th>
                            <th>junior</th>
                            <th>senior</th>
                            <th>baranggay</th>
                            <th>zip</th>
                            <th>street</th>
                            <th>city</th>
                            <th>province</th>
                            <th>student_id</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="searchResults">
                        <?php
                        // Loop through the rows and display data
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['fullname'] . "</td>";
                            echo "<td>" . $row['bday'] . "</td>";
                            echo "<td>" . $row['age'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo "<td>" . $row['contact'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['elem'] . "</td>";
                            echo "<td>" . $row['junior'] . "</td>";
                            echo "<td>" . $row['senior'] . "</td>";
                            echo "<td>" . $row['baranggay'] . "</td>";
                            echo "<td>" . $row['zip'] . "</td>";
                            echo "<td>" . $row['street'] . "</td>";
                            echo "<td>" . $row['city'] . "</td>";
                            echo "<td>" . $row['province'] . "</td>";
                            echo "<td>" . $row['student_id'] . "</td>";

                            // View button
                            echo "<td><a class='btn btn-success' href='view.php?id=" . $row['id'] . "'><i class='glyphicon glyphicon-eye'></i>View</a></td>";

                            // Edit button
                            echo "<td><a class='btn btn-primary' href='edit.php?id=" . $row['id'] . "'><i class='glyphicon glyphicon-pencil'></i>Edit</a></td>";

                            // Delete button
                            echo "<td><a class='btn btn-danger' href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this record?\");'><i class='glyphicon glyphicon-trash'></i>Delete</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="#"><i class='glyphicon glyphicon-plus'></i>Add student</a>
            </div>

            <script>
                $(document).ready(function () {
                    $('#searchInput').on('input', function () {
                        // Get the search query from the input field
                        var search = $(this).val();

                        // Send an AJAX request to the PHP script for live searching
                        $.ajax({
                            type: 'GET',
                            url: 'search.php',
                            data: { search: search },
                            success: function (data) {
                                // Update the results table with the retrieved data
                                $('#searchResults').html(data);
                            }
                        });
                    });
                });
            </script>
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