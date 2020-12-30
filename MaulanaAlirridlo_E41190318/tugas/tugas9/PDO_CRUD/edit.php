<?php
  include("./includes/crud.php");
  $karyawan = edit($_GET['id']);
  if (isset($_POST['submit'])) {
    update($_POST['id'], $_POST['nama'], $_POST['jenis_kelamin'], $_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['alamat']);
    header('Location: ./');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Tambah Karyawan</title>
</head>

<body>
  <div class="container mt-3">
    <h1>Tambah Karyawan</h1>
    <div class="form-group">
        <form method="POST">
        <label class="mt-1" for="id">Id</label>
        <input class="form-control" type="text" name="id" id="id" value="<?=$karyawan->id?>" required>
        <label class="mt-1" for="nama">Nama</label>
        <input class="form-control" type="text" name="nama" id="nama" value="<?=$karyawan->nama?>" required>
        <label class="mt-1" for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
          <option value="l">Laki-laki</option>
          <option value="p" <?=$karyawan->jenis_kelamin === 'p' ? "selected" : ''?>>Perempuan</option>
        </select>
        <label class="mt-1" for="tempat_lahir">Tempat Lahir</label>
        <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="<?=$karyawan->tempat_lahir?>" required>
        <label class="mt-1" for="tanggal_lahir">Tanggal Lahir</label>
        <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?=$karyawan->tanggal_lahir?>" required>
        <label class="mt-1" for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" required><?=$karyawan->alamat?></textarea>
        <a href="./" class="float-end mt-4 ms-2">kembali</a>
        <input type="submit" value="Simpan" name="submit" class="btn btn-primary float-end mt-3">
      </form>
    </div>
  </div>
</body>

</html>