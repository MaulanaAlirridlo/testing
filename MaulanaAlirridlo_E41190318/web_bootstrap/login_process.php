<?php
session_start();
include './connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = mysqli_fetch_array(
  mysqli_query($connection, "select * from users where email = '$email'")
);

if ($email == $user['email']) {
  if ($password == $user['password']) {
    $_SESSION['pesan'] = "Berhasil Login";
    header('location:index.php');
  } else {
    $_SESSION['pesan'] = "Password Salah";
    header('location:login.php');
  }
} else {
  $_SESSION['pesan'] = "Email Salah";
  header('location:login.php');
}

