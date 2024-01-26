<?php

$a = (int)readline();
$b = (int)readline();

$small = 0;
$big = 0;
$isTie = false;
function factor($n)
{
    $total = 1;
    for ($i = 1; $i <= $n; $i++) {
        $total = $total * $i;
    }

    return $total;
}

if ($a > $b) {
    $small = $b;
    $big = $a;
} else if ($a == $b) {
    echo "?\n";
    $isTie = true;

} else {
    $small = $a;
    $big = $b;
}

$array = [];

for ($j = $small; $j <= $big; $j++) {

    $isPrime = true;

    if ($j <= 1) {
        $isPrime = false;
    }
    for ($i = 2; $i <= $j / 2; $i++) {
        if ($j % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime == true) {
        array_push($array, $j);
    }
}

$objectNumber = count($array)*2-1;

$r = count($array);

$possibleAnswers = factor($objectNumber) / (factor($r) * factor($objectNumber - $r));

echo $possibleAnswers;
echo "\n";

if($isTie == true){

}
else if( $possibleAnswers % 2 == 0){
    echo "Bob";
}
else{
    echo "Alice";
}
