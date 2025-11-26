<?php
//Iphone 17
$phone = 'Iphone 17';

switch ($phone) {
    case 'Iphone 17':
        $price = 'P57,999';
        $offer = '10% Student Discount';
        break;
    case 'Iphone 17 Pro':
        $price1 = 'P79,999';
        $offer1 = '10% Student Discount';
        break;
    case 'Iphone 17 Pro Max':
        $price2 = 'P108,990';
        $offer2 = '10% Student Discount';
        break;
}

//Iphone 17 Pro
$phone = 'Iphone 17 Pro';

switch ($phone) {
    case 'Iphone 17':
        $price = 'P57,999';
        $offer = '10% Student Discount';
        break;
    case 'Iphone 17 Pro':
        $price1 = 'P79,999';
        $offer1 = '10% Student Discount';
        break;
    case 'Iphone 17 Pro Max':
        $price2 = 'P108,990';
        $offer2 = '10% Student Discount';
        break;
}

//Iphone 17 Pro Max
$phone = 'Iphone 17 Pro Max';

switch ($phone) {
    case 'Iphone 17':
        $price = 'P57,999';
        $offer = '10% Student Discount';
        break;
    case 'Iphone 17 Pro':
        $price1 = 'P79,999';
        $offer1 = '10% Student Discount';
        break;
    case 'Iphone 17 Pro Max':
        $price2 = 'P108,990';
        $offer2 = '10% Student Discount';
        break;
}
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
    <p>The Price of Iphone 17: <?= $price ?></p>
    <p>Buy now to avail the special offer: <?= $offer ?></p>

    <h2>Iphone 17 Pro </h2>
    <p>The Price of Iphone 17 Pro: <?= $price1 ?></p>
    <p>Buy now to avail the special offer: <?= $offer1 ?></p>

    <h2>Iphone 17 Pro Max</h2>
    <p>The Price of Iphone 17 Pro Max: <?= $price2 ?></p>
    <p>Buy now to avail the special offer: <?= $offer2 ?></p>

    <?php include 'includes/SungaKylle_PhoneStore_Include.php'; ?>

</body>
</html>