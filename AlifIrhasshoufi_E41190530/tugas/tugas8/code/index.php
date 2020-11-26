<?php include "conn.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>CRUD</h1>
        <hr>
        <h1>Form</h1>
        <form action="" method="post">

            <input type="text" name="nama" placeholder="Nama..." required>
            <input type="text" name="pekerjaan" placeholder="Pekerjaan..." required><p>
            <textarea name="alamat" id="" cols="37" rows="10" placeholder="alamat"></textarea><p>
            <input type="submit" value="Kirim" name="submit">

        </form>
        <hr>
        <h2>User</h2>
        <table class="full-width" border="1" padding>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nama</th>
                    <th>pekerjaan</th>
                    <th>alamat</th>
                    <th colspan="2">action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "select * from user";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['pekerjaan']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><a onclick="return confirm('Yakin mau dihapus?')" href="index.php?delete=<?php echo $row['id'];?>" ><button class="full-width">Hapus</button></a></td>
                            <td><a href="edit.php?id=<?php echo $row['id'];?>"><button class="full-width">Edit</button></a></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];

        $sql = "INSERT INTO user value (null,'$nama','$alamat','$pekerjaan')";
        $result = mysqli_query($conn, $sql) or die(mysqli_error());
        if (!$result) {
            ?>
            <script>
                alert("data gagal");
                window.location.href = "index.php";
            </script>

            <?php
        }else{
            ?>
            <script>
                alert("data masuk");
                window.location.href = "index.php";
            </script>

            <?php
        }
    }

    if (isset($_GET['delete'])) {
        $query = "DELETE FROM user WHERE id='$_GET[delete]'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            ?>
            <script>
                alert("gagal");
                window.location.href = "index.php";
            </script>

            <?php
        }else{
            ?>
            <script>
                alert("data dihapus");
                window.location.href = "index.php";
            </script>

            <?php
        }
    }

?>
</body>
</html>