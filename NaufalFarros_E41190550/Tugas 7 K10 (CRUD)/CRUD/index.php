<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Membuar CRUD koneksi databases</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <h1> Belajar CRUD Menggunakan PHP DAN MySQL</h1>
    <br>
    <?php
        if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'] ;
            if($pesan  == "input"){
                echo "data berhasil di input" ;
                }elseif ($pesan == "update") {
                    echo "data berhasil di update";
                }elseif ($pesan == "delete") {
                    echo "data berhasil di hapus" ;
            }
        }
    ?>
    <br>
   <button class="btn btn-primary" onclick="window.location.href=`input.php`">Tambah Data</button>

    <h3>Data User</h3>
        <table class="table table-primary table-hover">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>
        </tr>
       <?php
            include 'koneksi.php';
            $query_mysql = mysqli_query($koneksi, "SELECT * FROM user ") ;
            $nomor = 1;
	 		while ($data = mysqli_fetch_array($query_mysql)) {
       ?>
                <tr>
	 				<td><?php echo $nomor++ ?></td>
	 				<td><?php echo $data['nama'] ?></td>
	 				<td><?php echo $data['alamat'] ?></td>
	 				<td><?php echo $data['pekerjaan'] ?></td>
	 				<td>
                     
	 					<a style="color:red ;"href="edit.php?id=<?php echo $data['id']; ?>"  >Edit</a>
	 					<a style="color:red ;"href="hapus.php?id=<?php echo $data['id']; ?>"  >Hapus</a>
	 				</td>
	 			</tr>
	 	<?php
	 		 } 
	 	 ?>
        
        </table>







    </div>

    
</body>
</html>