<?php

$marks = [
    'orang 1' => ['data 1'=>1,'data 2'=>2,'data 3'=>3],
    'orang 2' => ['data 1'=>1,'data 2'=>2,'data 3'=>3],
    'orang 3' => ['data 1'=>1,'data 2'=>2,'data 3'=>3]
];

echo "<pre>";

print_r($marks);

echo "</pre>";

echo $marks['orang 1']['data 1'];