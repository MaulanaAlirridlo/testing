<?php
session_start();
include("./includes/crud.php");

$karyawan = read();

if (isset($_GET['delete'])) {
  delete($_GET['delete']);
  header('Location: ./');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/index.css">
  <title>Data Karyawan</title>
</head>

<body>
  <div class="container mt-3">
    <h1>Tabel Karyawan</h1>
    <?php
      if (isset($_SESSION['message'])) {
    ?>
        <div class="bg-info p-3">
          <?=$_SESSION['message'];?>
        </div>
    <?php
      session_destroy();
      }
    ?>
    <a href="./tambah.php" class="float-end">
      <button class="btn btn-primary">
        Tambah
      </button>
    </a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Alamat</th>
          <th scope="col" class="text-end">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($karyawan as $k => $v) {
          $v->tanggal_lahir = strtotime($v->tanggal_lahir);
          ?>
          <tr>
            <th scope="row"><?= $v->id ?></th>
            <td><?= $v->nama ?></td>
            <td><?= $v->jenis_kelamin === "l" ? "Laki-laki" : "Perempuan" ?></td>
            <td><?= $v->tempat_lahir ?></td>
            <td><?= date('d-m-Y', $v->tanggal_lahir); ?></td>
            <td><?= $v->alamat ?></td>
            <td class="text-end">
              <a href="./edit.php?id=<?= $v->id ?>">
                <button class="btn btn-warning">Edit</button>
              </a>
              <button class="btn btn-danger" onclick="deleteKaryawan('<?=$v->id?>')" name="delete">Hapus</button>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <script>
    function deleteKaryawan(id) {
      if (confirm(`Apakah anda yakin ingin menghapus data ${id}?`)) {
        window.location.href = 'index.php?delete='+id;
      }
    }
  </script>
</body>

</html>