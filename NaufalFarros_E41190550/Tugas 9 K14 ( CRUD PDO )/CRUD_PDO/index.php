<?php

include('database.php');
$koneksi = new Database();


if(isset($_POST['tambah'])){
    $nama = $_POST['nama'] ;
    $alamat =$_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $tabel = "user" ;
    $kolom = "'','$nama','$alamat','$pekerjaan'" ;
    $koneksi->add_data($tabel,$kolom);
    header("Location:index.php?pesan=berhasil");
}elseif(isset($_POST['update'])){
    $id = $_POST['id'] ; 
    $nama = $_POST['nama'] ;
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $tabel = "user" ;
    $data = "nama = '$nama' , alamat = '$alamat', pekerjaan = '$pekerjaan'" ;
    $where = "id = '$id'" ;
    $koneksi->update($tabel,$data,$where) ;
    header("Location:index.php?pesan=update") ;
}






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PDO </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<?php
    if(isset($_GET['pesan'])){
        if(($_GET['pesan'] == "berhasil")){
            echo "Tambah Data Berhasil" ;
        }elseif(($_GET['pesan'] == "update")){
            echo "Data Berhasil Di Update" ;
        }elseif(($_GET['pesan'] == "hapus")){
            echo "Data Berhasil di hapus" ;
        }
    }
?>
<div class="container">
<h2 class="text-center">BELAJAR CRUD-PDO</h2>
<a href="index.php?hal=tambah" class="btn btn-primary">TAMBAH</a>

    <?php
        if(isset($_GET['hal'])){
            $hal = $_GET['hal'] ;
            switch($hal) {
                case 'tambah' :
                    include 'input.php' ;
                    break ;
                case 'edit' :
                    include 'edit.php' ;
                    break ; 
                case 'hapus' :
                    include 'hapus.php' ;
                    break ;
                default :
                    echo "Halaman Tidak Ada" ;
                    break ;
                
            }
        }else {
            include 'test.php' ;
        }



    ?>

</div>
   

    
</body>
</html>