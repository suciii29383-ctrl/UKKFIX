<?php 
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Alumni</title>
    <link rel="stylesheet" href="./css/tambah.css">
</head>
<body>

     <video autoplay muted loop id="video-bg">
        <source src="bg1.mp4" type="video/mp4">
    </video>

    <div id="content"></div>

    <div class="container-nav">
        <div class="nav">
            <h1>Manajemen Data Alumni</h1>
            <a href="index.php">Kembali</a>
        </div>
    </div>

    <main>
        <div class="container-form">
            <h2>Tambah Data Alumni</h2>
        <form action="tambah.php" method="post">
            <input type="text" name="nama_lengkap" placeholder="Masukkan Nama">
            <input type="text" name="nik" placeholder="Masukkan Nik">
            <input type="text" name="nisn" placeholder="Masukkan Nisn">
            <input type="text" name="pekerjaan_saat_ini" placeholder="Masukkan perkerjaan saat ini">
        <input type="text" name="nomor_telpon" placeholder="Masukan nomor telpon">
        <textarea name="textarea" placeholder="Masukkan alamat"></textarea>
        <input type="text" name="tahun_lulus" placeholder="Masukkan Tahun Lulus">
        <select name="jurusan">
            <option>Pilihan Jurusan</option>
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="TJAT">TJAT</option>
            <option value="Animasi">Animasi</option>
        </select>
        <button name="simpan">Simpan</button>
        
    <?php 
        if(isset($_POST['simpan'])) {
        $sql = "INSERT INTO alumni (
            nama_lengkap,nik,nisn,pekerjaan_saat_ini,nomor_telpon,alamat,tahun_lulus,jurusan
        ) VALUES 
        (
            '$_POST[nama_lengkap]',
            '$_POST[nik]',
            '$_POST[nisn]',
            '$_POST[pekerjaan_saat_ini]',
            '$_POST[nomor_telpon]',
            '$_POST[alamat]',
            '$_POST[tahun_lulus]',
            '$_POST[jurusan]'
        )";

        mysqli_query($koneksi,$sql);
        echo "<p>Berhasil! <a href='index.php'>Kembali</a></p>";
        }
    ?>
    </form>
    </div>
    </main>


</body>
</html>