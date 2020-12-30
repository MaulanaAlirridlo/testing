<?php
    $kolom = "*" ;
    $tabel = "user" ;
    $mahasiswa = $koneksi->getID($kolom,$tabel) ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">

</head>
<body>
    <table class=table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>PEKERJAAN</th>
        </tr>
       
            <?php 
            $i = 1 ;
            foreach ($mahasiswa as $key => $value ) { 
            ?>

            
        <tr>
                <td> <?php echo $i++;?> </td>
                <td> <?php echo $value['nama'] ;?>  </td>
                <td> <?php echo $value['alamat'] ;?> </td>
                <td> <?php echo $value['pekerjaan'];?> </td>

                <td>
                <a href="index.php?hal=edit&&id=<?php echo $value['id'] ;?> "?> EDIT</a> 
                <a href="index.php?hal=hapus&&id=<?php echo $value['id'] ;?> "?> HAPUS</a> 

                </td>

        </tr>
                <?php } ?>
    </table>
    
</body>
</html>



