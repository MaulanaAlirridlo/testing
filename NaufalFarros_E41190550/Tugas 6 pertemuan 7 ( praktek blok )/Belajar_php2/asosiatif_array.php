<?php

$salaries = array (
    "muhammad" => 2000 ,
    "qadir" => 1000 ,
    "zara" => 500
) ;
echo "Salary of muhammad is" .$salaries['muhammad']."<br/>";
echo "Salary of qadir is" .$salaries['qadir']."<br/>";
echo "Salary of qadir is" .$salaries['zara']."<br/>" ;

$salaries['muhammad']= "high" ;
$salaries['qadir']= "medium" ;
$salaries['zara']= "low" ;

echo "Salary of muhammad is" .$salaries['muhammad']."<br/>";
echo "Salary of qadir is" .$salaries['qadir']."<br/>";
echo "Salary of qadir is" .$salaries['zara']."<br/>";









?>
