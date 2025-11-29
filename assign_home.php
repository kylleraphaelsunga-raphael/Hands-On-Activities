<!-- 
SHORTHAND ECHO | VARIABLES AND ARRAYS
Name: Sunga, Kylle Raphael Y.
Block: WD 203
-->

<?php  
//shoe brands
$brands = ['Adidas', 'Nike', 'Puma', 'New Balance'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'includes/assign_header.php'; ?>

    <h1 class="title">Welcome to Raphael's Shoe Store</h1>

    <h2>Available Shoe Brands</h2>
    <ul>
        <li><?= $brands[0] ?></li>
        <li><?= $brands[1] ?></li>
        <li><?= $brands[2] ?></li>
        <li><?= $brands[3] ?></li>
    </ul>

    <?php include 'includes/assign_footer.php'; ?>

</body>
</html>
