<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data</title>
</head>
<body>
    Nama : Natasya Indriani<br>
    NIM : 210411100153<br>
    kelas : PAW-C
    <hr>
    <?php
    $koneksi=mysqli_connect("localhost","root","","db_153");
    $query="SELECT *FROM tbl_natasya";
    $hasil=mysqli_query($koneksi,$query);
    if(!$hasil){
        echo "koneksi tidak berhasil";
    }
    ?>
    <a href="tambah.php">Tambah</a>

    <table border="1">
        <tr>
            <td>id_natasya</td>
            <td>Nama_natasya</td>
            <td>Alamat_natasya</td>
            <td>Action</td>
        </tr>
    <?php
    while ($row=mysqli_fetch_assoc($hasil)){
    ?>
    <tr>
        <td><?php echo $row['id_natasya']?></td>
        <td><?php echo $row['nama_natasya']?></td>
        <td><?php echo $row['alamat_natasya']?></td>
        <td>
            <a href="delete.php? id_natasya=<?php echo $row['id_natasya']?>">Delete</a>
            <a href="edit.php? id_natasya=<?php echo $row['id_natasya']?>">Edit</a>
        </td>
    </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>