<!-- 
TYPE JUGGLING | VARIABLES AND ARRAY
Name: Sunga, Kylle Raphael Y.
Block: WD 203
-->

<?php
$prices = [
    'Adidas Samba'       => 3500,
    'Adidas Gazelle'     => '3800',
    'Nike Air Force 1'   => 4500,
    'Nike Dunk Low'      => '4700',
    'Puma Suede'         => 3200,
    'Puma Speedcat'      => '3300',
    'NB 550'             => 4000,
    'NB 574'             => '4200'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Prices</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'includes/assign_header.php'; ?>

    <h1 class = "title">Shoe Prices</h1>

    <h2>Adidas</h2>
    <ul>
        <li>Adidas Samba: ₱<?= $prices['Adidas Samba'] ?></li>
        <li>Adidas Gazelle: ₱<?= $prices['Adidas Gazelle'] ?></li>
    </ul>

    <h2>Nike</h2>
    <ul>
        <li>Nike Air Force 1: ₱<?= $prices['Nike Air Force 1'] ?></li>
        <li>Nike Dunk Low: ₱<?= $prices['Nike Dunk Low'] ?></li>
    </ul>

    <h2>Puma</h2>
    <ul>
        <li>Puma Suede: ₱<?= $prices['Puma Suede'] ?></li>
        <li>Puma Speedcat: ₱<?= $prices['Puma Speedcat'] ?></li>
    </ul>

    <h2>New Balance</h2>
    <ul>
        <li>NB 530: ₱<?= $prices['NB 550'] ?></li>
        <li>NB 1906r: ₱<?= $prices['NB 574'] ?></li>
    </ul>

    <?php include 'includes/assign_ooter.php'; ?>

</body>
</html>
