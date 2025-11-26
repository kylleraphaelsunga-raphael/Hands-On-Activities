<?php
$packs = 5;
$packs1 = 5;
$packs2 = 5;

$price = 57999;
$add = 4999;

$price1 = 79999;
$add1 = 4999;

$price2 = 108990;
$add2 = 4999;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="BasicPHP1/css/styles.css">
</head>
<body>
    <h1>Phone Store</h1>
    <h2>Available Phones:</h2>

    <h2>Iphone 17</h2>
    <p>
        <?php
        do {
            echo $packs;
            echo ' package cost P';
            echo ($price * $packs) + $add;
            echo '<br>';
            $packs--;
        } while ($packs > 0);
        ?>
    </p>

    <h2>Iphone 17 Pro </h2>
    <p>
        <?php
        do {
            echo $packs1;
            echo ' package cost P';
            echo ($price1 * $packs1) + $add1;
            echo '<br>';
            $packs1--;
        } while ($packs1 > 0);
        ?>
    </p>

    <h2>Iphone 17 Pro Max</h2>
    <p>
        <?php
        do {
            echo $packs2;
            echo ' package cost P';
            echo ($price2 * $packs2) + $add2;
            echo '<br>';
            $packs2--;
        } while ($packs2 > 0);
        ?>
    </p>

    <?php include 'includes/SungaKylle_PhoneStore_Include.php'; ?>

</body>
</html>