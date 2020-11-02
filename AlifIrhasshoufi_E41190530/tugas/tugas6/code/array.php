<?php

$punakawan = array("data1","data5","data4","data3","data2");

echo "<pre>";
print_r($punakawan);
echo "</pre>";



echo "<hr>";

$length = count($punakawan);


for ($i=0; $i < $length; $i++) { 
    print $punakawan[$i];
    if ($i < $length-1) {
        echo ",";
    }
}

echo "<hr>";
