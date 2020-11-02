<?php

function berhasil($nilai){
    // echo "berhasil, nilai anda ".$nilai;
    // return "ini nilainya ".$nilai;
    return "ini nilainya ".$nilai.". nilai anda ditambah 100 adalah ".($nilai+100);
}

function gagal(){
    echo "gagal";
}

$nilai= 75;

if ($nilai >= 75) {
    echo berhasil($nilai);
}
else{
    gagal();
}

echo "<hr>";

function jumlah($a,$b){
    return $a+$b;
}

$a = 90;
$b = 70;
echo jumlah($a,$b);

echo "<hr>";


$sekarang = getdate();
echo "<pre>";

print_r($sekarang);

echo "</pre>";

echo "<hr>";
echo "sekarang tanggal ". $sekarang["mday"]."/".$sekarang["mon"]."/".$sekarang["year"];