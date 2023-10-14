<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php
        require_once('../fetch_tables/fetch_data_tbl.php');

        $student_view_info = "SELECT college, course FROM educbg_tbl WHERE student_id = '$student_id'";
        $student_result = mysqli_query($conn, $student_view_info);

        $colleges = [];
        $courses = [];

        while ($student_info_row = mysqli_fetch_assoc($student_result)) {
            $colleges[] = $student_info_row['college'];
            $courses[] = $student_info_row['course'];
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Create a query to retrieve the record with the specified ID
            $query = "SELECT * FROM data_tbl WHERE id = $id";

            // Execute the query
            $result = $conn->query($query);

            if ($result->num_rows == 1) {
                // Fetch the record as an associative array
                $row = $result->fetch_assoc();

                echo "<h2>Viewing Record ID: " . $row['id'] . "</h2>";
                echo "<p>Full Name: " . $row['fullname'] . "</p>";
                echo "<p>Birthdate: " . $row['bday'] . "</p>";
                echo "<p>Age: " . $row['age'] . "</p>";
                echo "<p>Gender: " . $row['gender'] . "</p>";
                echo "<p>Contact: " . $row['contact'] . "</p>";
                echo "<p>Email: " . $row['email'] . "</p>";
                echo "<p>Elementary School: " . $row['elem'] . "</p>";
                echo "<p>Junior High School: " . $row['junior'] . "</p>";
                echo "<p>Senior High School: " . $row['senior'] . "</p>";
                echo "<p>Baranggay: " . $row['baranggay'] . "</p>";
                echo "<p>ZIP Code: " . $row['zip'] . "</p>";
                echo "<p>Street: " . $row['street'] . "</p>";
                echo "<p>City: " . $row['city'] . "</p>";
                echo "<p>Province: " . $row['province'] . "</p>";
                echo "<p>Student ID: " . $row['student_id'] . "</p>";

                // Display "college" and "course" separately
                echo "<p>College: " . implode(', ', $colleges) . "</p>";
                echo "<p>Course: " . implode(', ', $courses) . "</p>";

                echo "<p><a href='student_table.php'>Back to Table</a></p>";
            } else {
                echo "Record not found.";
            }
        } else {
            echo "Invalid request.";
        }

        $conn->close();
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>