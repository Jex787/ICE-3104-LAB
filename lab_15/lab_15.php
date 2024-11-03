<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Table Example</title>
</head>

<body>
    <h2>Displaying Strings and Values in a Table</h2>

    <?php
    $name = "John Doe";
    $age = 25;
    $city = "New York";

    echo "<table border ='1'>
            <tr>
                <th>Label</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td>" . $name . "</td>
            </tr>
            <tr>
                <td>Age</td>
                <td>" . $age . "</td>
            </tr>
            <tr>
                <td>City</td>
                <td>" . $city . "</td>
            </tr>
          </table>";
    ?>
</body>

</html>