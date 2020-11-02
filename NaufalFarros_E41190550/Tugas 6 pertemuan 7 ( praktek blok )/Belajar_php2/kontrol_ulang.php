
<?php
$nilai=90 ;
echo "CONTOH IF ELSE <br>" ;
if ($nilai=80) {
    echo "Selamat Anda Mendapat grade A <br>";
}else if($nilai >=70 &&  $nilai <= 80) {
   
}else {
    echo "Maaf anda belum dapat grade A <br>" ;
} ; echo "<hr>" ;
 
echo "CONTOH SWITCH <br>" ;
switch($nilai){
    case 100 : echo "Nilai yang di pilih 100 <br>" ;
    break ;
    case 90 : echo " Nilai yang dipilih 90 <br>" ;
    break ;

    default :
        echo "Hasil" ;
        
} echo "<hr>" ;
echo " CONTOH FOR <br>";
for ($i=1;$i<=5;$i++){
    echo  "Loping FOR ke :" . $i. "<br>" ;
} echo "<hr>" ;
echo "CONTOH WHILE" ;
$j=0 ;
while( $j<=5 ){
    echo "Looping while ke :".$j."<br>" ;
    $j++ ;
}




?>