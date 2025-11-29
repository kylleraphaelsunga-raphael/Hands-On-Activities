<!-- 
Name: Sunga, Kylle Raphael Y.
Block: WD 203
-->

<?php //TYPE JUGGLING & ARRAY
$shoes = [
    'Adidas' => [
        'Adidas Samba' => 6800,
        'Adidas Gazelle' => '6000' ],
    'Nike' => [
        'Nike Air Force 1' => 5895,
        'Nike Dunk Low' => '5895' ],
    'Puma' => [
        'Puma Palermo' => 6200,
        'Puma Speedcat' => '7100' ],
    'New Balance' => [
        'New Balance 550' => 6295,
        'New Balance 1906r' => '9795' ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raphael's KicksLab Prices</title>
    <link rel="stylesheet" href="css/assign_styles.css">
</head>
<body>

    <?php include 'includes/assign_header.php'; ?>

    <div class="parent">
        <div class="div1">
            <img src="img/shoes.jpg" alt="Left Side Shoe Image">
        </div>

        <!-- FOREACH LOOP -->
        <div class="div2">
            <h1 class="title">Shoe Prices</h1>

            <?php foreach($shoes as $brand => $brandShoes) {  ?>
                <h2><?= $brand ?></h2>
                <table>
                    <tr>
                        <th>Shoe</th>
                        <th>Price (₱)</th>
                    </tr>
                    <?php foreach($brandShoes as $shoe => $price) { ?>
                        <tr>
                            <td><?= $shoe ?></td>
                            <td><?= $price ?></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>
        </div>

        <div class="div3">
            <img src="img/shoes.jpg" alt="Right Side Shoe Image">
        </div>
    </div>

    <?php include 'includes/assign_footer.php'; ?>

</body>
</html>

