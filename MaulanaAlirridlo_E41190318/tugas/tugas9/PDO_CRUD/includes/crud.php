<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

include("./includes/conn.php");

function create($id, $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $alamat){
  $sql = "INSERT INTO karyawan (id, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) VALUES (?, ?, ?, ?, ?, ?)";
  pdo_connection()->prepare($sql)->execute([$id, $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $alamat]);
  $_SESSION['message'] = "Data karyawan berhasil ditambahkan";
}

function read(){
  $res = pdo_connection()->query("SELECT * FROM karyawan");
  if ($res) {
    return $res->fetchAll(PDO::FETCH_OBJ);
  }
}

function update($id, $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $alamat){
  $sql = "UPDATE karyawan SET nama=?, jenis_kelamin=?, tempat_lahir=?, tanggal_lahir=?, alamat=? WHERE id=?";
  pdo_connection()->prepare($sql)->execute([$nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $alamat, $id]);
  $_SESSION['message'] = "Data karyawan berhasil disimpan";
}

function delete($id){
  $sql = "DELETE FROM karyawan WHERE id=?";
  pdo_connection()->prepare($sql)->execute([$id]);
  $_SESSION['message'] = "Data karyawan berhasil dihapus";
}


function edit($id)
{
  $res = pdo_connection()->prepare("SELECT * FROM karyawan WHERE id=?");
  $res->execute([$id]);
  if ($res) {
    return $res->fetch(PDO::FETCH_OBJ);
  }
}