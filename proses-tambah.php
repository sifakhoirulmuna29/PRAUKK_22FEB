<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama_jamaah=$_POST['nama_jamaah'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $nama_paket=$_POST['nama_paket'];
    $tujuan=$_POST['tujuan'];
    $tgl_keberangkatan=$_POST['tgl_keberangkatan'];


    $sql = "INSERT INTO tb_paket(nama_paket, tujuan, tgl_keberangkatan) VALUES ('$nama_paket', '$tujuan', '$tgl_keberangkatan')";
    $query=mysqli_query($koneksi, $sql);

    $sql="SELECT max(id_paket) AS paket_id FROM tb_paket LIMIT 1";
    $query=mysqli_query($koneksi,$sql);

    $data=mysqli_fetch_array($query);
    $paket_id=$data['paket_id'];
    
    $sql = "INSERT INTO tb_jamaah(nama_jamaah, alamat, jenis_kelamin, id_paket) VALUES ('$nama_jamaah', '$alamat', '$jenis_kelamin', '$paket_id')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    }else{
        header('location:tampil.php?status=gagal');
    }

    }
?>