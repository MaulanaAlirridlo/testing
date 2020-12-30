<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'] ;
        $tabel = "user" ;
        $where = "id = '$id'" ;
        $koneksi->remove($tabel,$where) ;
        header("Location:index.php?pesan=hapus") ;
    }
?>