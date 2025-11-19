<?php 
session_start();
include 'koneksi.php';
$id_alumni = $_GET['id_alumnii'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM alumni WHERE id_alumnii=$id_alumni"));
if(isset($_POST['perbarui'])) {
    $sql = "UPDATE alumni SET
    nama_lengkap='$_POST[nama_lengkap]',nik='$_POST[nik]',nisn='$_POST[nisn]',pekerjaan_saat_ini='$_POST[pekerjaan_saat_ini]',nomor_telpon='$_POST[nomor_telpon]',
    alamat='$_POST[alamat]',tahun_lulus='$_POST[tahun_lulus]',jurusan='$_POST[jurusan]' WHERE id_alumnii=$id_alumni";
    mysqli_query($koneksi,$sql);
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Alumni</title>
    <link rel="stylesheet" href="edit.css">
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
            <h2>Edit Data Tambahan</h2>
            <form method="post">
           <input type="text" name="nama_lengkap" value="<?= $data['nama_lengkap']?>" placeholder="Masukkan Nama" required>
           <input type="text" name="nik" value="<?= $data['nik'] ?>" placeholder="Masukkan Nik" required>
        <input type="text" name="nisn" value="<?= $data['nisn'] ?>" placeholder="Masukkan Nisn" required>
        <input type="text" name="pekerjaan_saat_ini" value="<?= $data['pekerjaan_saat_ini'] ?>" placeholder="Masukkan Pekerjaan Saat Ini" required>
        <input type="text" name="nomor_telpon" value="<?= $data['nomor_telpon'] ?>" required>
        <textarea name="alamat" placeholder="Masukkan Alamat"><?= $data['alamat'] ?></textarea>
        <input type="text" name="tahun_lulus" value="<?= $data['tahun_lulus'] ?>" placeholder="Masukkan Tahun">
        
        <select name="jurusan" value="<?= $data['jurusan']?>">
            <option>Pilihan Jurusan</option>
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="TJAT">TJAT</option>
            <option value="Animasi">Animasi</option>
        </select>
        <button name="perbarui">Perbarui</button>
        
    </form>
    </div>
    </main>

</body>
</html>