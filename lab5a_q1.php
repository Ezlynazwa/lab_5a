<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Details</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <?php
    // Define variables with your details
    $name = "Nur Ezlyn Azwa Binti Lah";
    $matric_number = "AI220213";
    $course = "Software ENgineering";
    $year_of_study = "Third Year";
    $address = "Kampung Seberang Merbau, Repek, 17070 Pasir Mas, Kelantan";
    ?>

    <!-- Display details in an HTML table -->
    <table>
        <thead>
            <tr>
                <th>Detail</th>
                <th>Information</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo $matric_number; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo $course; ?></td>
            </tr>
            <tr>
                <td>Year of Study</td>
                <td><?php echo $year_of_study; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
