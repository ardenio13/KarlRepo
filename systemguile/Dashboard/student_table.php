<?php
require_once('../fetch_tables/fetch_data_tbl.php');

// Check if $result is set
if (isset($result)) {
    if ($result->num_rows > 0) {
        // Start the HTML document
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Database Table</title>
            <link rel="stylesheet" href="student_table_style.css">
        </head>
        <body>
            <table>
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
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
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

                    // Edit button
                    echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a></td>";

                    // Delete button
                    echo "<td><a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
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