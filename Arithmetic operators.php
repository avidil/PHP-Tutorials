<?php

    $x = 10;
    $y = 2;

    $z = $x+$y;
    $zz = $x-$y;

    echo "Addition is: {$z}<br>";
    echo"Substraction is {$zz}<br>";

    //Increment 

    $count = 0;
    $count = $count+1;
    echo"{$count} <br>";
    $count++;
    echo "{$count}<br>";
    $count+=2;
    echo "{$count}<br>";


    //Decrement

    $count = $count-1;;
    echo"{$count}<br>";
    $count--;
    echo"Now count is {$count}<br>";
    $count-=2;
    echo"{$count}<br>";
    $count--;
    echo $count;


?>