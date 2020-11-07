<?php

$email = $_POST['email'];
$password = $_POST['password'];

$email_saya = "email@email.com";
$password_saya = "1234";

if ((strcasecmp($email_saya, $email) == 0) && ($password_saya==$password)) {
    header("Location: index.php?pesan=berhasil");
    echo "berhasil";

    session_start();
    $_SESSION['email'] = $email;
}
else{
    header("Location: login.php?pesan=gagal");
    echo "gagal";

}
echo "<br>";
echo $email."<br>";
    echo "password : ".$password."<br>";
    echo "casecmp : ".strcasecmp($email_saya, $email)."<br>";
    echo "sesi : ".$_SESSION['email']."<br>";
?>