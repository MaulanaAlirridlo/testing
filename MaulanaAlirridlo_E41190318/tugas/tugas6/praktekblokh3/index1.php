<?php
$nilai = 75;

echo "CONTOH IF ELSE <br>";
if($nilai>=80){echo "Selamat Anda mendapatkan grade A <br>";}
elseif($nilai>70 && $nilai <80) {echo "Selamat Anda mendapat grade B <br>";}
else {echo "Maaf Anda belum dapat grade A <br>";};

echo "CONTOH SWITCH <br>";
switch ($nilai) {
  case 100: echo "Nilai yang dipilih 100 <br>";
  break;
  case 90: echo "Nilai yang dipilih 90 <br>";
  break;
  default : echo "Nilai anda $nilai <br>";
  break;
}

echo "CONTOH FOR <br>";
for ($i=5; $i >= 1; $i--) { 
  echo "Looping FOR ke : ".$i."<br>";
}

echo "CONTOH WHILE <br>";
$j = 1;
while($j <= 5) {
  echo "Looping While ke : ".$j."<br>";
  $j++;
}
?>