<?php
// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the number from POST request
    $number = isset($_POST["number"]) ? intval($_POST["number"]) : 0;

    // Output the HTML with Bootstrap CSS
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Multiplication Table</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body class='p-5'>
    <div class='container'>
        <h2 class='text-center mb-4'>Multiplication Table</h2>";

    // Start the table
    echo "<table class='table table-bordered'>";
    echo "<thead><tr><th>*</th>"; 
    for ($col = 1; $col <= $number; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr></thead>";
    echo "<tbody>";

    // Generate table rows
    for ($row = 1; $row <= $number; $row++) {
        echo "<tr>"; // Start a new row

        // Table header for the current row
        echo "<th>$row</th>";

        // Generate table columns for the current row
        for ($col = 1; $col <= $number; $col++) {
            $result = $row * $col; // Calculate multiplication result
            echo "<td>$result</td>"; // Output result in a table cell
        }
        echo "</tr>"; 
    }
    echo "</tbody>";
    echo "</table>"; 

    echo "</div></body></html>";
}
?>
