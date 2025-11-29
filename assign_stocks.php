<!-- 
Name: Sunga, Kylle Raphael Y.
Block: WD 203
-->

<?php  
// STOCKS
$adidas_stock = 20;
$nike_stock = 15;
$puma_stock = 10;
$nb_stock = 12;

// SOLD
$adidas_sold = 5;
$nike_sold = 3;
$puma_sold = 2;
$nb_sold = 4;

// EXPRESSIONS AND OPERATORS
$adidas_remain = $adidas_stock - $adidas_sold;
$nike_remain   = $nike_stock - $nike_sold;
$puma_remain   = $puma_stock - $puma_sold;
$nb_remain     = $nb_stock - $nb_sold;

// ARRAY
$brands = ["Adidas", "Nike", "Puma", "New Balance"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Stocks (Beginner Version)</title>
    <link rel="stylesheet" href="css/assign_styles.css">
</head>
<body>

<?php include 'includes/assign_header.php'; ?>

<div class="parent">

    <div class="div1">
        <img src="img/shoes.jpg" alt="Left Shoe Image">
    </div>

    <div class="div2">

        <h1>Shoe Stocks</h1>

        <table>
            <tr>
                <th>Brand</th>
                <th>Remaining Stock</th>
                <th>Status</th>
                <th>Available Colors</th>
            </tr>

            <?php  
            // FOREACH LOOP
            foreach ($brands as $brand) {

                // IF ELSE IF 
                if ($brand == "Adidas") {
                    $remain = $adidas_remain;
                    $color  = "Black / White";
                }
                elseif ($brand == "Nike") {
                    $remain = $nike_remain;
                    $color  = "Black";
                }
                elseif ($brand == "Puma") {
                    $remain = $puma_remain;
                    $color  = "Black / White";
                }
                else {
                    $remain = $nb_remain;
                    $color  = "Gray / White";
                }

                // STOCK STATUS
                if ($remain >= 15) {
                    $status = "Plenty in stock";
                } 
                elseif ($remain >= 8) {
                    $status = "Moderate stock";
                } 
                else {
                    $status = "Low stock";
                }
            ?>

            <tr>
                <td><?= $brand ?></td>
                <td><?= $remain ?></td>
                <td><?= $status ?></td>
                <td><?= $color ?></td>
            </tr>

            <?php } ?>
        </table>

        <?php  
        $total = $adidas_remain + $nike_remain + $puma_remain + $nb_remain;
        echo "<p>Total remaining stock: $total</p>";
        ?>

    </div>

    <div class="div3">
        <img src="img/shoes.jpg" alt="Right Shoe Image">
    </div>

</div>

<?php include 'includes/assign_footer.php'; ?>

</body>
</html>
