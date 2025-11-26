<?php
//Napukaw, John Brent C.
//WD-203
//November 26, 2025
    $counter = 1;
    $meal = 3.99;
    $drinks = 2.99;
    $dessert = 1.99;
    $combo1 = $meal + $drinks;
    $combo2 = $meal + $dessert;
    $combo3 = $meal + $drinks + $dessert;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop Activity in PHP</title>
    <link rel="stylesheet" href = "css/styles.css">
</head>
    <body>
        <?php include 'includes/header.php'; ?>
        <h1>Combo Store</h1>
        <h2>Items:</h2>
        <p>Meal: <?php echo $meal; ?>PHP</p>
        <p>Drinks: <?php echo $drinks; ?>PHP</p>
        <p>Dessert: <?php echo $dessert; ?>PHP</p>
        <h2>These are the Costs Per Combos:</h2>
         <h2>Combos:</h2>
        <?php
        while($counter <= 3){
            echo "Combo ";
            echo $counter;
            echo " - Price: ";
            if($counter == 1){
                echo $combo1;
            } elseif($counter == 2){
                echo $combo2;
            } elseif($counter == 3){
                echo $combo3;
            }
            echo "<br>";
            $counter++;
        }
        ?>
    </body>
    <?php include 'includes/footer.php'; ?>
</html>
