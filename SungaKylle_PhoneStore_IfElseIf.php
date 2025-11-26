<?php
//Iphone 17
$stock = 3;
$ordered = 2;

if ($stock > 1){
    $message = 'In Stock';
} elseif ($ordered > 0){
    $message = 'Waiting for Restock';
} else {
    $message = 'SoldOut';
}

//Iphone 17 Pro
$stock1 = 0;
$ordered1 = 2;

if ($stock1 > 1){
    $message1 = 'In Stock';
} elseif ($ordered1 > 0){
    $message1 = 'Waiting for Restock';
} else {
    $message1 = 'SoldOut';
}

//Iphone 17 Pro max
$stock2 = 0;
$ordered2 = 0;

if ($stock2 > 1){
    $message2 = 'In Stock';
} elseif ($ordered2 > 0){
    $message2 = 'Waiting for Restock';
} else {
    $message2 = 'SoldOut';
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
    <p><?= $message ?></p>
    <h2>Iphone 17 Pro </h2>
    <p><?= $message1 ?></p>
    <h2>Iphone 17 Pro Max</h2>
    <p><?= $message2 ?></p>

    <?php include 'includes/SungaKylle_PhoneStore_Include.php'; ?>

</body>
</html>