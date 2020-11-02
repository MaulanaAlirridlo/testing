<?php
$number = [1,2,3,4,5];

foreach ($number as $key ) {
    echo "value is $key <br>";
}

$data = 5;

// for ($i=0; $i < $data; $i++) { 
//     $number[$i] = "data ".($i+1);
// }
$number[0] = "one";
$number[1] = "two";
$number[2] = "three";
$number[3] = "four";
$number[4] = "five";


echo "<hr>";

foreach (array_reverse($number) as $key=>$value ) {
    echo "key is $key, value is $value <br>";
}