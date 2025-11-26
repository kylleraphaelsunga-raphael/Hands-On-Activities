<?php 
//Iphone 17
$offer = 'Offer 1';
$deals = match($offer) {
    'Offer 1' => 'Charger Adaptor, Chord and Wired Earphones',
    'Offer 2' => 'Charger Adaptor, Chord, Wired Earphones and Iphone Case',
    'Offer 3' => 'Charger Adaptor, Chord, Wired Earphones and Speaker',
}
?>

<?php 
//Iphone 17 Pro
$offer1 = 'Offer 2';
$deals1 = match($offer1) {
    'Offer 1' => 'Charger Adaptor, Chord and Wired Earphones',
    'Offer 2' => 'Charger Adaptor, Chord, Wired Earphones and Iphone Case',
    'Offer 3' => 'Charger Adaptor, Chord, Wired Earphones and Speaker',
}
?>

<?php 
//Iphone 17 Pro Max
$offer2 = 'Offer 3';
$deals2 = match($offer2) {
    'Offer 1' => 'Charger Adaptor, Chord and Wired Earphones',
    'Offer 2' => 'Charger Adaptor, Chord, Wired Earphones and Iphone Case',
    'Offer 3' => 'Charger Adaptor, Chord, Wired Earphones and Speaker',
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
    <p>Offer Choices:</p>
    <p>Add 4999 to get: <?= $offer ?></p>
    <p>Package for: <?= $deals ?></p>

    <h2>Iphone 17 Pro </h2>
    <p>Offer Choices:</p>
    <p>Add 5999 to get: <?= $offer1 ?></p>
    <p>Package for: <?= $deals1 ?></p>

    <h2>Iphone 17 Pro Max</h2>
    <p>Offer Choices:</p>
    <p>Add 6999 to get: <?= $offer2 ?></p>
    <p>Package for: <?= $deals2 ?></p>

    <?php include 'includes/SungaKylle_PhoneStore_Include.php'; ?>

</body>
</html>