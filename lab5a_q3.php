<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <?php
    // Define the multiplication function
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    // Call the function with the desired multiplier (e.g., 2)
    $tableData = multiplication(2);
    ?>

    <!-- Create the HTML table -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the table data and display rows
            foreach ($tableData as $row) {
                echo "<tr>";
                echo "<td>{$row['no']}</td>";
                echo "<td>{$row['multiplier']}</td>";
                echo "<td>{$row['answer']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
