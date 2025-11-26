<?php
$price = 57999;
$add = 4999;

$price1 = 79999;
$add1 = 5999;

$price2 = 108990;
$add2 = 6999;
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
        for ($i = 1; $i <= 3; $i++) {
            echo 'Avail ';
            echo $i;
            echo ' Iphone 17 with Offer 3: cost P';            
            echo ($price * $i) + $add2;
            echo '<br>';
        }
        ?>
    </p>

    <h2>Iphone 17 Pro</h2>
    <p>
        <?php 
        for ($i = 1; $i <= 3; $i++) {
            echo 'Avail ';
            echo $i;
            echo ' Iphone 17 Pro with Offer 2: cost P';            
            echo ($price * $i) + $add1;
            echo '<br>';
        }
        ?>
    </p>

    <h2>Iphone 17 Pro Max</h2>
    <p>
        <?php 
        for ($i = 1; $i <= 3; $i++) {
            echo 'Avail ';
            echo $i;
            echo ' Iphone 17 Pro Max with Offer 1: cost P';            
            echo ($price * $i) + $add;
            echo '<br>';
        }
        ?>
    </p>

    <?php include 'includes/SungaKylle_PhoneStore_Include.php'; ?>
</body>
</html>