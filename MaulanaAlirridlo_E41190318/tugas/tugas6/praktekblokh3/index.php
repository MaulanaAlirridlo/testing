<?php
$punakawan = array("Semar", "Gareng", "Petruk", "Bagong");
echo $punakawan[0]; //Hasilnya Semar
echo "<br>";
echo $punakawan[3]; //hasilnya Bagong
echo "<br>";

$punakawan[1] = "Semar";
$punakawan[2] = "Gareng";
$punakawan[3] = "Petruk";
$punakawan[4] = "Bagong";
echo $punakawan[3]; //Hasilnya Petruk

echo "<br><br><br>";

$leght = count($punakawan);
$i = 0;
while($i < $leght) {
  echo ($punakawan[$i]."<br>");
  $i++;
}

echo "<br><br><br>";

while($leght) {
  echo sprintf("%s<br>", $punakawan[--$leght]);
}


echo "<br><br><br>";
$limit = 2;
foreach ( array_reverse($punakawan) as $i => $p ) {
  if($i <= $limit){
    echo $p."<br>";
  }
}

//coba pake break