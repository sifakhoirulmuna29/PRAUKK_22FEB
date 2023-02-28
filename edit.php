<?php
include ("koneksi.php");
if(!isset($_GET['id_jamaah'])){
    header('location:tampil.php?');
}
$id = $_GET['id_jamaah'];
$sql = "SELECT * FROM tb_jamaah INNER JOIN tb_paket ON tb_jamaah.id_paket=tb_paket.id_paket WHERE tb_jamaah.id_jamaah='$id'";
$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc ($query);
if (mysqli_num_rows($query) > 1){
    die ("DATA TIDAK DITEMUKAN");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h2>FORM EDIT</h2>
    <form action="proses-edit.php" method="POST">
        <fieldset>
        <p>
            <input type="hidden" name="id_jamaah" value="<?php echo $row['id_jamaah']?>"/>
        </p>
    <p>
        <label for="nama_jamaah">Nama Jamaah : </label>
        <input type="text" name="nama_jamaah" value ="<?php echo $row['nama_jamaah']?>"/>
    </p>
    <p>
        <label for="alamat">Alamat : </label>
        <textarea name="alamat" cols="27" rows="3" ><?php echo $row['alamat']?></textarea>
    </p>
    <p>
        <label for="jenis_kelamin">Jenis Kelamin : </label>
        <input type="radio" name="jenis_kelamin" value="laki-laki" value ="<?php echo $row['jenis_kelamin']?>"/>Laki-Laki
        <input type="radio" name="jenis_kelamin" value="perempuan" value ="<?php echo $row['jenis_kelamin']?>"/>Perempuan
    </p>
    <p>
        <label for="nama_paket">Nama Paket : </label>
        <select name="nama_paket" value ="<?php echo $row['nama_paket']?>"> 
        <label><option value="gold">Gold</option>
        <option value="silver">Silver</option>
        <option value="platinum">Platinum</option>
        </select>
    </p>
    <p>
        <label for="tujuan">Tujuan : </label>
        <input type="text" name="tujuan" value ="<?php echo $row['tujuan']?>"/>
    </p>
    <p>
        <label for="tgl_keberangkatan">Tgl Keberangkatan : </label>
        <input type="date" name="tgl_keberangkatan" value ="<?php echo $row['tgl_keberangkatan']?>"/>
    </p>
    <p>
        <input type="submit" value="Edit" name="edit"/>
    </p>      
    </form> 
</fieldset>
</body>
</html>