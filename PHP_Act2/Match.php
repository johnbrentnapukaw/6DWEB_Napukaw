<?php 
//Napukaw, John Brent C.
//WD-203
//November 26, 2025

    $combo = 'Combo 1';
    $combo2 = 'Combo 2';
    $combo3 = 'Combo 3';
    $combo4 = 'Combo 4';
    $combo5 = 'Combo 5';
    $combo6 = 'Combo 6';

    $combos = [
        'Combo 1' => 5.99,
        'Combo 2' => 7.99,
        'Combo 3' => 9.99,
        'Combo 4' => 11.99,
        'Combo 5' => 13.99,
        'Combo 6' => 15.99
    ];

    $price = match ($combo) {
        'Combo 1' => $combos['Combo 1'],
        'Combo 2' => $combos['Combo 2'],
        'Combo 3' => $combos['Combo 3'],
        'Combo 4' => $combos['Combo 4'],
        'Combo 5' => $combos['Combo 5'],
        'Combo 6' => $combos['Combo 6'],
        default => 0,
    };

    $price2 = match ($combo2) {
        'Combo 1' => $combos['Combo 1'],
        'Combo 2' => $combos['Combo 2'],
        'Combo 3' => $combos['Combo 3'],
        'Combo 4' => $combos['Combo 4'],
        'Combo 5' => $combos['Combo 5'],
        'Combo 6' => $combos['Combo 6'],
        default => 0,
    };

    $price3 = match ($combo3) {
        'Combo 1' => $combos['Combo 1'],
        'Combo 2' => $combos['Combo 2'],
        'Combo 3' => $combos['Combo 3'],
        'Combo 4' => $combos['Combo 4'],
        'Combo 5' => $combos['Combo 5'],
        'Combo 6' => $combos['Combo 6'],
        default => 0,
    };

    $price4 = match ($combo4) {
        'Combo 1' => $combos['Combo 1'],
        'Combo 2' => $combos['Combo 2'],
        'Combo 3' => $combos['Combo 3'],
        'Combo 4' => $combos['Combo 4'],
        'Combo 5' => $combos['Combo 5'],
        'Combo 6' => $combos['Combo 6'],
        default => 0,
    };

    $price5 = match ($combo5) {
        'Combo 1' => $combos['Combo 1'],
        'Combo 2' => $combos['Combo 2'],
        'Combo 3' => $combos['Combo 3'],
        'Combo 4' => $combos['Combo 4'],
        'Combo 5' => $combos['Combo 5'],
        'Combo 6' => $combos['Combo 6'],
        default => 0,
    };

    $price6 = match ($combo6) {
        'Combo 1' => $combos['Combo 1'],
        'Combo 2' => $combos['Combo 2'],
        'Combo 3' => $combos['Combo 3'],
        'Combo 4' => $combos['Combo 4'],
        'Combo 5' => $combos['Combo 5'],
        'Combo 6' => $combos['Combo 6'],
        default => 0,
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match Activity in PHP</title>
    <link rel="stylesheet" href = "css/styles.css">
</head>
    <body>
        <?php include 'includes/header.php'; ?>
        <h1>Weapons Store</h1>
        <h2>These are the combos and the Prices:</h2>
        <p>Combo 1: <?php echo $combos['Combo 1']; ?>PHP</p>
        <p>Combo 2: <?php echo $combos['Combo 2']; ?>PHP</p>
        <p>Combo 3: <?php echo $combos['Combo 3']; ?>PHP</p>
        <p>Combo 4: <?php echo $combos['Combo 4']; ?>PHP</p>
        <p>Combo 5: <?php echo $combos['Combo 5']; ?>PHP</p>
        <p>Combo 6: <?php echo $combos['Combo 6']; ?>PHP</p>
        <h2>Price of <?= $combo; ?></h2>
        <p><?= $price; ?></p>
        <h2>Price of <?= $combo2; ?></h2>
        <p><?= $price2; ?></p>
        <h2>Price of <?= $combo3; ?></h2>
        <p><?= $price3; ?></p> 
        <h2>Price of <?= $combo4; ?></h2>
        <p><?= $price4; ?></p>
        <h2>Price of <?= $combo5; ?></h2>
        <p><?= $price5; ?></p>
        <h2>Price of <?= $combo6; ?></h2>
        <p><?= $price6; ?></p>
    </body>
     <?php include 'includes/footer.php'; ?>
</html>
