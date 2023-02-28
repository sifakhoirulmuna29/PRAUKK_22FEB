<html>
</head>
<head>
    <body>
        <h1>Form Tambah</h1>
        <form action ="proses-tambah.php" method="POST">
            <form>
                <fieldset>
                    <p>
                        <label for ="nama_jamaah"> Nama Jamaah : </label>
                        <input type ="text" name="nama_jamaah" /> 
                    </p>
                    <p>
                        <label for ="alamat"> Alamat : </label>
                        <input type ="text" name="alamat" />
                    </p>
                    <p> 
                         <label for="jenis_kelamin">Jenis Kelamin:</label>
                         <label><input type="radio" name="jenis_kelamin" value="laki-laki" />Laki-Laki</label>
                         <label><input type="radio" name="jenis_kelamin" value="perempuan" />Perempuan</label>
                    </p>
                    <p>
                        <label for ="nama_paket"> Nama Paket : </label>
                        <select name="nama_paket">
                            <option value="---">---</option>
                            <option value="gold">Gold</option>
                            <option value="silver">Silver</option>
                            <option value="platinum">Platinum</option>
                    </select>
                    </p>
                    <p>
                        <label for ="tujuan"> Tujuan : </label>
                        <input type ="text" name="tujuan" />
                    </p>
                    <p>
                        <label for ="tgl_keberangkatan"> Tgl Keberangkatan : </label>
                        <input type ="date" name="tgl_keberangkatan" />
                    </p>
                    <p>
                        <input type ="submit" value="tambah" name="tambah" />
                    </p>
</form>
</fieldset>
</body>
</html>

                        
