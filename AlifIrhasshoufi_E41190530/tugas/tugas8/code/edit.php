<?php 

    include "conn.php";

    $id = $_GET['id'];
    $sql = "select * from user where id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
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
        <h1>Form</h1>
        <form action="" method="post">

            <input type="text" name="nama" placeholder="Nama..." required value="<?php echo $row['nama']?>">
            <input type="text" name="pekerjaan" placeholder="Pekerjaan..." required value="<?php echo $row['pekerjaan']?>"><p>
            <textarea name="alamat" id="" cols="37" rows="10" placeholder="alamat"><?php echo $row['alamat']?></textarea><p>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <input type="submit" value="Kirim" name="submit">

        </form>
    </div>

    <?php
    
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $pekerjaan = $_POST['pekerjaan'];

            $sql = "UPDATE user SET 
                nama='$nama',
                pekerjaan='$pekerjaan',
                alamat='$alamat'
                where id = '$id' ";

            $result = mysqli_query($conn, $sql) or die(mysqli_error());
            if (!$result) {
                ?>
                <script>
                    alert("gagal");
                    window.location.href = "edit.php?id=<?php echo $id;?>";
                </script>

                <?php
            }else{
                ?>
                <script>
                    alert("data update");
                    window.location.href = "index.php";
                </script>

                <?php
            }
        }

    ?>
</body>
</html>