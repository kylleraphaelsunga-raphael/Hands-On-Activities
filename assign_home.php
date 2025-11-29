<!-- 
Name: Sunga, Kylle Raphael Y.
Block: WD 203
-->

<?php  
// brands | ARRAYS & SHORTJAND ECHO
$brands = ['Adidas', 'Nike', 'Puma', 'New Balance'];

// Best Sellers| ARRAYS & SHORTHAND ECHO
$best_sellers = [
    'Adidas Samba', 'Nike Air Force 1', 'Puma Suede', 'NB 530'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raphael's KicksLab</title>
    <link rel="stylesheet" href="css/assign_styles.css">
</head>
<body>

    <?php include 'includes/assign_header.php'; ?>

    <div class="parent">
        <div class="div1">
            <img src="img/shoes.jpg" alt="Left Side Shoe Image">
        </div>

        <div class="div2">
            <h1>Welcome to Raphael's KicksLab!</h1>
            <p>We provide a wide variety of high-quality sneakers for style, comfort, and performance. Find your perfect pair today!</p>

            <h2>Our Brands</h2>
            <ul>
                <li><?= $brands[0] ?></li>
                <li><?= $brands[1] ?></li>
                <li><?= $brands[2] ?></li>
                <li><?= $brands[3] ?></li>
            </ul>

            <h2>Best Sellers</h2>
            <ul>
                <li><?= $best_sellers[0] ?></li>
                <li><?= $best_sellers[1] ?></li>
                <li><?= $best_sellers[2] ?></li>
                <li><?= $best_sellers[3] ?></li>
            </ul>
        </div>

        <div class="div3">
            <img src="img/shoes.jpg" alt="Right Side Shoe Image">
        </div>
    </div>

    <?php include 'includes/assign_footer.php'; ?>

</body>
</html>

