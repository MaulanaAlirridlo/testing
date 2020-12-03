<?php
session_start() ;
$host= "localhost" ;
$user ="root" ;
$pass ="" ;
$db="web_bootstrap" ;
$koneksi = mysqli_connect($host,$user,$pass,$db) ;

if(!$koneksi){
    die ("Koneksi Error :" .mysqli_connect_error() );
}

$email = $_POST['email'] ;
$password=$_POST['password'] ;

$result=mysqli_query($koneksi, "SELECT * FROM `user` where email='$email' AND `password`='$password'") ;

$cek =mysqli_num_rows($result) ;

if($cek > 0){
    session_start() ;
    $data = mysqli_fetch_assoc($result) ;

    $_SESSION['email'] = $email ;
    $_SESSION['password']=$password;

    header("Location:index.php?pesan=berhasil");


}else {
    header("Location:login.php?pesan=gagal");
}



?>