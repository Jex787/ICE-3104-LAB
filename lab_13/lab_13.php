<!DOCTYPE html>
<html>

<head>
    <title>Chess Board</title>
</head>

<body>

    <?php
    // Start table
    echo "<table border='1' cellpadding='0' cellspacing='0' width='400px'>";

    // Loop to create 8 rows
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";

        // Loop to create 8 columns
        for ($col = 1; $col <= 8; $col++) {
            // Check if the sum of the row and column number is even or odd
            if (($row + $col) % 2 == 0) {
                // Even sum means white square
                echo "<td height='50px' width='50px' bgcolor='#FFFFFF'></td>";
            } else {
                // Odd sum means black square
                echo "<td height='50px' width='50px' bgcolor='#000000'></td>";
            }
        }

        echo "</tr>";
    }

    // End table
    echo "</table>";
    ?>

</body>

</html>