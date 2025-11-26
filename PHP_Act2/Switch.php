<?php 
//Napukaw, John Brent C.
//WD-203
//November 26, 2025

    $combo = 'Combo 1';
    $combo2 = 'Combo 2';
    $combo3 = 'Combo 3';

    $combos = [
        'Combo 1' => 69.99,
        'Combo 2' => 79.99,
        'Combo 3' => 10.99
    ];

    switch ($combo) {
        case 'Combo 1':
            $price = 5.99;
            break;
        case 'Combo 2':
            $price = 7.99;
            break;
        case 'Combo 3':
            $price = 9.99;
            break;
        default:
            $price = 0;
            break;
    }

    switch ($combo2) {
        case 'Combo 1':
            $price1 = 5.99;
            break;
        case 'Combo 2':
            $price1 = 7.99;
            break;
        case 'Combo 3':
            $price1 = 9.99;
            break;
        default:
            $price1 = 0;
            break;
    }

    switch ($combo3) {
        case 'Combo 1':
            $price2 = 5.99;
            break;
        case 'Combo 2':
            $price2 = 7.99;
            break;
        case 'Combo 3':
            $price2 = 9.99;
            break;
        default:
            $price2 = 0;
            break;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Activity in PHP</title>
    <link rel="stylesheet" href = "css/styles.css">
</head>
    <body>
        <?php include 'includes/header.php'; ?>
        <h1>Combo Store</h1>
        <h2>These are the combos and the Prices:</h2>
        <p>Combo 1: <?php echo $combos['Combo 1']; ?>PHP</p>
        <p>Combo 2: <?php echo $combos['Combo 2']; ?>PHP</p>
        <p>Combo 3: <?php echo $combos['Combo 3']; ?>PHP</p>
        <h2>Price of <?= $combo; ?></h2>
        <p><?= $price; ?></p>
        <h2>Price of <?= $combo2; ?></h2>
        <p><?= $price1; ?></p>
        <h2>Price of <?= $combo3; ?></h2>
        <p><?= $price2; ?></p>
    </body>
     <?php include 'includes/footer.php'; ?>
</html>
