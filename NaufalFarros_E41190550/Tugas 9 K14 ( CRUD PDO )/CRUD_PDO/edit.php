<?php
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $kolom = "*" ;
        $tabel = "user" ;
        $where = "id = '$id'" ;
        $mahasiswa = $koneksi->getID($kolom,$tabel,$where) ;
        foreach($mahasiswa as $key => $value) {
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class= "card" style="width: 18rem;">
            <div class="card-header">
                <h2>EDIT DATA</h2>
            </div>
            <div class="card-body">
                
                <form action="" method="POST">
                    <div class="form-group">
                        <label for=""> NAMA</label>
                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                        <input type="text" class="form-control" name="nama" value="<?php echo $value['nama']?>" >
                    </div>
                    <div class="form-group">
                        <label for="">ALAMAT</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $value['alamat']?>" >
                    </div>
                    <div class="form-group">
                        <label for="" >Pekerjaan</label>
                        <input type="text" class="form-control "name="pekerjaan" value="<?php echo $value['pekerjaan']?>">
                    </div>
                   
                    <button class= "btn btn-primary mt-2" name="update" >Update</button>
                   
                    
                    
                </form>
                <?php } ?>
            </div>
        
        </div>
    </div>
</body>
</html>
