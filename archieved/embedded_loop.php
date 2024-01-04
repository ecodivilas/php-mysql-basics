<?php

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product){ ?>
            
            <h3><?php echo $product['name']; ?></h3>
            <p>£ <?php echo $product['price']; ?></p>

        <?php } ?>
    </ul>
</body>
</html>
