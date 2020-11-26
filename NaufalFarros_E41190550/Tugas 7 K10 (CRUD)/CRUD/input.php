<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Belajar Membuar CRUD koneksi databases</title>

</head>
<body>
   <div class="container">
            <h1> Belajar CRUD Menggunakan PHP DAN MySQL</h1>

            <br>
            <a href="index.php">Lihat semua data</a>
    
            <br>
    
            <h3>Input Data Baru</h3>
                <div class="card bg-light" style="width:18rem ;">
                    <div class="card-body">
	                    <form  action="input-aksi.php" method="POST">		
		
                            <div class="form-group">
                                    <label for="">Nama :</label>
                                    <input class="form-control" type="text" name="nama">
                             </div>
                             <div class="form-group">
                                    <label for="">Alamat :</label>
                                    <input class="form-control" type="text" name="alamat">
                             </div>
                             <div class="form-group">
                                    <label for="">Pekerjaan :</label>
                                    <input class="form-control" type="text" name="pekerjaan">
                             </div>

                             <button class="btn btn-primary" name="simpan">Simpan</button>
       
        
    
            
	                    </form>
    
                    </div>
                </div>
    </div>
</body>
</html>