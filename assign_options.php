<!-- 
VARIABLE AND ARRAYS
Name: Sunga, Kylle Raphael Y.
Block: WD 203
-->

<?php  
$shoes = [
    'Adidas' => ['Adidas Samba', 'Adidas Gazelle'],
    'Nike' => ['Nike Air Force 1', 'Nike Dunk Low'],
    'Puma' => ['Puma Suede', 'Puma Speedcat'],
    'New Balance' => ['NB 550', 'NB 574']
];

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

    <h1 class = "title" >Shoe Options</h1>

    <h2>Adidas</h2>
    <ul>
        <li><?= $shoes['Adidas'][0] ?></li>
        <li><?= $shoes['Adidas'][1] ?></li>
    </ul>

    <h2>Nike</h2>
    <ul>
        <li><?= $shoes['Nike'][0] ?></li>
        <li><?= $shoes['Nike'][1] ?></li>
    </ul>

    <h2>Puma</h2>
    <ul>
        <li><?= $shoes['Puma'][0] ?></li>
        <li><?= $shoes['Puma'][1] ?></li>
    </ul>

    <h2>New Balance</h2>
    <ul>
        <li><?= $shoes['New Balance'][0] ?></li>
        <li><?= $shoes['New Balance'][1] ?></li>
    </ul>

    <?php include 'includes/assign_footer.php'; ?>

</body>
</html>