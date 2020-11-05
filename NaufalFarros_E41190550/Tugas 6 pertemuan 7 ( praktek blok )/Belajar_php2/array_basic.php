<?php
$punakawan = array ("Semar","Gareng","Petruk","Bagong") ;
echo  $punakawan[0];
echo "<br>" ;
echo $punakawan[3] ;
echo "<br>" ;
$punakawan[1]="Semar" ;
$punakawan[2]="Gareng" ;
$punakawan[3]="Petruk" ;
$punakawan[4]="Bagong" ;
echo $punakawan[3] ;
echo "<hr>";
echo "<br>" ;
for ($i=4 ; $i>=1 ; $i--){
    echo "$punakawan[$i] <br>";
}








?>