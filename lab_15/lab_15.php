<!DOCTYPE html>
<html>

<head>
    <title>Display String in a Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <?php
    // Define the data
    $title = "Product List";
    $products = [
        ["Product Name" => "Apple", "Price" => 1.5, "Quantity" => 10],
        ["Product Name" => "Banana", "Price" => 0.5, "Quantity" => 20],
        ["Product Name" => "Orange", "Price" => 1.0, "Quantity" => 15],
    ];

    // Display the title
    echo "<h2>$title</h2>";

    // Start the table
    echo "<table>";
    echo "<tr><th>Product Name</th><th>Price</th><th>Quantity</th></tr>";

    // Loop through the data and create table rows
    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>" . $product['Product Name'] . "</td>";
        echo "<td>" . $product['Price'] . "</td>";
        echo "<td>" . $product['Quantity'] . "</td>";
        echo "</tr>";
    }

    // End the table
    echo "</table>";
    ?>

</body>

</html>