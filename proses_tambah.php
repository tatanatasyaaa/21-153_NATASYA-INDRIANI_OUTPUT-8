<?php
$koneksi= mysqli_connect("localhost","root","","db_153");

$nama = $_POST['nama_natasya'];
$alamat=$_POST['alamat_natasya'];

$query="INSERT INTO tbl_natasya VALUE (null,'$nama','$alamat')";
$hasil=mysqli_query($koneksi,$query);
if ($hasil){
    header("location:tampil.php");
}
?>