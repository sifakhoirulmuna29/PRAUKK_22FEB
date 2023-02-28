<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id = $_POST['id_jamaah'];
    $nama_jamaah = $_POST['nama_jamaah'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nama_paket = $_POST['nama_paket'];
    $tujuan = $_POST['tujuan'];
    $tgl_keberangkatan = $_POST['tgl_keberangkatan'];
    
    $sql = "UPDATE tb_jamaah SET nama_jamaah='$nama_jamaah',alamat='$alamat',jenis_kelamin='$jenis_kelamin' WHERE id_jamaah='$id'";
    $query  = mysqli_query ($koneksi, $sql);

    $sql = "UPDATE tb_paket SET nama_paket='$nama_paket',tujuan='$tujuan',tgl_keberangkatan='$tgl_keberangkatan' WHERE id_paket='$id'";
    $query  = mysqli_query ($koneksi, $sql);
    
    if($query){
        header ('location:tampil.php?status=sukses');
    }else{
        header ('location:tampil.php?status=gagal');
    }
}
?>