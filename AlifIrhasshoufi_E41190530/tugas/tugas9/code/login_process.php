<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "kl_login";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}else{
    // echo "connection ready";
}

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE email='$email' AND `password`='$password'";
$result = mysqli_query($conn, $query);
$rows = mysqli_num_rows($result);

if ($rows==1) {
    header("Location: index.php?pesan=berhasil");
    echo "berhasil";

    session_start();
    $_SESSION['email'] = $email;
}
else{
    header("Location: login.php?pesan=gagal");
    echo "gagal";

}

?>