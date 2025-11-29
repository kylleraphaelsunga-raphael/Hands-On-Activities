<!-- 
EXPRESSIONS AND OPERATIONS
Name: Sunga, Kylle Raphael Y.
Block: WD 203
-->

<?php  
//stocks
$adidas_stock = 20;
$nike_stock = 15;
$puma_stock = 10;
$nb_stock = 12;

//sold
$adidas_sold = 5;
$nike_sold = 3;
$puma_sold = 2;
$nb_sold = 4;

//remains
$adidas_remain = $adidas_stock - $adidas_sold;
$nike_remain = $nike_stock - $nike_sold;
$puma_remain = $puma_stock - $puma_sold;
$nb_remain = $nb_stock - $nb_sold;

//total
$total_stock = $adidas_remain + $nike_remain + $puma_remain + $nb_remain;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Stocks</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'includes/assign_header.php'; ?>

    <h1>Shoe Stocks</h1>

    <ul>
        <li>Adidas remaining: <?= $adidas_remain ?></li>
        <li>Nike remaining: <?= $nike_remain ?></li>
        <li>Puma remaining: <?= $puma_remain ?></li>
        <li>New Balance remaining: <?= $nb_remain ?></li>
    </ul>

    <p>Total remaining stock: <?= $total_stock ?></p>

    <?php include 'includes/assign_footer.php'; ?>

</body>
</html>
