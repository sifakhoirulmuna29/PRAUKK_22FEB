<?php
include("koneksi.php");?>

<html>
<head>
</head>
<body>
<h1>PENDATAAN UMROH</h1>
<h4> <a href="tambah.php">Tambah Umroh</a></h4>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama jamaah </th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Nama paket </th>
        <th>Tujuan</th>
        <th>Tgl Keberangkatan</th>
        <th>Aksi</th>
</tr>

<?php
     include("koneksi.php");
     $sql="SELECT * FROM tb_jamaah INNER JOIN tb_paket ON tb_jamaah.id_paket = tb_paket.id_paket"; 
     $query = mysqli_query($koneksi, $sql);     

     while($row=mysqli_fetch_array($query)){
    echo "<tr>";
          echo "<td>".$row['id_jamaah']."</td>";
          echo "<td>".$row['nama_jamaah']."</td>";
          echo "<td>".$row['alamat']."</td>";
          echo "<td>".$row['jenis_kelamin']."</td>";
          echo "<td>".$row['nama_paket']."</td>";
          echo "<td>".$row['tujuan']."</td>";
          echo "<td>".$row['tgl_keberangkatan']."</td>";
          echo "<td>";
          echo "<a href='edit.php?id_jamaah=".$row['id_jamaah']."'>Edit</a> |";
          echo "<a href='hapus.php?id_jamaah=".$row['id_jamaah']."'>Hapus</a> |";
          echo "</td>";
          echo '</tr>';

     }
     ?>
     </table>
    </body>
    </html>