<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$oddEven = readline();

$oddEven = explode(",",$oddEven);

$oddSum = 0;

$evenSum = 0;

foreach ($oddEven as $item) {
    if($item % 2 == 0){
        $evenSum = $evenSum + $item;
    }
    else{
        $oddSum = $oddSum + $item;
    }
}

echo "$oddSum $evenSum"


?>