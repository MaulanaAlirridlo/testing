<?php

$nilai = 80;

if ($nilai >= 80) {
    echo "nilai adalah A";
}
elseif($nilai >= 70 && $nilai <= 80){
    echo "nilai anda ".$nilai.",";
}
else{
    echo "nilai kurang dari 80";
}

echo "<hr>";

switch ($nilai) {
    case 100:
        echo "nilai adalah 100";
        break;
    case 80:
        echo "nilai anda 80";
        break;
    default:
        echo "nilai bukan 100";
        break;
}

echo "<hr>";

for ($i=0; $i <=5 ; $i++) { 
    echo $i;
    if ($i<5) {
        echo ",";
    }
}

echo "<hr>";

$a = 1;
while ($a <= 10) {
    if ($a == 8) {
        break;
    }
    echo $a;
    if ($i<10) {
        echo ",";
    }
    $a++;
    
}