<?php
    //Integer Data Type

    $name="Avishka";
    echo "{$name}<br>";
    echo "Hello {$name}<br>";

    $food="pizza";
    echo "You like{$food}<br>";

    $email = "fake@gmail.com";
    echo"Your email is {$email}<br>";

    //Integer Data Type

    $age = 21;
    $users = 2;
    $quantity = 3;

    echo"You are {$age} years old<br>";
    echo"There are {$users} online!<br>";
    echo"Do you like to buy {$quantity} of items<br>";

    //Float Data Type
    $price = 4.99;
    echo"Your pizza is {$price}.<br>";
    echo"Your pizza is \${$price}.<br>";

    //We can declare a variable and assign a value to it later by using "null".
    $total = null;

    echo"You have orderd {$quantity} x {$food}s<br>";
    $total = $quantity * $price;
    echo"Your total is \${$total}.<br>";


?>