<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran pegawai  | kantor Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran pegawai</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" placeholder="alamat sesuai ktp" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Khatolik</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="lulusan akhir">lulusan akhir: </label>
            <input type="text" name="lulusan akhir" placeholder="lulusan akhir" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>
       
        <a href="index.php">kembali ke menu</a>
    </body>
</html>