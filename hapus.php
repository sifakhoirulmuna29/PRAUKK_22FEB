<?php
include("koneksi.php");
 
$id = $_GET ['id_jamaah'];

$sql = "DELETE FROM tb_jamaah where id_jamaah='$id'";
$query = mysqli_query($koneksi, $sql);

$sql = "DELETE FROM tb_paket where id_paket='$id'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header("location:tampil.php?status=gagal");
}else{
    die ("akses dilarang");
}
?>