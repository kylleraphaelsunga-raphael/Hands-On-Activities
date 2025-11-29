<!-- 
Name: Sunga, Kylle Raphael Y.
Block: WD 203
-->

<?php // ARRAYS & SHORTHAND ECHO
$shoes = [
    'Adidas' => ['Adidas Samba', 'Adidas Gazelle'
],
    'Nike' => ['Nike Air Force 1', 'Nike Dunk Low'
],
    'Puma' => ['Puma Palermo', 'Puma Speedcat'
],
    'New Balance' => ['NB 530', 'NB 1906r'
]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
    <link rel="stylesheet" href="css/assign_styles.css">
</head>
<body>

    <?php include 'includes/assign_header.php'; ?>

    <div class="parent">
        <div class="div1">
            <img src="img/shoes.jpg" alt="Left Side Shoe Image">
        </div>

        <div class="div2">
            <h1 class="title">Shoe Options</h1>

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
        </div>

        <div class="div3">
            <img src="img/shoes.jpg" alt="Right Side Shoe Image">
        </div>
    </div>

    <?php include 'includes/assign_footer.php'; ?>

</body>
</html>
