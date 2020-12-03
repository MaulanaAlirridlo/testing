<?php
$connection = mysqli_connect("localhost", "root", "", "(praktik)web_bootstrap");

if (mysqli_connect_error()) {
  echo "Koneksi dengan datasbase gagal : ". mysqli_connect_error();
}