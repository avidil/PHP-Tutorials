<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pizza ordering form.php" method="post">
        <label>Quantity<input type="text" name="qntt"></label>
        <input type="submit" value="Total">
    </form>
</body>
</html>

<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["qntt"];
    $total = $quantity*$price;

    echo"You have orderd {$quantity} x {$item}'s";
    echo"Your total is RS.{$total}";
?>