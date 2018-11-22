<?php

function addition($a, $b)
{
    if ((is_int($a) != 1) || (is_int($b) != 1)) {
        throw new Exception("l’un des deux entiers n’est pas un nombre.");
    }
    echo $a+$b;

}

try {
    addition(10, 2);
    echo "<br>";
    addition(7, "a");
    
} catch (Exception $e) {
    echo $e->getMessage();
}
