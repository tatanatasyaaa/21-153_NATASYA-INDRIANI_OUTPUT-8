<?php
include 'koneksi.php';
$koneksi=mysqli_connect("localhost","root","","db_153");
$id=$_POST['id_natasya'];
$nama=$_POST['nama_natasya'];
$alamat=$_POST['alamat_natasya'];

$query="UPDATE tbl_natasya SET nama_natasya='$nama', alamat_natasya='$alamat' WHERE id_natasya=$id";
$hasil=mysqli_query($koneksi,$query);
if($hasil){
    header("location:tampil.php");
}
?>
