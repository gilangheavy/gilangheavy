<?php
for ($i = 1; $i < 50; $i++) :
    $x = $i % 3;
    $y = $i % 5;
    $z = $i % (3 * 5);
    if ($z == 0) :
        echo str_replace($i, "Fizz Buzz", $i);
    elseif ($y == 0) :
        echo str_replace($i, "Buzz", $i);
    elseif ($x == 0) :
        echo str_replace($i, "Fizz", $i);
    else :
        echo $i;
    endif;
    echo ", ";
endfor;
