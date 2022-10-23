<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <?php 
    $koneksi=mysqli_connect("localhost","root","","db_153");
    $id=$_GET['id_natasya'];
    $query="SELECT * FROM tbl_natasya WHERE id_natasya=$id";
    $hasil= mysqli_query($koneksi,$query);
    if (!$hasil){
        echo "query salah";
    }
    while ($baris=mysqli_fetch_array($hasil)){
    ?>
    <h2>Form Edit</h2>
    <form action="proses_edit.php" method="POST">
     <input type="hidden" name="id_natasya" value=<?php echo $id;?>>
     Nama :<input type="text" name="nama_natasya" value="<?php echo $baris['nama_natasya']?>" ><br>     
     Alamat : <input type="text" name="alamat_natasya" value= "<?php echo $baris['alamat_natasya']?>"><br>
     <input type="submit">
    </form>
    <?php 
    }
    ?>
</body>
</html>