<?php
//Napukaw, John Brent C.
//WD-203
//November 26, 2025 
$name = "John Brent C. Napukaw";
$course = "WD-203";
$greting = "Hello, World!";

if ($name !== '') {
    $greeting = "Hello, $name from $course!";
} else {
    $greeting = $greting;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else Conditional</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <h1>Combo Store</h1>
    <h2>Greeting Message:</h2>
    <p><?php echo $greeting; ?></p>
</body>
    <?php include 'includes/footer.php'; ?>
</html>