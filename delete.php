<?php
$koneksi = mysqli_connect("localhost","root","","db_153");
$id=$_GET['id_natasya'];
$query = "DELETE FROM tbl_natasya WHERE id_natasya=$id";
$hasil=mysqli_query($koneksi,$query);
if ($hasil){
    header("location:tampil.php");
}
?>