<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran pegawai | kantor Coding</title>
</head>

<body>
    <header>
        <h3>Pendaftaran pegawai baru</h3>
        <h1>kantor coding</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar pegawai Baru</a></li>
            <li><a href="list-pegawai.php">semua pegawai terdaftar</a></li>
        </ul>

<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran pegawai baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </nav>


    </body>
</html>