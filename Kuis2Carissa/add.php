<?php include "db.php"; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form method = POST>
        <label>Nama</label>
        <input type="text" name="nama">
        <label>NPM</lebel>
        <input type="text" name="npm">
        <button type="submit" name="simpan">Simpan</button>
    </form> 
    <?php 
    if (isset($_POST['simpan'])) { 
    $nama = $_POST['nama']; 
    $npm  = $_POST['nim']; 
    mysqli_query($conn, "INSERT INTO mahasiswa (nama, npm) VALUES 
    ('$nama', '$npm')"); 
    }
    ?>
</body>
</html>