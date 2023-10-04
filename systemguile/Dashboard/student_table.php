<?php
require_once('../fetch_tables/fetch_data_tbl.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Database Table</title>
    <link rel ="stylesheet" href ="student_table_style.css">
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
        </tr>
        <?php
        //fetch data from  database 
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
            echo "<td><button href='edit.php?id=" . $row['id'] . "'>Edit</button></td>";

            // Delete button
            echo "<td><button href='delete.php?id=" . $row['id'] . "'>Delete</button></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>