<?php
// 1: STRICT TYPES
declare(strict_types = 1);

// 2: MULTIDIMENSIONAL ARRAY
$products = [
    "Adida Samba" => ["price" => 6800.00, "stock" => 9],
    "Adida Gazelle" => ["price" => 6000.00, "stock" => 13],
    "Nike Air Force 1" => ["price" => 5895.00, "stock" => 15],
    "Nike Dunk Low" => ["price" => 5895.00, "stock" => 9],
    "Puma Palermo" => ["price" => 6200.00, "stock" => 2],
    "Puma Speedcat" => ["price" => 7100.00, "stock" => 10],
    "New Balance 550" => ["price" => 6295.00, "stock" => 16],
    "New Balance 1906r" => ["price" => 9795.00, "stock" => 18]
];

// 3: GLOBAL VARIABLE
$rate = 12; // TAXRATE

// 4&5: GET ORDER : TERNARY OPERATOR
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

// 6&7: TOTAL VALUE : RETURN PRICE * QUANTITY
function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

// 8&9: TAX DUE : RETURN TOTAL TAX
function get_tax_due(float $price, int $quantity, int $tax = 0): float {
    return ($price * $quantity) * ($tax / 100);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raphael's KicksLab Stocks</title>
    <link rel="stylesheet" href="css/assign_styles.css">
</head>
<body>

    <?php include 'includes/assign_header.php'; ?>

    <div class="parent">

        <div class="div1">
            <img src="img/shoes.jpg" alt="Left Shoe Image">
        </div>

        <div class="div2">
            <h1>Shoe Inventory Summary</h1>

            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Stock Level</th>
                    <th>Reorder?</th>
                    <th>Total Stock Value</th>
                    <th>Tax Due</th>
                </tr>

                <!-- FOREACH LOOP -->
                <?php foreach ($products as $product_name => $data) { ?>

                <tr>
                    <td><?php echo $product_name; ?></td>
                    <td><?php echo $data["stock"]; ?></td>
                    <td><?php echo get_reorder_message($data["stock"]); ?></td>
                    <td><?php echo get_total_value($data["price"], $data["stock"]); ?></td>
                    <td><?php echo get_tax_due($data["price"], $data["stock"], $rate); ?></td>
                </tr>

                <?php } ?>
            </table>
        </div>

        <div class="div3">
            <img src="img/shoes.jpg" alt="Right Shoe Image">
        </div>
    </div>

    <?php include 'includes/assign_footer.php'; ?>

</body>
</html>
