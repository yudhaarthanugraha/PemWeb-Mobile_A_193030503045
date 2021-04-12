<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran pegawai | kantor Coding</title>
</head>

<body>
    <header>
        <h3>pegawai yang sudah terdaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_pegawai";
        $query = mysqli_query($db, $sql);

        while($pegawai = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pegawai['id']."</td>";
            echo "<td>".$pegawai['nama']."</td>";
            echo "<td>".$pegawai['alamat']."</td>";
            echo "<td>".$pegawai['jenis_kelamin']."</td>";
            echo "<td>".$pegawai['agama']."</td>";
            echo "<td>".$pegawai['lulusan_akhir']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$pegawai['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$pegawai['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>


    <a href="index.php">kembali ke menu</a>
    </body>
</html>